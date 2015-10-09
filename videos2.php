<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	body{
		background-color: #B8B894;
		margin-left: 250px;
		margin-top: 70px;
		margin-right: 250px;
   		margin-bottom: 70px;
	}
  div{
    text-align:"right";
    float: right;
  }
	</style>
</head>
<body>

<?php
if($_SESSION["Username"]=="Guest"){
  echo '<div><a href="login.htm">Login</a>
  <a href="signup.php">Sign Up</a></div>';
}
else{
  echo '<a href="logout.php">Log Out</a>';
}
?>
<br><br>
<center>
<form action="searching.php" method="post">
	Search Videos :
	<input type="text" name="search">
	
	<input type="submit" value="GO">
</form>
<br>
<br>
</center>
<?php



echo "Hello ".$_SESSION["Username"]." !<br>";
$servername = "localhost";
$username = "root";
$password = "admin";

$conn = new mysqli($servername, $username, $password,"Video");

$sql = "SELECT ID, Name FROM Latex";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		//
		echo '
		<a href="display.php?data='.$row["ID"].'">
  			<img src="latex.png" alt="Video" style="width:120px;height:90px;border:0">
  			'.$row["Name"]."<br>".'
  		
		</a>';
		//<?php
		
        //echo $row["Url"]."<br>";
    }}
else{
	echo "0 Results";
}
?>

</body>
</html>

