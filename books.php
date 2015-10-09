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

div
{
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

</p>



    <h1><font size="6" >BOOKS</font></h1>
<br><br>
<ul id="button">
	<li><a href="K&R.pdf">Dennis Ritchie - Programming Language Ansi C</a></li><br>	
	<li><a href="ia.pdf">Introduction to Algorithms- CLRS</a></li><br>

	<li><a href="66_Concepts of Programming Languages 10th-Sebesta.PDF">Concepts of Programming Languages, Robert Sebesta</a></li><br>
	<li><a href="bartle_introduction-to-real-analysis-new-edition.pdf">Real Analysis, Bartle and Sherbet</a></li><br>
	<li><a href="p.pdf">A First Course in Probability, Sheldon Ross</a></li><br>
	<li><a href="james_ward_brown_ruel_vance_churchill_complex_vbookfi-org.pdf">Complex Variables and their Applications, Brown & Churchill</a></li><br>
	<li><a href="patterson_book.pdf">Computer Architecture, Hennesy</a></li><br>
	<li><a href="Stallings.pdf">Computer Architecture, William Stallings</a></li><br>
	<li><a href="Signals.pdf">Signals and Systems, BP Lathi</a></li><br>
	<li><a href="Mano.pdf">Digital Design, M. Morris Mano</a></li><br>
	<li><a href="java_tutorial.pdf">Java Tutorial</a></li><br>
	<li><a href="Differential.pdf">Differential Equations, E.A. Codington</a></li><br>
	<li><a href="Callister.pdf">Callister</a></li><br>

	<li><a href="Nil.pdf">Electric Circuits, Nilson Riedel</a></li><br>
	<li><a href="Macro.pdf">Macro-Economics</a></li><br>
	<li><a href="Thomas.pdf">Thomas Calculus</a></li><br>
	<li><a href="Carstairs.pdf">Introduction to English morphology, Carstairs</a></li><br>
	<li><a align href="tutorial.pdf">C++ language tutorial	</a></li><br>
	<li><a href="Chem.pdf">McMurry, Organic Chemistry</a></li>	</ul>
</ul>
    </div>
  </div>
</div>
<div align = "center"id = "header">
Website design for IIT usage only <a href="http://http://www.iitrpr.ac.in/"> </a>Best hosted at <a href="http://www.iitrpr.ac.in" target="_blank">www.iitrpr.ac.in</a>
</div>

</body>
</html>

