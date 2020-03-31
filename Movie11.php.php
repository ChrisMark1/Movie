<?php

 $id = $_GET["id"]; 
		
        
		
  include_once 'dbconn.php';
?>
		 

<?php

if(isset($_POST['submit_rating']))
{



session_start();
  $host="localhost";
  $username="root";
  $password="";
  $databasename="dbtest";
  $id1=$_SESSION['user_id'];
  if(!$id1==0){
  if(!mysql_errno() === 1062  ){
  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);
  $movie1_rating = mysql_real_escape_string($_POST['actionrating']);
  $insert=mysql_query("INSERT INTO rating (id,movie1)  VALUES ('$id1','$movie1_rating')")or die(mysql_error());

	 
	   ?>
        <script>alert('successfully rating ');</script>;
        
			

        <?php

		

	 
  
		
  }else {
	  ?><script>alert('The informations are already inserted');</script>;<?php
	    
	 
  } 
  

  }else{
	   ?><script>alert('You must Login');</script>;<?php
	  header("Location: index.php");
  }



  
}
?>
	
<?php


if(isset($_POST['submit']))
{
session_start();

  $id1=$_SESSION['user_id'];
  $host="localhost";
  $username="root";
  $password="";
  $databasename="dbtest";
   if(!$id1==0){
  if(!mysql_errno() === 1062){
  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);

 $name =mysql_real_escape_string($_POST['namename']); 
 
 

	 $message = mysql_real_escape_string($_POST['message']); 
 
  $email = mysql_real_escape_string($_POST['email']);
	
 $insert=mysql_query("INSERT INTO comment (id,Name,Email,Comments) VALUES(' $id1','$name','$email','$message')")or die(mysql_error());
  
 
  
	   ?>
        <script>alert('successfully comment ');</script>;
        
			

        <?php
		
		
  



        
}
 else{
	   ?><script>alert('The informations are already inserted');</script>;<?php
  }

}else{
	   ?><script>alert('You must Login');</script>;<?php
	  header("Location: index.php");
  }

		
		

}
	


?>
<?php

if(isset($_POST['submit_rating1']))
{



session_start();
  $host="localhost";
  $username="root";
  $password="";
  $databasename="dbtest";
  $id1=$_SESSION['user_id'];
  if(!$id1==0){
  if(!mysql_errno() === 1062){
  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);
  $movie2_rating = mysql_real_escape_string($_POST['actionnrating']);
  $insert=mysql_query("INSERT INTO rating1 (id,movie2)  VALUES ('$id1','$movie2_rating')")or die(mysql_error());
  
	 
	   

		

	  ?>
        <script>alert('successfully rating ');</script>;
        
			

        <?php
  	
		
  }else{
	    ?><script>alert('The informations are already inserted');</script>;<?php
	 
  } 

 }else{
	   ?><script>alert('You must Login');</script>;<?php
	  header("Location: index.php");
  }
    

  
}
?>
	
<?php


if(isset($_POST['submit1']))
{
session_start();

  $id1=$_SESSION['user_id'];
  $host="localhost";
  $username="root";
  $password="";
  $databasename="dbtest";
  if(!$id1==0){
 if(!mysql_errno() === 1062){
  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);

	 $name = mysql_real_escape_string($_POST['namename']); 
  

 
	 $message = mysql_real_escape_string($_POST['message']); 
  
  $email = mysql_real_escape_string($_POST['email']);
 
  
  $insert=mysql_query('INSERT INTO comment1 (id,Name,Email,Comments) VALUES(" $id1","$name","$email","$message")')or die(mysql_error());
  
	   ?>
        <script>alert('successfully comment ');</script>;
        
			

        <?php
		
		
  

}else{
 ?><script>alert('The informations are already inserted');</script>;<?php
} 

}else{
	   ?><script>alert('You must Login');</script>;<?php
	  header("Location: index.php");
  }

  
}




		
		

	
	


?>
<?php

if(isset($_POST['submit_rating2']))
{



session_start();
  $host="localhost";
  $username="root";
  $password="";
  $databasename="dbtest";
  $id1=$_SESSION['user_id'];
  if(!$id1==0){
  if(!mysql_errno() === 1062){
  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);
  $movie3_rating = mysql_real_escape_string($_POST['actionnnrating']);
  $insert=mysql_query("INSERT INTO rating2 (id,movie3)  VALUES ('$id1','$movie3_rating')")or die(mysql_error());
  
	 
	   

		

	  ?>
        <script>alert('successfully rating ');</script>;
        
			

        <?php
  	
		
  }else{
	    ?><script>alert('The informations are already inserted');</script>;<?php
	 
  } 

  $select_rating=mysql_query("select movie3 from rating2");
    $total=mysql_num_rows($select_rating);
  
    
}else{
	   ?><script>alert('You must Login');</script>;<?php
	  header("Location: index.php");
  }
    

  
}
?>
	
<?php


if(isset($_POST['submit2']))
{
session_start();

  $id1=$_SESSION['user_id'];
  $host="localhost";
  $username="root";
  $password="";
  $databasename="dbtest";
  if(!$id1==0){
 if(!mysql_errno() === 1062){
  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);

	 $name = mysql_real_escape_string($_POST['namename']); 
  

 
	 $message = mysql_real_escape_string($_POST['message']); 
  
  $email = mysql_real_escape_string($_POST['email']);
 
  
  $insert=mysql_query('INSERT INTO comment2 (id,Name,Email,Comments) VALUES(" $id1","$name","$email","$message")')or die(mysql_error());
  
	   ?>
        <script>alert('successfully comment ');</script>;
        
			

        <?php
		
		
  

}else{
 ?><script>alert('The informations are already inserted');</script>;<?php
}  
}else{
	   ?><script>alert('You must Login');</script>;<?php
	  header("Location: index.php");
  }



 
}




		
		

	
	


?>


<?php

if(isset($_POST['submit_rating3']))
{



session_start();
  $host="localhost";
  $username="root";
  $password="";
  $databasename="dbtest";
  $id1=$_SESSION['user_id'];
  if(!$id1==0){
  if(!mysql_errno() === 1062){
  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);
  $movie4_rating = mysql_real_escape_string($_POST['dramarating']);
  $insert=mysql_query("INSERT INTO rating3 (id,movie4)  VALUES ('$id1','$movie4_rating')")or die(mysql_error());
  
	 
	   

		

	  ?>
        <script>alert('successfully rating ');</script>;
        
			

        <?php
  	
		
  }else{
	    ?><script>alert('The informations are already inserted');</script>;<?php
	 
  } 

  
   }else{
	   ?><script>alert('You must Login');</script>;<?php
	  header("Location: index.php");
  } 

  
}
?>
	
<?php


if(isset($_POST['submit3']))
{
session_start();

  $id1=$_SESSION['user_id'];
  $host="localhost";
  $username="root";
  $password="";
  $databasename="dbtest";
  if($id1==0){
 if(!mysql_errno() === 1062){
  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);
 
	 $name = mysql_real_escape_string($_POST['namename']); 


	 $message = mysql_real_escape_string($_POST['message']); 
  
  $email = mysql_real_escape_string($_POST['email']);
 
  
  $insert=mysql_query('INSERT INTO comment3 (id,Name,Email,Comments) VALUES(" $id1","$name","$email","$message")')or die(mysql_error());
 
	   ?>
        <script>alert('successfully comment ');</script>;
        
			

        <?php
		
		
  

}else{
 ?><script>alert('The informations are already inserted');</script>;<?php
}  
}else{
	   ?><script>alert('You must Login');</script>;<?php
	  header("Location: index.php");
  }


 
}




		
		

	
	


?>



<?php

if(isset($_POST['submit_rating4']))
{



session_start();
  $host="localhost";
  $username="root";
  $password="";
  $databasename="dbtest";
  $id1=$_SESSION['user_id'];
  if(!$id1==0){
  if(!mysql_errno() === 1062){
  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);
  $movie5_rating = mysql_real_escape_string($_POST['dramaarating']);
  $insert=mysql_query("INSERT INTO rating4 (id,movie5)  VALUES ('$id1','$movie5_rating')")or die(mysql_error());
  
	 
	   

		

	  ?>
        <script>alert('successfully rating ');</script>;
        
			

        <?php
  	
		
  }else{
	    ?><script>alert('The informations are already inserted');</script>;<?php
	 
  } 

 
}else{
	   ?><script>alert('You must Login');</script>;<?php
	  header("Location: index.php");
  }
    

  
}
?>
	
<?php


if(isset($_POST['submit4']))
{
session_start();

  $id1=$_SESSION['user_id'];
  $host="localhost";
  $username="root";
  $password="";
  $databasename="dbtest";
  if(!id1==0){
 if(!mysql_errno() === 1062){
  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);

	 $name = mysql_real_escape_string($_POST['namename']); 
  

	 $message = mysql_real_escape_string($_POST['message']); 
 
  $email = mysql_real_escape_string($_POST['email']);
 
  
  $insert=mysql_query('INSERT INTO comment4 (id,Name,Email,Comments) VALUES(" $id1","$name","$email","$message")')or die(mysql_error());
  
	   ?>
        <script>alert('successfully comment ');</script>;
        
			

        <?php
		
		
  

}else{
 ?><script>alert('The informations are already inserted');</script>;<?php
}  

}else{
	   ?><script>alert('You must Login');</script>;<?php
	  header("Location: index.php");
  }
 
}




		
		

	
	


