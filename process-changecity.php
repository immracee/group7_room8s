<?php
require_once('database.php');
session_start();

$city='';
// $_SESSION='';

  $city = $_POST['signupCity'];


// $stmt = $pdo->prepare("INSERT INTO `signupRoommate` (`firstName`, `lastName`, `phone`, `email`, `city`, `password`) VALUES ('$firstName', '$lastName', '$phone', '$email', '$city', '$password'); ");
$stmt = $pdo->prepare("UPDATE `signuproommate` SET `city` = '$city' WHERE `email` = '$_SESSION[email]'");

$stmt->execute();

header("Location: citychanged.php");
?>

<!-- $_SESSION -->
<!-- $_SESSION[email]; -->
