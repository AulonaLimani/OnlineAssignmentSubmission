<?php
include_once 'connect.inc.php';
include 'core.inc.php';
if(isset($_POST['btn-upload']))
{    
     
 $file = $_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $assignmentid= $_POST['assignmentid'];
 $subject=strtolower($_POST['subject']);
 $query="SELECT Assignmentid from Assignment WHERE Assignmentid=".$assignmentid;
    $handle = @mysqli_connect('localhost', 'root', 'root','pi2');

    $query_run=mysqli_query($handle,$query);
 $date=$_POST['date'];
 $first_name=getuserfield('Firstname');
 $last_name=getuserfield('Lastname');
 $email_id=getuserfield('Email_id');
 $username=getuserfield('Username');
 $query1="SELECT Username,Assignmentid from Submission WHERE Username='$username' and Assignmentid=".$assignmentid;
 $query_run1=mysqli_query($handle,$query1);
 $query2="SELECT Assignmentid, Subject from Assignment WHERE Subject='$subject' and Assignmentid=".$assignmentid;
 $query_run2=mysqli_query($handle,$query2);
 $department=getuserfield('Department');
 $year=getuserfield('Year');
 @mkdir('./submissions/');
 $folder= "submissions/";
 
