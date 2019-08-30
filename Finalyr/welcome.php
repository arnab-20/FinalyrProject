<?php 
 session_start();
 if(isset($_SESSION['pan'])){
	 
 //echo "Welcome ";//.$_SESSION['Username'];
 
 echo "<a href='Customer_home.php'>Proceed to Home</a>";
}
 else{
	 echo "Invalid Session";
	// header("location:APPLY_NOW.html");
 }
 ?>