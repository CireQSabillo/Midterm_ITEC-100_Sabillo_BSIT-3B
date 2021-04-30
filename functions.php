
<button style="opacity: 0;" id="noupper" onclick="customAlert('PASSWORD REQUIRES AN UPPERCASE!',function(){
               })"></button>

            <button style="opacity: 0;" id="nolower" onclick="customAlert('PASSWORD REQUIRES A LOWER CASE!',function(){
               })"></button>
               
            <button style="opacity: 0;" id="nonumber" onclick="customAlert('PASSWORD REQUIRES A NUMBERS!',function(){
               })"></button>

            <button style="opacity: 0;" id="nospecial" onclick="customAlert('PASSWORD REQUIRES A SPECIAL CHARACTERS!',function(){
               })"></button>

            <button style="opacity: 0;" id="passwordchanged" onclick="customAlert('PASSWORD CHANGED SUCCESSFULLY.',function(){
               location.href='home.php';
               })"></button>

            <button style="opacity: 0;" id="passwordnotmatched" onclick="customAlert('PASSWORD DOES NOT MATCHED!',function(){
               })"></button>

            <button style="opacity: 0;" id="nocharacters" onclick="customAlert('PASSWORD SHOULD BE 8 CHARACTERS.!',function(){
               })"></button>

  
  <button style="opacity: 0;" id="alertcodesuccess" onclick="customAlert('USER LOGGED IN SUCCESSFULLY!',function(){
                
                 location.href='profile.php';

            })"></button>

            <button style="opacity: 0;" id="alertcodeinvalid" onclick="customAlert('VERIFICATION CODE UNIDENTIFIED!',function(){

                  location.href='home.php';

            })"></button>

            <button style="opacity: 0;" id="alertcodeexpired" onclick="customAlert('CODE HAS BEEN EXPIRED!',function(){

                  location.href='home.php';

            })"></button>

           






  <button style="opacity: 0;" id="registeredsuccessfully" onclick="customAlert('USER REGISTERED SUCCESSFULLY!',function(){
                 location.href='createacc.php';
               })"></button>

            <button style="opacity: 0;" id="registrationfailed" onclick="customAlert('USER REGISTRATION FAILED!',function(){
                 location.href='createacc.php';
               })"></button>

            <button style="opacity: 0;" id="passworddoesnotmatch" onclick="customAlert('PASSWORD DOES NOT MATCH!',function(){
                 location.href='createacc.php';
               })"></button>

            <button style="opacity: 0;" id="invalidregistration" onclick="customAlert('INVALID PASSWORD INPUT, PASSWORD SHOULD BE 8 CHARACTERS.!',function(){
                 location.href='createacc.php';
               })"></button>





  <button style="opacity: 0;" id="alertloggedin" onclick="customAlert(' AUTHENTICATION CODE IS NEEDED FOR USER VERIFICATION!',function(){
                
                 window.open( 'code.php' );

            })"></button>

            <button style="opacity: 0;" id="alertpasswordinvalid" onclick="customAlert('USER PASSWORD IS INVALID!',function(){
                 location.href='home.php';
            })"></button>


            <button style="opacity: 0;" id="alertusernameinvalid" onclick="customAlert('USERNAME IS INVALID!',function(){
                 location.href='home.php';
            })"></button>


            <button style="opacity: 0;" id="alertuserdoesnotexist" onclick="customAlert('USER DOES NOT EXIST!',function(){
                 location.href='home.php';
            })"></button>


<script type="text/javascript">

function customAlert(m,func){
  var d=document, 
      c=d.createElement('div'),
      e=d.createElement('div'), 
      f=d.createElement('div'),
      a=d.createElement('button');
      c.style.cssText = 'background: rgba(41,42,45);color:#9aa0a6;width:400px;height:120px;position:absolute;z-index:999;top:0%;left:35%;font:13px Malgun Gothic;';
      e.style.cssText = 'background:rgba(41,42,45);padding-top:20px;padding-left:20px;color:white;font:14px Malgun Gothic;';
      f.style.cssText = 'text-align:left;padding-left:20px;padding-top:10px;';
      a.style.cssText = 'color:black;background:#799dd7;display:block;margin:0 auto;position:absolute; right:5%;top:60%;height:30px;width:60px;border: 1px;border-radius:5px;';
      a.innerText = 'OKAY';
      a.onclick = function(){
        d.body.removeChild(c);
        func();
      }
      e.innerHTML = '<b><center> WELCOME TO VALORANT! </center></b>';
      f.innerHTML = m;
      c.appendChild(e);
      c.appendChild(f);
      c.appendChild(a);
      d.body.appendChild(c);
      return false;
}

