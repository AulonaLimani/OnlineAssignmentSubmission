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
