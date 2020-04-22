<!doctype html>
<html>
<title>Login</title>
<head>
  <link rel="stylesheet" type="text/css" href="login_css.php">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript">
  window.history.forward();

  </script>
</head>
<body class="animation-area">
  <a style="text-decoration:none;"href=""><h1 class="font">XCH<span style="color:red;">ange</span></h1></a><img src="$image_url" alt="logo" style="width:40px;height:40px;" class="pos" />
  <div class="container" id="container">
  	<div class="form-container sign-up-container">
  		<form action="" method="post">
  			<h1>Sign in for Teacher</h1>
  			<input type="email" name="email" placeholder="Email" />
  			<input type="password" name="password" placeholder="Password" />
        <input type="submit" name="submitteach" value="submit" class="button2" />
        <p class="message">Not yet registered? <a href="teachregister.php">Register here</a></p>
  		<!--	<button>Sign Up</button>-->
  		</form>
  	</div>
  	<div class="form-container sign-in-container">
  		<form action="" method="post">
  			<h1>Sign in for Student</h1>
  			<input type="email" name="email" placeholder="Email" />
  			<input type="password" name="password" placeholder="Password" />
  			<a class="class-a"href="#">Forgot your password?</a>
        <input type="submit" name="submitstud" value="submit" class="button2" />
        <p class="message">Not yet registered? <a href="register.php">Register here</a></p>
  		</form>
  	</div>
  	<div class="overlay-container">
  		<div class="overlay">
  			<div class="overlay-panel overlay-left">
  				<h1 class="classh1">Hey Student!</h1>
  				<p class="classp">Students are left..</p>
  				<button class="ghost button2" id="signIn">Student Sign In</button>
  			</div>
  			<div class="overlay-panel overlay-right">
  				<h1 class="classh1">Welcome Teacher!</h1>
  				<p class="classp">Login and Guide us...</p>
  				<button class="ghost button2" id="signUp">Teacher Sign In</button>
  			</div>
  		</div>
  	</div>
  </div>
  </body>
  <script type="text/javascript" src="slidinghtml.js">
  </script>





    <!-- <center><h1>CREATE REGISTRATION AND LOGIN FORM USING PHP AND MYSQL</h1></center>
   <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>
<h3>Login Form</h3>
<form action="" method="POST">
Username: <input type="text" name="user"><br />
Password: <input type="password" name="pass"><br />
<input type="submit" value="Login" name="submit" />
</form>-->
<?php
//Student login
if(isset($_POST["submitstud"])){

if(!empty($_POST['email']) && !empty($_POST['password'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];

    $con=mysqli_connect('localhost','root','') or die(mysql_error());
    mysqli_select_db($con,'demo1') or die("cannot select DB");

    $query=mysqli_query($con,"SELECT * FROM studentdem WHERE email='".$email."' AND password='".$password."'");
    $numrows=mysqli_num_rows($query);
    if($numrows!=0)
    {
    while($row=mysqli_fetch_assoc($query))
    {
    $dbusername=$row['email'];
    $dbpassword=$row['password'];
    }

    if($email == $dbusername && $password == $dbpassword)
    {
    session_start();
    $_SESSION['sess_user']=$email;

    /* Redirect browser */
    header("Location: home.php");
    }
    } else {
    echo "Invalid username or password!";
    }

} else {
    echo "All fields are required!";
}
}
//Teacher login
if(isset($_POST["submitteach"])){

if(!empty($_POST['email']) && !empty($_POST['password'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];

    $con=mysqli_connect('localhost','root','') or die(mysql_error());
    mysqli_select_db($con,'demo1') or die("cannot select DB");

    $query=mysqli_query($con,"SELECT * FROM teacherdem WHERE email='".$email."' AND password='".$password."'");
    $numrows=mysqli_num_rows($query);
    if($numrows!=0)
    {
    while($row=mysqli_fetch_assoc($query))
    {
    $dbusername=$row['email'];
    $dbpassword=$row['password'];
    }

    if($email == $dbusername && $password == $dbpassword)
    {
    session_start();
    $_SESSION['sess_user']=$email;

    /* Redirect browser */
    header("Location: member.php");
    }
    } else {
    echo "Invalid username or password!";
    }

} else {
    echo "All fields are required!";
}
}
?>
</body>
</html>
