<?php
	include 'core.inc1.php';
	include 'connect.inc.php';
	$first_name=getuserfields('Firstname');
	$last_name=getuserfields('Lastname');
	$email_id=getuserfields('Email_id');
	$username=getuserfields('Username');
	$gender=getuserfields('Gender');
	$department=getuserfields('Department');
	$designation=getuserfields('Designation');
	$date_of_birth=getuserfields('Date_of_birth');
	$college=getuserfields('College');
	$address=getuserfields('Address');
  $contact=getuserfields('Contact');
	$date_of_joining=getuserfields('Date_of_joining');
  $higher_studies1=getuserfields('Higherstudies1');
	$higher_studies2=getuserfields('Higherstudies2');
  $specialization=getuserfields('Specialization');
  $graduate_teach=getuserfields('Graduateteach');
  $pg_teach=getuserfields('PGteach');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Faculty Profile-BRIGHT MIND!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  </head>
  <style>
  .container-fluid {
    padding:60px 50px;
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
    color: #3C6E71 !important;
}
body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    background-color: #D9D9D9;
}

.jumbotron {
    font-family: Montserrat, sans-serif;
}

.navbar {
    font-family: Montserrat, sans-serif;
}
h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
}
h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
}
p1 {
  color: #3C6E71;
  font-size:40px;
    font-weight: bolder;
}
.button {
    position: relative;
    background-color: #3C6E71;
    border: none;
    font-size: 20px;
    color: #FFFFFF;
    padding: 20px;
    width: 230px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
    margin: 5px;
}

.button:hover {
    color: #3C6E71;
    background-color:#FFFFFF;
    box-shadow:5px 5px rgba(0,0,0,0.75);
}
.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}
.button1 {
    position: relative;
    background-color: lightgreen;
    border: none;
    font-size: 20px;
    color: #FFFFFF;
    padding: 20px;
    width: 230px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
    margin: 5px;
}

.button1:hover {
    color: green;
    background-color:#FFFFFF;
    box-shadow:5px 5px rgba(0,0,0,0.75);
}
.button1:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}
footer {
	text-align:center;
	color:#fff;
	background-color:#2F4F4F;
	padding:20px;
	margin:0.5px;
}
h3 {
	color:#3C6E71;
}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    font-size:18px;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s;
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: gray;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.modal-header {
    padding: 2px 16px;
    background-color: #F0F8FF;
    color: white;
}

.modal-body {
	padding: 2px 16px;
	text-align:center;
}

.modal-footer {
    padding: 2px 16px;
    background-color: #F0F8FF;
    color: white;
}