?>



<?php

if(isset($_POST['submit_rating5']))
{



session_start();
  $host="localhost";
  $username="root";
  $password="";
  $databasename="dbtest";
  $id1=$_SESSION['user_id'];
  if(!$id1==0){
  if(!mysql_errno() === 1062){
  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);
  $movie6_rating = mysql_real_escape_string($_POST['dramaaarating']);
  $insert=mysql_query("INSERT INTO rating5 (id,movie6)  VALUES ('$id1','$movie6_rating')")or die(mysql_error());
  
	 
	   

		

	  ?>
        <script>alert('successfully rating ');</script>;
        
			

        <?php
  
		
  }else{
	    ?><script>alert('The informations are already inserted');</script>;<?php
	 
  } 

}else{
	   ?><script>alert('You must Login');</script>;<?php
	  header("Location: index.php");
  }
    

  
}
?>
	
<?php


if(isset($_POST['submit5']))
{
session_start();

  $id1=$_SESSION['user_id'];
  $host="localhost";
  $username="root";
  $password="";
  $databasename="dbtest";
  if(!$id1==0){
 if(!mysql_errno() === 1062){
  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);
 
	 $name = mysql_real_escape_string($_POST['namename']); 
  

	 $message = mysql_real_escape_string($_POST['message']); 
  
  $email = mysql_real_escape_string($_POST['email']);
 
  
  $insert=mysql_query('INSERT INTO comment5 (id,Name,Email,Comments) VALUES(" $id1","$name","$email","$message")')or die(mysql_error());
 
	   ?>
        <script>alert('successfully comment ');</script>;
        
			

        <?php
		
		
  

}else{
 ?><script>alert('The informations are already inserted');</script>;<?php
} 

}else{
	   ?><script>alert('You must Login');</script>;<?php
	  header("Location: index.php");
  }

  
}




		
		

	
	


?>

<?php

if(isset($_POST['submit_rating6']))
{



session_start();
  $host="localhost";
  $username="root";
  $password="";
  $databasename="dbtest";
  $id1=$_SESSION['user_id'];
  if(!$id1==0){
  if(!mysql_errno() === 1062){
  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);
  $movie7_rating = mysql_real_escape_string($_POST['horrorrating']);
  $insert=mysql_query("INSERT INTO rating6 (id,movie7)  VALUES ('$id1','$movie7_rating')")or die(mysql_error());

	 
	   

		

	  ?>
        <script>alert('successfully rating ');</script>;
        
			

        <?php
  
		
  }else{
	    ?><script>alert('The informations are already inserted');</script>;<?php
	 
  } 

 
   }else{
	   ?><script>alert('You must Login');</script>;<?php
	  header("Location: index.php");
  }  

    

  
}
?>
	
<?php


if(isset($_POST['submit6']))
{
session_start();

  $id1=$_SESSION['user_id'];
  $host="localhost";
  $username="root";
  $password="";
  $databasename="dbtest";
  if(!$id1==0){
 if(!mysql_errno() === 1062){
  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);

	 $name = mysql_real_escape_string($_POST['namename']); 
  

	 $message = mysql_real_escape_string($_POST['message']); 
  
  $email = mysql_real_escape_string($_POST['email']);
 
  
  $insert=mysql_query('INSERT INTO comment6 (id,Name,Email,Comments) VALUES(" $id1","$name","$email","$message")')or die(mysql_error());
  
	   ?>
        <script>alert('successfully comment ');</script>;
        
			

        <?php
		
		
  

}else{
 ?><script>alert('The informations are already inserted');</script>;<?php
}   
}else{
	   ?><script>alert('You must Login');</script>;<?php
	  header("Location: index.php");
  }
}




		
		

	
	


?>


<?php

if(isset($_POST['submit_rating7']))
{



session_start();
  $host="localhost";
  $username="root";
  $password="";
  $databasename="dbtest";
  $id1=$_SESSION['user_id'];
  if(!$id1==0){
  if(!mysql_errno() === 1062){
  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);
  $movie8_rating = mysql_real_escape_string($_POST['horrorrrating']);
  $insert=mysql_query("INSERT INTO rating7 (id,movie8)  VALUES ('$id1','$movie8_rating')")or die(mysql_error());
  
	 
	   

		

	  ?>
        <script>alert('successfully rating ');</script>;
        
			

        <?php
  
		
  }else{
	    ?><script>alert('The informations are already inserted');</script>;<?php
	 
  } 

  
     
}else{
	   ?><script>alert('You must Login');</script>;<?php
	  header("Location: index.php");
  }
    

  
}
?>
	
<?php


if(isset($_POST['submit7']))
{
session_start();

  $id1=$_SESSION['user_id'];
  $host="localhost";
  $username="root";
  $password="";
  $databasename="dbtest";
  if(!$id1==0){
 if(!mysql_errno() === 1062){
  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);

	 $name = mysql_real_escape_string($_POST['namename']); 
  

	 $message = mysql_real_escape_string($_POST['message']); 
  
  $email = mysql_real_escape_string($_POST['email']);
 
  
  $insert=mysql_query('INSERT INTO comment7 (id,Name,Email,Comments) VALUES(" $id1","$name","$email","$message")')or die(mysql_error());
  
	   ?>
        <script>alert('successfully comment ');</script>;
        
			

        <?php
		
		
  

}else{
 ?><script>alert('The informations are already inserted');</script>;<?php
}  

}else{
	   ?><script>alert('You must Login');</script>;<?php
	  header("Location: index.php");
  }
 
}




		
		

	
	


?>
<?php

if(isset($_POST['submit_rating8']))
{



session_start();
  $host="localhost";
  $username="root";
  $password="";
  $databasename="dbtest";
  $id1=$_SESSION['user_id'];
  if(!$id1==0){
  if(!mysql_errno() === 1062){
  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);
  $movie9_rating = mysql_real_escape_string($_POST['horrorrrrating']);
  $insert=mysql_query("INSERT INTO rating8 (id,movie9)  VALUES ('$id1','$movie9_rating')")or die(mysql_error());
 
	 
	   

		

	  ?>
        <script>alert('successfully rating ');</script>;
        
			

        <?php
  
		
  }else{
	    ?><script>alert('The informations are already inserted');</script>;<?php
	 
  } 

 }else{
	   ?><script>alert('You must Login');</script>;<?php
	  header("Location: index.php");
  }
     

    

  
}
?>
	
<?php


if(isset($_POST['submit8']))
{
session_start();

  $id1=$_SESSION['user_id'];
  $host="localhost";
  $username="root";
  $password="";
  $databasename="dbtest";
  if(!$id1==0){
 if(!mysql_errno() === 1062){
  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);
  
	 $name = mysql_real_escape_string($_POST['namename']); 
  

	 $message = mysql_real_escape_string($_POST['message']); 
  
  $email = mysql_real_escape_string($_POST['email']);
 
  
  $insert=mysql_query("INSERT INTO comment8 (id,Name,Email,Comments) VALUES(' $id1','$name','$email','$message')")or die(mysql_error());
  
	   ?>
        <script>alert('successfully comment ');</script>;
        
			

        <?php
		
		
  

}else{
 ?><script>alert('The informations are already inserted');</script>;<?php
}

}else{
	   ?><script>alert('You must Login');</script>;<?php
	  header("Location: index.php");
  }


   
}




		
		

	
	


?>

?>
<?php

if(isset($_POST['submit_rating9']))
{



session_start();
  $host="localhost";
  $username="root";
  $password="";
  $databasename="dbtest";
  $id1=$_SESSION['user_id'];
 if(!$id==0){
	 
 
  if(!mysql_errno() ===1062){
  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);
  $movie10_rating = mysql_real_escape_string($_POST['horrorrrrrating']);
  $insert=mysql_query("INSERT INTO rating9 (id,movie10)  VALUES ('$id1','$movie10_rating')")or die(mysql_error());
 
	 
	   

		

	  ?>
        <script>alert('successfully rating ');</script>;
        
			

        <?php
  	
		
  }else{
	    ?><script>alert('The informations are already inserted');</script>;<?php
	 
  } 

 
  }else{
	   ?><script>alert('You must Login');</script>;<?php
	  header("Location: index.php");
  }   

    

  
}
?>
	
<?php


if(isset($_POST['submit9']))
{
session_start();

  $id1=$_SESSION['user_id'];
  $host="localhost";
  $username="root";
  $password="";
  $databasename="dbtest";
  if(!$id1==0){
 if(!mysql_errno() === 1062){
  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);
 
	 $name = mysql_real_escape_string($_POST['namename']); 
  

	 $message = mysql_real_escape_string($_POST['message']); 
  
  $email = mysql_real_escape_string($_POST['email']);
 
  
  $insert=mysql_query("INSERT INTO comment9 (id,Name,Email,Comments) VALUES(' $id1','$name','$email','$message')")or die(mysql_error());
  
	   ?>
        <script>alert('successfully comment ');</script>;
        
			

        <?php
		
		
  

}else{
 ?><script>alert('The informations are already inserted');</script>;<?php
} 
}else{
	   ?><script>alert('You must Login');</script>;<?php
	  header("Location: index.php");
  }
  
}




		
		

	
	


?>











	


 
<!DOCTYPE html>
<html>
<head>
   <title>Star Movies</title>
   <meta charset ="ISO-8859-7">
   <link rel="stylesheet" href="Style2.css" type="text/css">
   <link rel="shortcut icon" href="favicon.ico" type="image/ico"/>
   <script type="text/javascript" src="Movie2.js" >
     

   </script>

   
