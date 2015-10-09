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
a:link
		{
		
		}
		#edupor
		{
			text-shadow: 1px 1px black;
			text-align: center;
			font-size: 35px;
		}
		body
		{
		
		}
		form
		{
			text-align:"";
		}
		input
		{
			align: 
			width: 100px	
		}
		h1{
		text-align: center;
		}
		div{
		text-align: center;
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



    
		<h2 id = "edupor">
			LOGIN
		</h2>
			<div>
		<form name="myForm" onsubmit="return validate()"action="authen2.php" method="post">
			<font id="details">
			<b>Username:</b><input id="usr" type="text" name="em" max="50">
			<br><br>
			<b>Password:</b><input id="pass" type="password" name="psw" max="20" password>
			<br><br>
			<input type="submit" value="Log in">
		</form>
		</div>
		<p align="right">
		<a href="fp.php"><font size="3">Forgot Password</font></a>
		</p>
		<p align = "right">
			
		</p>
		<script>
			function validate()
			{
				var re = /^([\w-]+(?:\.[\w-]+)*)@i{2}trpr\.ac\.in$/i;
				var x = document.getElementById('usr').value;
				var y = document.getElementById('pass').value;
				if(x == null || x == "" )
				{
					alert("Username is empty");
					return false;
				}
				else if(!re.test(x))
				{
					alert("Username incorrect");
					return false;
				}
				else if(y == null || y == "")
				{
					alert("Password not filled");
					return false;
				}
				else
					return true;
			}
		</script>	
    </div>
  </div>
</div>
<div align = "center"id = "header">
Website design for IIT usage only <a href="http://http://www.iitrpr.ac.in/"> </a>Best hosted at <a href="http://www.iitrpr.ac.in" target="_blank">www.iitrpr.ac.in</a>
</div>

</body>
</html>

