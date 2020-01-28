<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title><?=$title?></title>
  <meta charset="utf-8" />
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
 </head>
 <body>
     <header>
     <h1><i class="logo fa <?=$logo?>"<?=$logo_color?>></i> Madison's WEB120 Portal Website</h1>
     <nav class="topnav" id="myTopnav">
     <?=makeLinks($nav1)?>    
         <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </nav>
     </header>
     
   <main class="wrapper">
       
<!-- header includes HERE -->