</head>
<body width="100%">
    <header class="mainheader">
	    
    </header>
	 <nav>
	  <div class="nav">
	  <div class="nav_wrapper">
		 <ul>
	     <li >
		 <a href="Movie.html" style="text-decoration:none;"  >
		
		 <br>
		 <span style="position:absolute;top:55px;left:90px;font-size:27px;">Αρχική</span>
		 </li>
		 <li class="dropdown">
		 <a href="#" style="text-decoration:none;"  >
		
		 <br>
		 <span style="position:absolute;top:55px;font-size:27px;margin-left:137px;"  >Ταινιοθήκη</span>
		
		 </li>
		 <li >
		 <a href="#">
		
		 <br>
		 <span style="position:absolute;top:55px;font-size:27px;margin-left:380px;">Forum</span>
		 </li>
		  <li >
		      <a href="#" style="text-decoration:none;"  >
		
		 <br>
		 <span style="position:absolute;top:55px;font-size:27px;margin-left:463px;" >Επικοινωνία</span>
		 </li>
	    
	     </ul>
		 </div>
      </div>
	  
	  </nav>
	  
	
	    <button type="submit" id="login_button"  name="see_movie"  onClick="see_movie('<?php echo $id; ?>');"  >See Your Movie</button>
		<p><a type="submit"  type="submit" id="logout_button" href="index.php" >Logout</a></p>
	  <section>

	  <article  >

	  
	  
	  
	  
	  <div id="a_movie1" >
	    <form  method="POST"   >
	    
		    <legend class="legend4" >13 Hours: The Secret Soldiers of Benghazi</legend>
				         <img src="action_movies1.jpg" width="470px" height="530px" style="position:absolute;top:900px;left:200px;" >

		  		
				<div class="categories">
				 <h2>Πληροφορίες</h2>
					<p><a ><strong> Κυκλοφορία :  2016 </a></strong></p>
					<hr>
					<p><strong> Διάρκεια  :  141' </strong></p>
					<hr>
					<p><strong> Χώρα  :  Αμερική </strong></p>
					<hr>
					<p><strong> Γλώσσα  :  English </strong></p>
					<hr>
					<p><strong>Παραγωγή  :  Paramount Pictures, Dune Entertainment, 3 Arts Entertainment</strong></p>
					<hr>
				</div>
				<div class="categories1">
				<h1>Υπόθεση</h1>
				<span><strong>Το βράδυ της 11ης Σεπτεμβρίου του 2012,<br> την 11η επέτειο των επιθέσεων της 11ης Σεπτεμβρίου,<br> μια ομάδα ισλαμιστών επιτίθεται στις εγκαταστάσεις<br> της αμερικανικής διπλωματικής αποστολής <br>καθώς και σε ένα κοντινό παράρτημα<br> της CIA στη Βεγγάζη, Λιβύη.<br> Σκότωσαν τέσσερις Αμερικανούς,<br> συμπεριλαμβανομένου του Πρέσβη των ΗΠΑ, Κρίστοφερ Στίβενς.<br> Μία εξαμελής ομάδα Ειδικών Επιχειρήσεων των ΗΠΑ<br> από πρώην Navy Seals και πράκτορες της CIA<br> έχουν αποσταλεί για να υπερασπιστούν <br> τους εναπομείναντες Αμερικανούς που είναι ακόμα ζωντανοί.</strong></span>
	            </div>
			
			
			
			<div class="rating" >
			     <img src="star.jpg" width="40px;">
			     <input type="radio" name="stars" id="8_stars" value="8" OnClick = "put_num('8');">
                  <label class="stars" for="8_stars">8 stars</label>
			     <input type="radio" name="stars" id="7_stars" value="7" OnClick = "put_num('7');">
                 <label class="stars" for="7_stars">7 stars</label>
			    <input type="radio" name="stars" id="6_stars" value="6" OnClick = "put_num('6');">
                 <label class="stars" for="6_stars">6 stars</label>
                 <input type="radio" name="stars" id="5_stars" value="5" OnClick = "put_num('5');">
                 <label class="stars" for="5_stars">5 stars</label>
	             <input type="radio" name="stars" id="4_stars" value="4" OnClick = "put_num('4');">
                 <label class="stars" for="4_stars">4 stars</label>
                 <input type="radio" name="stars" id="3_stars" value="3" OnClick = "put_num('3');">
                 <label class="stars" for="3_stars">3 stars</label>
                 <input type="radio" name="stars" id="2_stars" value="2" OnClick = "put_num('2');">
                 <label class="stars" for="2_stars">2 stars</label>
                 <input type="radio" name="stars" id="1_stars" value="1" OnClick = "put_num('1');" required>
                 <label class="stars" for="1_stars">1 star</label>
				 <br>
				 <br>
                 <img src="full_star.jpg" width="45px" style="position:absolute;left:80px;top:50px;">
                 <span  class="label1" style="position:absolute;top:61px;left:130px;"> <?php $sql = "SELECT AVG(movie1) FROM rating"; 

$result = mysql_query($sql) or die(mysql_error());

while($row = mysql_fetch_array($result))
{

      echo  $row['AVG(movie1)'];

} ?>/8 </span>
               <img src="user_img.jpg" width="25px" style="position:absolute;left:320px;top:-1px;">
              <span class="label2" style="position:absolute;top:-1px;left:350px;">  
			<?php $select_rating=mysql_query("select movie1 from rating");
            $total=mysql_num_rows($select_rating);
			echo $total;
			?></span>
				 
				 <input type="hidden" name="actionrating" id="actionrating" value="0">
                <input type="submit" value="Rate!" name="submit_rating" id="submitt" >
           </div>

			
		
	
	   </form>
	   
	  
				<h4>Rate This!</h4>
	
	 <div id="respond">
     
     <h3>Leave a Comment</h3>
   
      <form    method="POST"   >

      <label for="comment_author" class="required">Your name</label>
      <input type="text"  id="tnameid" name = "namename"   required="required">

      <label for="email" class="required">Your email</label>
      <input type="email"  id="temailid" value="" name="email"  required="required">

      <label for="comment" class="required">Your message</label>
      <textarea  id="tmessageid" rows="10" name="message"   required="required"></textarea>

     
    				

       <input name="submit" type="submit" value="Submit comment" />

  </form>
  <br>
  <br>
  <h5>User Comments!</h5>
  <br>
  <br>
  <br>
  <fieldset>
  <?php
	     $getquery = mysql_query("SELECT * FROM comment ORDER BY id DESC ")or die(mysql_error());
		 while($rows=mysql_fetch_array($getquery)){
			 $id = $rows['id'];
			 $name = $rows['Name'];
			 $comment= $rows['Comments'];
			  echo 'User Id => ' .$id .' <br/>';
			   echo 'User Name => ' .$name .' <br/>';
			    echo 'Comment => ' .$comment .' <br/>' .'<hr/>';
			  
			  
		 }
	  
	  
	  
	  ?>
	  </fieldset>
 </div>

	  </article>
	
	  
	 <article >
	  <div id="a_movie2" >
	 <form  method="POST"    >
       
		    <legend class="legend4" >Eight Legged Freaks</legend>
				         <img src="action_movies2.jpg" width="470px" height="530px" style="position:absolute;top:900px;left:200px;" />

		  		
				<div class="categories">
				 <h2>Πληροφορίες</h2>
					<p><a ><strong> Κυκλοφορία :  2002 </a></strong></p>
					<hr>
					<p><strong> Διάρκεια  :  121' </strong></p>
					<hr>
					<p><strong> Χώρα  :  Γερμανία,Αμερική,Αυστραλία </strong></p>
					<hr>
					<p><strong> Γλώσσα  :  English </strong></p>
					<hr>
					<p><strong>Παραγωγή  : Centropolis Entertainment,Village Roadshow Pictures,Electric Entertainment </strong></p>
					<hr>
				</div>
				<div class="categories1">
				<h1>Υπόθεση</h1>
				<span><strong>Οι κάτοικοι μιας αγροτικής πόλης των ορυχείων ανακαλύψαν <br> ότι η διαρροή χημικών έχει προκαλέσει <br> εκατοντάδες μικρά αράχνες που μεταλλάσσονται <br> τη διάρκεια της νύχτας με το μέγεθος των SUV . <br> Αυτό έχει ως συνέπεια μέχρι ο μηχανικός <br> Chris McCormack και Σερίφης Σαμ Πάρκερ <br> να κινητοποιήσει μια εκλεκτική ομάδα των κατοίκων της πόλεως ,<br> συμπεριλαμβανομένων ο νεαρός γιος του σερίφη <br> , Μάικ , η κόρη της , Ashley<br> και ο παρανοϊκός εκφωνητής ραδιοφώνου Harlan ,<br> στη μάχη ενάντια στα αιμόδιψα οκτάποδα θηρία .</strong></span>
	            </div>
				
				
				<div class="rating" >
			  <img src="star.jpg" width="40px;">
			     <input type="radio" name="stars" id="8_stars1" value="8" OnClick = "put_num1('8');">
                  <label class="stars" for="8_stars1">8 stars</label>
			     <input type="radio" name="stars" id="7_stars1" value="7" OnClick = "put_num1('7');">
                 <label class="stars" for="7_stars1">7 stars</label>
			    <input type="radio" name="stars" id="6_stars1" value="6" OnClick = "put_num1('6');">
                 <label class="stars" for="6_stars1">6 stars</label>
                 <input type="radio" name="stars" id="5_stars1" value="5" OnClick = "put_num1('5');">
                 <label class="stars" for="5_stars1">5 stars</label>
	             <input type="radio" name="stars" id="4_stars1" value="4" OnClick = "put_num1('4');">
                 <label class="stars" for="4_stars1">4 stars</label>
                 <input type="radio" name="stars" id="3_stars1" value="3" OnClick = "put_num1('3');">
                 <label class="stars" for="3_stars1">3 stars</label>
                 <input type="radio" name="stars" id="2_stars1" value="2" OnClick = "put_num1('2');">
                 <label class="stars" for="2_stars1">2 stars</label>
                 <input type="radio" name="stars" id="1_stars1" value="1" OnClick = "put_num1('1');" required>
                 <label class="stars" for="1_stars1">1 star</label>
				 <br>
				 <br>
				 
                 <img src="full_star.jpg" width="45px" style="position:absolute;left:80px;top:50px;">
                 
                 <span  class="label" style="position:absolute;top:61px;left:130px;"> <?php $sql = "SELECT AVG(movie2) FROM rating1"; 

