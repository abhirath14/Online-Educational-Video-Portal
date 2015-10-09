<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Educational Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <style type = "text/css">
#header{
background-color:white;
padding-top: 15px;
    padding-right: 15px;
    padding-bottom: 15px;
    padding-left: 5px;

}
#1{
    text-align:"right";
    float: right;
  }
  img{
  	vertical-align: text-top;
  }
  a{
  	text-decoration: none;
  }
  #hh{
  	vertical-align: text-top;
  }
  #right{
  	text-align: right;
  }
</style>
</head>

<body background="contact-us.jpg">
<div class="container">
<div class="jumbotron">
<nav id="header" style="background-color:transparent">
		<div class="container-fluid">
			<div class="container-fluid">
			<div class="panel panel-success">
			<div class="panel-body">
			<div class="col-xs-2">
				<img src="logo.jpg" style="width:145px;height:159px;">
			</div>
			<div class="col-xs-10"><h1 class="infoself"><font size="6">Indian Institute of Technology, Ropar</font></h1>
			<h3 class="infoself hidden-xs">Online Educationl Video Portal</h3></div>
			</div>
			</div>
			</div>
			
			<div class="collapse bs-navbar-collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					
					<li style="margin-left:10px;" class="" ><a href="home.php">Home</a></li>					<li style="margin-left:10px;" class="active" ><a href="videos.php">Videos</a></li>
					<li style="margin-left:10px;" class="active" ><a href="books.php">Books</a></li>
					<li style="margin-left:10px;" class="active" ><a href="about.php">About</a></li>
					<li style="margin-left:10px;" class="active" ><a href="contact.php">Contact Us</a></li>

				</ul>


				<ul class="nav navbar-nav navbar-right">
				<?php
				echo '<li><a>Hello '.$_SESSION["Username"].' ! </a></li>'
				?>
<?php
	if($_SESSION["Username"]=="Guest"){
  echo '<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Sign-Up</a></li>
	<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Login</a></li>
';
}
else{
  echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Log Out</a></li>
';
}
	?>
</ul>			</div>
		</div>
	</nav>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</p>



    <h2><font size="6">Videos</font></h1>
<br><br>
<center>
<form action="searching.php" method="post">
	<font size = "4">Search Videos : </font>
	<input type="text" name="search">
	
	<input type="submit" value="GO">
</form>
<br>
<br>
</center>

<a href="algov.php">
<h2>Algorithms</h2>
</a>
<?php

$conn = new mysqli("localhost", "root", "admin","Video");

$sql = "SELECT * FROM Introduction_to_Algorithms LIMIT 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
	{
	
    while($row = $result->fetch_assoc())
    	 {
   
		echo '<div id="2">
		<a href="display.php?data='.$row["ID"].'">
  			<img src="'.$row["Img"].'" alt="Video" style="width:120px;height:90px;border:0">
  			'.$row["Name"].'<br><br>
		</a>';
		
    	}
  	}


?>
<div id="right">
<a href="algov.php">
..... more videos
</a>
</div>

<a href="cv.php">
<h2>C Programming</h2>
</a>
<?php

$conn = new mysqli("localhost", "root", "admin","Video");

$sql = "SELECT * FROM C LIMIT 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
	{
	
    while($row = $result->fetch_assoc())
    	 {
   
		echo '<div id="2">
		<a href="display.php?data='.$row["ID"].'">
  			<img src="'.$row["Img"].'" alt="Video" style="width:120px;height:90px;border:0">
  			'.$row["Name"].'<br><br>
		</a>';
		
    	}
  	}

?>
<div id="right">
<a href="cv.php">
..... more videos
</a>
</div>


<a href="gimpv.php">
<h2>GIMP</h2>
</a>
<?php

$conn = new mysqli("localhost", "root", "admin","Video");

$sql = "SELECT * FROM GIMP LIMIT 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
	{
	
    while($row = $result->fetch_assoc())
    	 {
   
		echo '<div id="2">
		<a href="display.php?data='.$row["ID"].'">
  			<img src="'.$row["Img"].'" alt="Video" style="width:120px;height:90px;border:0">
  			'.$row["Name"].'<br><br>
		</a>';
		
    	}
  	}


?>
<div id="right">
<a href="gimpv.php">
..... more videos
</a>
</div>


<a href="javav.php">
<h2>Java Programming</h2>
</a>
<?php

$conn = new mysqli("localhost", "root", "admin","Video");

$sql = "SELECT * FROM Java LIMIT 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
	{
	
    while($row = $result->fetch_assoc())
    	 {
   
		echo '<div id="2">
		<a href="display.php?data='.$row["ID"].'">
  			<img src="'.$row["Img"].'" alt="Video" style="width:120px;height:90px;border:0">
  			'.$row["Name"].'<br><br>
		</a>';
		
    	}
  	}


?>
<div id="right">
<a href="javav.php">
..... more videos
</a>
</div>



<a href="latexv.php">
<h2>Latex</h2>
</a>
<?php

$conn = new mysqli("localhost", "root", "admin","Video");

$sql = "SELECT * FROM Latex LIMIT 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
	{
	
    while($row = $result->fetch_assoc())
    	 {
   
		echo '<div id="2">
		<a href="display.php?data='.$row["ID"].'">
  			<img src="'.$row["Img"].'" alt="Video" style="width:120px;height:90px;border:0">
  			'.$row["Name"].'<br><br>
		</a>';
		
    	}
  	}


?>
<div id="right">
<a href="latexv.php">
..... more videos
</a>
</div>



<a href="phpv.php">
<h2>PHP</h2>
</a>
<?php

$conn = new mysqli("localhost", "root", "admin","Video");

$sql = "SELECT * FROM PHP LIMIT 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
	{
	
    while($row = $result->fetch_assoc())
    	 {
   
		echo '<div id="2">
		<a href="display.php?data='.$row["ID"].'">
  			<img src="'.$row["Img"].'" alt="Video" style="width:120px;height:90px;border:0">
  			'.$row["Name"].'<br><br>
		</a>';
		
    	}
  	}


?>
<div id="right">
<a href="phpv.php">
..... more videos
</a>
</div>


<a href="pythonv.php">
<h2>Python</h2>
</a>
<?php

$conn = new mysqli("localhost", "root", "admin","Video");

$sql = "SELECT * FROM Python LIMIT 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
	{
	
    while($row = $result->fetch_assoc())
    	 {
   
		echo '<div id="2">
		<a href="display.php?data='.$row["ID"].'">
  			<img src="'.$row["Img"].'" alt="Video" style="width:120px;height:90px;border:0">
  			'.$row["Name"].'<br><br>
		</a>';
		
    	}
  	}


?>
<div id="right">
<a href="pythonv.php">
..... more videos
</a>
</div>
    </div>
  </div>
</div>
</div>
<div id = "header">
Website design for IIT usage only <a href="http://http://www.iitrpr.ac.in/"> </a>Best hosted at <a href="http://www.iitrpr.ac.in" target="_blank">www.iitrpr.ac.in</a>
</div>

</body>
</html>

