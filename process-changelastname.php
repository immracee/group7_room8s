<?php
require_once('database.php');
session_start();

$lastName='';
// $_SESSION='';

  $lastName = $_POST['signupLastName'];


// $stmt = $pdo->prepare("INSERT INTO `signupRoommate` (`firstName`, `lastName`, `phone`, `email`, `city`, `password`) VALUES ('$firstName', '$lastName', '$phone', '$email', '$city', '$password'); ");
$stmt = $pdo->prepare("UPDATE `signuproommate` SET `lastName` = '$lastName' WHERE `email` = '$_SESSION[email]'");

$stmt->execute();

header("Location: lastnamechanged.php");
?>

<!-- $_SESSION -->
<!-- $_SESSION[email]; -->
