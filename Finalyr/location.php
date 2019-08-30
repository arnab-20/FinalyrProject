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
		<script type="text/javascript" src="https://js/googlemap.js"></script>
        <link rel="stylesheet" type="text/css" href="locationstyle.css">
       <link rel="shortcut icon" href="images/logo.png" type="image/png">
        <title> LOCATE US | FASTeLoan.com</title>         
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
                         <a href="#contact" id="linkref" >CONTACT US </a>
                    </ul>
                </div>
            </center>		 
        </header>


        <div class="container">  
            <form id="search" action="subloc.php" method="post">
                <h3>Locate Us Easily</h3>
                <fieldset>
                    <input placeholder="Enter State..." type="text" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Enter City" type="text" tabindex="2" required>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending"><i class="fa fa-search"></i>  Search</button>
                </fieldset>
            </form>
            
            <div id="map" style="width:1160px;height:400px;background:yellow; box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);"></div>
        </div>

        

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKGy07IlLd9oW4Q5LPLpcpMkbnz69btwo&callback=myMap"
        async defer></script>

        <script>
            function myMap() {
                var mapCanvas = document.getElementById("map");
                var mapOptions = {
                    center: new google.maps.LatLng(12.97, 77.59), zoom: 8
                };
                 var map = new google.maps.Map(mapCanvas, mapOptions);
				
				
            }
       
		
           var marker = new google.maps.Marker({
          position: Bangaluru,
          map: map
		  
        });
		
		   </script>  

     

   
		
		
		
        
        <!adding javasscript for scrolling...>

        <script>
            var index = 1;

            function plusIndex(n){
                index = index + 1;
                showImage(index);
            }

            showImage(1);

            function showImage(n){
                var i;
                var x = document.getElementsByClassName("slides");
                if(n > x.length){ index = 1};
                if(n < 1){ index = x.length};
                for(i=0;i<x.length;i++)
                {
                    x[i].style.display = "none";
                }
                x[index-1].style.display = "block";
            }
            autoSlide();
            function autoSlide(){
                var i;
                var x = document.getElementsByClassName("slides");
                for(i=0;i<x.length;i++){
                    x[i].style.display = "none";
                }
                index++;
                if(index > x.length){index = 1}
                x[index-1].style.display = "block"; 
                setTimeout(autoSlide,3000);

            }

        </script>

	</body>
</html>	
