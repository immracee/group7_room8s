<?php

require_once('database.php');

// $question1 ='';
// $question2 ='';
// $question3='';
// $email = '';


  $question1 = $_POST['question1'];
  $question2 = $_POST['question2'];
  $question3 = $_POST['question3'];
  $email = $_POST['email'];

// $stmt = $pdo->prepare("INSERT INTO `signupRoommate` (`firstName`, `lastName`, `phone`, `email`, `city`, `password`) VALUES ('$firstName', '$lastName', '$phone', '$email', '$city', '$password'); ");
$stmt = $pdo->prepare("UPDATE `signupRoommate` SET `question1` = '$question1' , `question2` = '$question2' , `question3` = '$question3' WHERE `email` = '$email'");



// $_SESSION['question1'] = $question1;
// $_SESSION['question2'] = $question2;
// $_SESSION['question3'] = $question3;

echo($question1);
// echo($_SESSION['question1']);
$stmt->execute();


// if($row = $stmt->fetch()){
	
// }else{
// 	// echo($question1);
//   echo($email);
// }
// header("Location: rresult.php");
?>

<a href="result.php?question1=<?php echo($question1); ?>">Show result</a>

