<?php
session_start();
require_once('database.php');
$question1 = $_GET['question1'];
$question2 = $_GET['question2'];
$question3 = $_GET['question3'];
$responses = array($question1, $question2, $question3);
$stmtAll = $pdo->prepare("SELECT * FROM `signupRoommate` WHERE `question1` = '$question1' AND `question2` = '$question2' AND `question3` = '$question3'");
$stmt1 = $pdo->prepare("SELECT * FROM `signupRoommate` WHERE `question1` = '$question1'");
$stmt2 = $pdo->prepare("SELECT * FROM `signupRoommate` WHERE `question2` = '$question2'");
$stmt3 = $pdo->prepare("SELECT * FROM `signupRoommate` WHERE `question3` = '$question3'");
$stmt4 = $pdo->prepare("SELECT * FROM `signupRoommate` WHERE `question1` = '$question1' AND `question2` = '$question2'");
$stmt5 = $pdo->prepare("SELECT * FROM `signupRoommate` WHERE `question2` = '$question2' AND `question3` = '$question3'");
$stmt6 = $pdo->prepare("SELECT * FROM `signupRoommate` WHERE `question1` = '$question1' AND `question3` = '$question3'");
$stmtAll->execute();
$stmt1->execute();
$stmt2->execute();
$stmt3->execute();
$stmt4->execute();
$stmt5->execute();
$stmt6->execute();
// $row = $stmt->fetch();
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
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


<link rel="stylesheet" type="text/css" href="styles.css">
<link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
</head>

<body>
  <header>
      <h1 class="text-center font-maintitle">Roommates!</h1>
  </header>

  <section class="signup-form" id="accountsignup">


   <form action="process-signup.php" method="post">
  		<div class="form-group">

        <h2>Your Matches</h2>
        <p>View your compatible matches!</p>
        <div id="checkbox">
        <input id="check1" type="checkbox" name="question1" value="q1" > <?php echo($question1); ?><br>
        <input id="check2" type="checkbox" name="question2" value="q2" > <?php echo($question2); ?><br>
        <input id="check3" type="checkbox" name="question3" value="q3" > <?php echo($question3); ?><br>
        </div>


       <p><?php echo($question1); ?><p>
          <p><?php echo($question2); ?><p>
            <p><?php echo($question3); ?><p>
            <div id = "q1">
              <?php
              while($row = $stmt1->fetch()) {
                                            ?>
              <p>Name: <?php echo($row["firstName"]); ?>   City: <?php echo($row["city"]); ?></p>
              <?php
               }
               ?>
               </div>
            <div id = "q2">
              <?php
              while($row = $stmt2->fetch()) {
                                            ?>
              <p>Name: <?php echo($row["firstName"]); ?>   City: <?php echo($row["city"]); ?></p>
              <?php
               }
               ?>
               </div>
            <div id = "q3">
              <?php
              while($row = $stmt3->fetch()) {
                                            ?>
              <p>Name: <?php echo($row["firstName"]); ?>   City: <?php echo($row["city"]); ?></p>
              <?php
               }
               ?>
               </div>


          <div id = "q4">
              <?php
              while($row = $stmt4->fetch()) {
                                            ?>
              <p>Name: <?php echo($row["firstName"]); ?>   City: <?php echo($row["city"]); ?></p>
              <?php
               }
               ?>
               </div>
          <div id = "q5">
              <?php
              while($row = $stmt5->fetch()) {
                                            ?>
              <p>Name: <?php echo($row["firstName"]); ?>   City: <?php echo($row["city"]); ?></p>
              <?php
               }
               ?>
               </div>

          <div id = "q6">
              <?php
              while($row = $stmt6->fetch()) {
                                            ?>
              <p>Name: <?php echo($row["firstName"]); ?>   City: <?php echo($row["city"]); ?></p>
              <?php
               }
               ?>
               </div>
         <div id = "q7">
              <?php
              while($row = $stmtAll->fetch()) {
                                            ?>
              <p>Name: <?php echo($row["firstName"]); ?>   City: <?php echo($row["city"]); ?></p>
              <?php
               }
               ?>
               </div>



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
<script>
console.log("start");
$('#q1').hide();
$('#q2').hide();
$('#q3').hide();
$('#q4').hide();
$('#q5').hide();
$('#q6').hide();
$('#q7').hide();
$(document).ready(function() {
  $("#checkbox").click(function(){
if ($('#check1').prop('checked')&& $('#check2').prop('checked') && $('#check3').prop('checked')) {
  $('#q7').show();
  $('#q1').hide();
  $('#q2').hide();
  $('#q3').hide();
  $('#q4').hide();
  $('#q5').hide();
  $('#q6').hide();

}else if($('#check1').prop('checked')&& $('#check2').prop('checked')){
  $('#q4').show();
  $('#q1').hide();
  $('#q2').hide();
  $('#q3').hide();

  $('#q5').hide();
  $('#q6').hide();
  $('#q7').hide();
}else if($('#check2').prop('checked') && $('#check3').prop('checked')){
  $('#q5').show();
  $('#q1').hide();
  $('#q2').hide();
  $('#q3').hide();
  $('#q4').hide();

  $('#q6').hide();
  $('#q7').hide();
}else if($('#check1').prop('checked')&& $('#check3').prop('checked')){
  $('#q6').show();
  $('#q1').hide();
  $('#q2').hide();
  $('#q3').hide();
  $('#q4').hide();
  $('#q5').hide();
$('#q7').hide();
}else if($('#check1').prop('checked')){
  $('#q1').show();

  $('#q2').hide();
  $('#q3').hide();
  $('#q4').hide();
  $('#q5').hide();
  $('#q6').hide();
  $('#q7').hide();
}else if($('#check2').prop('checked')){
  $('#q2').show();
  $('#q1').hide();
  $('#q3').hide();
  $('#q4').hide();
  $('#q5').hide();
  $('#q6').hide();
  $('#q7').hide();
}else if($('#check3').prop('checked')){
  $('#q3').show();
  $('#q1').hide();
  $('#q2').hide();
  $('#q4').hide();
  $('#q5').hide();
  $('#q6').hide();
  $('#q7').hide();
}else{
  $('#q1').hide();
  $('#q2').hide();
  $('#q3').hide();
  $('#q4').hide();
  $('#q5').hide();
  $('#q6').hide();
  $('#q7').hide();
}
  })
})
</script>
</html>
