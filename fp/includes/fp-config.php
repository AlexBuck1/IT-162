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

    case 'template.php':
        $title = "Upper Left Collective Homepage";
        $PageID = '• • • WELCOME • • •';
    break;

    case 'contactus.php':
        $title = "Upper Left Contact Page";
        $PageID = '• • • Contact Upper Left • • •';
    break;

    case 'members.php':
        $title = "Upper Left Members";
        $PageID = '• • • UPPER LEFT MEMBERS • • •';
    break;

    case 'music.php':
        $title = "Upper Left Music";
        $PageID = '• • • NEW MUSIC • • •';
    break;

    case 'photos.php':
        $title = "Upper Left Photos";
        $PageID = '• • • UPPER LEFT & FRIENDS • • •';
    break;

    default:
        $title = THIS_PAGE;
        $PageID = 'Welcome';

}

$nav1['template.php'] = "Welcome";
$nav1['members.php'] = "Members";
$nav1['music.php'] = "Music";
$nav1['photos.php'] = "Photos";
$nav1['contactus.php'] = "Contact Us";


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