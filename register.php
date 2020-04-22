<!--Sign up page for students -->
<!doctype html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign up</title>
<link rel="icon" type="image/png" href="D:\project lab\images\login.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<script type="text/javascript" src="sign_up.js">
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
      <h1 text-align="center" class="nfont">SIGN UP</h1>
      <form name="signup" action="" onSubmit="return validation_for_signup()" method="post" class="register-form">
        <p>First Name:<input type="text" name="firstname"  value="" size="50" required /><span id="errorfn" style="color: Red; display: none">* Invalid FirstName</span></p>
      <p>Last Name:<input type="text" name="lastname"  value="" size="50" required /><span id="errorln" style="color: Red; display: none">* Invalid LasttName</span></p>
      <p>Phone:<input type="text" onkeypress="return IsNumeric(event);" name="phone"  value="" size="50" required /><span id="error" style="color: Red; display: none">* Input digits (0 - 9)</span></p>
            <p>Username:
            <input type="text" name="username" value="" size="50" required /><span id="errorun" style="color: Red; display: none">* Invalid Username</span></p>
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

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $phone=$_POST['phone'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $con=mysqli_connect('localhost','root','') or die(mysql_error());
    mysqli_select_db($con,'demo1') or die("cannot select DB");

    $query=mysqli_query($con,"SELECT * FROM studentdem WHERE email='".$email."'");
    $numrows=mysqli_num_rows($query);
    if($numrows==0)
    {
    $sql="INSERT INTO studentdem(firstname,lastname,phone,username,email,password) VALUES('$firstname','$lastname','$phone','$username','$email','$password')";

    $result=mysqli_query($con,$sql);
        if($result){
  //  echo "Account Successfully Created";
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
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
  $(window).load(function() {
    $('#loader').hide();
  });
</script> -->
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
