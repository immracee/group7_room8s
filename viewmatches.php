<?php
session_start();
require_once('database.php');

$question1 = $_GET['question1'];
$question2 = $_GET['question2'];

$stmt = $pdo->prepare("SELECT * FROM `signupRoommate` WHERE question1 = '$question1' AND question2 = '$question2'");
$stmt->execute();

if (isset($_SESSION['email']))
{
     echo 'logged in';
}
else
{
     header("Location: loginfail.php");
}
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
</head>

<body>
  <header>
      <h1 class="text-center">Roommates!</h1>
  </header>

  <section class="signup-form" id="accountsignup">


  	<form action="process-signup.php" method="post">
  		<div class="form-group">

        <h2>Your Matches</h2>
        <p>View your compatible matches!</p>
        <p><?php echo($question1); ?><p>
          <p><?php echo($question2); ?><p>

          <?php
          while($row = $stmt->fetch()) {
                                        ?>
          <p>Name: <?php echo($row["firstName"]); ?>   City: <?php echo($row["city"]); ?></p>
          <?php
           }
           ?>

        <!-- <button class="btn btn-primary btn-lg">Change City</button>

        <button class="btn btn-primary btn-lg"><a href="questionnaire_elena.html" style="color: white;">Modify Questionnaire</a></button> -->


        <!-- placeholder data for now, will use PHP to display database data from signupRoommates table -->
        <!-- <div>
          <label for="signupCity">Name</label>
        </div>
        <button class="btn btn-primary btn-lg"><a href="profile_match.php" style="color: white;">View Profile</a></button>
  		</div> -->

      <br>
      <div class="form-group">
      <br>
      <br>
      <button class="btn btn-primary btn-lg"><a href="profile_yourprofile.php" style="color: white;">Return to your profile</a></button>
      <br>
      <br>
    </div>
  	</form>
  </section>

</body>
</html>
