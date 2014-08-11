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
		    background:url(http://thumbs.dreamstime.com/z/red-christmas-background-shiny-stars-35348908.jpg);
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
		    margin-top:5px;
      	    text-align:center;
		    width:250px;
		    height:600px;
		    position:fixed;
	        }
	        div.content {
		    float:left;
		    margin-top:10px;
               text-align: left;
		    color:#990000;
		    background-color:#FFFFB8;
		    width:800px;
		    margin-left:250px;
		    margin-right:auto;
		    border: 8px solid #FF8533;
		    border-radius: 25px;
		    box-shadow: 10px 10px 5px #FFB685;
		    padding: 40px;
	        }
              span.big {
			font-weight:bold;
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
		</style>
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
	          <td class="tabs"><a class="tabs" href="http://localhost:8000/Movies/movies.php">Movies</a></td>
	     	     <td class="tabs"><a class="tabs" href="http://localhost:8000/Movies/theatres.php">Theatres</a></td>
	          <td class="tabs"><a class="tabs" href="http://localhost:8000/Movies/search.php">Search</a></td>
	          <td class="tabs"><a class="tabs" href="http://localhost:8000/Movies/register.php">Register</a></td>
	          <td class="tabs"><a class="tabs" href="http://localhost:8000/Movies/about.php">About Us</a></td>
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
		 <font class="scrolltext"><a style="text-decoration:none;color:#FF3399;text-shadow:3px 3px 3px #D63385;" href="http://localhost:8000/Movies/register.php">REGISTER NOW!!</a></font><br>
		 </center></marquee>
		 <font class="scrolltext">And receive SMS Alerts on new movies</font><p>
		 <font class="scrolltext">Find your favorite movies in theatres near you</font><p>
		 <font class="scrolltext">Have fun, relax and enjoy your day!!</font><p>
		 <img src="images/pizza.png" width="70" height="70"/>&nbsp;&nbsp;&nbsp; <img src="images/burger.png" width="70" height="70"/>
	    </center>
	    
	</div>    

      <div class="content">

		<?php
		$movie = $_GET['movie'];
		$zipcode = $_GET['zip'];
		date_default_timezone_set('America/Los_Angeles');
		$startdate = date('Y-m-d');

		$request = "http://data.tmsapi.com/v1/movies/showings?startDate=".$startdate."&zip=".$zipcode."&radius=5&api_key=hqjdwecaz5rh2y7m2n7a8yw4";
		$response  = file_get_contents($request);
		$movielist = json_decode($response,true);                               
		$arrlen = sizeof($movielist);

		for ($i=0;$i<$arrlen;$i++){
		   if ($movielist[$i]['title'] == $movie){
		      echo "<p style=\"font-size:35px;font-weight:bold;color:#990000;\">".$movielist[$i]['title']."</p>";

			 if (isset($movielist[$i]['releaseDate'])){
			      echo "<br><span class=\"big\">Release Date: </span>".$movielist[$i]['releaseDate'];
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
			 echo "<hr>";
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