$result = mysql_query($sql) or die(mysql_error());

while($row = mysql_fetch_array($result))
{

      echo $row['AVG(movie2)'];

} ?>/8 </span>
             <img src="user_img.jpg" width="25px" style="position:absolute;left:320px;top:-1px;">
            <span class="label2" style="position:absolute;top:-1px;left:350px;">
			<?php $select_rating=mysql_query("select movie2 from rating1");
            $total=mysql_num_rows($select_rating);
			echo $total;
			?></span>
				 
				 <input type="hidden" name="actionnrating" id="actionnrating" value="0">
                <input type="submit" value="Rate!" name="submit_rating1" id="submitt" >
           </div>
				
				
				
              </form>
	   
	   <h4><strong>Rate  This!</strong></h4>
	
	 <div id="respond1">
     
     <h3>Leave a Comment</h3>
   
      <form    method="POST" >

      <label for="comment_author" class="required">Your name</label>
      <input type="text"  id="tnameid" name = "namename"   required="required">

      <label for="email" class="required">Your email</label>
      <input type="email"  id="temailid" value="" name="email"  required="required">

      <label for="comment" class="required">Your message</label>
      <textarea  id="tmessageid" rows="10" name="message"   required="required"></textarea>

     
    
       <input name="submit1" type="submit" value="Submit comment" />
				
		 
	  
	  </form>
	
  
  <h5>User Comments!</h5>
  <br>
  <br>
  <br>
  <fieldset>
	  <?php
	     $getquery = mysql_query("SELECT *FROM comment1 ORDER BY id DESC");
		 while($rows=mysql_fetch_array($getquery)){
			 $id = $rows['id'];
			 $name = $rows['Name'];
			 $commect= $rows['Comments'];
			  echo 'User Id => ' .$id .' <br/>';
			   echo 'User Name => ' .$name .' <br/>';
			    echo 'Comment => ' .$comment .' <br/>' .'<hr/>';
			  
			  
			  
		 }
	  
	  
	  
	  ?>
	  </fieldset>
	  </div>
	  </div>
	  </article>
	 
	  
	  <article >
	   <div id="a_movie3" >
	   <form method="POST"   >
	    
		    <legend class="legend4" >Timecop 2</legend>
				         <img src="action_movies3.jpg" width="470px" height="530px" style="position:absolute;top:900px;left:200px;" >

		  		
				<div class="categories">
				 <h2>Πληροφορίες</h2>
					<p><a ><strong> Κυκλοφορία :  2003 </a></strong></p>
					<hr>
					<p><strong> Διάρκεια  :  98' </strong></p>
					<hr>
					<p><strong> Χώρα  :  Αμερική </strong></p>
					<hr>
					<p><strong> Γλώσσα  :  English </strong></p>
					<hr>
					<p><strong>Παραγωγή  : 	Largo Entertainment,JVC Entertainment,Dark Horse Entertainment,Renaissance Pictures </strong></p>
					<hr>
				</div>
				<div class="categories1">
				<h1>Υπόθεση</h1>
				<span><strong>Είκοσι χρόνια μετά από μια σειρά γεγονότων ,<br>  ο οργανισμός που λέει βεβαίως ότι κανείς δεν ταξιδεύει στο παρελθόν . <br> Τώρα η Brandon Miller μια λειτουργική ΣΕΚ ,<br> πιστεύει ότι έχουν την ευθύνη να αλλάξουν την ιστορία ,<br> ελπίζοντας ότι ο κόσμος θα είναι καλύτερα,<br> αλλά Ryan Chan άλλο λειτουργικό Tec το σταματάει ,<br> αλλά σκοτώνει τη γυναίκα που αγαπά στη διαδικασία.<br> Δύο χρόνια αργότερα ο Μίλερ δραπετεύει από τη φυλακή <br> και έχει ως στόχο να εξαλείψει όλα τα ΣΕΚ χειριστές σκοτώνοντας τους προγόνους τους. </strong></span>
	            </div>
				
				
		   
				
			<div class="rating" >
			  <img src="star.jpg" width="40px;">
			     <input type="radio" name="stars" id="8_stars2" value="8" OnClick = "put_num2('8');">
                  <label class="stars" for="8_stars2">8 stars</label>
			     <input type="radio" name="stars" id="7_stars2" value="7" OnClick = "put_num2('7');">
                 <label class="stars" for="7_stars2">7 stars</label>
			    <input type="radio" name="stars" id="6_stars2" value="6" OnClick = "put_num2('6');">
                 <label class="stars" for="6_stars2">6 stars</label>
                 <input type="radio" name="stars" id="5_stars2" value="5" OnClick = "put_num2('5');">
                 <label class="stars" for="5_stars2">5 stars</label>
	             <input type="radio" name="stars" id="4_stars2" value="4" OnClick = "put_num2('4');">
                 <label class="stars" for="4_stars2">4 stars</label>
                 <input type="radio" name="stars" id="3_stars2" value="3" OnClick = "put_num2('3');">
                 <label class="stars" for="3_stars2">3 stars</label>
                 <input type="radio" name="stars" id="2_stars2" value="2" OnClick = "put_num2('2');">
                 <label class="stars" for="2_stars2">2 stars</label>
                 <input type="radio" name="stars" id="1_stars2" value="1" OnClick = "put_num2('1');" required>
                 <label class="stars" for="1_stars2">1 star</label>
				 <br>
				 <br>
                  <img src="full_star.jpg" width="45px" style="position:absolute;left:80px;top:50px;">
                 <span  class="label" style="position:absolute;top:61px;left:130px;"> <?php $sql = "SELECT AVG(movie3) FROM rating2"; 

$result = mysql_query($sql) or die(mysql_error());

