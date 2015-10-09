<?php
$servername = "localhost";
$username = "root";
$password = "admin";


$conn = new mysqli($servername, $username, $password);

$sql="CREATE DATABASE LI";
$conn->query($sql);
echo "fsd";

for ($i=1; $i <= 294; $i++) { 
	# code...
	$conn = new mysqli($servername, $username, $password,"LI");
	$sql="CREATE TABLE tab$i(
	UserID INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Val INT(1) NOT NULL
	)";
$conn->query($sql);
}
$n=3;
for($i=1;$i<=294;$i++)
{
	for($j=1;$j<=$n;$j++)
	{
		$conn = new mysqli($servername, $username, $password,"LI");
		$sql="INSERT INTO tab$i (UserID,Val)
		VALUES ($j,0)";
		$conn->query($sql);
	}
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