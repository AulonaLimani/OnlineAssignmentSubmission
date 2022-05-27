<?php
require 'core.inc.php';
require 'connect.inc.php';
require 'core.inc1.php';
if (!logged_in() || !logged_in1()) {
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_agn']) && isset($_POST['firstname']) && isset($_POST['lastname'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = md5($password);
        $password_agn = $_POST['password_agn'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $gender = @$_POST['gender'];
        $profession = @$_POST['profession'];
        $department = @$_POST['department'];
        $year = $_POST['year'];
        if (!empty($username) && !empty($email) && !empty($password) && !empty($password_agn) && !empty($firstname) && !empty($lastname) && !empty($gender) && !empty($profession) && !empty($department)) {
            if ($password != $password_agn) {
                echo '<script type="text/javascript">alert("Passwords Donot Match!")</script>';
            } else {
                if ($profession == 'Student') {
                    $query = "SELECT username from Student where username='" . $username . "'";
                    $handle = @mysqli_connect('localhost', 'root', '2002', 'pi2');

                    $query_run = mysqli_query($handle, $query);
                    if (mysqli_num_rows($query_run) == 1) {
                        echo '<script type="text/javascript">alert("Username Already Exists.")</script>';
                    } else {
                        $query = "INSERT INTO Student(Username, Email_id, Password, Firstname, Lastname, gender, department, year, date_of_birth, college, address, year_of_passing, Intermediate, about,contact) VALUES('" . mysqli_real_escape_string($handle, $username) . "','" . mysqli_real_escape_string($handle, $email) . "','" . mysqli_real_escape_string($handle, $password_hash) . "','" . mysqli_real_escape_string($handle, $firstname) . "','" . mysqli_real_escape_string($handle, $lastname) . "','" . mysqli_real_escape_string($handle, $gender) . "','" . mysqli_real_escape_string($handle, $department) . "','" . mysqli_real_escape_string($handle, $year) . "' ,'24.08.2002','','',2019,'','','')";
                        $handle = @mysqli_connect('localhost', 'root', '2002', 'pi2');
                        if (preg_match(
                            '/^[a-zA-Z0-9 _\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/',
                            $email)) {
                            if ($query_run = mysqli_query($handle, $query)) {
                                echo '<script type="text/javascript">alert("Successfully registered. Please login to continue.")</script>';
                                header("refresh:1;url=login.php");
                            }
                        } else {
                            echo '<script type="text/javascript">alert("Invalid Email")</script>';
                        }
                    }
                } else if ($profession == 'Faculty') {
                    $query = "SELECT username from Faculty where username='" . $username . "'";
                    $handle = @mysqli_connect('localhost', 'root', '2002', 'pi2');

                    $query_run = mysqli_query($handle, $query);
                    if (mysqli_num_rows($query_run) == 1) {
                        echo '<script type="text/javascript">alert("Username Already Exists.")</script>';
                    } else {
                        $query = "INSERT INTO Faculty(username,email_id,password,firstname,lastname,gender,department,designation,date_of_birth,college,address,contact,date_of_joining,higherstudies1,higherstudies2,specialization,graduateteach,PGteach) VALUES('" . mysqli_real_escape_string($handle, $username) . "','" . mysqli_real_escape_string($handle, $email) . "','" . mysqli_real_escape_string($handle, $password) . "','" . mysqli_real_escape_string($handle, $firstname) . "','" . mysqli_real_escape_string($handle, $lastname) . "','" . mysqli_real_escape_string($handle, $gender) . "','" . mysqli_real_escape_string($handle, $department) . "','','28.08.2002','','','','28.08.2002','','','','','')";
                        if (preg_match(
                            '/^[a-zA-Z0-9 _\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/',
                            $email)) {
                            if ($query_run = mysqli_query($handle, $query)) {
                                echo '<script type="text/javascript">alert("Successfully registered. Please login to continue.")</script>';
                                header("refresh:1;url=loginfac.php");
                            }
                        } else {
                            echo '<script type="text/javascript">alert("Invalid Email")</script>';
                        }
                    }
                }
            }
        } else {
            echo '<script type="text/javascript">alert("Please Fill All The Details.")</script>';
        }
    }
    ?>
