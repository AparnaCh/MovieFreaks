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
    include('Validation.php');
    function selected($blood_group, $choice) {
        if($blood_group==$choice) echo "selected";
    }
    
    function selectDate() {
     //month
	$months = array("", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
	$html = "<select class=\"dob\" name=\"month\">";
	for($i=1;$i<=12;$i++)
    		{
	       $html .= "<option value='$i'>$months[$i]</option>";
	     }
    	$html .= "</select>";
     //day
	$html.="<select class=\"dob\" name=\"day\">";
     for($i=1;$i<=31;$i++)
    		{
      	  $html.="<option value='$i'>$i</option>";
   	     }
     $html.="</select> ";
     //year
     $startyear = date("Y")-100;
     $endyear=date("Y")+50;
     $html.="<select class=\"dob\" name=\"year\">";
     for($i=$startyear;$i<=$endyear;$i++)
    		{      
     		  $html.="<option value='$i'>$i</option>";
   	     }
     $html.="</select> ";

     return $html;
    }

?>
<html>
    <head>
    <title>MovieFreaks - User Registration</title>
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
	   tr {
            height: 30px;
		 }
	   form {
 		 text-align: center;
		 text-color:red;
		 display: inline-block; 
		 padding: 20px; 
		 width: auto;  
		 background: #FFFFB8;
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
		 text-align:center;
		 width:800px;
		 margin-left:250px;
		 margin-right:auto;
		 border: 8px solid #FF8533;
		 border-radius: 25px;
		 box-shadow: 10px 10px 5px #FFB685;
            padding: 40px;
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
	   input[type=submit] {
		 border-radius:7px;
		 background-color:#33ADAD;
		 padding : 3px;
		 width:110px;
	   }
	   input[type=reset] {
		 border-radius:7px;
		 background-color:#33ADAD;
		 padding : 3px;
		 width:110px;
	   }
	   input[type=text] {
		 border-radius:7px;
		 background-color:#E0E0D1;
		 width:180px;
	   }
	   select.dob {
		 border-radius:7px;
		 background-color:#E0E0D1;
	   }
	   input[type=password] {
		 border-radius:7px;
		 background-color:#E0E0D1;
		 width:180px;
	   }
        input, textarea {font-size: 1em;}

    </style>
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
	     <table style="align:center;margin:auto;text-align:center;">
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
		 <img src="images/pizza.png" width="70" height="70"/>&nbsp;&nbsp;&nbsp; <img src="images/burger.png" width="70" height="70"/>
	    </center>
	    
	</div>    
        <div class="content">
        <form action="http://localhost:8000/Movies/register.php" method="post">
        
        <h2 style="font-size:30pt;"> User Registration </h2>
        <table style="margin:auto">
            <tr>
                <td>First Name: </td>
                <td><input type="text" name="first_name" value="<?=@$first_name?>"/> </td>
            </tr>
            <tr>
                <td>Last Name: </td>
                <td><input type="text" name="last_name" value="<?=@$last_name?>"/> </td>
            </tr>
            <tr>
                <td>Username: </td>
                <td><input type="text" name="username" value="<?=@$username?>"/> </td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="password" value="<?=@$password?>"/> (6 to 20 characters only)</td>
            </tr>
            <tr>
                <td>Confirm password: </td>
                <td><input type="password" name="confirm_password" value="<?=@$confirm_password?>"/> (6 to 20 characters only)</td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" name="email" value="<?=@$email?>"/> (eg: name@domain.com)</td>
            </tr>
            <tr>
                <td>Date of Birth: </td>
                <td>
                   <?php
                       echo selectDate();
                   ?>
                </td>

            </tr>
            <tr>
                <td>Gender: </td>
                <td><input type="radio" name="gender" value="male" <?php if(@$gender=='male')echo 'checked="true"';?> 
                                                <?php if(!isset($gender))echo 'checked="true"';?>/> male 
                                                <input type="radio" name="gender" value="female" 
                                                <?php if(@$gender=='female')echo 'checked="true"';?> /> female</td>
            </tr>
            <tr>
                <td>New Movie Alert: </td>
                <td><input type="radio" name="moviealert" value="yes" <?php if(@$moviealert=='yes')echo 'checked="true"';?> 
                                                <?php if(!isset($moviealert))echo 'checked="true"';?>/> yes 
                                                <input type="radio" name="moviealert" value="no" 
                                                <?php if(@$moviealert=='no')echo 'checked="true"';?> /> no</td>
            </tr>
            <tr>
                <td>Mobile Number: </td>
                <td><input type="text" name="phone" value="<?=@$phone?>"/> (with area code)</td>
            </tr>
            <tr>
                <td>Zip Code: </td>
                <td><input type="text" name="zipcode" value="<?=@$zipcode?>"/> </td>
            </tr>
            <tr>
                <td><p align="left"><font size="3" color="red"> *All fields required </font></p></td>
            </tr>
        </table>  
            <br>          
            <input type="submit" name="submit" value="Submit"/> &nbsp;&nbsp;
		 <input type="reset" name="reset" value="Reset"/><br><br>
        </form>

        <?php
            if (isset($_POST['submit'])){
		    if ($error == '') {       // if there is no error, then process further
			 echo "<div id=\"dialog-message\" title=\"Success!!\">";
			 echo "<br>&nbsp;Registration Successful!<br><br>";
			 echo "</div>";
		    } else {
			 echo "<div id=\"dialog-message\" title=\"Error!!\">";
			 echo "&nbsp;<span><font style=\"font-size:16;\">".$error."</font></span><br>";
			 echo "</div>";
		    } 
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
