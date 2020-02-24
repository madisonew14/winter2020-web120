<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = "Madison's Web Dev Examples";
        $logo = 'fa-home';
        $PageID = 'Client Questionnaire';
    break;
    
    case 'flexbox.php':
        $title = "Flexbox Research";
        $logo = 'fas fa-search'; // change fontawesome icon
        $PageID = 'Flexbox Research';
    break;   
        
    case 'galleries.php':
        $title = "CSS Galleries Research";
        $logo = 'fas fa-search'; // change font awesome icon
        $PageID = 'CSS Galleries';
    break;
    
     case 'calendar.php':
        $title = "Google Calendar";
        $logo = 'fas fa-calendar'; // change font awesome icon
        $PageID = 'Google Calendar';
    break;   
        
    case 'map.php':
        $title = "Google Map";
        $logo = 'fas fa-location-arrow'; // change font awesome icon
        $PageID = 'Google Map';
    break;
        
    case 'youtube.php':
        $title = "Youtube";
        $logo = 'fab fa-youtube'; // change font awesome icon
        $PageID = 'HTML Crash Course for Absolute Beginners ';
    break;
    
    case 'shoppingcarts.php':
        $title = "Shopping Carts Research";
        $logo = 'fas fa-search'; // change fontawesome icon
        $PageID = 'Shopping Carts Research';
    break;   
        
    case 'siteapp.php':
        $title = "Site vs App";
        $logo = 'fas fa-search'; 
        $PageID = 'Site vs App';
    break;
    
     case 'webcam.php':
        $title = "Live Web Cam";
        $logo = 'fas fa-binoculars'; // change font awesome icon
        $PageID = 'Live Web Cam';
    break;   

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
   }

switch(THIS_PAGE){

    case 'index.php':
        $title = "Client Questionnarie";
    break;
        
     case 'flexbox.php':
        $title = "Flexbox Research";
    break;
    
    case 'galleries.php':
        $title = "CSS Gallery Research";
    break;
    
    case 'calendar.php':
        $title = "Google Calendar";
    break;
        
    case 'map.php':
        $title = "Google Map";
    break;
    
    case 'youtube.php':
        $title = "Web Dev Video";
    break;
    
     case 'shoppingcarts.php':
        $title = "Shopping Cart Research";
    break;
        
    case 'siteapp.php':
        $title = "Site vs App Research";
    break;
    
    case 'webcam.php':
        $title = "Live Cams";
    break;

    default:
        $title = THIS_PAGE;
}



?>