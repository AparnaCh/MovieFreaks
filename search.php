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

<html>
	<head>
		<title> Search a movie </title>
		<style>
	        div.container {
		    width:100%;
		    top:0px;
		    left:0px;
		    margin-top:0;
		    position:fixed;
		    border: 0px solid #197575;
	        }
	        div.header {
		    background:img.jpg;
      	    text-align:center;
		    width:100%;
		    top:0px;
		    left:0px;
		    height:110px;
		    margin-top:0px;
		    border: 0px solid #197575;
	        }
	        div.tab {
      	    text-align:center;
		    width:900px;
		    margin-left:auto;
		    margin-right:auto;
		    margin-top:120px;
		    border: 0px solid #197575;
		    border-radius: 25px;
	        }
		   div.contentbody {
			width:1400px;
		     margin-left:auto;
		     margin-right:auto;
		   }
	        div.left {
		    float:left;
		    margin-top:0px;
      	    text-align:center;
		    width:250px;
		    height:600px;
		    position:fixed;
	        }
	        div.content {
		    float:left;
		    margin-top:10px;
		    background-color:#FFFFB8;
               text-align: left;
		    color:#990000;
		    width:800px;
		    margin-left:250px;
		    margin-right:auto;
		    border: 8px solid #FF8533;
		    border-radius: 25px;
		    box-shadow: 10px 10px 5px #FFB685;
		    padding:0 40px;
	        }
	        div.right {
		    float:left;
		    margin-top:20px;
		    margin-left:1150px;
		    text-align:center;
		    width:250px;
		    height:600px;
		    position:fixed;
	        }
		   font.scrolltext{
			font-family:'monotype corsiva';
			color:#FFFF4D;font-size:24px;
			text-shadow:5px 5px 5px #FF6600;
		   }
              span.big {
			font-weight:bold;
		   }
		   td.tabs {             
		    border-radius:7px;
		    background-color:#33CCCC;
		    text-decoration : none;
		    height:40px;
		    width:180px;
		    font-size:22;
		    fony-family:"Comic Sans MS";
		   }
		   a.tabs {             
		    text-decoration : none;
		    color : #000000;
		   }
		   a.tkt {             
		    border-radius:7px;
		    background-color:#33ADAD;
		    border-style:outset;
		    border-width:2px;
 		    border-color:#888888;
		    text-decoration : none;
		    color : #000000;
    		    padding : 3px;
		   }
		   div.fadeerr { 
			position:relative; 
			height:400px; 
			width:600px; 
			margin:0 auto;
			padding: 10px;
		     border: 2px solid #CC0066;
 		     border-radius: 10px;
		  }
		   div.fadein { 
			position:relative; 
			height:400px; 
			width:600px; 
			margin:0 auto;
			padding: 10px;
		     border: 2px solid #CC0066;
 		     border-radius: 10px;

		  }
		  div.fadein img { 
			position:absolute; 
			left:10px; 
			top:10px;
		  }
		</style>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script>
		$(function(){
	         $('.fadein img:gt(0)').hide();
	         setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
		});
		</script>
	     <link rel="stylesheet" href="jquery-ui.css">
  		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  		<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  		<link rel="stylesheet" href="/resources/demos/style.css">
  		<script>
  		$(function() {
    			$( "#dialog-message" ).dialog({
      			modal: true,
			 	width:300,
	 			minHeight:70,
      			buttons: {
        				Ok: function() {
          					$( this ).dialog( "close" );
        				}
      			}
    			});
  		});
 	 	</script>

	</head>
