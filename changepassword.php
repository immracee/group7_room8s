<?php
session_start();
// $_SESSION['firstName'] = $firstName;

if (isset($_SESSION['email']))
{
     // echo 'logged in';
     echo($_SESSION['email']);
     // $displayFirstName =
}
else
{
     header("Location: loginfail.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Roommates App - Change Password</title>
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
      <h1 class="text-center font-maintitle">Roommates!</h1>
  </header>

  <section class="signup-form" id="accountsignup">


  	<form action="process-changepassword.php" method="post">
  		<div class="form-group">

        <h2>Your Profile</h2>
        <p>Your profile details below</p>




  		</div>

      <div class="form-group">
              <input type="password" id="loginPassword" class="form-control" name="loginPassword" placeholder="Password" required="required">
          </div>


      <div class="form-group">
  		<button class="btn btn-primary btn-lg">Change Password</button>
      <br>
      <br>
      <button class="btn btn-primary btn-lg"><a href="questionnaire.php" style="color: white;">Back</a></button>
      <br>
      <br>

    </div>
  	</form>

    <form action="process-logout.php" method="post">
      <button>Logout</button>
    </form>

  </section>

</body>
</html>
