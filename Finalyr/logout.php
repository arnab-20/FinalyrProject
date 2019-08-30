<?php 
session_start();
session_destroy();
header("Location:redirect/redirectlogout.html");
exit;

 //echo "logout Success";
 //echo "<a href='1stpage.html'>Proceed to home</a>";

 ?>