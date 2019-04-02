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






  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Roommates App - Result</title>
    <meta charset="utf-8">


    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
  
  <header>
      <h1 class="text-center">Your result</h1>
  </header>


    <section class="signup-form" id="accountsignup">

      <form action="process-signup.php" method="post">
      <div class="form-group">

        <h2>Your result</h2>
        <p>Your result details below</p>


        
        <label for="name">
         <p>Your name: 
         <?php echo($row["firstName"]); ?>
         </p>
        </label>

        <label for="kind">
          <p>You are: 
          <?php echo($question1); ?>
          </p>
        </label>

        <label for="city">
          <p>City: 
          <?php echo($row["city"]); ?>
          </p>
        </label>
        
      </div>
      




  </body>
  </html>


