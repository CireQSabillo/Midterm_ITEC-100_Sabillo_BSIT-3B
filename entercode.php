<?php include('functions.php') ;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Verification Code</title>
	<link rel="stylesheet" type="text/css" href="css/entercodestyle.css">
</head>
<body>

	<div class="entercodebox">

		<img src= "pics/avatar.png" class="avatar">

		<h1>ENTER THE AUTHENTICATION CODE</h1>

			<form method="post" action="">

					<input type="text" name="code" placeholder="Enter Authentication Code Here" required oninvalid = "this.setCustomValidity('Enter Authentication Code Here')"
 						 oninput="this.setCustomValidity('')"/>

					<input type="submit" name="submitcode" value="Submit the Code" class="submitcode" >
					 <br>


			</form>

	</div>

</body>
</html>

