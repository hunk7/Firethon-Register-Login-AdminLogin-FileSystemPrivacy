<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Register</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/stylee.css">
</head>
<style type="text/css">
  body {background-color: coral;}
</style>
<body>

     <div class="container">
            <div class="navigation">
                <ol>
                    <li><a href="#"  data-ref="name">Name</a></li>
                    <li><a href="#"  data-ref="uname">Username</a></li>
                    <li><a href="#"  data-ref="email">Email</a></li>
                    <li><a href="#"   data-ref="viewpswd">Password</a></li>
                    <li><a href="#"  data-ref="phone">Phone</a></li>
                </ol>
            </div>
            <form id="sign-form" class="sign-form" action="signup1.php" method="POST">
                <ol class="questions">
                    <li>
                        <span><label for="name">Hi, What is your Name?</label></span>
						<input class="active" id="name" name="name" type="text" placeholder="Enter your full name" autofocus/>
                    </li>
                    <li>
				        <span><label for="uname">tell us your User Name</label></span>
                        <input id="uname" name="uid" type="text" placeholder="Enter a username" autofocus/>
					         </li>
                    <li>
				        <span><label for="email">Enter you email</label></span>
                        <input id="email" name="email" type="text" placeholder="Email"  autofocus/>
					         </li>
                    <li>
                        <span><label for="password">Choose a password</label></span>
                        <input id="viewpswd" name="pwd" type="text" placeholder="Password | 6 Characters"/>
                        <input id="password" name="pwd" type="password" placeholder="make sure you dont forget" autofocus/>
                        <span id="show-pwd" class="view"></span>
					         </li>
                    <li>
                        <span><label for="phone">Contact Number | 10 Digits</label></span>
                            <select name="countryCode" class="country"  >
                                <option data-countryCode="GB" value="91">(+91) INDIA </option>
                                </optgroup>
                            </select>
                            <input id="phone" name="num" type="text" autofocus/>
                    </li>
                    <li><p style="margin-top: 45px; font-size: 32px; float:right;">
                      <button type="submit" name="submit" class="btn btn-warning">Sign Up</button>  </li>
                </ol>
                <div id="next-page" alt="Kiwi standing on oval"></div>
                <div class="error-message"></div>  
            </form>
        <h1 id="wf" style="opacity:0;width: 600px; margin-top:1.1em;display:none; margin-bottom:1em">Thank you</h1>
  <!-- javaScript -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script  src="js/index.js"></script>

</body>
</html>
