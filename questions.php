<?php
$con= mysqli_connect('localhost','root','') or die(mysql_error()) ;
mysqli_select_db($con,'demo1') or die("cannot select DB");
if(!$con)
{
	echo'connection error:'.mysqli_connect_error() ;
}
session_start() ;
$em=$_SESSION['sess_user'];
$_SESSION['message']= '' ;
$mysqli = new mysqli('localhost','root','','demo1') ;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $question=mysqli_real_escape_string($con,$_POST['question']) ;
	$_SESSION['question']=$question ;
	$x=rand() ;
    $sql="Insert into ques (question_id,questions,email) values('$x','$question','$em')" ;
    $x=$x+1 ;
    if(mysqli_query($con,$sql))
    {
		echo 'successfully submitted : let\'s wait for the answers !' ;
		header('Location:questions.php') ;

    }
    else
    {
        echo 'error:'.mysqli_error($con) ;
    }
}
?>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet">
<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> QUEStions </title>
</head>
<style @import url('https://fonts.googleapis.com/css?family=Audiowide&display=swap');>

	.animation-area
	{
  		background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB, #E74C3C, #8E44AD);
  		background-size: 600%;
		background-repeat:no-repeat ;
  		position: relative;
  		animation: change 13s ease-in-out infinite;

	}

	@keyframes change
	{
  		0%{
    			background-position: 0% 50%;
  		}
  		50%{
    			background-position: 100% 50%;
  		}
  		100%{
    			background-position: 0% 50%;
  		}
	}

	#navbar
	{
  		overflow: hidden;
  		background-color: #333;
	}

	#navbar a
	{
  		float: left;
  		display: block;
  		color: #f2f2f2;
  		text-align: center;
  		padding: 14px 40px;
  		text-decoration: none;
  		font-size: 17px;
	}

	#navbar a:hover
	{
  		background-color: #ddd;
  		color: black;
	}
	#navbar a.active
	{
 		 background-color:  #0047b3;
  		color: white;
	}
	.sticky
	{
  		position: fixed;
  		top: 0;
  		width: 100%;
	}

	.sticky + .content
	{
  		padding-top: 60px;
	}

	#navbar .sign
	{
		float :right ;
	}

	.fontt
	{
  		font-family: 'Audiowide', cursive;
	}

	.pos
	{
		position:absolute ;
		top:1px ;
		left:170px ;
	}

	.boxx
	{
		margin-top:50px ;
		margin-bottom:100px ;
		margin-left:300px ;
		background:rgba(255, 255, 179,0.4) ;
		background-image:url(".jpg") ;
		background-position: center;
		padding:10px ;
		text-align:center ;
		width: 60% ;
		border-radius:10% ;
    z-index: -20;
	}

	#put
	{
  		background-color:#0047b3;;
  		color:black;
		font-size:20 ;
  		padding: 20px;
  		border-radius: 25px;
  		cursor: pointer;
  		width:30%;
  		opacity: 0.9;
	}

	#put:hover
	{
			outline: none;
  		opacity: 1;
		outline: none;
	}
	button:active
	{
		outline: none;
  		background-color: #001a66;
  		box-shadow: 0 5px #666;
  		transform: translateY(4px);
	}

	.me
	{
  		padding: 10px;
		  font-size: 20px;
  		width: 20px;
  		text-align: center;
  		text-decoration: none;
  		margin: 5px 2px;
	}
	.me:hover
	{
    		opacity: 0.7;
	}
 	.right
	{
  		float: right;
	}

  .card {                                                                     /* from here */
  	position: absolute;
    display: none;
    width: 30%;
    height: 33%;
    left: 50;
    right: 0;
  	background-color: #d8f0e5;
    z-index: 1;
    text-align: center;
    }
  .q {
  	text-align: center;
  width: 70%;
  height: 150px;
  margin: auto;
  font-family: coda;
  }
  .q0 {
  	border-radius: 50%;
  width: 100px;
  height: 100px;
  display: inline-block;
  float: left;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: #FF6347;
  }
  .q0:hover{
  	background-color:#00FFFF;
  }
  .q00 {
  	border-radius: 50%;
  width: 100px;
  height: 100px;
  display: inline-block;
  float: right;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: #FF6347;
  }
  .q00:hover{
  	background-color:#00FFFF;
  }
  .buttonn {
  	background-color: green;
  	border: none;
  	color: white;
  	padding: 15px 32px;
  	text-align: center;
  	text-decoration: none;
  	display: inline-block;
  	font-size: 16px;
  	margin: 1px 1px;
  	cursor: pointer;
  	-webkit-transition-duration: 0.4s;
  	transition-duration: 0.4s;
    }
    .buttonn:hover {
  	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    }

	::placeholder
	{
		font-style:italic;
  		color: #4d94ff;
  		font-size: 25px;

	}
	textarea
	{
		background:rgba(255, 255, 179,0.4) ;
		outline:none ;
  		width: 80%;
  		padding: 12px 20px;
  		margin: 8px 0;
  		display: inline-block;
  		border-radius: 40px;
		font-size: 19px;
	}

  #navbar button.sign                                        /* changes mainly in name and colour */
	{
		float: right;
		display: block;
		background-color:#333;
		border:none;
  		color:#f2f2f2;
  		text-align: center;
  		padding: 14px 40px;
  		text-decoration: none;
  		font-size: 17px;
	}
	#navbar button.sign:hover
	{
  		background-color: #ddd;
  		color: black;
	}

