<!DOCTYPE html> 
<html> 
    <head> 
	    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <meta charset="UTF- 8"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="lenderstyle.css">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/font-awesome.min.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
		<link rel="shortcut icon" href="images/logo.png" type="image/png">
        <title> FORGOT PASSWORD | FASTeLoan.com</title>         
    </head>     
    <body id="myPage" data-spy="scroll" data-target=".navbar"  data-offset="50">
	   
        <hr>
        <hr>
        <header id="header"> 
            <h1 id="headerh1" href="#myPage"> F A S T e L o a n</h1> 
            <h4 id="headerh4" style="font-weight:bold">. . .with you always </h4> 
            
            <center>
                <div id="navbar">
                    <ul>
                         <a href="1stpage.html" id="linkref">HOME </a> 
                         <a href="location.php" id="linkref" >LOCATION </a>
                         <a href="#" id="linkref" >LENDERS </a>
                         <a href="1stpage.html#about" id="linkref" >ABOUT US </a>
                         <a href="faq/index.html" id="linkref" >FAQs </a>	
                         <a href="1stpage.html#contact" id="linkref" >CONTACT US </a>
                         <a href="1stpage.html" id="linkref">LOGIN</a>
                    </ul>
                </div>
            </center>		 
        </header>
        
        <div id="form"> 
        <div class="container-fluid" style="margin-left: 300px;">    
            <div class ="col-sm-7" style="margin-top:20px">
            <div class="panel panel-success" style="box-shadow: 5px 5px 5px 7px darkseagreen;">
                <div class="panel-heading" style="font-size:20px">Forgot Password?</div>
                <div class="panel-body" style="background-color: white;opacity: 0.9">
          		
                    <div class="container">
                        <form action="" method="POST">
						      <?php
										require 'phpmailer\PHPMailerAutoload.php';
										require 'phpmailer\credential1.php';
										require 'phpmailer\class.phpmailer.php';
										require 'phpmailer\class.smtp.php';
										$mail = new phpmailer;

										//$mail->SMTPDebug = 4;                               // Enable verbose debug output

										$mail->isSMTP();                                      // Set mailer to use SMTP
										$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
										$mail->SMTPAuth = true;                               // Enable SMTP authentication
										$mail->Username = EMAIL;                 // SMTP username
										$mail->Password = PASS;                           // SMTP password
										$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
										$mail->Port = 587;                                    // TCP port to connect to

										$mail->setFrom(EMAIL, $_POST['name']);
										$mail->addAddress(EMAIL);     // Add a recipient
																			   // Name is optional
										$mail->addReplyTo($_POST['email']);


										//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
										//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
										$mail->isHTML(true);                                  // Set email format to HTML

										$mail->Subject ='Feedback mail.';
										$mail->Body  =($_POST['comments']);
										$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

										if(!$mail->send()) {
											echo 'Message could not be sent.';
											echo 'Mailer Error: ' . $mail->ErrorInfo;
										} else {
											echo 'Message has been sent!!!<br><br>Please go to back.';
										}
								?>
					         <fieldset>
                                <h2>Input Details</h2>
                                <div class="form-group">
                                    <label for="bID">Lender ID</label>
                                    <input type="text" class="form-control" id="lID" name= "lID" style="font-size: 18px" placeholder="Enter your Lender ID">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="column">
                                            <label for="email">E-mail ID</label>
                                            <input type="email" class="form-control" id="email" name= "email" style="font-size: 18px" placeholder="Enter your E-mail ID">
                                        </div>
                                        <div class="column">
                                            <label for="mob">Mobile No.</label>
                                            <input type="tel" class="form-control" id="mob" name= "mob" style="font-size: 18px" placeholder="Enter your Mobile No">
                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-buttons">
                                    <button type="submit" class="btn btn-success" name="sendotp" style="font-size: 16px;font-family: Trebuchet MS;">Send OTP</button>
                                </div>
                        </form>
                        <form action="" method="POST">
                                <h2>OTP Confirmation</h2><br>
                                <div class="form-group">
                                    <label for="OTP">Enter OTP</label>
                                    <input type="text" class="form-control" id="otp" name="otp" style="font-size: 18px" placeholder="Enter OTP sent to your mobile no">
           
                                </div>
                                <div class="wizard-buttons">
                                    <button type="submit" class="btn btn-next" name="verifyotp"  style="font-size: 16px;font-family: Trebuchet MS;">Verify</button>
                                </div>
                        </form>
                    </div>
    
                    <script src="js/jquery.min.js"></script>
                    <script src="js/popper.min.js"></script>
                    <script src="js/bootstrap.min.js"></script>
                    <script src="script.js"></script>
                </div>
            </div>
        </div>
    </div>
    </div>
  
</body>
</html>

