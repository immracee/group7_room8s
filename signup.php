<!DOCTYPE html>
<html lang="en">
<head>
<title>Roommates App</title>
<meta charset="utf-8" />
<meta name="description" content="Find a roommate!">
<meta name="keywords" content="roommates, moving, relocation, accomodation">
</head>

<body>
  <header>
      <h1>Roommates App</h1>
  </header>

  <section id="accountsignup">
  	<h2>Sign up</h2>
    <p>Please enter your information below to create your account</p>

  	<form action="process-signup.php" method="post">
  		<div>
  			<label for="signupFirstName">First name: </label>
  			<input type="text" id="signupFirstName" name="signupFirstName" placeholder="Enter first name" />
  		</div>
  		<div>
  			<label for="signupLastName">Last Name: </label>
  			<input type="text" id="signupLastName" name="signupLastName" placeholder="Enter last name" />
  		</div>
  		<div>
  			<label for="signupPhonenumber">Phone number: </label>
  			<input type="text" id="signupPhonenumber" name="signupPhonenumber" placeholder="905-123-4567" required />
  		</div>
  		<div>
  			<label for="signupEmail">Email: </label>
  			<input type="email" id="signupEmail" name="signupEmail" placeholder="youremail@email.com" required />
  		</div>
      <div>
        <label for="signupCity">Current city: </label>
        <input type="text" id="signupCity" name="signupCity" placeholder="Enter city" />
      </div>
      <div>
        <label for="signupPassword">Password: </label>
        <input type="password" id="signupPassword" name="signupPassword" placeholder="Enter password" />
      </div>

    <!-- haven't tested radio buttons yet - Elena -->
    <!--
      <input type="radio" class="radio" name="signupGender" value="male" id="signupGenderMale" />
      <label for="male">Male</label>
      <input type="radio" class="radio" name="signupGender" value="female" id="signupGenderFemale" />
      <label for="female">Female</label> -->

      <br>
  		<button>Register</button>
  	</form>
  </section>

</body>
</html>
