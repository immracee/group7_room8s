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

$stmt = $pdo->prepare("INSERT INTO `signuproommate` (`firstName`, `lastName`, `phone`, `email`, `city`, `password`) VALUES ('$firstName', '$lastName', '$phone', '$email', '$city', '$password'); ");

$stmt->execute();


//
//
// session_start();
// // require_once('database.php');
// $email = $_POST['loginUsername'];
// $password = $_POST['loginPassword'];
//
//
// $stmt = $pdo->prepare("SELECT * FROM `signupRoommate` WHERE `email` = '$email' AND `password` = '$password'");
//
// $stmt->execute();
//
// if($row = $stmt->fetch()){
// 	$_SESSION['logged-in'] = true;
// 	$_SESSION['email'] = $row['email'];
// 	header("Location: profile_yourprofile.php");
// }else{
// 	header("Location: loginfail.php");
// }
//
//
// if (isset($_SESSION['email']))
// {
//      // echo 'logged in';
//      echo($_SESSION['email']);
//      // $displayFirstName =
//
// }


// header("Location: profile_yourprofile.php");
// header("Location: login.php");
header("Location: registerlogin.php");
?>
