<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;


switch(THIS_PAGE){

    case 'index.php':
        $title = "Alex's IT162 Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;

    case 'contactme.php':
        $title = "Alex's IT162 Contact Page";
        $logo = 'fa-id-card';
        $PageID = 'Contact Alex';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';

}

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Alex";


function makeLinks($nav1)
{
    $myReturn = '';
    foreach ($nav1 as $url => $text){
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        }
        else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
    }
    return $myReturn;
}
?>