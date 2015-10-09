<?php
$servername = "localhost";
$username = "root";
$password = "admin";


$conn = new mysqli($servername, $username, $password);

$sql="CREATE DATABASE CM";
$conn->query($sql);

for ($i=1; $i <= 294; $i++) { 
	# code...
	$conn = new mysqli($servername, $username, $password,"CM");
	$sql="CREATE TABLE tab$i(
	Cmt VARCHAR(500) NOT NULL,
	Username VARCHAR(30) NOT NULL,
	Time TIMESTAMP
	)";
$conn->query($sql);
}

/*
$conn = new mysqli($servername, $username, $password,"CM");
$sql="INSERT INTO VV (Cmt)
VALUES ('hello')";
$conn->query($sql);
*/
/*
$conn = new mysqli($servername, $username, $password,"Video");
$sql="INSERT INTO Latex (ID,Name,Url)
VALUES (1,'LaTeX Tutorial 01 your first \"hello world\" document','https://www.youtube.com/embed/W_yPJsF1X18')";
$conn->query($sql);
*/
echo "hhhhh";
?>