<?php
session_start();
include_once 'dbconn.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: Movie.html");
}
if(isset($_POST['login']))
{
 $email = mysql_real_escape_string($_POST['email']);
 $upass = mysql_real_escape_string($_POST['passwrd']);
 $res=mysql_query("SELECT * FROM users WHERE Email='$email'");

 $row=mysql_fetch_array($res);
 if($row['Password']==md5($upass))
 { 
   
	 ?>
        <script>alert('Successfully Login');</script>
        <?php
  
   $_SESSION["user_id"] = $row["user_id"];
  header('Location: Movie.html');
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }

}
?>
<!DOCTYPE html>
<html >
<head>
<meta charset ="ISO-8859-7">
<title>cleartuts - Login & Registration System</title>
<link rel="stylesheet" href="Style.css" type="text/css" />
 <script type="text/javascript" src="Movie.js">
   </script>
</head>
<body id="register1" >



        <div id="login1" align="center" style="position:absolute;left:250px;top:90px;">
               <form id="login" method = "POST"    >
			    <img id="close" src="close.jpg"  onClick="clickOn('hide');"  >
		        <fieldset>
			    <legend class="legend">Login</legend>
				<div class="input">
				     <img src="message_icon.jpg" width="20px" style="position:absolute;bottom:10px;left:10px;">
				     <input type="email" name="email" placeholder="Email" required/>
					 
				</div>
	            <div class="input">
				     <img src="lock_icon.jpg" width="20px"  style="position:absolute;bottom:10px;left:15px;">
				     <input type="password" name="passwrd" id="passwrd" placeholder="Password" required/>
					
				</div>
				
	            <button type="submit" id="submit1"  name="login"  onClick="toNextPage();"  ></button>
	         </fieldset>
			 <p class="message">Not registered? <a href="Register.php">Create an account</a></p>
	       </form>
		   </div>
		   
		   </body>
		   </html>