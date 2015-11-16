<!DOCTYPE html>
<?php
echo "aravindh kumar";
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Kalyaan Sarees</title>
        
        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>
    	<div class="logo">
    		<img src="assets/img/Kalyan Sarees -logo.jpg">
    	</div>
		<div id="formContainer">
			<form id="login" method="post" action="./">
				<a href="" id="flipToRecover" class="flipLink">Forgot?</a>
				<input type="text" name="loginEmail" id="loginEmail" placeholder="Username" required="" value="" />
				<input type="password" name="loginPass" id="loginPass" placeholder="******" required=""  value="" />
				<input type="submit" name="submit" value="Login" />
			</form>
			<form id="recover" method="post" action="./">
				<a href="" id="flipToLogin" class="flipLink">Forgot?</a>
				<input type="text" name="recoverEmail" id="recoverEmail" placeholder="Email" value="" />
				<input type="submit" name="submit" value="Recover" />
			</form>
		</div>

       
        
        <!-- JavaScript includes -->
		<script src="assets/js/jquery-1.7.1.min.js"></script>
		<script src="assets/js/script.js"></script>

    </body>
</html>

