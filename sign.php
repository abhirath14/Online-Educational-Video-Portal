<?php
session_start();
$conn=new mysqli("localhost","root","admin","DB2");
$ema=$_POST["em"];
//$ema = trim($ema);
//$ema = stripslashes($ema);
$usr=$_POST["usr"];
$pas=$_POST["psw"];
$mob=$_POST["mob"];
$secQ=$_POST["secQ"];
$ans=$_POST["ans"];


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Users (Email, Password, UserName, MobileNumber, SecurityQ, Answer)
VALUES ('$ema','$pas','$usr','$mob','$secQ','$ans')";
//$sql->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
