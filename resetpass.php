
<?php include('functions.php'); 


?>

<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	<link rel="stylesheet" type="text/css" href="css/resetpassstyle.css">
</head>
<body>

	<div class="loginbox">

		<img src= "pics/avatar.png" class="avatar">

			<h1>Reset Password</h1>

				<form method="POST" action="">

					<p>Username</p>
						<input type="text" name="username" id="username" placeholder="Enter Username" required oninvalid = "this.setCustomValidity('Enter Your Old Password Here')"
 						 oninput="this.setCustomValidity('')"/>

					<p>Old Password</p>
						<input type="text" name="oldpassword" id="oldpassword" placeholder="Enter Old Password" required oninvalid = "this.setCustomValidity('Enter Your Old Password Here')"
 						 oninput="this.setCustomValidity('')"/>

					<p>New Password</p>
						<input type="text" name="newpassword" id="newpassword" placeholder="Enter New Password" required oninvalid = "this.setCustomValidity('Enter Your New Password Here')"
 						 oninput="this.setCustomValidity('')"/>
                    
                    <p>Confirm Password</p>
						<input type="password" name="confirmpassword" id="confirmpassword" placeholder="Enter Confirm Password" required oninvalid = "this.setCustomValidity('Enter Your Confirm Password Here')"
 						 oninput="this.setCustomValidity('')"/>

					<input type="submit" name="submitnewpass" value="Submit" class="submitnewpass" onclick="resetPassword()"><br>

					<a href="resetpass.php"><center>Return</center> </a>

					

				</form>
				
			     

	</div>
	
</body>
</html>












