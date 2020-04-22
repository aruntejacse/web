<?php
  header('Content-type: text/css; charset: UTF-8')
?>
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:300');
@import url('https://fonts.googleapis.com/css?family=Audiowide&display=swap');
@import url('https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed&display=swap');
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');


.login-page {
  width: auto;

  padding: 8% 0 0;
  margin: auto;
}
.footer-align{
  overflow: auto;
  position:absolute;
  bottom:2%;
}
.nfont{
  font-family: 'Fira Sans Extra Condensed', sans-serif;
}
.right {
  float :right;
  position: absolute;
  bottom:2%;
  left:80%;
}
.me{
  padding: 10px;
  font-size: 20px;
  width: 20px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}
.me:hover {
    opacity: 0.7;
}
.bold{
  font-weight: bold;
}

.pos{
  position:absolute;
  top:1px;
  left:170px;
}

.right{
  float: right;
}
.form {
  position: absolute;
  top: 90px;
  left: 850px;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.text-why{
  position:absolute;
  top: 150px;
  left: 250px;
  font-size: 20px;
  color: #330000;
}
.sign_border_sign{
  border: 1.5px solid white;
}
.font{
  font-family: 'Audiowide', cursive;
}

.button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background:red;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.button:hover,.button:active,.button:focus {
  background: #FF4500;
}
.message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}

body {
  background: #76b852s; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.animation-area{
  background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB, #E74C3C, #8E44AD);
  background-size: 400%;
  width: 100%;
  height: 100vh;
  position: relative;
  animation: change 13s ease-in-out infinite;
}

@keyframes change{
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
/*
.box-area{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.box-area li{
  position: absolute;
  display: block;
  list-style: none;
  width: 60px;
  height: 60px;
  background: rgba(255,255,255,0.2);
  animation: myanimate 20s linear infinite;
  bottom: -150px;
}

.box-area li:nth-child(1){
  left: 86%;
  width: 80px;
  height: 80px;
  animation-delay: 0s;
}

.box-area li:nth-child(2){
  left: 12%;
  width: 30px;
  height: 30px;
  animation-delay: 1.5s;
  animation-duration: 10s;
}

.box-area li:nth-child(3){
  left: 70%;
  width: 100px;
  height: 100px;
  animation-delay: 5.5s;
}

.box-area li:nth-child(4){
  left: 70%;
  width: 150px;
  height: 150px;
  animation-delay: 0s;
  animation-duration: 15s;
}

.box-area li:nth-child(5){
  left: 65%;
  width: 40px;
  height: 40px;
  animation-delay: 0s;
}

.box-area li:nth-child(6){
  left: 15%;
  width: 110px;
  height: 110px;
  animation-delay: 3.5s;
}

@keyframes myanimate{
  0%{
    transform: translateY(0) rotate(0deg);
    opacity: 1;
  }
  100%{
    transform: translateY(-800px) rotate(360deg);
    opacity: 0;
  }
}
*/
/*#loader {
  /* Uncomment this to make it run! */
/*
     animation: loader 5s linear infinite;


  position: absolute;
  top: calc(50% - 20px);
  left: calc(50% - 20px);
}
@keyframes loader {
  0% { left: -100px }
  100% { left: 110%; }
}
#box {
  width: 50px;
  height: 50px;
  background: #fff;
  animation: animate .5s linear infinite;
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 3px;
}
@keyframes animate {
  17% { border-bottom-right-radius: 3px; }
  25% { transform: translateY(9px) rotate(22.5deg); }
  50% {
    transform: translateY(18px) scale(1,.9) rotate(45deg) ;
    border-bottom-right-radius: 40px;
  }
  75% { transform: translateY(9px) rotate(67.5deg); }
  100% { transform: translateY(0) rotate(90deg); }
}
#shadow {
  width: 50px;
  height: 5px;
  background: #000;
  opacity: 0.1;
  position: absolute;
  top: 59px;
  left: 0;
  border-radius: 50%;
  animation: shadow .5s linear infinite;
}
@keyframes shadow {
  50% {
    transform: scale(1.2,1);
  }
}*/


h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}


.class-a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

.button2 {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

.button2:active {
	transform: scale(0.95);
}

.button2:focus {
	outline: none;
}

.button2.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
  top: 10%;
  left: 20%;
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25),
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.classh1 {
  	font-weight: bold;
  	margin: 0;
}
.classp {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}

	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #FF416C;
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
	background: linear-gradient(to right, #FF4B2B, #FF416C);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
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

  input:focus:invalid {
  /* insert your own styles for invalid form input */
  box-shadow: 0px 0px 4px 2px red;
}

</style>
