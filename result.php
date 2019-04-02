<?php
session_start();
require_once('database.php');



// echo($_SESSION['question1']);
// $question1 = $_SESSION['question1'];
// echo($_SESSION['email']);
$question1 = $_GET['question1'];
// echo($question1);

  $stmt = $pdo->prepare("SELECT * FROM `signupRoommate` WHERE question1 = '$question1'");
  $stmt->execute();
//   $row = $stmt->fetch();
//   echo($row['city']);
  

  ?>

  <h2>Your result</h2>
  <p>Show your result based on your choice about:</p>
  <p><?php echo($question1); ?><p>



  <?php
  while($row = $stmt->fetch()) {
                                ?>
  <p>Name: <?php echo($row["firstName"]); ?>   City: <?php echo($row["city"]); ?></p>  
  <?php
   }
   ?>


