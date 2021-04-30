<?php include('functions.php') ;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile Page</title>
	<link rel="stylesheet" type="text/css" href="css/profilestyle2.css">

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>





<style>
    a{
        color:white;
    }
    a:hover{
        color:red;
    }
</style>












<table class="tablecategory">

<tr>
    <th><h2><u>CATEGORY</u></h2></th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "ecommerce"); //Database name is ecommerce
    if ($conn-> connect_error){
        die("Connection failed:". $conn-> connect_error);
    }

$sql = "SELECT cat_id, cat_title from category"; //Table Category Name
$result = $conn-> query($sql);

    if ($result-> num_rows > 0){
        while ($row = $result-> fetch_assoc()){

                $cat_title = $row['cat_title'];
					echo "<tr><td><a href>{$cat_title}</a></td></tr>";
        }
    }
    
    else {
        echo "0 result";
    }

    $conn-> close();
    
?>
</table>















    <table class="tablebrands">

<tr>
    <th><h2><u>BRANDS</u></h2></th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "ecommerce"); //Database name is ecommerce
    if ($conn-> connect_error){
        die("Connection failed:". $conn-> connect_error);
    }

$sql = "SELECT brand_id, brand_title from brands"; //Table Category Name
$result = $conn-> query($sql);

    if ($result-> num_rows > 0){
        while ($row = $result-> fetch_assoc()){

                $brand_title = $row['brand_title'];
					echo "<tr><td><a href>{$brand_title}</a></td></tr>";
        }
    }
    
    else {
        echo "0 result";
    }

    $conn-> close();
    
?>
</table>










<table class="activitylogtable" style="height:84%;">

<tr>
    <th><h2><u>USERNAME</u></h2></th>
    <th><h2><u>ACTIVITY LOG</u></h2></th>
    <th><h2><u>TIME</u></h2></th>
    <th><h2><u>DATE</u></h2></th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "mydatabase"); //Database name 
    if ($conn-> connect_error){
        die("Connection failed:". $conn-> connect_error);
    }

$sql = "SELECT Username, Activity, Time, Date from activity_log"; //Table Category Name
$result = $conn-> query($sql);

    if ($result-> num_rows > 0){
        while ($row = $result-> fetch_assoc()){

                $Username = $row['Username']; 
                $Activity = $row['Activity'];
                $Time = $row['Time'];
                $Date = $row['Date'];
					echo "<tr><td>{$Username}</td><td>{$Activity}</td><td>{$Time}</td><td>{$Date}</td></tr>";
        }
    }
    
    else {
        echo "0 result";
    }

    $conn-> close();
    
?>
</table>









<form method="POST" action="">
	<nav>

		<div class="logo"><img src = "images/cirelogo.png" width="70" height="90"></div>
		
		<ul>
			<li class = "active"><a href="#"><u> Home </u></a></li> &nbsp
			<li><a href="#"><u> Workspace </u></a></li> &nbsp
			<li><a href="#"><u> My Account </u></a></li> &nbsp
			<li><a href="#"><u> Projects </u></a></li> &nbsp
			<li><a href="#"><u> Systems </u></a></li> &nbsp
			<li><a href="#"><u> Activity Log </u></a></li> &nbsp
		</ul>




		<div class="searchbar">
			<input class="searchtxt" type="text" name="" placeholder="Search">
			<a class="searchbtn" href="#">
				<i class="fas fa-search"></i>
			</a>
		</div>
    
<!-- This is a comment -->
       <!-- <div class="samplebg">
			<img src="images/bgnew.png" width="1360px" height="640px" style="border-radius: 10px;">
		</div>
 -->

        <div class="sidebar"></div>

            <div class="buttons" >
                        <button class="logout" name="logoutbutton" onclick="logout()"><b>LOGOUT</b></button>

                        <button class="settings" name="settings" onclick="resetpass()"><b>SETTINGS</b></button>
            </div>
	</nav>

</form>




    <script>
		function logout() {
			alert("LOGGED OUT SUCCESSFULLY!");
		}
	</script>

</body>
</html>