<?php
require_once('database.php');
session_start();

$phone='';
// $_SESSION='';

  $phone = $_POST['signupPhonenumber'];


// $stmt = $pdo->prepare("INSERT INTO `signupRoommate` (`firstName`, `lastName`, `phone`, `email`, `city`, `password`) VALUES ('$firstName', '$lastName', '$phone', '$email', '$city', '$password'); ");
$stmt = $pdo->prepare("UPDATE `signuproommate` SET `phone` = '$phone' WHERE `email` = '$_SESSION[email]'");

$stmt->execute();

header("Location: phonenumberchanged.php");
?>

<!-- $_SESSION -->
<!-- $_SESSION[email]; -->
