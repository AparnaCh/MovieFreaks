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
		<title> MovieFreaks </title>
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
      	    text-align:left;
		    width:800px;
		    margin-left:250px;
		    margin-right:auto;
		    border: 8px solid #FF8533;
		    border-radius: 25px;
		    box-shadow: 10px 10px 5px #FFB685;
		    padding: 0 40px;
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
		   div.login {
		    width:410px;
		    margin-left:auto;
		    margin-right:auto;
		    background-color:#FFE066;
		    border: 2px solid #000000;
		    border-radius: 25px;
		    box-shadow: 5px 5px 5px #888888;
		   }
		   input[type=text] {
		     border-radius:7px;
		     background-color:#E0E0D1;
		     width:180px;
	        }
		   input[type=password] {
		     border-radius:7px;
		     background-color:#E0E0D1;
		     width:180px;
	        }
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
		 <img src="images/pizza.png" width="70" height="70"/>&nbsp;&nbsp;&nbsp; <img src="images/burger.png" width="70" height="70"/>
	    </center>	    
	</div>   
 
     <div class="content">
 	<p><font style="font-weight:bold;font-size:20pt;">About MovieFreaks</font></p>
 	<p><span><font style="font-weight:bold;">MovieFreaks</font></span> offers its users with the list of movies running in theatres near them. It also provides a short description of the movies, its show times, release date, ratings and various other details about the movies. The users can also find the theatres in their locality and also search for a movie by entering a keyword. It allows users to buy movie tickets online by redirecting to fandango’s website for their favorite movie in their nearby theatres.</p>
 	<p><span><font style="font-weight:bold;">MovieFreaks</font></span> offers its registered users an exciting opportunity to know about the movie releases in their local theatres by sending an SMS alert to their mobile.</p>
	<ul>
	<li>To receive new movie alerts, please <a href="http://localhost:8000/Movies/register.php">register</a></li>
	<li>To unsubscribe from new movie alerts, please <a href="http://localhost:8000/Movies/about.php?clicked=yes">Click here</a></li>
	</ul>
	<?php
		if ((isset($_GET['clicked'])) && ($_GET['clicked'] == 'yes')){
			$username="";
			$password="";
			echo "<div class=\"login\">";
			echo "<form action=\"http://localhost:8000/Movies/about.php?clicked=yes\" method=\"post\">";
			echo "<h2 align=center>Please Login</h2>";
        		echo "<table style=\"margin:auto;align:center;width:350px;text-align:left\">";
            	echo "<tr>";
                echo "<td width=120px>User Name: </td>";
                echo "<td><input type=\"text\" name=\"username\"/> </td>";
            	echo "</tr>";
            	echo "<tr>";
                echo "<td width=120px>Password: </td>";
                echo "<td><input type=\"password\" name=\"password\"/> </td>";
            	echo "</tr>";
            	echo "<tr>";
                echo "<td align=\"center\" colspan=\"2\"><input type=\"submit\" name=\"login\" value=\"Login\" style=\"border-radius:10px;background-color:#33ADAD;height:30px;\"/></td>";
            	echo "</tr>";
			echo "</table>";
			echo "</form>";
			echo "</div><br><br>";
			
			if(isset($_POST['login'])){
				$username = $_POST['username'];
				$password = md5($_POST['password']);

	   			//Connect to database
     			     $con = mysqli_connect("localhost","username" ,"password","database");
        			if (!$con){     
					die('Could not connect: ' . mysql_error());     
		      	}     
           		//check if zipcode already exists in zipcode_movies
           		$query = "SELECT count(*) FROM registered_users WHERE username = '$username' AND password = '$password'"; 
	      		$result = mysqli_query($con, $query); 
	      		$cnt = $result->fetch_row();

				if ($cnt[0] == 0){
					echo "<div id=\"dialog-message\" title=\"Error!!\">";
					echo "<br>&nbsp;Invalid Username or Password!!<br><br>";
					echo "</div>";
				}else {
	       			$del_user = "DELETE FROM registered_users WHERE username = '$username' AND password = '$password'"; 
			           mysqli_query($con, $del_user); 
					echo "<div id=\"dialog-message\" title=\"Success!!\">";
					echo "<span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 50px 0;\"></span>";
					echo "&nbsp;Successfully Unsubscribed!!<br>&nbsp;We are sorry to see you go.";
					echo "</div>";
				}
				mysqli_close($con);
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
