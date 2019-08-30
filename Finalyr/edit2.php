<?php 

    define('DB_HOST', 'localhost'); 
    define('DB_NAME', 'finalyr');
	define('DB_USER','root');
	define('DB_PASSWORD',''); 
	
		
		if(isset($_POST['edit']))
		{
		$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
	    $db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
		$id=$_POST['uID'];
		$emailx=$_POST['emailx'];
		$mobx=$_POST['mobx'];
		
			$chg_pwd=mysqli_query($conn,"select * from borrowers where bID='$id");
		$chg_pwd1=mysqli_fetch_array($conn,$chg_pwd);
		$data_pwd=$chg_pwd1['email'];
		if($data_pwd!=$emailx){
		
			$update_pwd=mysqli_query($conn,"update borrowers set email='$emailx' where bID='$id'");
			//echo "<script>alert('Update Sucessfully');</script>";
			header("location:1stpage.html");
		    exit;
		}
		
		
		else
		{
		echo "<script>alert('You are giving the same email id'); </script>";
		}
		$chg_pwd2=mysqli_query($conn,"select * from borrowers where bID='$id");
		$chg_pwd3=mysqli_fetch_array($conn,$chg_pwd2);
		$data_pwd1=$chg_pwd3['mob'];
		if($data_pwd1!=$mobx){
		
			$update_pwd=mysqli_query($conn,"update borrowers set mob='$mobx' where bID='$id'");
			//echo "<script>alert('Update Sucessfully');</script>";
			header("location:1stpage.html");
		    exit;
		}
		
		
		else
		{
		echo "<script>alert('You are giving the same mobile number'); </script>";
		}
		
		}
		
	?>
	
	
	