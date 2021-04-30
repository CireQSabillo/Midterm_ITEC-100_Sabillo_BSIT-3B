<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>

	<title>CREATE AN ACCOUNT</title>
	<link rel="stylesheet" type="text/css" href="css/registerstyle.css">

</head>
<body>

	<div class="createaccbox">
		<img src= "pics/avatar.png" class="avatar">
			<br><h1>CREATE ACCOUNT</h1>

				<form method="post" action="">

					<p>Username</p>
						<input type="text" name="username" placeholder="Enter Username" required oninvalid = "this.setCustomValidity('Enter Username Here')"
 						 oninput="this.setCustomValidity('')"/>

					<p>Email Address</p>
						<input type="email" name="email" placeholder="Enter Email" required oninvalid = "this.setCustomValidity('Enter an Email Address Here & Please include an @ in the email address.')"
 						 oninput="this.setCustomValidity('')"/>

					<p>Create Password</p>
						<input type="password" name="password" placeholder="Create Password" required oninvalid = "this.setCustomValidity('Enter Your Password Here')"
 						 oninput="this.setCustomValidity('')"/>

					<p>Confirm Password</p>
						<input type="password" name="confirmpass" placeholder="Confirm Password" required oninvalid = "this.setCustomValidity('Confirm Your Password Here')"
 						 oninput="this.setCustomValidity('')"/>

					<input type="submit" name="submitbutton" value="Submit" class=""><br>

					<a href="home.php"><center>Sign In</center> </a>
				</form>

				
	</div>

</body>
</html>