while($row = mysql_fetch_array($result))
{

      echo $row['AVG(movie3)'];

} ?>/8 </span>
            <img src="user_img.jpg" width="25px" style="position:absolute;left:320px;top:-1px;">
            <span class="label2" style="position:absolute;top:-1px;left:350px;">
			<?php $select_rating=mysql_query("select movie3 from rating2");
            $total=mysql_num_rows($select_rating);
			echo $total;
			?></span>
				 
				 <input type="hidden" name="actionnnrating" id="actionnnrating" value="0">
                <input type="submit" value="Rate!" name="submit_rating2" id="submitt" >
          
			</div>	
              </form>
	   
	  
				<h4><strong>Rate  This!</strong></h4>
	
	 <div id="respond2">
     
     <h3>Leave a Comment</h3>
   
      <form    method="POST"  >

      <label for="comment_author" class="required">Your name</label>
      <input type="text"  id="tnameid" name = "namename"   required="required">

      <label for="email" class="required">Your email</label>
      <input type="email" id="temailid" value="" name="email"  required="required">

      <label for="comment" class="required">Your message</label>
      <textarea  id="tmessageid" rows="10" name="message"   required="required"></textarea>

     
    
       <input name="submit2" type="submit" value="Submit comment" />
				
		 
	  
	  </form>
	  <br>
  <br>
  
  <h5>User Comments!</h5>
  <br>
  <br>
  <br>
      <fieldset>
	  <?php
	     $getquery = mysql_query("SELECT *FROM comment2 ORDER BY id DESC");
		 while($rows=mysql_fetch_array($getquery)){
			 $id = $rows['id'];
			 $name = $rows['Name'];
			 $commect= $rows['Comments'];
			  echo 'User Id => ' .$id .' <br/>';
			   echo 'User Name => ' .$name .' <br/>';
			    echo 'Comment => ' .$comment .' <br/>' .'<hr/>';
			 
			  
			  
		 }
	  
	  
	  
	  ?>
	  </fieldset>
	  </div>
	     </article>
		
         <article>	
		 <div id="d_movie1" >
		 <form method="POST" >
		    
		    <legend class="legend4" >Ballet Shoes</legend>
				         <img src="drama_movies1.jpg" width="470px" height="530px" style="position:absolute;top:900px;left:200px;" >

		  		
				<div class="categories">
				 <h2>Πληροφορίες</h2>
					<p><a ><strong> Κυκλοφορία :  2007 </a></strong></p>
					<hr>
					<p><strong> Διάρκεια  :  88' </strong></p>
					<hr>
					<p><strong> Χώρα  :  Ηνωμένο Βασίλειο </strong></p>
					<hr>
					<p><strong> Γλώσσα  :  English </strong></p>
					<hr>
					<p><strong>Παραγωγή  : 	Largo Entertainment</strong></p>
					<hr>
				</div>
				<div class="categories1">
				<h1>Υπόθεση</h1>
				<span><strong>Η Pauline ,η Πέτροβα , και η Possi Fosil <br> ζουν με τη Σύλβια Μπράουν , την κηδεμόνα τους .<br> Τα χρήματα είναι πενιχρά και όσο ανοίγει η ιστορία <br> - ένας ιδιοκτήτης γκαράζ , ένας συνταξιούχος καθηγητής αγγλικών , και ένας δάσκαλος χορού - ήρθε για να μείνει .<br> O Theo Δανός , ο δάσκαλος χορού ,τις κάνει δεκτές στο σχολείο  ,<br> και οι τρεις να πάνε στη σκηνή για να την βοηθήσουν να συγκεντρώσει τα χρήματα . </strong></span>
	            </div>
				
				
		     
			   	
			<div class="rating" >
			    <img src="star.jpg" width="40px;">
			     <input type="radio" name="stars" id="8_stars3" value="8" OnClick = "put_num3('8');">
                  <label class="stars" for="8_stars3">8 stars</label>
			     <input type="radio" name="stars" id="7_stars3" value="7" OnClick = "put_num3('7');">
                 <label class="stars" for="7_stars3">7 stars</label>
			    <input type="radio" name="stars" id="6_stars3" value="6" OnClick = "put_num3('6');">
                 <label class="stars" for="6_stars3">6 stars</label>
                 <input type="radio" name="stars" id="5_stars3" value="5" OnClick = "put_num3('5');">
                 <label class="stars" for="5_stars3">5 stars</label>
	             <input type="radio" name="stars" id="4_stars3" value="4" OnClick = "put_num3('4');">
                 <label class="stars" for="4_stars3">4 stars</label>
                 <input type="radio" name="stars" id="3_stars3" value="3" OnClick = "put_num3('3');">
                 <label class="stars" for="3_stars3">3 stars</label>
                 <input type="radio" name="stars" id="2_stars3" value="2" OnClick = "put_num3('2');">
                 <label class="stars" for="2_stars3">2 stars</label>
                 <input type="radio" name="stars" id="1_stars3" value="1" OnClick = "put_num3('1');" required>
                 <label class="stars" for="1_stars3">1 star</label>
				 <br>
				 <br>
                 <img src="full_star.jpg" width="45px" style="position:absolute;left:80px;top:50px;">
                 
                 <span  class="label" style="position:absolute;top:61px;left:130px;"> <?php $sql = "SELECT AVG(movie4) FROM rating3"; 

$result = mysql_query($sql) or die(mysql_error());

while($row = mysql_fetch_array($result))
{

      echo $row['AVG(movie4)'];

} ?>/8 </span>
				 <img src="user_img.jpg" width="25px" style="position:absolute;left:320px;top:-1px;">
                <span class="label2" style="position:absolute;top:-1px;left:350px;">
			    <?php $select_rating=mysql_query("select movie4 from rating3");
                $total=mysql_num_rows($select_rating);
			    echo $total;
			?></span>
				 <input type="hidden" name="dramarating" id="dramarating" value="0">
                <input type="submit" value="Rate!" name="submit_rating3" id="submitt" >
           
			</div>	
              </form>
	   
	  
				<h4><strong>Rate  This!</strong></h4>

	 <div id="respond3">
     
     <h3>Leave a Comment</h3>
   
      <form    method="POST"   >

      <label for="comment_author" class="required">Your name</label>
      <input type="text"  id="tnameid" name = "namename"   required="required">

      <label for="email" class="required">Your email</label>
      <input type="email"  id="temailid" value="" name="email"  required="required">

      <label for="comment" class="required">Your message</label>
      <textarea  id="tmessageid" rows="10" name="message"   required="required"></textarea>

     
    
       <input name="submit3" type="submit" value="Submit comment" />
				
		 
	  
	  </form>
	  <br>
  <br>
  
  <h5>User Comments!</h5>
  <br>
  <br>
  <br>
       <fieldset>
	   
	  <?php
	     $getquery = mysql_query("SELECT *FROM comment3 ORDER BY id DESC");
		 while($rows=mysql_fetch_array($getquery)){
			 $id = $rows['id'];
			 $name = $rows['Name'];
			 $commect= $rows['Comments'];
			  echo 'User Id => ' .$id .' <br/>';
			   echo 'User Name => ' .$name .' <br/>';
			    echo 'Comment => ' .$comment .' <br/>' .'<hr/>';
			  
			  
			  
		 }
	  
	  
	  
	  ?>
	  </fieldset>
	  </div>
		 </article>
		 <article >
		  <div id="d_movie2" >
		 <form method="POST"  >
		   
		    <legend class="legend4" >Τutti  Isanti  Giorni</legend>
				         <img src="drama_movies2.jpg" width="470px" height="530px" style="position:absolute;top:900px;left:200px;" >

		  		
				<div class="categories">
				 <h2>Πληροφορίες</h2>
					<p><a ><strong> Κυκλοφορία :  2012 </a></strong></p>
					<hr>
					<p><strong> Διάρκεια  :  171' </strong></p>
					<hr>
					<p><strong> Χώρα  :  Ιταλία </strong></p>
					<hr>
					<p><strong> Γλώσσα  :  Ιταλικά </strong></p>
					<hr>
					<p><strong>Παραγωγή  : 	Motorino Amaranto, Rai Cinema</strong></p>
					<hr>
				</div>
				<div class="categories1">
				<h1>Υπόθεση</h1>
				<span><strong> Ο Guido και η Αντωνία είναι ένα νεαρό ζευγάρι<br> με αντίθετους χαρακτήρες και τα προγράμματα εργασίας :<br> εργάζεται  τη νύχτα ως θυρωρός σε ένα ξενοδοχείο ,<br> και εργάζεται ως υπάλληλος σε μια υπηρεσία ενοικίασης αυτοκινήτων .<br> Αυτή είναι η ιστορία τους που συμβαίνει στον Guido και Αντωνία ,<br> όταν αποφασίζουν να κάνουν ένα παιδί.</strong></span>
	            </div>
				
				
		     
				
			<div class="rating" >
			  <img src="star.jpg" width="40px;">
			     <input type="radio" name="stars" id="8_stars4" value="8" OnClick = "put_num4('8');">
                  <label class="stars" for="8_stars4">8 stars</label>
			     <input type="radio" name="stars" id="7_stars4" value="7" OnClick = "put_num4('7');">
                 <label class="stars" for="7_stars4">7 stars</label>
			    <input type="radio" name="stars" id="6_stars4" value="6" OnClick = "put_num4('6');">
                 <label class="stars" for="6_stars4">6 stars</label>
                 <input type="radio" name="stars" id="5_stars4" value="5" OnClick = "put_num4('5');">
                 <label class="stars" for="5_stars4">5 stars</label>
	             <input type="radio" name="stars" id="4_stars4" value="4" OnClick = "put_num4('4');">
                 <label class="stars" for="4_stars4">4 stars</label>
                 <input type="radio" name="stars" id="3_stars4" value="3" OnClick = "put_num4('3');">
                 <label class="stars" for="3_stars4">3 stars</label>
                 <input type="radio" name="stars" id="2_stars4" value="2" OnClick = "put_num4('2');">
                 <label class="stars" for="2_stars4">2 stars</label>
                 <input type="radio" name="stars" id="1_stars4" value="1" OnClick = "put_num4('1');" required>
                 <label class="stars" for="1_stars4">1 star</label>
				 <br>
				 
                 <img src="full_star.jpg" width="45px" style="position:absolute;left:80px;top:50px;">
                 
                 <span  class="label" style="position:absolute;top:61px;left:130px;"> <?php $sql = "SELECT AVG(movie5) FROM rating4"; 

$result = mysql_query($sql) or die(mysql_error());

