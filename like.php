<?php

$conn=new mysqli("localhost","root","admin","DB2");
$n=$_GET["dat"];
$User=$_SESSION["Username"];


$con=new mysqli("localhost","root","admin","LI");

if($User!="Guest")
{
	$sql="SELECT * FROM Users WHERE UserName=$User";
	$result=$conn->query($sql);

	if($result->num_rows >0)
	{
		$row=$result->fetch_assoc();
		$k=$row["ID"];
		$sq="UPDATE tab$n ET Val=1 WHERE ID=$k";
		$con->query($sq);

	}
}
header('Location: display.php?data='$n'');
?>	
