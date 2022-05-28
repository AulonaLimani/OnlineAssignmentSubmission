<?php
include_once 'connect.inc.php';
$assignmentid = $_GET['Assignmentid'];
$subject = $_GET['Subject'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Student Submissions-BRIGHT MIND!</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css"/>

    <link rel="stylesheet" href="styles/css1/normalize.css">


    <link rel="stylesheet" href="styles/css1/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <style>
        body{
            background-color: #D9D9D9;
        }

        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
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