while($row = mysql_fetch_array($result))
{

      echo $row['AVG(movie5)'];

} ?>/8 </span>
                 <img src="user_img.jpg" width="25px" style="position:absolute;left:320px;top:-1px;">
                <span class="label2" style="position:absolute;top:-1px;left:350px;">
			    <?php $select_rating=mysql_query("select movie5 from rating4");
                $total=mysql_num_rows($select_rating);
			    echo $total;
			?></span>
				 
				 <input type="hidden" name="dramaarating" id="dramaarating" value="0">
                <input type="submit" value="Rate!" name="submit_rating4" id="submitt" >
         
			</div>	
              </form>
	   
	   <h4>Rate This!</h4>
				

	 <div id="respond3">
     
     <h3>Leave a Comment</h3>
   
      <form    method="POST"   >

      <label for="comment_author" class="required">Your name</label>
      <input type="text"  id="tnameid" name = "namename"   required="required">

      <label for="email" class="required">Your email</label>
      <input type="email"  id="temailid" value="" name="email"  required="required">

      <label for="comment" class="required">Your message</label>
      <textarea  id="tmessageid" rows="10" name="message"   required="required"></textarea>

     
    
       <input name="submit4" type="submit" value="Submit comment" />
				
		 
	  
	  </form>
	   <br>
  <br>
  
  <h5>User Comments!</h5>
  <br>
  <br>
  <br>
      <fieldset>
	  <?php
	     $getquery = mysql_query("SELECT *FROM comment4 ORDER BY id DESC");
		 while($rows=mysql_fetch_array($getquery)){
			 $id = $rows['id'];
			 $name = $rows['Name'];
			 $commect= $rows['Comments'];
			  echo 'User Id => ' .$id .' <br/>';
			   echo 'User Name => ' .$name .' <br/>';
			    echo 'Comment => ' .$comment .' <br/>' .'<hr/>';
			  
			  
			  
		 }
	  
	  
	  
	  ?>
	  </fieldset>
	  </div>
	  </div>
				
		</article>
		<article > 
		 <div id="d_movie3">
		<form method="POST" >
		     
		    <legend class="legend4" >Love Finds You In Valentine</legend>
				         <img src="drama_movies3.jpg" width="470px" height="530px" style="position:absolute;top:900px;left:200px;" >

		  		
				<div class="categories">
				 <h2>Πληροφορίες</h2>
					<p><a ><strong> Κυκλοφορία :  2016 </a></strong></p>
					<hr>
					<p><strong> Διάρκεια  :  101' </strong></p>
					<hr>
					<p><strong> Χώρα  :  Αμερική </strong></p>
					<hr>
					<p><strong> Γλώσσα  :  English </strong></p>
					<hr>
					<p><strong>Παραγωγή  : Largo Entertainment </strong></p>
					<hr>
				</div>
				<div class="categories1">
				<h1>Υπόθεση</h1>
				<span><strong> Η Kennedy Blaine ,<br>  κορίτσι της Καλιφόρνιας,<br> κληρονομεί ένα αγρόκτημα στη μικρή πόλη<br> του Αγίου Βαλεντίνου στη Νεμπράσκα .<br> Πριν πουλήσει το ακίνητο ,<br> αποφασίζει να περάσει το καλοκαίρι στο σπίτι της<br> και να μάθει περισσότερα για την οικογένειά της. </strong></span>
	            </div>
				
				

				
			<div class="rating" >
			  <img src="star.jpg" width="40px;">
			     <input type="radio" name="stars" id="8_stars5" value="8" OnClick = "put_num5('8');">
                  <label class="stars" for="8_stars5">8 stars</label>
			     <input type="radio" name="stars" id="7_stars5" value="7" OnClick = "put_num5('7');">
                 <label class="stars" for="7_stars5">7 stars</label>
			    <input type="radio" name="stars" id="6_stars5" value="6" OnClick = "put_num5('6');">
                 <label class="stars" for="6_stars5">6 stars</label>
                 <input type="radio" name="stars" id="5_stars5" value="5" OnClick = "put_num5('5');">
                 <label class="stars" for="5_stars5">5 stars</label>
	             <input type="radio" name="stars" id="4_stars5" value="4" OnClick = "put_num5('4');">
                 <label class="stars" for="4_stars5">4 stars</label>
                 <input type="radio" name="stars" id="3_stars5" value="3" OnClick = "put_num5('3');">
                 <label class="stars" for="3_stars5">3 stars</label>
                 <input type="radio" name="stars" id="2_stars5" value="2" OnClick = "put_num5('2');">
                 <label class="stars" for="2_stars5">2 stars</label>
                 <input type="radio" name="stars" id="1_stars5" value="1" OnClick = "put_num5('1');" required>
                 <label class="stars" for="1_stars5">1 star</label>
				 <br>
				 <br>
                 <img src="full_star.jpg" width="45px" style="position:absolute;left:80px;top:50px;">
                 
                 <span  class="label" style="position:absolute;top:61px;left:130px;"> <?php $sql = "SELECT AVG(movie6) FROM rating5"; 

$result = mysql_query($sql) or die(mysql_error());

while($row = mysql_fetch_array($result))
{

      echo $row['AVG(movie6)'];

} ?>/8 </span>
                 <img src="user_img.jpg" width="25px" style="position:absolute;left:320px;top:-1px;">
                <span class="label2" style="position:absolute;top:-1px;left:350px;">
			    <?php $select_rating=mysql_query("select movie6 from rating5");
                $total=mysql_num_rows($select_rating);
			    echo $total;
			?></span>
				 
				 <input type="hidden" name="dramaaarating" id="dramaaarating" value="0">
                <input type="submit" value="Rate!" name="submit_rating5" id="submitt" >
           </div>
              </form>
	   
	  
				<h4><strong>Rate  This!</strong></h4>

	 <div id="respond4">
     
     <h3>Leave a Comment</h3>
   
      <form    method="POST"   >

      <label for="comment_author" class="required">Your name</label>
      <input type="text" id="tnameid" name = "namename"   required="required">

      <label for="email" class="required">Your email</label>
      <input type="email"  id="temailid" value="" name="email"  required="required">

      <label for="comment" class="required">Your message</label>
      <textarea  id="tmessageid" rows="10" name="message"   required="required"></textarea>

     
    
       <input name="submit5" type="submit" value="Submit comment" />
				
		 
	  
	  </form>
	   <br>
  <br>
  
  <h5>User Comments!</h5>
  <br>
  <br>
  <br>
  <fieldset>
	  <?php
	     $getquery = mysql_query("SELECT *FROM comment5 ORDER BY id DESC");
		 while($rows=mysql_fetch_array($getquery)){
			 $id = $rows['id'];
			 $name = $rows['Name'];
			 $commect= $rows['Comments'];
			 echo 'User Id => ' .$id .' <br/>';
			   echo 'User Name => ' .$name .' <br/>';
			    echo 'Comment => ' .$comment .' <br/>' .'<hr/>';
			  
			  
			  
		 }
	  
	  
	  
	  ?>
	  </fieldset>
	  </div>
	  </div>
				
		</article>
	    <article >
		<div id="h_movie1">
		<form method="POST" >
		      
		    <legend class="legend4" >Somnia</legend>
				         <img src="horror_movies1.jpg" width="470px" height="530px" style="position:absolute;top:900px;left:200px;" >

		  		
				<div class="categories">
				 <h2>Πληροφορίες</h2>
					<p><a ><strong> Κυκλοφορία :  2015 </a></strong></p>
					<hr>
					<p><strong> Διάρκεια  :  131' </strong></p>
					<hr>
					<p><strong> Χώρα  :  Αμερική </strong></p>
					<hr>
					<p><strong> Γλώσσα  :  English </strong></p>
					<hr>
					<p><strong>Παραγωγή  : Relativity Media </strong></p>
					<hr>
				</div>
				<div class="categories1">
				<h1>Υπόθεση</h1>
				<span><strong>Η Τζέσι (Κέιτ Μπόσγουορθ) και ο Μαρκ (ΤόμαςΤζέιν) <br> αποφασίζουν να υιοθετήσουν ένα 8χρονο παιδί, τον Κόντι.<br> Χωρίς να το γνωρίζουν, ο Κόντι φοβάται να πέσει για ύπνο.<br> Στην αρχή υποθέτουν πως ο φόβος του είναι ψυχολογικός,<br> και προέρχεται από το ασταθές περιβάλλον <br> των προηγούμενων οικογενειών με τις οποίες διέμενε.<br> Σύντομα όμως θα ανακαλύψουν την πραγματική αιτία:<br> τα όνειρα του Κόντι γίνονται πραγματικότητα, ενόσω ο ίδιος κοιμάται.<br> Τη μια στιγμή βλέπουν την εντυπωσιακή φαντασία των ονείρων του<br> να γίνεται πράξη και την επόμενη την τρομακτική φύση των εφιαλτών του.</strong></span>
	            </div>
				
			
		     
					
			<div class="rating" >
			  <img src="star.jpg" width="40px;">
			     <input type="radio" name="stars" id="8_stars6" value="8" OnClick = "put_num6('8');">
                  <label class="stars" for="8_stars6">8 stars</label>
			     <input type="radio" name="stars" id="7_stars6" value="7" OnClick = "put_num6('7');">
                 <label class="stars" for="7_stars6">7 stars</label>
			    <input type="radio" name="stars" id="6_stars6" value="6" OnClick = "put_num6('6');">
                 <label class="stars" for="6_stars6">6 stars</label>
                 <input type="radio" name="stars" id="5_stars6" value="5" OnClick = "put_num6('5');">
                 <label class="stars" for="5_stars6">5 stars</label>
	             <input type="radio" name="stars" id="4_stars6" value="4" OnClick = "put_num6('4');">
                 <label class="stars" for="4_stars6">4 stars</label>
                 <input type="radio" name="stars" id="3_stars6" value="3" OnClick = "put_num6('3');">
                 <label class="stars" for="3_stars6">3 stars</label>
                 <input type="radio" name="stars" id="2_star6" value="2" OnClick = "put_num6('2');">
                 <label class="stars" for="2_stars6">2 stars</label>
                 <input type="radio" name="stars" id="1_stars6" value="1" OnClick = "put_num6('1');" required>
                 <label class="stars" for="1_stars6">1 star</label>
				 <br>
				 <br>
                 
                  <img src="full_star.jpg" width="45px" style="position:absolute;left:80px;top:50px;">
                 
                 <span  class="label" style="position:absolute;top:61px;left:130px;"> <?php $sql = "SELECT AVG(movie7) FROM rating6"; 

$result = mysql_query($sql) or die(mysql_error());

