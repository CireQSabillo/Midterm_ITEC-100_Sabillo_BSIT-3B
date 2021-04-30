
<?php include('functions.php'); 


?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/homestyle.css">
</head>
<body>








	<div class="loginbox">

		<img src= "pics/avatar.png" class="avatar">

			<h1>LOG IN HERE</h1>

				<form method="POST" action="">

					<p>Username</p>
						<input type="text" name="username" placeholder="Enter Username" required oninvalid = "this.setCustomValidity('Enter Username Here')"
 						 oninput="this.setCustomValidity('')"/>

					<p>Password</p>
						<input type="password" name="password" placeholder="Enter Password" required oninvalid = "this.setCustomValidity('Enter Password Here')"
 						 oninput="this.setCustomValidity('')"/>

					<input type="submit" name="submitbuttonlogin" value="Submit" class="submitbuttonlogin"><br>

					<a href="createacc.php"><center>Create an Account</center> </a>				

				</form>
				
			     

	</div>

	
</body>
</html>












