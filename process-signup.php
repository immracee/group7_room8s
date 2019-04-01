<?php
require_once('database.php');

$firstName ='';
$lastName ='';
$phone='';
$email='';
$city='';
$password='';

  $firstName = $_POST['signupFirstName'];
  $lastName = $_POST['signupLastName'];
  $phone = $_POST['signupPhonenumber'];
  $email = $_POST['signupEmail'];
  $city = $_POST['signupCity'];
  $password = $_POST['signupPassword'];

$stmt = $pdo->prepare("INSERT INTO `signupRoommate` (`firstName`, `lastName`, `phone`, `email`, `city`, `password`) VALUES ('$firstName', '$lastName', '$phone', '$email', '$city', '$password'); ");

$stmt->execute();

header("Location: profile_yourprofile.php");
?>
