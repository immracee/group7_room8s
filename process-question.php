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
$stmt = $pdo->prepare("UPDATE `signuproommate` SET `question1` = '$question1' , `question2` = '$question2' , `question3` = '$question3' WHERE `email` = '$email'");



// $_SESSION['question1'] = $question1;
// $_SESSION['question2'] = $question2;
// $_SESSION['question3'] = $question3;

// echo($question1);
// echo($_SESSION['question1']);
$stmt->execute();


// if($row = $stmt->fetch()){

// }else{
// 	// echo($question1);
//   echo($email);
// }
// header("Location: rresult.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Roommates App - Profile</title>
<meta charset="utf-8" />
<meta name="description" content="Find a roommate!">
<meta name="keywords" content="roommates, moving, relocation, accomodation">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


<link rel="stylesheet" type="text/css" href="styles.css">
<link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
</head>

<body>
  <header>
      <h1 class="text-center font-maintitle">Roommates!</h1>
  </header>

  <section class="signup-form confirmchoice signup-formcolor" id="accountsignup">

<form>
  		<div class="form-group">

        <h2>Confirm your choices</h2>
        <p>Please confirm your choices</p>
        <p class="confirmchoices"><?php echo($question1); ?></p>
          <p class="confirmchoices"><?php echo($question2); ?></p>
            <p class="confirmchoices"><?php echo($question3); ?></p>

        <a class="btn btn-primary btn-lg" style="color: white;" href="viewmatches.php?question1=<?php echo($question1); ?>&question2=<?php echo($question2); ?>&question3=<?php echo($question3); ?>">View your matches</a>
        <br>
        <br>
        <a class="btn btn-primary btn-lg" style="color: white;" href="questionnaire.php">Back to questionaire</a>
        <br>
        <br>
        <a class="btn btn-primary btn-lg"  style="color: white;" href="viewmatches.php?question1=<?php echo($question1); ?>&question2=<?php echo($question2); ?>&question3=<?php echo($question3); ?>">Back to your profile</a>

      </div>
    </form>
    </section>

     <div class="footer">
        Made with by <a href="#">Us</a>. For more infomation, please send us a  <a href="mailto:name@email.com">E-mail.</a>
    </div>


</body>
</html>
