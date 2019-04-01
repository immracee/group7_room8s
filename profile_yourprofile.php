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

        <h2>Your Profile</h2>
        <p>Your profile details below</p>


        <!-- placeholder data for now, will use PHP to display database data from signupRoommates table -->
  			<label for="signupFirstName">First name: </label>
        <p>Bob</p>
  		</div>
  		<div>
  			<label for="signupLastName">Last Name: </label>
  			<p>Stuart</p>
  		</div>
      <div>
  			<label for="signupEmail">Email: </label>
  			<p>bobstuart@bobstuart.com</p>
  		</div>
  		<div>
  			<label for="signupPhonenumber">Phone number: </label>
  			<p>289-765-4321</p>
  		</div>
      <div>
        <label for="signupCity">City: </label>
        <p>Oakville</p>
      </div>


      <br>
      <div class="form-group">
  		<button class="btn btn-primary btn-lg">Edit Account Details</button>
      <br>
      <br>
      <div class="form-group">
  		<button class="btn btn-primary btn-lg">Change Password</button>
      <br>
      <br>
      <button class="btn btn-primary btn-lg"><a href="questionnaire_elena.html" style="color: white;">Complete Questionaire</a></button>
      <br>
      <br>
      <button class="btn btn-primary btn-lg"><a href="viewmatches.php" style="color: white;">View Matches</a></button>
      <br>
      <br>

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
