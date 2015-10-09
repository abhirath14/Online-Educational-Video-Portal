<?php

	session_start();
	$_SESSION["Username"]="Guest";
	if(!isset($_SESSION["counter"]))
	{
		$handle=fopen("counter.txt","r");
		$counter=(int) fread($handle,20);
		fclose ($handle);
		$counter++;
		$_SESSION["counter"]=$counter;
		$handle=fopen("counter.txt","w");
		fwrite($handle,$counter);
		fclose($handle);
	}
	/*
	if(isset($_SESSION["views"]))
		$_SESSION["views"]++;
	else
		$_SESSION["views"]=0;
	echo $_SESSION["views"];
	*/
?>


<!DOCTYPE html>
<html>
<head>
	<title>Educational Portal</title>
	<style>
	body{
		background-image: url("edu.jpg");
		background-size: 1370px 750px;
	}
	h1{
		text-align: center;
	}
	ul#menu{
		text-align: center;
	}
	ul#menu li{
		display: inline;
		
	}
	ul#menu li a {
		background-color: #330033;
		padding: 20px 20px;
		border-radius: 30px;
		text-align: center;
		font-size: 20px;
		text-decoration: none;
		margin :20px;
	}
	ul#menu li a:hover {
		background-color: #FF6600;
	}
	ul#menu li a:link,ul#menu li a:visited{
		color: yellow;
	}

	ul#button{
		text-align: right;
		margin-right: 50px;
	}
	ul#button li{
		display: inline;
	}
	ul#button li a {
		background-color: #00FF00;
		padding: 10px 10px;
		margin: 10px;
		border-radius: 10px;
		text-decoration: none;
		color: brown;

	} 

	
	</style>
</head>

<body>

<h1><i>Education Portal</i></h1>
<ul id="button">
	<li><a href="login.htm">Login</a></li>
	<li><a href="signup.htm">Sign Up</a></li>
</ul>
<br><br>
<ul id="menu">
	<li><a href="home.htm">Home</a></li>
	<li><a href="videos.php">Videos</a></li>
	<li><a href="books.htm">Books</a></li>
	<li><a href="contact-us.htm">Contact Us</a></li>
</ul>

<?php

echo $_SESSION["counter"];

?>

</body>
</html>