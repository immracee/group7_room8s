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

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Roommates App - Phone Number Changed</title>
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


  	<form>
  		<div class="form-group">

        <h2>Phone number changed</h2>
        <p>Your phone number has been successfully changed!</p>

      <div class="form-group">
      <br>
      <br>


    </div>
  	</form>
    <a href="profile_yourprofile.php" class="btn btn-primary btn-lg" style="color: white;">Back</a>
    <br>
    <br>

  </section>

  <div class="footer">
      Made with by <a href="#">Us</a>. For more infomation, please send us a  <a href="mailto:name@email.com">E-mail.</a>
  </div>

</body>
</html>
