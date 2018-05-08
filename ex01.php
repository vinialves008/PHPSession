<?php 
var_dump($_SESSION);
echo "<br>";
session_start();
var_dump($_SESSION);
echo "<br>";
$_SESSION['id'] = 10;
var_dump($_SESSION);
echo "<br>";
 ?>