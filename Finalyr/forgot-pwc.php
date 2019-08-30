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
                         <a href="1stpage.html#about" id="linkref" >ABOUT US </a>
                         <a href="faq/index.html" id="linkref" >FAQs </a>	
                         <a href="1stpage.html#contact" id="linkref" >CONTACT US </a>
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
                        <form action="passwordrequest.php" method="POST">
						                
                                <h2>RECOVER YOUR PASSWORD</h2><br><br>
								<div class="form-group">
								 <div class="row">
                                        <div class="column">
										<label for="bID">Your Name</label>
										<input type="text" class="form-control" id="" name= "Name" style="font-size: 18px" placeholder="Enter your Name">
										</div>
										<div class="column">
										<label for="bID">Login ID</label>
										<input type="text" class="form-control" id="ID" name= "ID" style="font-size: 18px" placeholder="Enter your Login ID">
										</div>
									</div>
									</div>
                                <div class="form-group">
                                            <label for="email">Registered E-mail ID</label>
                                            <input type="email" class="form-control" id="email" name= "email" style="font-size: 18px" placeholder="Enter your registered E-mail ID">
                                   
                                </div>
                                <div class="wizard-buttons">
                                    <button type="submit" class="btn btn-success" name="reset" style="font-size: 16px;font-family: Trebuchet MS;">SEND</button>
                                </div>
                        </form>
                        
    
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
