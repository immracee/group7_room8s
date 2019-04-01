<!DOCTYPE html>
<html lang="en">
<head>
<title>Roommates App - Sign Up</title>
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

        <h2>Sign up</h2>
        <p>Please enter your information below to create your account</p>

  			<label for="signupFirstName">First name: </label>
  			<input type="text" class="form-control" id="signupFirstName" name="signupFirstName" placeholder="Enter first name" />
  		</div>
  		<div>
  			<label for="signupLastName">Last Name: </label>
  			<input type="text" class="form-control" id="signupLastName" name="signupLastName" placeholder="Enter last name" />
  		</div>
      <div>
  			<label for="signupEmail">Email: </label>
  			<input type="email" class="form-control" id="signupEmail" name="signupEmail" placeholder="youremail@email.com" required />
  		</div>
  		<div>
  			<label for="signupPhonenumber">Phone number: </label>
  			<input type="text" class="form-control" id="signupPhonenumber" name="signupPhonenumber" placeholder="905-123-4567" required />
  		</div>
      <div>
        <label for="signupCity">City: </label>
        <input type="text" class="form-control" id="signupCity" name="signupCity" placeholder="Enter city" />
      </div>
      <div>
        <label for="signupPassword">Password: </label>
        <input type="password" class="form-control" id="signupPassword" name="signupPassword" placeholder="Enter password" />
      </div>
      <div>
        <label for="signupPassword">Confirm Password: </label>
        <input type="password" class="form-control" id="signupPassword" name="signupPassword" placeholder="Confirm password" />
      </div>

    <!-- haven't tested radio buttons yet - Elena -->
    <!--
      <input type="radio" class="radio" name="signupGender" value="male" id="signupGenderMale" />
      <label for="male">Male</label>
      <input type="radio" class="radio" name="signupGender" value="female" id="signupGenderFemale" />
      <label for="female">Female</label> -->

      <br>
      <div class="form-group">
  		<button class="btn btn-primary btn-lg">Register</button>
      <div class="text-center">Already have an account? <a href="login.php">Login here</a></div>
    </div>
  	</form>

  </section>

</body>
</html>
