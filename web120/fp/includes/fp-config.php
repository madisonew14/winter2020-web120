<?php
//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

/*
portal-config.php
Used to store all of our WEB120 configuration information
*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ''; //make logo_color an empty string by default


switch(THIS_PAGE){
        
    

    case 'template.php':
        $title = "Pearlable";
        $h2 = "Pearlable";
        
    break;
    
    case 'about.php':
        $title = "About";
        $h2 = "About Pearl";

    break;

    case 'artwork.php':
        $title = "Artwork";
        $h2 = "Artwork";

    break;
    
    case 'concept.php':
        $title = "Concept";
        $h2 = "Concept";

    break;
    
    case 'mind_palace.php':
        $title = "Mind Palace";
        $h2 = "Mind Palace";

    break;
        
     case 'courage.php':
        $title = "Courage";
        $h2 = "Courage";

    break;
    
     case 'dreamy_rain.php':
        $title = "Dreamy Rain";
        $h2 = "Dreamy Rain";

    break;
    
    case 'time.php':
        $title = "Time and Relative Dimension";
        $h2 = "Time and Relative Dimension";

    break;
    
    case 'contact.php':
        $title = "Contact Pearl";
        $h2 = "Let's Chat!";
    
    break;
    

    default:    
    $title = THIS_PAGE;    
    
}





?>
