<?php
  session_start();
  if(isset($_SESSION['bID']));

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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <Link rel="stylesheet" type="text/css" href="styleUP.css"> 
		<link rel="shortcut icon" href="images/logo.png" type="image/png">
        <title> BORROWER PROFILE | FASTeLoan.com</title>  
        </Link>
    </head>  
    <body id="myPage" data-spy="scroll" data-target=".navbar"  data-offset="50">
	   
        <hr>
        <hr>
        <header id="header" style="background-image: url(images/under.png)"> 
            <h1 id="headerh1" href="#myPage"> F A S T e L o a n</h1> 
						<div class="dropdown" style=" margin-left: 1200px;"> 
							<span class="glyphicon glyphicon-triangle-bottom"></span>
                             <button class="dropbtn"><img src="images/userprofile.png" style="width: 40px;height: 40px;border-radius: 50%"> <?php echo $_SESSION['bID'];  ?></button>
                             <div class="dropdown-content">
                                 <a href="CustomerDetails.php"><span class="glyphicon glyphicon-user"></span>  My Profile</a>
                                 <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a>
                             </div>
                        </div>
            <h4 id="headerh4" style="font-weight:bold">. . .with you always </h4> 
            
            <center>
                <div id="navbar">
                    <ul>
                         <a href="Customer_home.php" id="linkref">HOME </a> 
                         <a href="location.php" id="linkref" >LOCATION </a>
                         <a href="Customer_home.php#about" id="linkref" >ABOUT US </a>
						 <a href="Customer_home.php#team" id="linkref" >TEAM </a>
                         <a href="faq/indexc.php" id="linkref" >FAQs </a>	
                         <a href="Customer_home.php#contact" id="linkref" >CONTACT US </a>
                    </ul>
                </div>
            </center>		 
        </header>
    	
        <div class="w3-container">
            <div  class="col-sm-8">
     
                <div class="w3-card-4" style="background-color: lightgreen">
                    <div class="w3-container w3-green">
                        <h1>Borrower Profile</h1>
                    </div><br>

                    <div class="col-xs-2" style="background-color: lightblue; width: 250px; margin-left: 10px"> <!-- required for floating -->
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tabs-left">
                            <li class="active"><a href="#account" id="tablist" data-toggle="tab"><b>Account Details</b></a></li>
                            <li><a href="#loan" id="tablist" data-toggle="tab"><b>Loan Details</b></a></li>
                            <li><a href="#cpass" id="tablist" data-toggle="tab"><b>Change Password</b></a></li>
                            <li><a href="#edit" id="tablist" data-toggle="tab"><b>Edit Profile</b></a></li>
                        </ul>
                    </div>
					        
					
					
					
					

                    <div class="col-xs-9">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="account"><br>
								<?php
									$db_host = 'localhost'; // Nama Server
									$db_user = 'root'; // User Server
									$db_pass = ''; // Password Server
									$db_name = 'finalyr'; // Nama Database
									 
									$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
									if (!$conn) {
										die ('Fail to connect to MySQL: ' . mysqli_connect_error());   
									}
									  $id = $_SESSION['bID'];
									$sql = "SELECT  Name,dob,email,mob,address,pincode,city,state FROM borrowers WHERE bID='$id'";
											 
									$query = mysqli_query($conn, $sql);
									 
									if (!$query) {
										die ('SQL Error: ' . mysqli_error($conn));
									}
									 
									
											 
									while ($row = mysqli_fetch_array($query))
									{
										echo '<div class="form">
											<!-- Displaying Data Read From Database -->
											<span>&nbsp;&nbsp;NAME :</span>&nbsp;&nbsp;&nbsp;'.$row['Name'].'<br><br>
											<span>&nbsp;&nbsp;DATE OF BIRTH :</span>&nbsp;&nbsp;&nbsp;'.$row['dob'].'<br><br>
											<span>&nbsp;&nbsp;E-MAIL ID :</span>&nbsp;&nbsp;&nbsp;'.$row['email'].'<br><br>
											<span>&nbsp;&nbsp;MOBILE NO. :</span>&nbsp;&nbsp;&nbsp;'.$row['mob'].'<br><br>
											<span>&nbsp;&nbsp;ADDRESS :</span>&nbsp;&nbsp;&nbsp;'.$row['address'].'<br><br>
											<span>&nbsp;&nbsp;PINCODE :</span>&nbsp;&nbsp;&nbsp;'.$row['pincode'].'<br><br>
											<span>&nbsp;&nbsp;CITY :</span>&nbsp;&nbsp;&nbsp;'.$row['city'].'<br><br>
											<span>&nbsp;&nbsp;STATE :</span>&nbsp;&nbsp;&nbsp;'.$row['state'].'<br><br>
											</div>';
									}
									 
									// Should we need to run this? read section VII
									mysqli_free_result($query);
									 
									// Should we need to run this? read section VII
									mysqli_close($conn);
									?>
                            </div>
		
                            <div class="tab-pane" id="loan"><br>
                                <?php
									$db_host = 'localhost'; // Nama Server
									$db_user = 'root'; // User Server
									$db_pass = ''; // Password Server
									$db_name = 'finalyr'; // Nama Database
									 
									$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
									if (!$conn) {
										die ('Fail to connect to MySQL: ' . mysqli_connect_error());   
									}
									  $id = $_SESSION['bID'];
									$sql = "SELECT  tol,lamount,purpose FROM borrowers WHERE bID='$id'";
											 
									$query = mysqli_query($conn, $sql);
									 
									if (!$query) {
										die ('SQL Error: ' . mysqli_error($conn));
									}
									 
									
											 
									while ($row = mysqli_fetch_array($query))
									{
										echo '<div class="form">
											<!-- Displaying Data Read From Database -->
											<span>&nbsp;&nbsp;TYPE OF LOAN :</span>&nbsp;&nbsp;&nbsp;'.$row['tol'].'<br><br>
											<span>&nbsp;&nbsp;LOAN AMOUNT :</span>&nbsp;&nbsp;&nbsp;'.$row['lamount'].'<br><br>
											<span>&nbsp;&nbsp;LOAN PURPOSE :</span>&nbsp;&nbsp;&nbsp;'.$row['purpose'].'<br><br>
											</div>';
									}
									 
									// Should we need to run this? read section VII
									mysqli_free_result($query);
									 
									// Should we need to run this? read section VII
									mysqli_close($conn);
									?>
                            </div>	
                            
                            <div class="tab-pane" id="cpass">
                                <form class="f3" role="form" method ="post" action="cpwd.php" enctype="multipart/form-data" style="margin-left:10px"><br>
                                    <div class="form-group">
                                        <label for="account">Borrower ID:</label>
                                        <input type="text" class="form-control" name ="uID" id="bID" placeholder="*Enter your Borrower ID">
                                    </div>
					
                                    <div class="form-group">
                                        <label for="pwd">Old Password:</label>
                                        <input type="password" class="form-control" name="opwd" id="bpwd" placeholder="*Enter Old Password">
                                    </div>
					
                                    <div class="form-group">
                                        <label for="pwd">New Password:</label>
                                        <input type="password" class="form-control" name="npwd" size="40"   onkeypress= "strength_pwd()" placeholder=" *Enter New Password">
                                    </div>
				 
                                    <div class="form-group">
                                        <label for="cpwd">Re-Enter Password:</label>
                                        <input type="password" class="form-control" name="cpwd" size="40" placeholder=" *Re-Enter Password ">
                                    </div>
				 
                                    <button type="submit" name ="submitx" class="btn btn-primary">Change Password</button>
                                </form>
                            </div>
							
							<div class="tab-pane" id="edit">
                                <form class="f3" role="form" method ="post" action="edit2.php" enctype="multipart/form-data" style="margin-left:10px"><br>
                                    <div class="form-group">
                                        <label for="account">Borrower ID:</label>
                                        <input type="text" class="form-control" name ="uID" id="bID" placeholder="*Enter your Borrower ID">
                                    </div>
					
                                    <div class="form-group">
                                        <label for="email">Email ID:</label>
                                        <input type="text" class="form-control" name="emailx" id="email" placeholder="Enter your new Email-ID">
                                    </div>
					
                                    <div class="form-group">
                                        <label for="phn">Mobile No.:</label>
                                        <input type="text" class="form-control" name="mobx" id="phn" placeholder="Enter your new Mobile No.">
                                    </div>
				 
                                    <button type="submit"  name ="edit" class="btn btn-primary">Edit Profile</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
        <div class ="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Make Payment</center></div>
                <div class="panel-body" style="background-color: lightskyblue;">
                 <div class="container">
                     <div class="row">
                    <!-- You can make it whatever width you want. I'm making it full width
                    on <= small devices and 4/12 page width on >= medium devices -->
                         <div class="col-xs-12 col-md-5">


                    <!-- CREDIT CARD FORM STARTS HERE -->
                             <div class="panel panel-default credit-card-box">
                                 <div class="panel-heading display-table" >
                                     <div class="row display-tr" >
                                         <h3 class="panel-title display-td" >Payment Details</h3>
                                         <div class="display-td" >                            
                                             <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                                         </div>
                                     </div>                    
                                 </div>
                                 <div class="panel-body" style="height:300px">
                                     <form role="form" id="payment-form">
                                         <div class="row">
                                             <div class="col-xs-12">
                                                 <div class="form-group">
                                                     <label for="cardNumber">CARD NUMBER</label>
                                                     <div class="input-group">
                                                         <input 
                                                                type="tel"
                                                                class="form-control"
                                                                name="cardNumber"
                                                                placeholder="Valid Card Number"
                                                                autocomplete="cc-number"
                                                                required autofocus 
                                                                />
                                                         <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                     </div>
                                                 </div>                            
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-xs-7 col-md-7">
                                                 <div class="form-group">
                                                     <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                                     <input 
                                                            type="tel" 
                                                            class="form-control"    
                                                            name="cardExpiry" style="width:200px;"
                                                            placeholder="MM / YY"
                                                            autocomplete="cc-exp"
                                                            required 
                                                            />
                                                 </div>
                                             </div>
                                             <div class="col-xs-5 col-md-5 pull-right">
                                                 <div class="form-group">
                                                     <label for="cardCVC">CVC CODE</label>
                                                     <input 
                                                            type="tel" 
                                                            class="form-control"
                                                            name="cardCVC" style="width:100px;"
                                                            placeholder="CVC"
                                                            autocomplete="cc-csc"
                                                            required
                                                            />
                                                 </div>
                                             </div>
                                         </div><br>
                                         <div class="row">
                                             <div class="col-xs-12">
                                                 <button class="btn btn-success btn-lg btn-block" type="submit">Make a Payment</button>
                                             </div>
                                         </div>
                                         <div class="row" style="display:none;">
                                             <div class="col-xs-12">
                                                 <p class="payment-errors"></p>
                                             </div>
                                         </div>
                                     </form>
                                 </div>
                             </div>            
                    <!-- CREDIT CARD FORM ENDS HERE -->


                    </div>            



                    </div>
                    </div>
         
         
                </div>
            </div>
        </div>
    </body>
</html>