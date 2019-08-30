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
		$x=$_POST['lid'];
		$y=$_POST['lpass'];
		if(!empty($x)) 
		       { 
		         $sql="SELECT * FROM lenders where leID ='$x' AND lpwd ='$y'";
				 
		         $query = mysqli_query($con,$sql); 
				 $row = mysqli_fetch_array($query); 
			if(!empty($row['leID']) AND !empty($row['lpwd'])) 
			   {
				   $_SESSION['leID'] = $row['leID'];
				   //echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...   ".$_SESSION['pan'];
				   header("location:redirect/redirectLlogin.html");
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
	   if(isset($_POST['submitl'])) 
	       { 
	          SignIn(); 
		    } 
?>
