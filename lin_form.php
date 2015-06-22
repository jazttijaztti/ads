<?php
session_start();

$test1 = $_POST['test1'];
$test2 = $_POST['test2'];
$_SESSION['lin']=$test1;
$_SESSION['lin2']=$test2;

//var_dump($_SESSION);
//var_dump($_SESSION['lin']);

//print"<pre>";

$res = $_POST;

//var_dump($res);

header('location: complete.php');
exit();

?>
