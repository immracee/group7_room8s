<?php
require_once('database.php');
session_start();

$firstName='';
// $_SESSION='';

  $firstName = $_POST['signupFirstName'];


// $stmt = $pdo->prepare("INSERT INTO `signupRoommate` (`firstName`, `lastName`, `phone`, `email`, `city`, `password`) VALUES ('$firstName', '$lastName', '$phone', '$email', '$city', '$password'); ");
$stmt = $pdo->prepare("UPDATE `signuproommate` SET `firstName` = '$firstName' WHERE `email` = '$_SESSION[email]'");

$stmt->execute();

header("Location: firstnamechanged.php");
?>

<!-- $_SESSION -->
<!-- $_SESSION[email]; -->
