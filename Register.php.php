<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: Movie.html");
}
include_once 'dbconn.php';

if(isset($_POST['signup']))
{
 $uname = mysql_real_escape_string($_POST['name']);
 $email = mysql_real_escape_string($_POST['email']);
 $upass = md5(mysql_real_escape_string($_POST['passwrd']));
 
 if(mysql_query("INSERT INTO users(Name,Email,Password) VALUES('$uname','$email','$upass')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
		       $_SESSION["user_id"] = $name;
				header("Location: Movie.html");

 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
<link rel="stylesheet" href="Style.css" type="text/css" />
 <script type="text/javascript" src="Movie.js">
   </script>

</head>

<body id="register">

    <div id="login2" align="center" style="position:absolute;left:250px;top:90px;">
		   <form id="signup" method="POST"  >
		       <img id="close1" src="close.jpg"  onChange="clickOnn('hide');"  >
		        <fieldset >
			    <legend class="legend1">Create Account</legend>
				<div class="input">
				     <img src="user_img.jpg" width="20px" style="position:absolute;bottom:10px;left:10px;">
				     <input type="text" name="name" placeholder="Name" required/>
					 
				</div>
				<div class="input">
				     <img src="message_icon.jpg" width="20px" style="position:absolute;bottom:10px;left:10px;">
				     <input type="email" name="email" placeholder="Email" required/>
					 
				</div>
	            <div class="input">
				     <img src="lock_icon.jpg" width="20px"  style="position:absolute;bottom:10px;left:15px;">
				     <input type="password" name="passwrd" placeholder="Password" required/>
					
				</div>
				
	            <button type="submit" id="submit1" name="signup" onClick="toNextPage();"  ></button>
	         </fieldset>
			 <p class="message1" >Already registered? <a href="index.php" >Sign In</a></p>
		   
		   
		   
		   </form>
	     </div>	
		
		 </body>
		 </html>