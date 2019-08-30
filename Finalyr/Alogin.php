<?php
 define('DB_HOST', 'localhost'); 
 define('DB_NAME', 'finalyr');
 define('DB_USER','root');
 define('DB_PASSWORD',''); 
 $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
 $db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());

 function SignIn() { 
		$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
        $db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
		session_start(); 
		$x=$_POST['aid'];
		$y=$_POST['apass'];
		if(!empty($x)) 
		       { 
		         $sql="SELECT * FROM admin where aID ='$x' AND apwd ='$y'";
				 
		         $query = mysqli_query($con,$sql); 
				 $row = mysqli_fetch_array($query); 
			if(!empty($row['aID']) AND !empty($row['apwd'])) 
			   {
				   $_SESSION['aID'] = $row['aID'];
				   //echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...   ".$_SESSION['pan'];
				   header("location:redirect/redirectAlogin.html");
				   exit;
			   } 
			else 
			  { 
			     //echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
				 header("Location:redirect/redirectwrong.html");
				 exit;
	   		  } 
			 } 
			 } 
	   if(isset($_POST['submita'])) 
	       { 
	          SignIn(); 
		    } 
?>
