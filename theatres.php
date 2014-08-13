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
		<title> Find nearby theatres </title>
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
		    margin-top:120px;
		    border: 0px solid #197575;
		    border-radius: 25px;
		    margin-left:auto;
		    margin-right:auto;
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
		    position:absolute;
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
		    padding: 0 40px;
	        }
	        div.right {
		    float:left;
		    margin-top:20px;
		    margin-left:1150px;
		    text-align:center;
		    width:250px;
		    height:600px;
		    position:absolute;
	        }
		   font.scrolltext{
			font-family:'monotype corsiva';
			color:#FFFF4D;font-size:24px;
			text-shadow:5px 5px 5px #FF6600;
		   }
		   font.zip{
			font-weight:bold;
			color:#990000;
			font-family:monotype corsiva;
			font-size:20pt;
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
		 <img src="images/pizza.png" width="70" height="70"/>&nbsp;&nbsp;&nbsp; <img src="images/burger.png" width="70" height="70"/>
	    </center>
	    
	</div>    

     <div class="content">
         <form action="http://localhost/Movies/theatres.php" method="post"><br>
         <table style="margin:auto">
            <tr>
                <td><font class="zip">Zip Code: </font></td>
                <td><input type="text" style="width:100px;border-radius:7px;" name="zipcode" value="<?=@$zipcode?>"/> &nbsp;&nbsp;</td>
                <td><font class="zip">Radius: </font></td>
                <td><input type="text" style="width:100px;border-radius:7px;" name="radius" value="<?=@$radius?>"/> &nbsp;&nbsp;</td>
                <td><input type="submit" name="go" value="Go!" style="border-radius:10px;background-color:#33ADAD;"/></td>
		 </tr>
         </table>
         </form>
         
         <?php
             if (isset($_POST['go'])){
               $zipcode = $_POST['zipcode']; 
 		    if (($_POST['radius'] == "")){
               		$radius = 5;
		    }else {
				$radius = $_POST['radius'];
		    }   
               date_default_timezone_set('America/Los_Angeles');
               $startdate = date('Y-m-d');

		    //Call API
		    $request = "http://data.tmsapi.com/v1/movies/showings?startDate=".$startdate."&zip=".$zipcode."&radius=".$radius."&api_key=yourapikey";
		    $response  = @file_get_contents($request);
		    if ($response === FALSE){
				echo "<br>";
				echo "<div class=\"fadeerr\">";
				echo "<img src=\"images/img3.jpg\">";
				echo "<div id=\"dialog-message\" title=\"Error!!\">";
				echo "<br>&nbsp;Please enter a valid zip code!<br><br>";
				echo "</div>";
				echo "</div>";
				echo "<br>&nbsp;";

		    } else {
       	    		//Connect to database
               		$con = mysqli_connect("localhost","username" ,"password","database");
               		if (!$con)     
               		{     
		        		die('Could not connect: ' . mysql_error());     
	          		}  

				//new records inserted each time so delete now
				$del_query = "DELETE FROM theatres"; 
				mysqli_query($con, $del_query); 
 
		    		$movielist = json_decode($response,true);                               
		    		$arrlen = sizeof($movielist);
		    		for ($i=0;$i<$arrlen;$i++){
	            	   $movietitle = $movielist[$i]['title'];
                 	   $shtimelen = sizeof($movielist[$i]['showtimes']);
                 	   for($k=0;$k<$shtimelen;$k++) {
					$theatre = $movielist[$i]['showtimes'][$k]['theatre']['name'];
					$showtime = $movielist[$i]['showtimes'][$k]['dateTime'];
					if (isset($movielist[$i]['showtimes'][$k]['ticketURI'])) {
				        $ticket = mysqli_real_escape_string($con,$movielist[$i]['showtimes'][$k]['ticketURI']);
					} else {
                             $ticket = "no";
					}

  		      		$ins_thtr = "INSERT INTO theatres VALUES ('$zipcode','$movietitle','$theatre','$showtime','$ticket')"; 
		      		mysqli_query($con, $ins_thtr); 

			 	  } //end for shtimelen
		    	    } //end for arrlen

		    	    //fetch distinct theatres from table
              	    $query1 = "SELECT DISTINCT theatre FROM theatres WHERE zipcode = $zipcode";
              	    $result1 = mysqli_query($con, $query1);
		   	    while ($thtr = $result1->fetch_row()){
			 	 echo "<p style=\"font-size:35px;font-weight:bold;color:#990000;\">".$thtr[0]."</p>";

		       	 //fetch from theatres table and display
                 	 $query2 = "SELECT zipcode,movies,theatre,ticketurl FROM theatres WHERE theatre = '$thtr[0]' GROUP BY zipcode,movies,theatre,ticketurl"; 
                 	 $result2 = mysqli_query($con, $query2);
			 	 while ($display = $result2->fetch_row()){
					echo "<table width=\"700\"><tr>";
					echo "<td width=\"500\"><font style=\"font-weight:bold;color:#990000;\">".$display[1]."</td>";
					if ($display[3] == "no"){
						echo "<td>Buy in Theatre</td>";
					}else {
						echo "<td width=\"200\"><a class=\"tkt\" href=\"$display[3]\">Buy Tickets</a></td>";
					}
					echo "</tr></table>";

		          		//fetch showtime from table
                     		$query3 = "SELECT showtime FROM theatres WHERE theatre = '$thtr[0]' AND movies = '$display[1]'"; 
                     		$result3 = mysqli_query($con, $query3);
					while ($showtimes = $result3->fetch_row()){
						echo "<span font style=\"color:#197575\">".substr($showtimes[0],11,5)."</span>&nbsp;&nbsp;&nbsp;";
					} //end of while showtimes
				 } //end of while display
		   		 echo "<hr>";
		   	  } //end of while thtr

         	    	  mysqli_close($con);
		    } //end of if $response === False

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