while($row = mysql_fetch_array($result))
{

      echo $row['AVG(movie7)'];

} ?>/8 </span>


                <img src="user_img.jpg" width="25px" style="position:absolute;left:320px;top:-1px;">
                <span class="label2" style="position:absolute;top:-1px;left:350px;">
			    <?php $select_rating=mysql_query("select movie7 from rating6");
                $total=mysql_num_rows($select_rating);
			    echo $total;
			?></span>
				 
				 <input type="hidden" name="horrorrating" id="horrorrating" value="0">
                <input type="submit" value="Rate!" name="submit_rating6" id="submitt" >
           </div>
				
              </form>
	   
	   
				<h4><strong>Rate This!</strong></h4>

	 <div id="respond">
     
     <h3>Leave a Comment</h3>
   
      <form    method="POST"  >

      <label for="comment_author" class="required">Your name</label>
      <input type="text"  id="tnameid" name = "namename"   required="required">

      <label for="email" class="required">Your email</label>
      <input type="email"  id="temailid" value="" name="email"  required="required">

      <label for="comment" class="required">Your message</label>
      <textarea  id="tmessageid" rows="10" name="message"   required="required"></textarea>

     
    
       <input name="submit6" type="submit" value="Submit comment" />
				
		 
	  
	  </form>
	   <br>
  <br>
  
  <h5>User Comments!</h5>
  <br>
  <br>
  <br>
      <fieldset>
	  <?php
	     $getquery = mysql_query("SELECT *FROM comment6 ORDER BY id DESC");
		 while($rows=mysql_fetch_array($getquery)){
			 $id = $rows['id'];
			 $name = $rows['Name'];
			 $commect= $rows['Comments'];
			 echo 'User Id => ' .$id .' <br/>';
			   echo 'User Name => ' .$name .' <br/>';
			    echo 'Comment => ' .$comment .' <br/>' .'<hr/>';
			  
			  
			  
		 }
	  
	  
	  
	  ?>
	  </fieldset>
	  </div>
	  </div>
		</article>
		<article >
		<div id="h_movie2">
		<form method="POST"  >
		    
		    <legend class="legend4" >Stir Of  Echoes 2</legend>
				         <img src="horror_movies2.jpg" width="470px" height="530px" style="position:absolute;top:900px;left:200px;" >

		  		
				<div class="categories">
				 <h2>Πληροφορίες</h2>
					<p><a ><strong> Κυκλοφορία :  2007 </a></strong></p>
					<hr>
					<p><strong> Διάρκεια  :  90' </strong></p>
					<hr>
					<p><strong> Χώρα  :  Αμερική </strong></p>
					<hr>
					<p><strong> Γλώσσα  :  English </strong></p>
					<hr>
					<p><strong>Παραγωγή  : Relativity Media </strong></p>
					<hr>
				</div>
				<div class="categories1">
				<h1>Υπόθεση</h1>
				<span><strong>Ο Ted Cogan είναι ένας στρατιώτης της ΗΠΑ στις μάχες στο Ιράκ ,<br> όταν τραυματίστηκε απο έκρηξη <br>κατά τη διάρκεια μιας επίθεσης που άφησε ένα αθώο ιρακινή οικογένεια νεκρή ,<br> και σε κωματώδη κατάσταση με τραύμα στο κεφάλι .<br> Κατά την αφύπνιση ,o Τεντ επιστρέφει στο σπίτι του στο Σικάγο <br> και αφού έχει συναντήσεις των ολοένα και τρομακτικό οράματα των νεκρών ανθρώπων ,<br> όταν έκαψαν ένα θύμα ,<br> ο Τεντ αρχίζει να συνειδητοποιεί ότι η ζημία του έχει ξεκλειδωθεί κάποια δώρο της διόρασης<br> το οποία έχει ως στόχο  φαντάσματα να ζητούν τη βοήθειά του .</strong></span>
	            </div>
				
				
		      
				
			<div class="rating" >
			  <img src="star.jpg" width="40px;">
			     <input type="radio" name="stars" id="8_stars7" value="8" OnClick = "put_num7('8');">
                  <label class="stars" for="8_stars7">8 stars</label>
			     <input type="radio" name="stars" id="7_stars7" value="7" OnClick = "put_num7('7');">
                 <label class="stars" for="7_stars7">7 stars</label>
			    <input type="radio" name="stars" id="6_stars7" value="6" OnClick = "put_num7('6');">
                 <label class="stars" for="6_stars7">6 stars</label>
                 <input type="radio" name="stars" id="5_stars7" value="5" OnClick = "put_num7('5');">
                 <label class="stars" for="5_stars7">5 stars</label>
	             <input type="radio" name="stars" id="4_stars7" value="4" OnClick = "put_num7('4');">
                 <label class="stars" for="4_stars7">4 stars</label>
                 <input type="radio" name="stars" id="3_stars7" value="3" OnClick = "put_num7('3');">
                 <label class="stars" for="3_stars7">3 stars</label>
                 <input type="radio" name="stars" id="2_stars7" value="2" OnClick = "put_num7('2');">
                 <label class="stars" for="2_stars7">2 stars</label>
                 <input type="radio" name="stars" id="1_stars7" value="1" OnClick = "put_num7('1');" required>
                 <label class="stars" for="1_stars7">1 star</label>
				 <br>
				 <br>
                
                 <img src="full_star.jpg" width="45px" style="position:absolute;left:80px;top:50px;">
                 
                 <span  class="label" style="position:absolute;top:61px;left:130px;"> <?php $sql = "SELECT AVG(movie8) FROM rating7"; 

$result = mysql_query($sql) or die(mysql_error());

while($row = mysql_fetch_array($result))
{

      echo $row['AVG(movie8)'];

} ?>/8 </span>
                  <img src="user_img.jpg" width="25px" style="position:absolute;left:320px;top:-1px;">
                <span class="label2" style="position:absolute;top:-1px;left:350px;">
			    <?php $select_rating=mysql_query("select movie8 from rating7");
                $total=mysql_num_rows($select_rating);
			    echo $total;
			?></span>
				 
				 <input type="hidden" name="horrorrrating" id="horrorrrating" value="0">
                <input type="submit" value="Rate!" name="submit_rating7" id="submitt" >
           </div>
			
              </form>
	   
	   
				<h4><strong>Rate  This!</strong></h4>

	 <div id="respond5">
     
     <h3>Leave a Comment</h3>
   
      <form    method="POST"  >

      <label for="comment_author" class="required">Your name</label>
      <input type="text"  id="tnameid" name = "namename"   required="required">

      <label for="email" class="required">Your email</label>
      <input type="email"  id="temailid" value="" name="email"  required="required">

      <label for="comment" class="required">Your message</label>
      <textarea  id="tmessageid" rows="10" name="message"   required="required"></textarea>

     
    
       <input name="submit7" type="submit" value="Submit comment" />
				
		 
	  
	  </form>
	     <br>
  <br>
  
  <h5>User Comments!</h5>
  <br>
  <br>
  <br>
     <fieldset>
	  <?php
	     $getquery = mysql_query("SELECT *FROM comment7 ORDER BY id DESC");
		 while($rows=mysql_fetch_array($getquery)){
			 $id = $rows['id'];
			 $name = $rows['Name'];
			 $commect= $rows['Comments'];
			  echo 'User Id => ' .$id .' <br/>';
			   echo 'User Name => ' .$name .' <br/>';
			    echo 'Comment => ' .$comment .' <br/>' .'<hr/>';
			  
			  
			  
		 }
	  
	  
	  
	  ?>
	  </fieldset>
	  
	  </div>
	  </div>
		
		
		
		
		
		</article>
		<article >
		 <div id="h_movie3">
		<form method="POST"   >
		     
		    <legend class="legend4" >The Doll Master</legend>
				         <img src="horror_movies3.jpg" width="470px" height="530px" style="position:absolute;top:900px;left:200px;" >

		  		
				<div class="categories">
				 <h2>Πληροφορίες</h2>
					
					<p><a ><strong> Κυκλοφορία :  2004 </a></strong></p>
					<hr>
					<p><strong> Διάρκεια  :  90' </strong></p>
					<hr>
					<p><strong> Χώρα  :  Νότια Κορέα </strong></p>
					<hr>
					<p><strong> Γλώσσα  :  Korean </strong></p>
					<hr>
					<p><strong>Παραγωγή  : Relativity Media </strong></p>
					<hr>
				</div>
				<div class="categories1">
				<h1>Υπόθεση</h1>
				<span><strong>Μερικές δεκαετίες πριν υπήρξε ένας άντρας ο οποίος ερωτεύτηκε μια γυναίκα με κιμονό!<br> Την αγάπησε τόσο πολύ που έφτιαξε μια πανομοιότυπη της κούκλα<br> με κιμονό και την φρόντιζε σαν να ήταν εκείνη!<br> Όταν μια μέρα η γυναίκα συνειδητοποιεί την αγάπη του για εκείνη και την αποδέχεται,<br> η κούκλα μένει παραμελημένη απο τον δημιουργό της...</strong></span>
	            </div>
				
				
		      
				
			<div class="rating" >
			  <img src="star.jpg" width="40px;">
			     <input type="radio" name="stars" id="8_stars8" value="8" OnClick = "put_num8('8');">
                  <label class="stars" for="8_stars8">8 stars</label>
			     <input type="radio" name="stars" id="7_stars8" value="7" OnClick = "put_num8('7');">
                 <label class="stars" for="7_stars8">7 stars</label>
			    <input type="radio" name="stars" id="6_stars8" value="6" OnClick = "put_num8('6');">
                 <label class="stars" for="6_stars8">6 stars</label>
                 <input type="radio" name="stars" id="5_stars8" value="5" OnClick = "put_num8('5');">
                 <label class="stars" for="5_stars8">5 stars</label>
	             <input type="radio" name="stars" id="4_stars8" value="4" OnClick = "put_num8('4');">
                 <label class="stars" for="4_stars8">4 stars</label>
                 <input type="radio" name="stars" id="3_stars8" value="3" OnClick = "put_num8('3');">
                 <label class="stars" for="3_stars8">3 stars</label>
                 <input type="radio" name="stars" id="2_stars8" value="2" OnClick = "put_num8('2');">
                 <label class="stars" for="2_stars8">2 stars</label>
                 <input type="radio" name="stars" id="1_stars8" value="1" OnClick = "put_num8('1');" required>
                 <label class="stars" for="1_stars8">1 star</label>
				 <br>
				 <br>
                
                  <img src="full_star.jpg" width="45px" style="position:absolute;left:80px;top:50px;">
                 
                 <span  class="label" style="position:absolute;top:61px;left:130px;"> <?php $sql = "SELECT AVG(movie9) FROM rating8"; 

