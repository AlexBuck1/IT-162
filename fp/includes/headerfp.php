<?php include 'fp-config.php'?>
<!DOCTYPE html>
<html>
<head>
<style>
    html {
        background-image: url("images/background.jpg");
        background-size: 300px;
        background-attachment: fixed;
    }
    header {
        background-image: url("images/header-background.jpg");
        background-size: cover;
    }
</style>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/portal.css" />
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
    <div class="logodiv">
        <a href="template.php"><img src="images/UL-logo.jpg" alt="UL Logo"/></a>
    </div>
    <h1><a href="template.php">Upper Left Collective</a></h1>
    <nav>
        <ul class="topnav" id="myTopnav">
            <?=makeLinks($nav1)?>
        <!--
            <li><a href="template.php" class="selected">Welcome</a></li>
            <li><a href="members.php">Members</a></li>
            <li><a href="music.php">Music</a></li>
            <li><a href="photos.php">Photos</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
-->
            <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
        </ul>
    </nav>
</header>

<section>
 <h1><?=$PageID?></h1>