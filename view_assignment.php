<?php
include_once 'connect.inc.php';
include 'core.inc.php';
$first_name = getuserfield('Firstname');
$last_name = getuserfield('Lastname');
$username = getuserfield('Username');
$year = getuserfield('Year');
$department = getuserfield('Department');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>View Assignment Student-BRIGHT MIND!</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css"/>

    <link rel="stylesheet" href="styles/css1/normalize.css">


    <link rel="stylesheet" href="styles/css1/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <style>

        body {
            background-color: #D9D9D9;

        }

        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        .navbar {
            margin-bottom: 0;
            background-color: transparent;
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
        }

        .navbar li a, .navbar .navbar-brand {
            color: #3C6E71 !important;
            font-weight: bolder;
        }

        .navbar-nav li a:hover, .navbar-nav li.active a {
            color: #fff !important;
            background-color: #284B63 !important;
        }

        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #C94B4B !important;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="" style="font-size:20px; color:#C94B4B" ;><span
                        class="glyphicon glyphicon-pencil" style="color:#000"></span>BRIGHT MIND!</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"> HOME</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
            </ul>
        </div>
    </div>
</nav>