</style>
<body class="animation-area">
<a style="text-decoration:none;"href="home.php"><h1 class="fontt">XCH<span style="color:red;">ange</span></h1></a><img src="bmscex.png" alt="logo" style="width:40px;height:40px;" class="pos" >
<div id="navbar">
   <a  href="home.php"><i class="fa fa-home"></i>&nbsp Home</a>
   <a class="active" href="questions.php"><i class="fa fa-question"></i>ASK</a>
   <a href="allques.php">Questions &nbsp<i class="fa fa-question"></i></a>
   <a href="allans.php">Answers &nbsp<i class="fa fa-server"></i></a>
   <a  href="about.html"><i class="fa fa-address-book"></i>&nbsp About Us</a>
   <button class="sign" onclick="on()">Profile</button>
 </div>
     <div class="card" style="float: right" id="prof" onclick="off()">                                     <!--from here-->
     <br>
     <div class="n">
     	<span>Username: </span><?php
      $email = $_SESSION['sess_user'];
      $query=mysqli_query($con,"SELECT * FROM userprofile WHERE email='".$email."'");
      $numrows=mysqli_num_rows($query);
       while($row=mysqli_fetch_assoc($query))
       {
       $dbusername=$row['username'];
       }
       echo $dbusername;
       ?><br>
     	<span>Email: </span><?php
      	echo $email;
       	?>
       </div><br><br>
       <div class="q">
     <a href="userquestion.php">
     <div class="q0">
     <p align="center" style="color: purple;" class="w1">
     <br>Questions<i class="fa fa-question"></i>
     </p>
     </div>
     </a>
     <a href="useranswer.php">
     <div class="q00">
     <p align="center" style="color:purple;" class="w2">
     <br>Answers<i class="fa fa-server"></i>
     </p>
     </div>
     </a>
     </div>
     <div>
     	<a href="logout.php" class="buttonn">Logout</a>
     </div>
     </div>

<div class="boxx">
<h1 style="color:#000080 ;font-size:100px;margin-bottom:10px ;margin-top:10px ;display:inline ;">  A  </h1>
<h1 style="color:#cc0000 ;font-size:100px;margin-bottom:10px ;margin-top:10px ;display:inline ;">  S  </h1>
<h1 style="color:#cc0000 ;font-size:100px;margin-bottom:10px ;margin-top:10px ;display:inline ;">  K  </h1>
<br>
<form  action="questions.php" method="post" enctype="multipart/form-data" autocomplete="off" >
 <textarea id="place" placeholder="Write your doubt here" style="padding:100px ;" name="question" required ></textarea>   <br><br>
 <input id="put" type="submit"  value="POST" name="post" />
</form>
</div>

<br><br>
<footer>
  <a href="#" class="fa fa-facebook me"></a>
  <a href="#" class="fa fa-linkedin me"></a>
  <a href="#" class="fa fa-instagram me"></a>
  <a href="#" class="fa fa-reddit me"></a>
  <a href="#" class="fa fa-youtube me"></a>
  <span style="color:white;"class="right">&copy; Copyright 2019 XCHange Corporation&#174;<br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Partnered with Stack Overflow&trade;</span>

</footer>

<script>
var navbar = document.getElementById("navbar") ;
var sticky = navbar.offsetTop ;

window.onscroll =  function(){myFunction()} ;

function myFunction()
{
  	if (window.pageYOffset >= sticky)
	{
    		navbar.classList.add("sticky") ;
  	}
	else
	{
    		navbar.classList.remove("sticky");
  	}
}
function required()
{
	var ques = document.getElementById("place").value ;
	if(ques.length==0)
	{
		alert("first write your doubt") ;
		return false ;
	}
	alert("Successfully submitted") ;
	return true ;
}

document.getElementById("prof").style.display="none";
function on() {
  document.getElementById("prof").style.display="block";
}
function off() {
	document.getElementById("prof").style.display="none";
}


</script>
</body>
</style>
</html>
