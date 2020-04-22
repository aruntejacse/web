<?php
  header('Content-type: text/css; charset: UTF-8')
?>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);
@import url('https://fonts.googleapis.com/css?family=Audiowide&display=swap');
@import url('https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed&display=swap');

.login-page {
  width: auto;

  padding: 8% 0 0;
  margin: auto;
}
.nfont{
  font-family: 'Fira Sans Extra Condensed', sans-serif;
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
