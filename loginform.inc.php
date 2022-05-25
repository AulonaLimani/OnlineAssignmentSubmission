<?php
require 'connect.inc.php';
$cookie_student_name = "logged_in_student";
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_hash = md5($password);
    if (!empty($username) && !empty($password)) {
        $handle = @mysqli_connect('localhost', 'root', 'root', 'pi2');

        $query = "SELECT id from Student where Username='" . mysqli_real_escape_string($handle, $username) . "' and Password='" . mysqli_real_escape_string($handle, $password_hash) . "'";
        $query_run = mysqli_query($handle, $query);
        $query_num_rows = mysqli_num_rows($query_run);
        if ($query_num_rows == 0) {
            echo '<script type="text/javascript">alert("Invalid Username/Password Combination.")</script>';
        } else if ($query_num_rows == 1) {
            while ($query_row = mysqli_fetch_assoc($query_run)) {
                echo $user_id = $query_row['id'];    //we have grabbed the user id.$_SESSION['user_id_student']
            }
            setcookie($cookie_student_name, $user_id, time() + 86400);
            $_SESSION['user_id_student'] = $user_id;    //started the session with the particular user id..
            header('Location: login.php');  //then relocated login.php
        }
    } else {
        echo '<script type="text/javascript">alert("Username or password not filled properly.")</script>';
    }
}
