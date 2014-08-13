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
 
$error = ""; // Initialize error as blank
 
if (isset($_POST['submit'])) { // check if the form is submitted
    #### removing extra white spaces & escaping harmful characters ####
    $first_name           = trim($_POST['first_name']);
    $last_name            = trim($_POST['last_name']);
    $username             = trim($_POST['username']);
    $password             = $_POST['password'];
    $confirm_password     = $_POST['confirm_password'];
    $email                = trim($_POST['email']);
    $month                = $_POST['month'];
    $day                  = $_POST['day'];
    $year                 = $_POST['year'];
    $gender               = $_POST['gender'];
    $moviealert           = $_POST['moviealert'];
    $phone                = $_POST['phone'];
    $zipcode              = $_POST['zipcode'];
    $pswdencryp           = md5($_POST['password']);
    $dob                  = $year."-".$month."-".$day;

	   //Connect to database

        $con = mysqli_connect("localhost","username" ,"password","database");
        if (!$con)     
        {     
		die('Could not connect: ' . mysql_error());     
	   }     


    //Validation of input data
 
 
    # Validate First Name #
        // if its not alpha numeric, throw error
        if (!ctype_alpha(str_replace(array("'", "-"), "",$first_name))) { 
            $error .= 'First name should be characters only<br>';
        }
        // if first_name is not 1-30 characters long, throw error
        if (strlen($first_name) < 1 OR strlen($first_name) > 30) {
            $error .= 'First name should be within 1-30 characters long<br>';
        }
 
    # Validate Last Name #
        // if its not alpha numeric, throw error
        if (!ctype_alpha(str_replace(array("'", "-"), "", $last_name))) { 
            $error .= 'Last name should be characters only<br>';
        }
        // if first_name is not 1-30 characters long, throw error
        if (strlen($last_name) < 1 OR strlen($last_name) > 30) {
            $error .= 'Last name should be within 1-30 characters long<br>';
        }

    # Validate Username #
        // if its not alpha numeric, throw error
        if (!ctype_alnum($username)) {
            $error .= 'Username should be alpha numeric characters only<br>';
        }
        // if username is not 3-30 characters long, throw error
        if (strlen($username) < 3 OR strlen($username) > 30) {
            $error .= 'Username should be within 3-30 characters long<br>';
        }
	   // username must be unique
	   $query = "SELECT COUNT(*) FROM registered_users WHERE username = '$username'"; 
	   $result = mysqli_query($con, $query); 
	   $cnt = $result->fetch_row();
	   if ($cnt[0] != 0){
		 $error .= 'User Name already exists<br>';
        }

     # Validate Password #
        // if first_name is not 6-20 characters long, throw error
        if (strlen($password) < 6 OR strlen($password) > 20) {
            $error .= 'Password should be within 6-20 characters long<br>';
        }
 
    # Validate Confirm Password #
        // if first_name is not 6-20 characters long, throw error
        if ($confirm_password != $password) {
            $error .= 'Confirm password mismatch<br>';
        }
 
    # Validate Email #
        // if email is invalid, throw error
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
            $error .= 'Enter a valid email address<br>';
        }
 
    # Validate Gender #
        // if gender is not selected or invalid, throw error
        if ($gender != 'male' && $gender != 'female') {
            $error .= 'Please select your gender<br>';
        }

    # Validate Movie Alert #
        // if movie alert is not selected or invalid, throw error
        if ($moviealert != 'yes' && $moviealert != 'no') {
            $error .= 'New Movie Alert - select yes/no<br>';
        }

    # Validate Phone #
        // if phone is invalid, throw error
        if (!ctype_digit($phone)) {
            $error .= 'Enter a valid phone number!<br>';
        }

    # Validate Zip Code #
        // if zipcode is invalid, throw error
        if (!ctype_digit($zipcode)) {
            $error .= 'Zip code does not exist!<br>';
        }
 
    #### end validating input data ####
    #####################################

    if($error == ''){

	   //insert to registered_users 
	   $ins_query = "INSERT INTO registered_users VALUES ('$first_name','$last_name','$username','$pswdencryp','$email','$dob','$gender','$moviealert','$phone','$zipcode')"; 
	   mysqli_query($con, $ins_query); 
 

       //insert to zipcode_movies
       if ($moviealert == 'yes'){
           //check if zipcode already exists in zipcode_movies
           $query = "SELECT COUNT(*) FROM zipcode_movies WHERE zipcode = '$zipcode'"; 
	      $result = mysqli_query($con, $query); 
	      $cnt = $result->fetch_row();
	      if ($cnt[0] == 0){
               $startdate = date('Y-m-d');
               $request = "http://data.tmsapi.com/v1/movies/showings?startDate=".$startdate."&zip=".$zipcode."&api_key=yourapikey";
               $response  = @file_get_contents($request);
		    if ($response === FALSE){
			   $error .= 'Zip code does not exist!<br>';
		    } else {
               	   $movielist = json_decode($response,true);                               
                   $arrlen = sizeof($movielist);
                   for ($i=0;$i<$arrlen;$i++){
                      $movietitle = $movielist[$i]['title'];
	   		      $ins_movie = "INSERT INTO zipcode_movies VALUES ('$zipcode','$movietitle')"; 
	                 mysqli_query($con, $ins_movie); 
		        }
              }
           }
        }
    }
    mysqli_close($con);
}
?>
