<!DOCTYPE html>
<html>
<head>
<title>Read Data From Database Using PHP - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Read Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db( $connection,"finalyr"); // Selecting Database
//MySQL Query to read data
$query = mysqli_query("select * from borrowers",$connection);
//while ($row = mysqli_fetch_array($query)) {
//echo "<b><a href = "ex.php?id={$row['bID']}">{$row['Name']}</a></b>";
//echo "<br />";
//}
?>
</div>
<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
$query1 = mysqli_query("select * from borrowers where bID=$id", $connection);
while ($row1 = mysqli_fetch_array($query1)) {
?>
<div class="form">
<h2>---Details---</h2>
<!-- Displaying Data Read From Database -->
<span>Name:</span> <?php echo $row1['Name']; ?>
<span>E-mail:</span> <?php echo $row1['email']; ?>
<span>Contact No:</span> <?php echo $row1['mob']; ?>
<span>Address:</span> <?php echo $row1['address']; ?>
</div>
<?php
}
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<?php
mysqli_close($connection); // Closing Connection with Server
?>
</body>
</html>