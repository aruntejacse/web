<!doctype html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign up for Teachers</title>
<link rel="icon" type="image/png" href="D:\project lab\images\login.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<script type="text/javascript" src="teachsign_up.js">
</script>
<script type="text/javascript">
window.history.forward();

</script>
<link rel="icon" type="image/png" href="D:\project lab\images\login.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="signup_css.php">

</head>
<body class="animation-area">
<!--  <div id="loader">
  <div id="shadow"></div>
  <div id="box"></div>
</div>-->
  <a style="text-decoration:none;"href=""><h1 class="font">XCH<span style="color:red;">ange</span></h1></a><img src="$image_url" alt="logo" style="width:40px;height:40px;" class="pos" />
  <div class="login-page animation-area">
    <div class="text-why">
      <h2>&nbsp &nbsp &nbsp &nbspJoin the XCHange community</h2><br/>
        <ul style="list-style-type:none;" class="bold">
          <li><i class="fa fa-exclamation-circle" style="font-size:28px;color:#000080"></i>&nbsp Get unstuck — ask a question</li><br/>
          <li><i class="fa fa-cubes" style="font-size:28px;color:#000080"></i>&nbsp Curious? Go through random answers..</li><br/>
          <li><i class="fa fa-comments-o" style="font-size:28px;color:#000080"></i>&nbsp Meet alike minds</li>
        </ul>
    </div>
    <div class="form">
      <h1 style="text-align: center" class="nfont">SIGN UP FOR TEACHERS</h1>
      <form name="signup" action="" onSubmit="return validation_for_signup()" method="post" class="register-form">
        <p>Name:<input type="text" name="name"  value="" size="50" required /><span id="errorfn" style="color: Red; display: none">* Invalid Name</span></p>
      <p>Select your Branch:&nbsp &nbsp<select id="branch" name="branch">
    <option value="CSE">CSE</option>
    <option value="ISE">ISE</option>
    <option value="ECE">ECE</option>
    <option value="MECH">MECH</option>
  </select></p>
  <p>Interests:<input type="text" name="interests"  value="" size="50" required /></p>
              <p>Email:<input type="text" name="email"  value="" size="50" required /><span id="errore" style="color: Red; display: none">* Invalid Email(format:xyz@bmsce.ac.in)</span></p>
              <p>Password:
                <input type="password" name="password"  value="" size="50" required/></p>
              <p>Renter Password:<input type="password" name="passconf"  value="" size="50" required /></p>

            <p><input type="submit" name="submit" value="submit" class="button" /></p>
            <p class="message">Already registered? <a href="login.php">Log In</a></p>

        </form>

      </div>

</div>



<?php
if(isset($_POST["submit"])){

    $name=$_POST['name'];
    $branch=$_POST['branch'];
    $interests=$_POST['interests'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $con=mysqli_connect('localhost','root','') or die(mysql_error());
    mysqli_select_db($con,'demo1') or die("cannot select DB");

    $query=mysqli_query($con,"SELECT * FROM teacherdem WHERE email='".$email."'");
    $numrows=mysqli_num_rows($query);
    if($numrows==0)
    {
    $sql="INSERT INTO teacherdem(name,branch,interests,email,password) VALUES('$name','$branch','$interests','$email','$password')";

    $result=mysqli_query($con,$sql);
        if($result){

  header("Location: login.php");
  exit;
    } else {
    echo "Failure!";
    }

    } else {
    echo "That email already exists! Please try again with another.";
    }

}
?>
</body>

<br><br>
<footer>
  <a href="#" class="fa fa-facebook me"></a>
  <a href="#" class="fa fa-linkedin me"></a>
  <a href="#" class="fa fa-instagram me"></a>
  <a href="#" class="fa fa-reddit me"></a>
  <a href="#" class="fa fa-youtube me"></a>
  <span style="color:white;"class="right">&copy; Copyright 2019 XCHange Corporation&#174;<br>
Partnered with Stack Overflow&trade;</span>

</footer>
</html>
