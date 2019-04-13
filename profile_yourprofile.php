<?php
session_start();
// $_SESSION['firstName'] = $firstName;

if (isset($_SESSION['email']))
{
     // echo 'logged in';
     // echo($_SESSION['email']);
     // $displayFirstName =
}
else
{
     header("Location: loginfail.php");
}

require_once 'database.php';

$email = $_SESSION['email'];
$stmt = $pdo->prepare("SELECT * FROM `signuproommate` WHERE `email` = '$email'");

$stmt->execute();
$row = $stmt->fetch();

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

  <section class="signup-form" id="accountsignup">


  	<form action="process-signup.php" method="post">
      <div class="profilesection">
  		<div class="form-group">

        <h2 class ="font-profileinfotitle">Your Profile</h2>
        <p>Your profile details below</p>
      </div>


        <div class="usertitledata">
        <label for="signupFirstName" class="font-profiledetailstitle">First name: </label>


        <!-- //show records (process results) -->
        <div class="font-userdetails">
          <?php echo($row["firstName"]);?>
          <p class="editdetails"><a href="changefirstname.php">edit first name</a></p>
          </div>
        </div>


  		<div class="usertitledata">
  			<label for="signupLastName" class="font-profiledetailstitle">Last Name: </label>
      <div class="font-userdetails">
          <?php echo($row["lastName"]);?>
          <p class="editdetails"><a href="changelastname.php">edit last name</a></p>
      </div>
  		</div>
      <div class="usertitledata">
  			<label for="signupEmail" class="font-profiledetailstitle">Email: </label>
        <div class="font-userdetails">
  			<?php echo($row["email"]);?>
      </div>
  		</div>
  		<div class="usertitledata">
  			<label for="signupPhonenumber" class="font-profiledetailstitle">Phone number: </label>
        <div class="font-userdetails">
        <?php echo($row["phone"]);?>
        <p class="editdetails"><a href="changephonenumber.php">edit phone number</a></p>
        </div>
  		</div>
      <div class="usertitledata">
        <label for="signupCity" class="font-profiledetailstitle">City: </label>
      <div class="font-userdetails">
        <?php echo($row["city"]);?>
        <p class="editdetails"><a href="changecity.php">edit city</a></p>
      </div>
      </div>
    </div>


      <!-- <br>
      <div class="form-group">
  		<button class="btn btn-primary btn-lg" href="changepassword.php">Edit Account Details</button>
    </div> -->

      <!-- <button class="btn btn-primary btn-lg"> -->
        <a href="questionnaire.php" class="btn btn-primary btn-lg" style="color: white;">Complete Questionaire</a>
        <br>
        <br>
        <a href="rentalapi.php" class="btn btn-primary btn-lg" style="color: white;">Search Apartments</a>
        <br>
        <br>
        <div class="form-group">
          <a href="changepassword.php" class="btn btn-primary btn-lg" style="color: white;">Change Password</a>
        <br>
        <br>
      <!-- </button> -->
      <!-- <button class="btn btn-primary btn-lg" > -->
      <!-- <a href="viewmatches.php" class="btn btn-primary btn-lg" style="color: white;">View Matches</a> -->
      <!-- </button> -->

      <a href="process-logout.php" class="btn btn-primary btn-lg" style="color: white;">Logout</a>
    </div>

  	</form>

    </section>
    <div class="footer">
        Made with by <a href="#">Us</a>. For more infomation, please send us a  <a href="mailto:name@email.com">E-mail.</a>
    </div>
    <br>

</body>
</html>
