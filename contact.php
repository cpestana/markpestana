<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Contact Mark Pestana Plaster and Stucco</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/stylesheet.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />
 </head>
 <body>
     <header>
     <h1><a href="index.html"><img class="logo" src="images/logo.jpeg" alt="house logo" /></a></h1>
     <nav class="topnav" id="myTopnav">
       <a href="index.html" class="active">Welcome</a>
       <a href="about.html">About</a>
       <a href="services.html">Services</a>
       <a href="jobs.html">Jobs</a>
       <a href="contact.php">Contact</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
     </header>
     
   <div class="wrapper">
   
   <h2 class ="contactsubheader">Contact Mark</h2>
  
    <h3 class ="contact"> <strong>Hours:</strong> 7 am to 5 pm, Mon thru Fri </h3>
    <h3 class ="contact"> <strong>Phone:</strong> 727-439-0741 </h3>
    <h3 class ="contact"> <strong>Email:</strong> <a href="mailto:markpestana@yahoo.com">markpestana@yahoo.com</a></h3>
   
    <h2 class ="contactsubheader">Contact Online</h2>
     <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "clpestanaa@gmail.com";  //place your/your client's email address here
        $toName = "Mark Pestana"; //place your client's name here
        $website = "Mark Pestana Plaster and Stucco";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

    	?>
    
     <footer>
      <p><small>&copy; 2022 by 
          <a href="contact.php">Christine Pestana</a>, All Rights Reserved ~ 
          <a href="disclaimer.html">Privacy</a> 
       
     </p>
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
      
    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
    
    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>