<?php
session_start();
require_once('database.php');
$email = $_POST['loginUsername'];
$password = $_POST['loginPassword'];


$stmt = $pdo->prepare("SELECT * FROM `signupRoommate` WHERE `email` = '$email' AND `password` = '$password'");

$stmt->execute();

if($row = $stmt->fetch()){
	$_SESSION['logged-in'] = true;
	$_SESSION['email'] = $row['email'];
	header("Location: profile_yourprofile.php");
}else{
	header("Location: loginfail.php");
}
?>
