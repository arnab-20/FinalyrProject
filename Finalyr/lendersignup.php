<?php
 define('DB_HOST', 'localhost'); 
 define('DB_NAME', 'finalyr');
 define('DB_USER','root');
 define('DB_PASSWORD',''); 
 $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
 $db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
 function NewUser()
{
	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
	$db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
	$leID = !empty($leID) ? "'$leID'" : "NULL";
	$lpwd = !empty($lpwd) ? "'$lpwd'" : "NULL";
	$status = !empty($status) ? "'$status'" : "not active";
	$Name = $_POST['Name'];
	$dob = $_POST['dob'];
	$Gender =  $_POST['Gender'];
	$aadhar = $_POST['aadhar'];
	$email = $_POST['email'];
	$mob = $_POST['mob'];
	$address = $_POST['address'];
	$pincode = $_POST['pin'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$pan = $_POST['pan'];
	$prof = $_POST['prof'];
	$sal = $_POST['sal'];
	$bank = $_POST['bank'];
	$ifsc = $_POST['ifsc'];
	$micr = $_POST['micr'];
	$branch = $_POST['branch'];
	$bpin= $_POST['bpin'];
	$bcity = $_POST['bcity'];
	$bstate = $_POST['bstate'];
	$badd = $_POST['badd'];
	$actype = $_POST['actype'];
	$acno = $_POST['acno'];
	
	$query = "insert into lenders values('$leID','$lpwd','$status','$Name','$dob','$Gender','$aadhar','$email','$mob','$address','$pincode','$city','$state','$pan','$prof','$sal','$bank','$ifsc','$micr','$branch','$bpin','$bcity','$bstate','$badd','$actype','$acno')";
	$data = mysqli_query($conn,$query)or die("Error: ".mysqli_error($conn));
	if($data)
	{    header("Location: redirect/redirectL.html"); 
          exit;
    
	}
}
function SignUp()
{
	$x=$_POST['pan'];
	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
	$db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
if(!empty($x))   
{   

    $sql="SELECT * FROM lenders WHERE pan = '$x'"; 
	$query = mysqli_query($conn,$sql);
	if(!$row = mysqli_fetch_array($query))
	{
		newuser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
if(isset($_POST['submit']))
{
	SignUp();
}

?>