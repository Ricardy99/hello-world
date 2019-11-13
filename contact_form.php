<?php include 'validation.php';?>
<!DOCTYPE HTML>
<html>
<head>
	<title>PHP Contact Form with Validation</title>
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<div class="container">
		<div class="main">
		<h2>PHP Contact Form with Validation</h2>
	<form name="registrationform" action="contact_form.php" method="post">
    First Name:<input type="text" name="firstname">
    Last Name:<input type="text" name="lastname">
    Email:<input type="text" name="email">
    Username:<input type="text" name="username">
    Password:<input type="password" name="password">
    Confirm Password:<input type="password" name="passwordconf">
    Security Question:<input type="text" name="securityq">
    Answer:<input type="text" name="qanswer">
    <input type="submit" name="submit" value="Register">
	</form>			
		</div>
	</div>
</body>
</html>
