<?php
session_start();

?>

<?php
$conn=new mysqli("localhost","root","admin","DB2");
$ema=$_POST["em"];
$ema = trim($ema);
$ema = stripslashes($ema);
$pas=$_POST["psw"];

//echo $ema;
$res="SELECT UserName FROM Users WHERE Email='$ema' AND Password='$pas'";
$val=$conn->query($res);
$row = $val->fetch_assoc();



if($val->num_rows >0){
	$_SESSION["Username"]=$row["UserName"];
	header('Location: home.php');
}
else
{
	header('Location: alert.php');
}
?>
