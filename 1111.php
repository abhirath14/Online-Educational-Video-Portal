<?php

session_start();
echo $_SESSION["j"];
$_SESSION["j"]=1;
$_SESSION["j"]++;

?>