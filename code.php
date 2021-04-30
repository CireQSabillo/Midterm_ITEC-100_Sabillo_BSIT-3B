<?php 
 include('functions.php'); 

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Authentication Code</title>
	<link rel="stylesheet" type="text/css" href="css/codestyle.css">
</head>
<body>

	<div class="codebox">

		<img src= "pics/avatar.png" class="avatar">

		<h1>AUTHENTICATION CODE</h1>

			<form method="post" action="entercode.php">

					<input type="text" name="code" placeholder="Authentication Code" id="codehere" disabled>

					<input type="submit" name="verifycode" value="Verify the Code" class="verifycode"><br>
			</form>

	</div>

</body>
</html>



<?php

$x="";


$query = "SELECT Code FROM user_code ";
$results = mysqli_query($db, $query);
while($row = mysqli_fetch_assoc($results)){
	$x = $row['Code'];
}


echo "<script type='text/javascript'>document.getElementById('codehere').setAttribute('value','".$x."'); </script>";


?>

