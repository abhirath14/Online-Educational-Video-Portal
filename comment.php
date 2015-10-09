<?php
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$text=$_POST["message"];
$n=$_GET["num"];
$u=$_SESSION["Username"];
echo "kfs a";
if($u!="Guest")
{
	$conn = new mysqli($servername, $username, $password,"CM");
	$sql="INSERT INTO tab$n (Cmt,Username)
	VALUES ('$text','$u')";
	$conn->query($sql);
}
else{
	echo '<script>
		alert("To post comments you have to log in first");
	</script>';
	header('Location: login2.php');
}
//header('Location: display.php?data='.$n);
?>
