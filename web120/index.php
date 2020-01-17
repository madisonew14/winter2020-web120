<!DOCTYPE html>
<html lang="en">
 <head>
     <title>Madison Woo: WEB110 Portal Website</title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
 </head>
 <body>
     <header>
     <h1>Madison Woo: WEB110 Portal Website</h1>
     <nav class="topnav" id="myTopnav">
       <a href="index.html" class="active">Welcome</a>
       <a href="elements.html">HTML Elements</a>
         <a href="aia.html">AIA</a>
         <a href="big/index.html">BIG</a>
       <a href="http://w3schools.com" target="_blank">W3 Schools</a>
        <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
         <a href="flowchart.html">Flowchart</a>
       <a href="fp/template.html">Final Project</a>
       <a href="contact.php">Contact Madison</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </nav>
     </header>
     
   <main class="wrapper">
     
     <img class="desktop" src="images/desktop.jpg" alt="Photo of Madison in Seoul, South Korea" />
       
     <img class="tablet" src="images/tablet.jpg" alt="Photo of chai tea and mini doughnuts" />
       
     <img class="phone" src="images/phone.png" alt="Photo of an adorable cat" />
       
       <h2 class="subheader">About Me</h2>
       
       <p>Hi everyone! Welcome to my portal website. My name is Madison and I'm pursuing my web design certificate. I'm currently a graphic designer that works mostly with print and illustration, and want to gain experience with interactive design. When I'm not working, I'm usually working out, traveling, trying out new foods, and cuddling with my cat Felix!</p>
           
     <footer>
      <p><small>&copy; 2019 by <a href="contact.php">Contact Madison </a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </main>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
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