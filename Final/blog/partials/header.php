<?php
require '../config/database.php';
?>


<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <link rel="stylesheet" href="<?= ROOT_URL?>css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:wght@900&family=Roboto:wght@300&family=Satisfy&display=swap"
        rel="stylesheet">


</head>

<body>
    <nav>
        <div class="container nav__container">
            <h1><a href="<?= ROOT_URL?>" class="nav__logo">KEC Blogger</a></h1>
            <ul class="nav__items">
                <li><a href="blog.php">Blog</a></li>
                <li><a href="<?= ROOT_URL?>about.php">About</a></li>
                <li><a href="<?= ROOT_URL?>services.php">Services</a></li>
                <li><a href="<?= ROOT_URL?>contact.php">Contact</a></li>
                <li><a href="<?= ROOT_URL?>signin.php">Sign In</a></li>
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/avatar1-rbg.png">
                    </div>
                    <ul>
                        <li><a href="<?= ROOT_URL?>admin/index.php">Dashboard</a></li>
                        <li><a href="<?= ROOT_URL?>logout.php">Logout</a></li>
                    </ul>

                </li>
            </ul>
            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <img src="./images/header.png">