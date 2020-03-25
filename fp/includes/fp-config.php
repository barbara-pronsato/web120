<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;


switch(THIS_PAGE){

    case 'index.php':
        $title = "Chess School";
        $logo = 'fas fa-chess-king';
        $PageID = 'Home';
    break;
    
    case 'calendar.php':
        $title = "Calendar";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Schedule';
    break;

    case 'problem.php':
    $title = "Problem";
    $logo = "";
    $PageID = 'Problem of the Day';
    break;


    case 'about.php':
    $title = "about";
    $logo = "";
    $PageID = 'About';
    break;


    case 'research.php':
    $title = "research";
    $logo = "fas fa-book";
    $PageID = 'Research';
    break;


    case 'contactme.php':
    $title = "Contact";
    $logo = "fa-paper-plane-o";
    $PageID = 'Contact Us';
    break;


    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = '';

        
   }



//place URL & labels in the array here for navigation:
    $nav1['index.php'] = "Welcome";
    $nav1['calendar.php'] = "Calendar";
    $nav1['problem.php'] = "Problem";
    $nav1['about.php'] = "About";
    $nav1['contactme.php'] = "Contact";
  
    
/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)

        {
            //selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}


?>

