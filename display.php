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
#cmt{
		padding: 10px;
		border: 5px solid gray;
		border-radius: 4px;
		margin: 2px;
	}
	#post{
		float :right;
	}
	img{
		float: right;
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

</p>



    <center>
<form action="searching.php" method="post">
	Search Videos :
	<input type="text" name="search">
	
	<input type="submit" value="GO">
</form>
<br>
<br>
</center>
<center>
<?php

$conn=new mysqli("localhost","root","admin","Video");
$id_no=$_GET["data"];
$sql="(SELECT Name, Url FROM Latex WHERE ID=$id_no)
UNION 
(SELECT Name, Url FROM C WHERE ID=$id_no)
UNION 
(SELECT Name, Url FROM GIMP WHERE ID=$id_no)
UNION 
(SELECT Name, Url FROM Java WHERE ID=$id_no)
UNION 
(SELECT Name, Url FROM PHP WHERE ID=$id_no)
UNION 
(SELECT Name, Url FROM Python WHERE ID=$id_no)
UNION 
(SELECT Name, Url FROM Introduction_to_Algorithms WHERE ID=$id_no)";
$result=$conn->query($sql);
$row = $result->fetch_assoc();

echo '<b>'.$row["Name"]."<br><br></b>";
	echo '<iframe width="750" height="441"
src="'.$row["Url"].'">
</iframe>';


echo '</center>
<p><b>Comments</b>
</p>
<center>
<form action="comment.php?num='.$id_no.'" method="post">

<textarea name="message" rows="6" cols="93" placeholder="Share your thoughts">
</textarea>
</center>

<div id=post>
<input type="submit" value="   Post   ">
</div>
</form>

<br><br>
ALL COMMENTS
';

$conn=new mysqli("localhost","root","admin","CM");
$sql="SELECT * FROM tab$id_no";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		echo '<div id="cmt">
		<b>'.$row["Username"].': - </b>'.$row["Time"].'<br>'.$row["Cmt"]."<br>".
		'</div>';
		
        //echo $row["Url"]."<br>";
    }}
else{
	echo '<div id="cmt">
	0 Results
	</div>';
}
?>

    </div>
  </div>
</div>
<div align = "center"id = "header">
Website design for IIT usage only <a href="http://http://www.iitrpr.ac.in/"> </a>Best hosted at <a href="http://www.iitrpr.ac.in" target="_blank">www.iitrpr.ac.in</a>
</div>

</body>
</html>

