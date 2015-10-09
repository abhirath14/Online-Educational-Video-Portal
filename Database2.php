<?php

$servername = "localhost";
$username = "root";
$password = "admin";

$conn = new mysqli($servername, $username, $password);

$sql="CREATE DATABASE DB2";
$conn->query($sql);
$conn = new mysqli($servername, $username, $password,"DB2");

$sql="CREATE TABLE Users(
	ID INT(7) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Email VARCHAR(50) NOT NULL,
	Password VARCHAR(20) NOT NULL,
	UserName VARCHAR(30) NOT NULL,
	MobileNumber BIGINT(10) NOT NULL,
	SecurityQ VARCHAR(20) NOT NULL,
	Answer VARCHAR(20) NOT NULL 
)";
$conn->query($sql);

$conn = new mysqli($servername, $username, $password,"DB2");
$sql="INSERT INTO Users (Email, Password,UserName,MobileNumber,SecurityQ,Answer)
VALUES ('saurabh@iitrpr.ac.in','hello','Saurabh',9855335504,1,'hell')";
$conn->query($sql);
$conn = new mysqli($servername, $username, $password,"DB2");
$sql="INSERT INTO Users (Email, Password,UserName,MobileNumber,SecurityQ,Answer)
VALUES ('shubham@iitrpr.ac.in','hell','Shubham',6549789712,1,'hell')";
$conn->query($sql);
$conn = new mysqli($servername, $username, $password,"DB2");

$sql="INSERT INTO Users (Email, Password,UserName,MobileNumber,SecurityQ,Answer)
VALUES ('yashi@iitrpr.ac.in','zello','Yashi',9041745875,1,'hell')";
$conn->query($sql);
?>