<body background="bg.jpg">
 	<div class="container">
	<div class="header">
		<p style="padding:20px;margin:0px;font-weight:bold;font-family:'monotype corsiva';color:#FFFF4D;font-size:64px;text-shadow:5px 5px 5px #0000CC;">MovieFreaks</p>
	</div>
	</div>
	<div class="tab">
	     <table style="margin:auto;text-align:center;">
		  <tr>
	          <td class="tabs"><a class="tabs" href="http://localhost/Movies/movies.php">Movies</a></td>
	     	     <td class="tabs"><a class="tabs" href="http://localhost/Movies/theatres.php">Theatres</a></td>
	          <td class="tabs"><a class="tabs" href="http://localhost/Movies/search.php">Search</a></td>
	          <td class="tabs"><a class="tabs" href="http://localhost/Movies/register.php">Register</a></td>
	          <td class="tabs"><a class="tabs" href="http://localhost/Movies/about.php">About Us</a></td>
		  </tr>
	     </table>
	</div>
	<div class="contentbody">
	<div class="left">    
	    <center>
		 <img src="images/splashes.png" width="100" height="100"/>
		 <font style="visibility:hidden">hi</font><br><br>
		 <font class="scrolltext">Entertainment Unlimited!</font><p>
		 <font class="scrolltext">Never miss a movie</font><p>
		 <marquee behavior="alternate" scrollamount="10" direction="up" height="23px"><center>       
		 <font class="scrolltext"><a style="text-decoration:none;color:#FF3399;text-shadow:3px 3px 3px #D63385;" href="http://localhost/Movies/register.php">REGISTER NOW!!</a></font><br>
		 </center></marquee>
		 <font class="scrolltext">And receive SMS Alerts on new movies</font><p>
		 <font class="scrolltext">Find your favorite movies in theatres near you</font><p>
		 <font class="scrolltext">Have fun, relax and enjoy your day!!</font><p>
		 <img src="images/pizza.png" width="70" height="70"/>&nbsp;&nbsp;&nbsp; <img src="images/popcorn.png" width="70" height="70"/>
	    </center>	    
	</div>    

     <div class="content">
         <form action="http://localhost/Movies/search.php" method="post"><br>
         <table style="margin:auto">
            <tr>
                <td><font style="font-weight:bold;color:#990000;font-family:monotype corsiva;font-size:20pt;">Search Movie: </font></td>
                <td><input type="text" name="movie" value="<?=@$movie?>"/> </td>
            </tr>
            <tr>
                <td><font style="font-weight:bold;color:#990000;font-family:monotype corsiva;font-size:20pt;">Near Zip Code: </font></td>
                <td><input type="text" name="zipcode" value="<?=@$zipcode?>"/> </td>
		 </tr>
		 <tr>
                <td align="center" colspan="2"><input type="submit" name="search" value="Search" style="border-radius:10px;background-color:#33ADAD;"/></td>
            </tr>

         </table>
         </form>
         
         <?php
             if (isset($_POST['search'])){
               $zipcode = $_POST['zipcode'];    
               $movie = $_POST['movie'];
               date_default_timezone_set('America/Los_Angeles');
               $startdate = date('Y-m-d');

       	    //Connect to database
               $con = mysqli_connect("localhost","username" ,"password","database");
               if (!$con)     
               {     
		        die('Could not connect: ' . mysql_error());     
	          }   

		    //Call API
		    $request = "http://data.tmsapi.com/v1/movies/showings?startDate=".$startdate."&zip=".$zipcode."&radius=5&api_key=yourapikey";
		    $response  = @file_get_contents($request);

		    //Check if zip code is valid
		    if ($response === FALSE){
				echo "<br>";
				echo "<div class=\"fadeerr\">";
				echo "<img src=\"images/img4.jpg\">";
				echo "<div id=\"dialog-message\" title=\"Error!!\">";
				echo "<br>&nbsp;Please enter a valid zip code!<br><br>";
				echo "</div>";
				echo "</div>";
				echo "<br>&nbsp;";

		    } else {
                  $movielist = json_decode($response,true);                               
                  $arrlen = sizeof($movielist);

                  $query = "SELECT COUNT(*) FROM zipcode_movies WHERE zipcode = '$zipcode'"; 
	             $result = mysqli_query($con, $query);
		       $cnt = $result->fetch_row();
		       if ($cnt[0] == 0) {               //insert movies for zip code if it does not exist
                    for ($i=0;$i<$arrlen;$i++){
                      $movietitle = $movielist[$i]['title'];
	   		      $ins_movie = "INSERT INTO zipcode_movies VALUES ('$zipcode','$movietitle')"; 
	                 mysqli_query($con, $ins_movie); 
		         }
		       }	    

			  // Fetch the movie matching the keyword
                  $query1 = "SELECT * FROM zipcode_movies WHERE zipcode = '$zipcode' AND movies LIKE '%$movie%'"; 
	             $result1 = mysqli_query($con, $query1);
		       $rowcnt = mysqli_num_rows($result1); 
			  if($rowcnt == 0){
				echo "<br>";
				echo "<div class=\"fadeerr\">";
				echo "<img src=\"images/img1.jpg\">";
				echo "<div id=\"dialog-message\" title=\"Error!!\">";
				echo "<br>&nbsp;No movies match your keyword!<br><br>";
				echo "</div>";
				echo "</div>";
				echo "<br>&nbsp;";
			  } else {
	              while ($movieres = $result1->fetch_row()) {
		          for ($i=0;$i<$arrlen;$i++){
		            if ($movielist[$i]['title'] == $movieres[1]){
		              echo "<p style=\"font-size:35px;font-weight:bold;color:#990000;\">".$movielist[$i]['title']."</p>";

	 			   if (isset($movielist[$i]['releaseDate'])){
		             	echo "<span class=\"big\">Release Date: </span>".$movielist[$i]['releaseDate'];
				   }
				   if (isset($movielist[$i]['runTime'])){
		             	echo "<br><span class=\"big\">Run Time: </span>".$movielist[$i]['runTime'];
				   }
				   if (isset($movielist[$i]['qualityRating']['value'])){
		             	echo "<br><span class=\"big\">Rating: </span>".$movielist[$i]['qualityRating']['value'];
				   }
			 	   if (isset($movielist[$i]['genres'])){			
		             	echo "<br><span class=\"big\">Genres: </span>";
		             	foreach ($movielist[$i]['genres'] as $genre){
		                    echo $genre.", ";
                       	}
				   }
				   if (isset($movielist[$i]['topCast'])){
		             	echo "<br><span class=\"big\">Casting: </span>";
		             	foreach ($movielist[$i]['topCast'] as $casting){
		                    echo $casting.", ";
                       	}
				   }
			 	   if (isset($movielist[$i]['shortDescription'])){
                       	echo "<br><span class=\"big\">Description: </span>".$movielist[$i]['shortDescription'];
				   }
			 	   if (isset($movielist[$i]['officialUrl'])){		
	                       echo "<br><span class=\"big\">Official URL: </span><a href=\"".$movielist[$i]['officialUrl']."\">".$movielist[$i]['officialUrl']."</a>";
				   }
			        echo "<p style=\"font-size:25px;font-weight:bold;color:#990000;\">Showtimes</p>";
			        
                        $shtimelen = sizeof($movielist[$i]['showtimes']);
                        for($k=0;$k<$shtimelen;$k++) {
				     if (($k > 0) && ($movielist[$i]['showtimes'][$k]['theatre']['id'] == $movielist[$i]['showtimes'][$k-1]['theatre']['id'])){
					   echo "&nbsp;&nbsp;&nbsp; <span font style=\"color:#197575\">".substr($movielist[$i]['showtimes'][$k]['dateTime'],11,5)."</span>";					
				     } else {
					   echo "<table width=\"700\"><tr>";
					   echo "<td width=\"500\"><font style=\"font-weight:bold;color:#990000;\">".$movielist[$i]['showtimes'][$k]['theatre']['name']."</td>";
					   if (isset($movielist[$i]['showtimes'][$k]['ticketURI'])) {
					   	$ticket = $movielist[$i]['showtimes'][$k]['ticketURI'];
					   	echo "<td width=\"200\"><a class=\"tkt\" href=\"$ticket\">Buy Tickets</a></td>";
					   } else {
					   	echo "<td>Buy in Theatre</td>";
					   }
					   echo "</tr></table>";
					   echo substr($movielist[$i]['showtimes'][$k]['dateTime'],0,10);
					   echo "<br><span font style=\"color:#197575\">".substr($movielist[$i]['showtimes'][$k]['dateTime'],11,5)."</span>";
				     }
			       }
                    }
                  }
              echo "<hr>";
              } //end of while
		  } //end of movie validation if

	       $del_movie = "DELETE FROM zipcode_movies WHERE zipcode = '$zipcode'"; 
	       mysqli_query($con, $del_movie); 

           } //end of zip code validation if
          	 mysqli_close($con);

           } else {
			echo "<br>";
			echo "<div class=\"fadein\">";
			echo "<img src=\"images/img1.jpg\">";
			echo "<img src=\"images/img2.jpg\">";
			echo "<img src=\"images/img3.jpg\">";
			echo "<img src=\"images/img4.jpg\">";
			echo "<img src=\"images/img5.jpg\">";
			echo "<img src=\"images/img6.jpg\">";
			echo "</div>";
			echo "<br>&nbsp;";
		}
       ?>

     </div>
	<div class="right">
	    <marquee onMouseOver="this.scrollAmount=0" onMouseOut="this.scrollAmount=2" scrollamount="5" direction="up" loop="true" width="95%" height="500px">
	    <center>
		 <font class="scrolltext" style="font-size:28pt">Latest Movies 2014!</font><p>
		 <img src="images/i1.jpg" width="180" height="250"/>
		 <font style="visibility:hidden">hi</font><br><br>
		 <img src="images/i2.jpg" width="180" height="250"/>
		 <font style="visibility:hidden">hi</font><br><br>
		 <img src="images/i3.jpg" width="180" height="250"/>
		 <font style="visibility:hidden">hi</font><br><br>
		 <img src="images/i4.jpg" width="180" height="250"/>
		 <font style="visibility:hidden">hi</font><br><br>
		 <img src="images/i5.jpg" width="180" height="250"/>
		 <font style="visibility:hidden">hi</font><br><br>
		 <img src="images/i6.jpg" width="180" height="250"/>
		 <font style="visibility:hidden">hi</font><br><br>
		 <img src="images/i7.jpg" width="180" height="250"/>
		 <font style="visibility:hidden">hi</font><br><br>
		 <img src="images/i8.jpg" width="180" height="250"/>
		 <font style="visibility:hidden">hi</font><br>
	    </center>
	    </marquee>
	</div>
	</div>


</body>
</html>

