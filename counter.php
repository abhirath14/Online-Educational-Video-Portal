<?php

	session_start();
	$_SESSION["Username"]="Guest";
	if(!isset($_SESSION["counter"]))
	{
		$handle=fopen("counter.txt","r");
		$counter=(int) fread($handle,20);
		fclose ($handle);
		echo $counter;
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
<?php

echo $_SESSION["counter"];

?>