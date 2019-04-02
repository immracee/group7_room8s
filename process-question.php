<?php
require_once('database.php');

$question1 ='';
$question2 ='';
$question3='';


  $question1 = $_POST['question1'];
  $question2 = $_POST['question2'];
  $question3 = $_POST['question3'];
  $email = $_POST['email'];

// $stmt = $pdo->prepare("INSERT INTO `signupRoommate` (`firstName`, `lastName`, `phone`, `email`, `city`, `password`) VALUES ('$firstName', '$lastName', '$phone', '$email', '$city', '$password'); ");
$stmt = $pdo->prepare("UPDATE `signupRoommate` SET `question1` = '$question1', `question2` = '$question2', `question3` = '$question3' WHERE `signupRoommate`.`email` = $email;");

$stmt->execute();

header("Location: viewmatches.php");
?>
