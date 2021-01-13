<?php

require_once("Database.php");

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Customer Registration </title>
<link href="Registration .css" rel="stylesheet" type="text/css" media="all">
    </head>



<body background="eCommerceAssets/images/Wall.jpg">

	
	<div class="hero">
    <div class="form_box">
   <div class="button_box">
        <div id="btn"></div>
      <button type="button" class="toggle-btn" onclick="login()">Login</button>
    <button type="button" class="toggle-btn" onclick="Register()">Register</button>

        </div>

        <form action="Login_User.php" method="post" id="login" class="user_input">

	

        <input type="text" name="Username" class="input_field"
			   id="Username"
			   placeholder="User_ID"required>

           <input type="password" name="Password"
				  id="Password" class="input_field" placeholder="Enter Password" required>
        <input type="checkbox" class="check">

		
      <span>
<a href="Password_Recovery.php">
Forgort Password?</a>
      </span>

            <button type="submit" class="sumbit-btn" name="login_submit">Login</button>


        </form>
  	<form action="Registration_2.php"  method="post" id="Register" class="user_input">

		<input type="email" name="Email"
			   id="Email"
               class="input_field" placeholder="Email ID" required>
               

        <input type="text" name="Username"
			   id="User_ID"
			   class="input_field" placeholder="User_ID  " required>
		
		<input type="text" name="fname"
			   class="input_field" placeholder="FirstName" required>

				<input type="text" name="lname"
			   class="input_field" placeholder="LastName " required>

           <input type="password" name="Password"
				  id="Password"
				  class="input_field" placeholder="Enter Password" required>


		<input type="password" name="pass_rep" class="input_field" placeholder="Confirm Password" required>


		<button type="submit" class="sumbit-btn"name="signup_submit">Register</button>
		
		

        </form>
        </div>

    </div>
<script>

var i = document.getElementById("login");
 var y = document.getElementById("Register");
    var t= document.getElementById("btn");


    function Register(){
        i.style.left = "-400px";
        y.style.left ="50px";
        t.style.left="110px";

    }

      function login(){
        i.style.left = "50px";
        y.style.left ="450px";
        t.style.left="0px";

    }

    </script>


</body>
</html>
