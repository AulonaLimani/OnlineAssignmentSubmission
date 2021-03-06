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
                switch ($profession) {
                    case 'Student':
                        $handle = @mysqli_connect('localhost', 'root', 'root', 'pi2');
                        $stmt = $handle->prepare("select username from student where username = ?");
                        $stmt->bind_param("s", $username);
                        $stmt->execute();
                        $stmt->store_result();
                        if ($stmt->num_rows > 0) {
                            echo '<script type="text/javascript">alert("Username Already Exists.")</script>';
                            $stmt->close();
                        } else {
                            $stmt->close();
                            $handle = @mysqli_connect('localhost', 'root', 'root', 'pi2');
                            $stmt = $handle->prepare("INSERT INTO Student(Username, Email_id, Password, Firstname, Lastname, gender, department, year, date_of_birth, college, address, year_of_passing, Intermediate, about,contact) VALUES(?,?,?,?,?,?,?,?,'1999-05-05','','',2019,'','','')");
                            $stmt->bind_param("sssssssi", $username, $email, $password_hash, $firstname, $lastname, $gender, $department, $year);
                            if (preg_match(
                                '/^[a-zA-Z0-9 _\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/',
                                $email)) {
                                $stmt->execute();
                                if ($stmt->affected_rows > 0) {
                                    echo '<script type="text/javascript">alert("Successfully registered. Please login to continue.")</script>';
                                    header("refresh:1;url=login.php");
                                    $stmt->close();
                                }
                            } else {
                                echo '<script type="text/javascript">alert("Invalid Email")</script>';
                                $stmt->close();
                            }
                        }
                        break;
                    case 'Faculty':
                        $handle = @mysqli_connect('localhost', 'root', 'root', 'pi2');
                        $stmt = $handle->prepare("select username from Faculty where username = ?");
                        $stmt->bind_param("s", $username);
                        $stmt->execute();
                        $stmt->store_result();
                        if ($stmt->num_rows > 0) {
                            echo '<script type="text/javascript">alert("Username Already Exists.")</script>';
                            $stmt->close();
                        } else {
                            $stmt->close();
                            $handle = @mysqli_connect('localhost', 'root', 'root', 'pi2');
                            $stmt = $handle->prepare("INSERT INTO Faculty(username,email_id,password,firstname,lastname,gender,department,designation,date_of_birth,college,address,contact,date_of_joining,higherstudies1,higherstudies2,specialization,graduateteach,PGteach) VALUES(?,?,?,?,?,?,?,'','28.08.2002','','','','28.08.2002','','','','','')");
                            $stmt->bind_param("sssssss", $username, $email, $password_hash, $firstname, $lastname, $gender, $department);
                            if (preg_match(
                                '/^[a-zA-Z0-9 _\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/',
                                $email)) {
                                $stmt->execute();
                                if ($stmt->affected_rows > 0) {
                                    echo '<script type="text/javascript">alert("Successfully registered. Please login to continue.")</script>';
                                    header("refresh:1;url=login.php");
                                    $stmt->close();
                                }
                            } else {
                                echo '<script type="text/javascript">alert("Invalid Email")</script>';
                                $stmt->close();
                            }
                        }
                        break;
                }
            }
        } else {
            echo '<script type="text/javascript">alert("Please Fill All The Details.")</script>';
        }
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Register Here!</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <link rel='stylesheet prefetch'
              href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
        <link rel="stylesheet" href="styles/demo.css">
        <link rel="stylesheet" href="styles/sky-form.css">
        <!--[if lt IE 9]>
        <link rel="stylesheet" href="styles/css/sky-forms-ie8.css">
        <![endif]-->

        <!--[if lt IE 10]>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/jquery.placeholder.min.js"></script>
        <![endif]-->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/sky-forms-ie8.js"></script>
        <![endif]-->
    </head>
    <body style="background:url(images/Registration-photo.jpg)" ;>
    <h2 style="text-align:right;color: #9b9797">Go back to<a href="new.php"
                                                             style="color:white;text-decoration:none;"> Home </a>page...
    </h2>
    <div class="body body-s">

        <form action="registration.php" class="sky-form" method="POST">
            <header style="color: white">Registration form</header>

            <fieldset>
                <section>
                    <label class="input">
                        <i class="icon-append icon-user"></i>
                        <input type="text" placeholder="Username" name="username">
                        <b class="tooltip tooltip-bottom-right">Only characters and numbers</b>
                    </label>
                </section>

                <section>
                    <label class="input">
                        <i class="icon-append icon-envelope-alt"></i>
                        <input type="text" placeholder="Email address" name="email">
                        <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
                    </label>
                </section>

                <section>
                    <label class="input">
                        <i class="icon-append icon-lock"></i>
                        <input type="password" placeholder="Password" name="password">
                        <b class="tooltip tooltip-bottom-right">Only characters and numbers</b>
                    </label>
                </section>

                <section>
                    <label class="input">
                        <i class="icon-append icon-lock"></i>
                        <input type="password" placeholder="Confirm password" name="password_agn">
                        <b class="tooltip tooltip-bottom-right">Only characters and numbers</b>
                    </label>
                </section>
            </fieldset>

            <fieldset>
                <div class="row">
                    <section class="col col-6">
                        <label class="input">
                            <input type="text" placeholder="First name" name="firstname">
                        </label>
                    </section>
                    <section class="col col-6">
                        <label class="input">
                            <input type="text" placeholder="Last name" name="lastname">
                        </label>
                    </section>
                </div>

                <section>
                    <label class="select">
                        <select name="gender">
                            <option value="0" selected disabled>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                        <i></i>
                    </label>
                </section>
                <section>
                    <label class="select">
                        <select name="profession">
                            <option value="0" selected disabled>Profession</option>
                            <option value="Student">Student</option>
                            <option value="Faculty">Faculty</option>
                        </select>
                        <i></i>
                    </label>
                </section>
                <section>
                    <label class="select">
                        <select name="department">
                            <option value="0" selected disabled>Department</option>
                            <option value="CSE">CSE</option>
                            <option value="IT">IT</option>
                        </select>
                        <i></i>
                    </label>
                </section>
                <section>
                    <label class="select">
                        <select name="year">
                            <option value="0" selected disabled>Year</option>
                            <option value="teacher">Teacher</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <i></i>
                    </label>
                </section>
            </fieldset>
            <footer>
                <input type="submit" class="button" value="Register" style="background-color: #284B63">
            </footer>
        </form>
    </div>
    </body>
    </html>
    <?php
} else if (logged_in() || logged_in1()) {
    echo 'You\'re already registered and logged in. Go back to login page and logout to register another account.';
}
?>