</script>












<?php
        //session_start();

        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "mydatabase";

        $errors = array(); 
        $date1 = "";
        $date2 = "";
        $_SESSION['success'] = "";



        $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("failed to connect!");

        $db = mysqli_connect('localhost', 'root', '', 'mydatabase');






//LOGIN START

	if(isset($_POST['submitbuttonlogin'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $select = "select * from user_database where username = '$username' ";
        $select1 = "select * from user_database  where password = '$password'";
        
        $result = mysqli_query($con, $select);
        $result1 = mysqli_query($con, $select1);

        $num = mysqli_num_rows($result);
        $num1 = mysqli_num_rows($result1);


        $code = rand(100000,999999);
        $_SESSION['code'] = $code;
        $date = date("Y-m-d H:i:s");
        $cenvertedTime = date('Y-m-d H:i:s',strtotime('+6 hour +5 minutes',strtotime($date)));


        date_default_timezone_set('Asia/Taipei');
        $time = date("h:i:s");     
        $currentDate = strtotime($time);
        $expireDate = date('Y-m-d H:i:s', strtotime("+1 day"));
        $futureDate = $currentDate+(10);                
        $formatDate = date("Y-m-d", $futureDate);
        $user_id = $_POST['username'];
        


          if($num == 1){

          		if($num1 == 1){
          			echo "<script type='text/javascript'>document.getElementById('alertloggedin').click(); </script>";


                        $password = md5($password);
                        $query = "SELECT * FROM user_database WHERE username='$username' AND password='$password'";
                        $results = mysqli_query($db, $query);

                        $query = "INSERT INTO user_code (User_ID, Code, Created, Expiration) VALUES('$username', '$code', now(),'$cenvertedTime')";
                        mysqli_query($db, $query);
                          
                        $message = "LOGIN";
                        $query = "INSERT INTO activity_log (Username, Activity, Time, Date) VALUES ('$user_id','$message','$time','$formatDate')";
                        mysqli_query($db, $query);

         	 	}

          		elseif($num1 != 1){
            		echo "<script type='text/javascript'>document.getElementById('alertpasswordinvalid').click(); </script>";
         	 		}
       		 }


       		 elseif($num1 == 1){

          		if($num != 1){
          			echo "<script type='text/javascript'>document.getElementById('alertusernameinvalid').click(); </script>";
          			}
       		 }


        	else{
         			echo "<script type='text/javascript'>document.getElementById('alertuserdoesnotexist').click(); </script>";
       	 	}

	}
  // LOGIN END








// CREATE ACCOUNT START 

if (isset($_POST['submitbutton'])) {

    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['confirmpass'];
    $uppercase = preg_match('@[A-Z]@',$cpass);
    $lowercase = preg_match('@[a-z]@', $cpass);
    $number    = preg_match('@[0-9]@', $cpass);
    $specialChars = preg_match('@[^\w]@', $cpass);


    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($cpass) <= 8) {

        echo "<script type='text/javascript'>document.getElementById('invalidregistration').click(); </script>";

    }

    else{



      if($cpass==$pass){

        $query = "INSERT INTO `user_database`(`username`, `email`, `password`, `confirm_password`) VALUES ('$name', '$email', '$pass', '$cpass')";

        $query_run = mysqli_query($con, $query);


        if ($query_run) {

          echo "<script type='text/javascript'>document.getElementById('registeredsuccessfully').click(); </script>";

            }


        else{

          echo "<script type='text/javascript'>document.getElementById('registrationfailed').click(); </script>";

          }

      }

      else{

        echo "<script type='text/javascript'>document.getElementById('passworddoesnotmatch').click(); </script>";

        }

    }   

}

// CREATE ACCOUNT END









// Submit Code
if (isset($_POST['submitcode'])) { //button
    
        $code = mysqli_real_escape_string($db, $_POST['code']); //input yan sa entercode
       
    if (empty($code)) {
      
    }
    if (count($errors) == 0) {
      
      $query = "SELECT Created, Expiration FROM user_code WHERE Code='$code'"; // Created at Expiration table column sa database
        $results = mysqli_query($db, $query);

      if (mysqli_num_rows($results) == 1) {

        if ($results->num_rows > 0) {
            // output data of each row
            while($row = $results->fetch_assoc()) {

              $created = $row['Created']; // table column name ng created sa database
              $expiration = $row['Expiration']; // table column name ng expiration sa database

              $date = date("Y-m-d H:i:s");
              $cenvertedTime = date('Y-m-d H:i:s',strtotime('+6 hour',strtotime($date))); 


              if($cenvertedTime < $expiration){
                echo "<script type='text/javascript'>document.getElementById('alertcodesuccess').click(); </script>";// Code successfully logged in
  
              }else{
                echo "<script type='text/javascript'>document.getElementById('alertcodeexpired').click(); </script>";// Code has been expired
              }     
            
            }
        } else {
          echo "0 results";
        }
        $db->close();
        
        
      }else {
        echo "<script type='text/javascript'>document.getElementById('alertcodeinvalid').click(); </script>";
      }
    }
    
  }
// SUBMIT CODE




//LOGOUT
 if (isset($_POST['logoutbutton'])) {
   
       date_default_timezone_set('Asia/Taipei');
       $time = date("h:i:s");    
       $currentDate = strtotime($time);
       $futureDate = $currentDate+(10);                
       $formatDate = date("Y-m-d", $futureDate);
       $user_id = $_POST['username']??"ADMIN2";
       $message2 = "LOGOUT";

          $query = "INSERT INTO activity_log (Username,`Activity`,`Time`,`Date`) VALUES ('$user_id','$message2','$time','$formatDate')";
          $result = mysqli_query($con,$query);

          echo "<script>
					window.location.href='home.php';
					</script>";
}
//LOGOUT



//SETTINGS BUTTON
if (isset($_POST['settings'])) {
   
     echo "<script>
     window.location.href='resetpass.php';
     </script>";
}
//SETTINGS BUTTON





//RESET PASSWORD
if (isset($_POST['submitnewpass'])) {

    date_default_timezone_set('Asia/Taipei');
    $time = date("h:i:s");    
    $currentDate = strtotime($time);
    $futureDate = $currentDate+(10);                
    $formatDate = date("Y-m-d", $futureDate);
    $user_id = $_POST['username'];

    $newpass = $_POST['newpassword'];
    $confirmpass = $_POST['confirmpassword'];

    $uppercase = preg_match('@[A-Z]@',$confirmpass);
    $lowercase = preg_match('@[a-z]@', $confirmpass);
    $number    = preg_match('@[0-9]@', $confirmpass);
    $specialChars = preg_match('@[^\w]@', $confirmpass);


    if(!empty($_POST["newpassword"]) && ($_POST["newpassword"] == $_POST["confirmpassword"])) {

            if (strlen($_POST["newpassword"]) <= '8') {
              echo "<script type='text/javascript'>document.getElementById('nocharacters').click(); </script>";
            }
            elseif(!preg_match("#[0-9]+#",$newpass)) {
              echo "<script type='text/javascript'>document.getElementById('nonumber').click(); </script>";
            }
            elseif(!preg_match("#[A-Z]+#",$newpass)) {
              echo "<script type='text/javascript'>document.getElementById('noupper').click(); </script>";
            }
            elseif(!preg_match("#[a-z]+#",$newpass)) {
              echo "<script type='text/javascript'>document.getElementById('nolower').click(); </script>";
            } 
            elseif(!preg_match("#[^\w]+#",$newpass)) {
              echo "<script type='text/javascript'>document.getElementById('nospecial').click(); </script>";
            }
            else{
              $message = "PASSWORD CHANGED";
                $query = "INSERT INTO activity_log (Username,`Activity`,`Time`,`Date`) VALUES ('$user_id','$message','$time','$formatDate')";
                $result = mysqli_query($con,$query);


                $updatesql = "UPDATE user_database set password ='" . $_POST["newpassword"] . "', confirm_password ='" . $_POST["confirmpassword"] . "' WHERE username='" . $user_id . "'";
                $result2 = mysqli_query($con,$updatesql);

                echo "<script type='text/javascript'>document.getElementById('passwordchanged').click(); </script>";
          }
    }  
    
    else{
      echo "<script type='text/javascript'>document.getElementById('passwordnotmatched').click(); </script>";
    }

    }
//RESET PASSWORD



?>


 



