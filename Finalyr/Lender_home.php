<?php
  session_start();
  if(isset($_SESSION['leID']));

    ?>
<?php
	
?>
<!DOCTYPE html> 
<html> 
    <head> 
	    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <meta charset="UTF- 8"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style_u.css"> 
		<link rel="shortcut icon" href="images/logo.png" type="image/png">
        <title> HOME | FASTeLoan.com</title>         
    </head>     
    <body id="myPage" data-spy="scroll" data-target=".navbar"  data-offset="50">
	   
        <hr>
        <hr>
        <header id="header"> 
            <h1 id="headerh1" href="#myPage"> F A S T e L o a n</h1> 
            
                         <div class="dropdown" style=" margin-left: 1200px;">  
							<span class="glyphicon glyphicon-triangle-bottom"></span>
                             <button class="dropbtn"><img src="images/userprofile.png" style="width: 40px;height: 40px;border-radius: 50%"> <?php echo $_SESSION['leID'];  ?></button>
                             <div class="dropdown-content">
                                 <a href="LenderDetails.php"><span class="glyphicon glyphicon-user"></span>  My Profile</a>
                                 <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a>
                             </div>
                        </div>
            <h4 id="headerh4" style="font-weight:bold">. . .with you always </h4> 
            
            <center>
                <div id="navbar">
                    <ul>
                         <a href="Lender_home.php" id="linkref">HOME </a> 
                         <a href="location.php" id="linkref" >LOCATION </a>
                         <a href="#about" id="linkref" >ABOUT US </a>
						 <a href="#team" id="linkref">TEAM</a>
                         <a href="faq/indexl.php" id="linkref" >FAQs </a>	
                         <a href="#contact" id="linkref" >CONTACT US </a>
                        
                    </ul>
                </div>
            
            </center>		 
        </header>   
         
	   
            <div id="marquee">
                <marquee>
                    <p><b style="font-family:Century Gothic;font-size: 20px;color:chocolate">IT'S  QUICK , EASY & SECURE.. GET  INSTANT PERSONAL  LOANS 
                        BASED ON YOUR  SOCIAL  LOAN  QUOTIENT. WE  ARE  ALWAYS  WITH  YOU  ALL  TIME  &  ANY  TIME...</b></p>

                </marquee>
            </div>
		   
            <div class="container">
    
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/f2.png" alt="Los Angeles" style="width:180%;">
                        </div>
                        <div class="item">
                            <img src="images/f1.jpg" alt="Los Angeles" style="width:180%;">
                        </div>

                        <div class="item">
                            <img src="images/f4.jpg" alt="Chicago" style="width:100%;">
                        </div>
    
                        <div class="item">
                            <img src="images/f3.jpg" alt="New york" style="width:100%;">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
	
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
 
            </div>
 
        
      <div id="about">  
          <br><br>
          <img src="images/aboutus.jpg" class="img-responsive" alt="Cinque Terre" width="338" height="36">
            <p style="font-family: Century Gothic;font-size: 25px;font-weight: bold">At FASTeLoan, our focus is on providing people with the cash they need through the consumer loan that makes the most sense. 
		   We work with you to figure out the type of loan that works best based on your specific needs. Whether it is a education loan, 
		   a home loan, or a personal loan, FASTeLoan gets you cash quickly while keeping the loan process simple. With over 10+
		   convenient locations in kolkata, getting cash with FASTeLoan is easy!</p>
            <hr>
        <div class="grid1">   
              <div class="panel panel-default" style="width: 550px;height: 300px;background-image: url(images/admin.jpg);">
                  <div class="panel-heading" style="font-size: 20px;background-color:cornflowerblue;color: white"><b>WHAT WE DO?</b></div>
                <div class="panel-body" style="font-size: 18px;background-color: aliceblue;opacity: 0.8;color: black">Our online and mobile platform brings together lenders and borrowers, creates credit profiles using our proprietary, new-age data based proxy credit score technology, matches
                borrowers to the best lenders for their profile, and executes lending transactions.</div>
              </div>
        </div>
            
        <div class="grid2">
              <div class="panel panel-default" style="width: 550px;height: 300px;background-image: url(images/customer.jpg);">
                  <div class="panel-heading" style="font-size: 20px;background-color: grey;color: white"><b>BORROWERS</b></div>
                <div class="panel-body" style="font-size: 18px;background-color: whitesmoke;opacity: 0.8;color: black">For consumers, we offer a quick, easy way to get low EMI loans. Gone are the days of visiting banks with various documents and working for 15+ days to get a loan apply, get 
                approved in minutes and get money in the bank today.<br><br>
                    </div>
             </div>
        </div>
        
            
        <div class="grid3">
            <div class="panel panel-default" style="width: 550px;height: 300px;background-image: url(images/lender.png);">
                  <div class="panel-heading" style="font-size: 20px;background-color: mediumseagreen;color: white"><b>LENDERS</b></div>
                <div class="panel-body" style="font-size: 18px;background-color: honeydew;opacity: 0.8;color: black">For lenders, we offer a platform to originate loans based on pre-defined segments. Just describe the profile of customers you want to lend money to, for what purpose, and what interest rates. We'll empannel you in our lending platform and start originating loans that match your profile.<br><br>
                    </div>
            </div>
        </div>
     </div>

      <!-- Container (The About Section) -->
    <div id="team">
        <div class="container-fluid">
            
            <h3 id="headerh3"><center>Our Team</center></h3><br><br>
            <table>
                
                <tr></tr>
                <tr>
                    <td width="500">
                      <center>  <img src="images/arnab.jpg" style="width:400px;height:300px;box-shadow: 5px 5px 10px darkgrey" ><br><br>
                        <p style="font-weight: bold;font-size: 24px">ARNAB MUKHERJEE</p>
                        <p style="font-size: 18px">Designer,Developer & Administrator</p>
                        </center>
                    </td>
                    <td width="500">
                        <center> <img src="images/debasish.jpg" style="width:400px;height:300px;box-shadow: 5px 5px 10px darkgrey"><br><br>
                        <p style="font-weight: bold;font-size: 24px">DEBASISH MAITY</p>
                        <p style="font-size: 18px">Designer & Administrator</p>
                        </center>
                    </td>
                    <td width="500">
                        <center> <img src="images/debargha.jpeg" style="width:400px;height: 300px;box-shadow: 5px 5px 10px darkgrey"><br><br>
                        <p style="font-weight: bold;font-size: 24px">DEBARGHA GHOSH</p>
                        <p style="font-size: 18px">Developer & Administrator</p>
                        </center>
                    </td>
                    <td width="500">
                        <center> <img src="images/bisal.jpg" style="width:400px;height: 300px;box-shadow: 5px 5px 10px darkgrey"><br><br>
                        <p style="font-weight: bold;font-size: 24px">BISHAL CHAKRABORTY</p>
                        <p style="font-size: 18px">Administrator</p>
                        </center>
                    </td>
                </tr>
            </table>
            
        </div>
    </div>
        
         <!-- Footer -->
    <footer class="text-center">
         <!-- Container (Contact Section) -->
            <div id="contact" class="container1">
                <br>
                <h3 class="text-center" style="align-content: center"></h3>
                <p class="text-center"><em>We want to hear from you!</em></p>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <p>Feel free to contact us!</p><br>
                        <p style="text-align: left"><span class="glyphicon glyphicon-map-marker"></span> Kolkata, West Bengal, India</p>
                        <p style="text-align: left"><span class="glyphicon glyphicon-phone"></span> Phone: +91 9903540625</p>
                        <p style="text-align: left"><span class="glyphicon glyphicon-envelope"></span> Email: finalyrproject16222930@gmail.com</p>
                        <pre style="font-size:20px"><a href="https://www.facebook.com/FASTeLoancom-2030689900478113/" class="fa fa-facebook"></a>   <a href="https://plus.google.com/u/3/100915158494479954238" class="fa fa-google"></a>   <a href="#" class="fa fa-linkedin"></a></pre>
                    </div>
					<form method="POST" action="feedbackmail.php" enctype="multipart/form-data">
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-sm-5 form-group">
                                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                            </div>
                            <div class="col-sm-5 form-group">
                                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                            </div>
                        </div>
                        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
                        <br>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <button class="btn pull-right" type="submit" style="color: darkslategray">Send</button>
                            </div>
                        </div>
                    </div>
					</form>
                    <div class="col-md-3"><img src="images/contact-us.jpg" class="img-responsive" alt="Cinque Terre" width="338" height="36" style="box-shadow: 5px 5px black"></div>
                </div>
            </div>
        <br><br>
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP" style="color: white">
            <span class="glyphicon glyphicon-chevron-up"></span><br>
            <p style="align-content: center;font-size: 12px;">Go to Top</p>
        </a><br>
        
    </footer>
    </body>
     
</html>


<!adding javasscript for scrolling...>

<script>
    $(document).ready(function(){
            // Initialize Tooltip
            $('[data-toggle="tooltip"]').tooltip(); 
  
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;
                    
                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function(){
   
                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        })
</script>
