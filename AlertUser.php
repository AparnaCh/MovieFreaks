<!-- ********************************************************************************************
 * Copyright (C) 2014 Aparna Chandrasekar
 *
 * This program is free software: you can redistribute it and/or modify it under 
 * the terms of the GNU General Public License as published by the Free Software Foundation, 
 * either version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program. 
 * If not, see http://www.gnu.org/licenses/.
 *
 *  ******************************************************************************************/ -->

<?php

//Connection to database
$con = mysqli_connect("localhost","username" ,"password","database");
if (!$con){     
  die('Could not connect: ' . mysql_error());     
} 

//new records inserted each time
$query4 = "DELETE FROM new_releases"; 
mysqli_query($con, $query4); 

//process for each registered zip code
$query1 = "SELECT DISTINCT zipcode FROM zipcode_movies"; 
$result1 = mysqli_query($con, $query1); 

while ($zip = $result1->fetch_row()){
  echo "<br>" . $zip[0];

  //for current zipcode call movies API
  date_default_timezone_set('America/Los_Angeles');
  $startdate = date('Y-m-d');
  echo "<br>Date is ". $startdate;
  $request = "http://data.tmsapi.com/v1/movies/showings?startDate=".$startdate."&zip=".$zip[0]."&api_key=yourapikey";
  $response  = file_get_contents($request);
  $movielist = json_decode($response,true);                               
  $arrlen = sizeof($movielist);

  //for current zipcode get movies list from database
  $query2 = "SELECT * FROM zipcode_movies WHERE zipcode = $zip[0]"; 
  $result2 = mysqli_query($con, $query2); 
  $j = 0;
  while ($dbmovies = $result2->fetch_row()){
     $dbarray[$j++] = $dbmovies[1];
  }
  $dbarrlen = sizeof($dbarray);  

  //check if any new movie has been released
  $released = array();
  $ind = 0;
  for ($i=0;$i<$arrlen;$i++){
     $flag = 0;
     for ($k=0;$k<$dbarrlen;$k++) {
        if ($movielist[$i]['title'] == $dbarray[$k]) {
            $flag = 1;
            break;
        }
     }
     if ($flag == 0){  //new movie
        //echo "<br>" . $zip[0] . " " . $movielist[$i]['title'];
        if ($startdate <= $movielist[$i]['releaseDate']){
	        $released[$ind++] = $movielist[$i]['title'];
	   }
     } 
  }
  
  //for current zipcode delete records from database
  $query3 = "DELETE FROM zipcode_movies WHERE zipcode = $zip[0]"; 
  mysqli_query($con, $query3); 

  //insert the new movie list into the database
  for ($i=0;$i<$arrlen;$i++){
     $movietitle = $movielist[$i]['title'];
     $ins_movie = "INSERT INTO zipcode_movies VALUES ('$zip[0]','$movietitle')"; 
	mysqli_query($con, $ins_movie); 
  }

  //fetch the phone numbers to send SMS
  $query5 = "SELECT phone FROM registered_users WHERE zipcode = $zip[0] AND newmoviealert = 'yes'"; 
  $result5 = mysqli_query($con, $query5);

  $user = "username";
  $password = "password";
  $api_id = "apikey";
  $baseurl ="http://api.clickatell.com";

  $curtime = date('Y-m-d h:i:s');   
  while ($phno = $result5->fetch_row()){
     for ($i=0;$i<sizeof($released);$i++){
        $ins_rel = "INSERT INTO new_releases VALUES ('$zip[0]','$released[$i]','$curtime')"; 
	   mysqli_query($con, $ins_rel); 
        //echo "<br>" . $zip[0] . " " . $phno[0] . " " . $released[$i];
        
        $text = urlencode("$released[$i] has been released in theatres near you.");
        $to = $phno[0];
        // auth call
        $url = "$baseurl/http/auth?user=$user&password=$password&api_id=$api_id";
 
        // do auth call
        $ret = file($url);
 
        // explode our response. return string is on first line of the data returned
        $sess = explode(":",$ret[0]);
        if ($sess[0] == "OK") {
 
           $sess_id = trim($sess[1]); // remove any whitespace
           $url = "$baseurl/http/sendmsg?session_id=$sess_id&MO=1&from=yourclickatellnumber&to=$to&text=$text";
 
           // do sendmsg call
           $ret = file($url);
           $send = explode(":",$ret[0]);
 
           if ($send[0] == "ID") {
              echo "successnmessage ID: ". $send[1];
           } else {
              echo "send message failed";
           }
        } else {
           echo "Authentication failure: ". $ret[0];
        }
     }
  }
  
}
mysqli_close($con);   

?>
