<?php
session_start();

if($_SESSION['logged-in'] == false) {
    header("Location: login.php");
}else{

  require_once('database.php');
  $stmt = $pdo->prepare("SELECT * FROM `signupRoommate`");
  $stmt->execute();
  $row = $stmt->fetch();
}
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Roommates App</title>
<meta charset="utf-8" />
<meta name="description" content="Find a roommate!">
<meta name="keywords" content="roommates, moving, relocation, accomodation">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles.css">


</head>

<body>
  <!--  -->

  <section id="accountsignup">
    <div class="signup-form">

    <h1 class="text-center">Roommates!</h1>





  	<form action="process-question.php" method="post">
      <h2>Questionaire</h2>
        <div id="question1">
        <p>Are you an early bird or a night owl?</p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="question1" id="inlineRadio1" value="bird">
            <label class="form-check-label" for="inlineRadio1">Bird</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="question1" id="inlineRadio2" value="owl">
            <label class="form-check-label" for="inlineRadio2">Owl</label>
          </div>
        </div>

        <div id="question2">
                <p>Your gender</p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="question2" id="inlineRadio1" value="male">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="question2" id="inlineRadio2" value="female">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                  </div>
                </div>

        <div id="question3">
        <p>The third question</p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="question3" id="inlineRadio1" value="bird">
            <label class="form-check-label" for="inlineRadio1">answer1</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="question3" id="inlineRadio2" value="owl">
            <label class="form-check-label" for="inlineRadio2">answer1</label>
          </div>
        </div>



        <ul class="pager" id="pager">
            <li class="previous" id="pre">
              <a href="#">&larr; previous</a>
            </li>
            <li class="next" id="next">
              <a href="#">next &rarr;</a>
            </li>
          </ul>
        <input type="hidden" name="email" value="<?php echo($row["email"]); ?>">
        <div class="form-group" id="submit" >
                <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
    <!-- haven't tested radio buttons yet - Elena -->
    <!--
      <input type="radio" class="radio" name="signupGender" value="male" id="signupGenderMale" />
      <label for="male">Male</label>
      <input type="radio" class="radio" name="signupGender" value="female" id="signupGenderFemale" />
      <label for="female">Female</label> -->
    </form>
      <a href="profile_yourprofile.php">Back to your profile</a>

    </div>



    </div>

  </section>

</body>
<script>
    $("#question2").hide();
    $("#question3").hide();
    $("#submit").hide();
    $("#pre").hide();

$(document).ready(function(){
    var i = 0;

  $("#next").click(function(){
      i++;
      console.log(i);

      if(i == 1){
    $("#question1").hide();
    $("#question2").show();
    $("#question3").hide();
    $("#submit").hide();
    $("#pre").show();
}else if(i == 2){
    $("#question2").hide();
    $("#question3").show();
    $("#next").hide();
    $("#submit").show();
}else if(i == 0){
    $("#question1").show();
    $("#question2").hide();
    $("#question3").hide();
    $("#submit").hide();
}
  });
  $("#pre").click(function(){
    i--;
    if(i == 1){
    $("#question1").hide();
    $("#question2").show();
    $("#question3").hide();
    $("#next").show();
    $("#submit").hide();
}else if(i == 2){
    $("#question2").hide();
    $("#question3").show();
    $("#next").hide();
    $("#submit").show();
}else if(i == 0){
    $("#question1").show();
    $("#question2").hide();
    $("#question3").hide();
    $("#next").show();
    $("#submit").hide();
    $("#pre").hide();
}
  });


});
</script>
</html>
