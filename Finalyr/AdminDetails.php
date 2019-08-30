<?php
  session_start();
  if(isset($_SESSION['aID']));

    ?>
<!DOCTYPE html> 
<html> 
    <head> 
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <meta charset="UTF- 8"> 
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <Link rel="stylesheet" type="text/css" href="styleAP.css"> 
		<link rel="shortcut icon" href="images/logo.png" type="image/png">
        <title> ADMIN PROFILE | FASTeLoan.com</title>         
        </Link>
    </head>
    <body >
	   
        <hr>
        <hr>
        <header id="header"> 
            <h1 id="headerh1"> F A S T e L o a n</h1> 
						<div class="dropdown" style=" margin-left: 1200px;"> 
							<span class="glyphicon glyphicon-triangle-bottom"></span>
                             <button class="dropbtn"><img src="images/userprofile.png" style="width: 40px;height: 40px;border-radius: 50%"> <?php echo $_SESSION['aID'];  ?></button>
                             <div class="dropdown-content">
                                 <a href="AdminDetails.php"><span class="glyphicon glyphicon-user"></span>  My Profile</a>
                                 <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a>
                             </div>
                        </div>
            <h4 id="headerh4" >. . .with you always </h4> 
            <div class="search"> 
            </div> 
            <center>
                <div id="navbar">
                    <ul>
                         <a href="Admin_home.php" id="linkref">HOME </a> 
                         <a href="3" id="linkref" >LOCATION </a>
                         <a href="Admin_home.php#about" id="linkref" >ABOUT US </a>
						 <a href="Admin_home.php#team" id="linkref" >TEAM </a>
                         <a href="3" id="linkref" >FAQs </a>	
                         <a href="Admin_home.php#contact" id="linkref" >CONTACT US </a>
                    </ul>
                </div>	
            </center>		 
        </header>
    
        <div class="w3-container">
            <div  class="col-sm-6">
                <div class="w3-card-4">
                    <header class="w3-container w3-blue">
                        <h1>Admin Profile</h1>
                    </header><br>
                    <div class="col-xs-3"> <!-- required for floating -->
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tabs-left">
                            <li class="active"><a href="#admin" data-toggle="tab">Admin Details</a></li>
                            <li><a href="#borrower" data-toggle="tab">Borrowers List</a></li>
                            <li><a href="#lender" data-toggle="tab">Lenders List</a></li>
                            <li><a href="#acrequest" data-toggle="tab">Account Request</a></li>
                        </ul>
                    </div>
                
                    <div class="col-xs-9">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="admin">
                                <?php
									$db_host = 'localhost'; // Nama Server
									$db_user = 'root'; // User Server
									$db_pass = ''; // Password Server
									$db_name = 'finalyr'; // Nama Database
									 
									$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
									if (!$conn) {
										die ('Fail to connect to MySQL: ' . mysqli_connect_error());   
									}
									  $id = $_SESSION['aID'];
									$sql = "SELECT  Name,email,mob FROM admin WHERE aID='$id'";
											 
									$query = mysqli_query($conn, $sql);
									 
									if (!$query) {
										die ('SQL Error: ' . mysqli_error($conn));
									}
									 
									
											 
									while ($row = mysqli_fetch_array($query))
									{
										echo '<div class="form">
											<!-- Displaying Data Read From Database -->
											<span>&nbsp;&nbsp;NAME :</span>&nbsp;&nbsp;&nbsp;'.$row['Name'].'<br><br>
											<span>&nbsp;&nbsp;E-MAIL ID :</span>&nbsp;&nbsp;&nbsp;'.$row['email'].'<br><br>
											<span>&nbsp;&nbsp;MOBILE NO. :</span>&nbsp;&nbsp;&nbsp;'.$row['mob'].'<br><br>
											</div>';
									}
									 
									// Should we need to run this? read section VII
									mysqli_free_result($query);
									 
									// Should we need to run this? read section VII
									mysqli_close($conn);
									?>
                            </div>
		
                            <div class="tab-pane" id="borrower">
                                <?php
									$db_host = 'localhost'; // Nama Server
									$db_user = 'root'; // User Server
									$db_pass = ''; // Password Server
									$db_name = 'finalyr'; // Nama Database
									 
									$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
									if (!$conn) {
										die ('Fail to connect to MySQL: ' . mysqli_connect_error());   
									}
									$sql = "SELECT  Name,email,mob,pan,status FROM borrowers";
											 
									$query = mysqli_query($conn, $sql);
									 
									if (!$query) {
										die ('SQL Error: ' . mysqli_error($conn));
									}
									 
									echo '<br><br><table class="table table-striped">
											<thead>
												<tr>
													<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME</th>
													<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-MAIL ID</th>
													<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MOBILE NO.</th>
													<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PAN NO.</th>
													<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STATUS</th>
												</tr>
											</thead>
											<tbody>';
											 
									while ($row = mysqli_fetch_array($query))
									{
										echo '<tr>
												<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['Name'].'</td>
												<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['email'].'</td>
												<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['mob'].'</td>
												<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['pan'].'</td>
												<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['status'].'</td>
												
											</tr>';
									}
									echo '
										</tbody>
									</table><br><br>';
									 
									// Should we need to run this? read section VII
									mysqli_free_result($query);
									 
									// Should we need to run this? read section VII
									mysqli_close($conn);
									?>
                            </div>
                            
                            <div class="tab-pane" id="lender">
                                <?php
									$db_host = 'localhost'; // Nama Server
									$db_user = 'root'; // User Server
									$db_pass = ''; // Password Server
									$db_name = 'finalyr'; // Nama Database
									 
									$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
									if (!$conn) {
										die ('Fail to connect to MySQL: ' . mysqli_connect_error());   
									}
									$sql = "SELECT  Name,email,mob,pan,status FROM lenders";
											 
									$query = mysqli_query($conn, $sql);
									 
									if (!$query) {
										die ('SQL Error: ' . mysqli_error($conn));
									}
									 
									echo '<br><br><table class="table table-striped">
											<thead>
												<tr>
													<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME</th>
													<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-MAIL ID</th>
													<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MOBILE NO.</th>
													<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PAN NO.</th>
													<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STATUS</th>
												</tr>
											</thead>
											<tbody>';
											 
									while ($row = mysqli_fetch_array($query))
									{
										echo '<tr>
												<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['Name'].'</td>
												<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['email'].'</td>
												<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['mob'].'</td>
												<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['pan'].'</td>
												<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['status'].'</td>
												
											</tr>';
									}
									echo '
										</tbody>
									</table><br><br>';
									 
									// Should we need to run this? read section VII
									mysqli_free_result($query);
									 
									// Should we need to run this? read section VII
									mysqli_close($conn);
									?>
                            </div>
		
                           
                              <div class="tab-pane" id="acrequest">
                                  <form class="f1" role="form" method ="post" action="authentication.php" enctype="multipart/form-data">
								     
                                    <div class="form-group">
                                        <label for="email">Enter User's mail ID:</label>
                                        <input type="email" name="email"  size="40" class="form-control" id="email" placeholder = "Enter Email ID " required> 
                                    </div>
                                      
                                    <div class="form-group">
                                    
                                                <label for="sub">Subject:</label>
                                                <input type="text" class="form-control" name ="sub" id="sub" placeholder="Enter Subject" required>
                                            </div>
                                        
                                      <div class="form-group">
                                        <label for="body">Message:</label>
                                          <textarea name="body"  rows=5 cols="20" class="form-control" id="email" placeholder = "Enter Approval Message" required> </textarea>
										  
                                    </div>
									<br>
                                    <button type="submit" class="btn btn-success">Send Mail</button><br><br>
             
                                </form>
								         <form method="post" action="Gpwd.php">
	                                     <button type="submit"  class="btn btn-primary" style="margin-left: 600px">Generate Password</button> 
										 </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>