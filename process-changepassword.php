<?php
require_once('database.php');
session_start();

$password='';
// $_SESSION='';

  $password = $_POST['loginPassword'];


// $stmt = $pdo->prepare("INSERT INTO `signupRoommate` (`firstName`, `lastName`, `phone`, `email`, `city`, `password`) VALUES ('$firstName', '$lastName', '$phone', '$email', '$city', '$password'); ");
$stmt = $pdo->prepare("UPDATE `signuproommate` SET `password` = '$password' WHERE `email` = '$_SESSION[email]'");

$stmt->execute();

header("Location: passwordchanged.php");
?>

<!-- $_SESSION -->
<!-- $_SESSION[email]; -->
