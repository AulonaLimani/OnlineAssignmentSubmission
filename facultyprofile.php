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