$result = mysql_query($sql) or die(mysql_error());

while($row = mysql_fetch_array($result))
{

      echo $row['AVG(movie9)'];

} ?>/8 </span>
				 <img src="user_img.jpg" width="25px" style="position:absolute;left:320px;top:-1px;">
                <span class="label2" style="position:absolute;top:-1px;left:350px;">
			    <?php $select_rating=mysql_query("select movie9 from rating8");
                $total=mysql_num_rows($select_rating);
			    echo $total;
			?></span>
				 <input type="hidden" name="horrorrrrating" id="horrorrrrating" value="0">
                <input type="submit" value="Rate!" name="submit_rating8" id="submitt" >
         
			</div>	
              </form>
	   
	  
				<h4><strong>Rate  This!</strong></h4>

	 <div id="respond3">
     
     <h3>Leave a Comment</h3>
   
      <form    method="POST"   >

      <label for="comment_author" class="required">Your name</label>
      <input type="text"  id="tnameid" name = "namename"   required="required">

      <label for="email" class="required">Your email</label>
      <input type="email"  id="temailid" value="" name="email"  required="required">

      <label for="comment" class="required">Your message</label>
      <textarea  id="tmessageid" rows="10" name="message"   required="required"></textarea>

     
    
       <input name="submit8" type="submit" value="Submit comment" />
				
		 
	  
	  </form>
	     <br>
  <br>
  
  <h5>User Comments!</h5>
  <br>
  <br>
  <br>
  <fieldset>
	  <?php
	     $getquery = mysql_query("SELECT *FROM comment8 ORDER BY id DESC");
		 while($rows=mysql_fetch_array($getquery)){
			 $id = $rows['id'];
			 $name = $rows['Name'];
			 $commect= $rows['Comments'];
			  echo 'User Id => ' .$id .' <br/>';
			   echo 'User Name => ' .$name .' <br/>';
			    echo 'Comment => ' .$comment .' <br/>' .'<hr/>';
			  
			  
			  
		 }
	  
	  
	  
	  ?>
	  </fieldset>
	  
	  </div>
	  </div>
				 
		</article>
		<article >
		<div id="h_movie4">
		<form method="POST"  >
		     
		    <legend class="legend4" >Insidious 2</legend>
				         <img src="horror_movies4.jpg" width="470px" height="530px" style="position:absolute;top:900px;left:200px;" >

		  		
				<div class="categories">
				 <h2>Πληροφορίες</h2>
					<p><a ><strong> Κυκλοφορία :  2013 </a></strong></p>
					<hr>
					<p><strong> Διάρκεια  :  106' </strong></p>
					<hr>
					<p><strong> Χώρα  :  Αμερική  </strong></p>
					<hr>
					<p><strong> Γλώσσα  :  English</strong></p>
					<hr>
					<p><strong>Παραγωγή  : Viera Media </strong></p>
					<hr>
				</div>
				<div class="categories1">
				<h1>Υπόθεση</h1>
				<span><strong>Ο Τζος (Πάτρικ Γουίλσον) και η Ρενέ (Ρόουζ Μπερν) <br> έχουν μια ευτυχισμένη οικογένεια με τρία παιδιά.<br> Όταν η τραγωδία θα χτυπήσει το μικρό τους γιο,<br> ο Τζος και η Ρενέ αρχίζουν να βιώνουν πράγματα <br> που δεν μπορούν να εξηγηθούν επιστημονικά.</strong></span>
	            </div>
					
			<div class="rating" >
			  <img src="star.jpg" width="40px;">
			     <input type="radio" name="stars" id="8_stars9" value="8" OnClick = "put_num9('8');">
                  <label class="stars" for="8_stars9">8 stars</label>
			     <input type="radio" name="stars" id="7_stars9" value="7" OnClick = "put_num9('7');">
                 <label class="stars" for="7_stars9">7 stars</label>
			    <input type="radio" name="stars" id="6_stars9" value="6" OnClick = "put_num9('6');">
                 <label class="stars" for="6_stars9">6 stars</label>
                 <input type="radio" name="stars" id="5_stars9" value="5" OnClick = "put_num9('5');">
                 <label class="stars" for="5_stars9">5 stars</label>
	             <input type="radio" name="stars" id="4_stars9" value="4" OnClick = "put_num9('4');">
                 <label class="stars" for="4_stars9">4 stars</label>
                 <input type="radio" name="stars" id="3_stars9" value="3" OnClick = "put_num9('3');">
                 <label class="stars" for="3_stars9">3 stars</label>
                 <input type="radio" name="stars" id="2_stars9" value="2" OnClick = "put_num9('2');">
                 <label class="stars" for="2_stars9">2 stars</label>
                 <input type="radio" name="stars" id="1_stars9" value="1" OnClick = "put_num9('1');" required>
                 <label class="stars" for="1_stars9">1 star</label>
				 <br>
				 <br>
                
                <img src="full_star.jpg" width="45px" style="position:absolute;left:80px;top:50px;">
                 
                 <span  class="label" style="position:absolute;top:61px;left:130px;"> <?php $sql = "SELECT AVG(movie10) FROM rating9"; 

$result = mysql_query($sql) or die(mysql_error());

while($row = mysql_fetch_array($result))
{

      echo $row['AVG(movie10)'];

} ?>/8 </span>
				 <img src="user_img.jpg" width="25px" style="position:absolute;left:320px;top:-1px;">
                <span class="label2" style="position:absolute;top:-1px;left:350px;">
			    <?php $select_rating=mysql_query("select movie10 from rating9");
                $total=mysql_num_rows($select_rating);
			    echo $total;
			?></span>
				 <input type="hidden" name="horrorrrrrating" id="horrorrrrrating" value="0">
                <input type="submit" value="Rate!" name="submit_rating9" id="submitt" >
           </div>
				
              </form>
	   
	  
				<h4><strong>Rate This!</strong></h4>
	
	 <div id="respond6">
     
     <h3>Leave a Comment</h3>
   
      <form    method="POST"   >

      <label for="comment_author" class="required">Your name</label>
      <input type="text"  id="tnameid" name = "namename"   required="required">

      <label for="email" class="required">Your email</label>
      <input type="email"  id="temailid" value="" name="email"  required="required">

      <label for="comment" class="required">Your message</label>
      <textarea  id="tmessageid" rows="10" name="message"   required="required"></textarea>

     
    
       <input name="submit9" type="submit" value="Submit comment" />
				
		 
	  
	  </form>
	  <br>
  <br>
  
  <h5>User Comments!</h5>
  <br>
  <br>
  <br>
  <fieldset>
	  <?php
	     $getquery = mysql_query("SELECT *FROM comment9 ORDER BY id DESC");
		 while($rows=mysql_fetch_array($getquery)){
			 $id = $rows['id'];
			 $name = $rows['Name'];
			 $commect= $rows['Comments'];
			  echo 'User Id => ' .$id .' <br/>';
			   echo 'User Name => ' .$name .' <br/>';
			    echo 'Comment => ' .$comment .' <br/>' .'<hr/>';
			  
			  
			  
		 }
	  
	  
	  
	  ?>
	  </fieldset>
	  
	  
	  </div>
	  </div>
		
		</article>
	  </section>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <footer>
			            
				       
				      <div id="footerr" > 
					    &copy; 2016
	                    <a href="http://star-movie.net/" target="_blank" style="text-decoration:none;">Star Movies</a>.
	                    All rights reserved by Chis_Markellos<br>
					   Καλώς ήρθατε!!<br>
					   Αγαπητοί φίλοι/ες σας καλωσορίζουμε στην ιστοσελίδα www.star_movies.net<br>
					   Ελπίζουμε ότι θα βρείτε εδώ αυτό που ψάχνατε, να βαθμολογίσετε,<br>
					   καθώς και να σχολιάσετε τις ταινίες μας!<br>
					   Κρίνεται απαραίτητη η εγγραφή σας.<br>
					    Καλή διασκέδαση!<br>
						</div>
                      <img src="footer1.jpg" id="footer1" width="180px" style="text-decoration:none;">
					  <img src="footer2.jpg" id="footer2" width="180px" style="text-decoration:none;">

					   
					
			
				
				
	              
	        </footer>
	  
	  
	   </body>
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   </html>
	   