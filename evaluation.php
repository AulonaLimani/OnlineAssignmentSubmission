<?php
include_once 'connect.inc.php';
include 'core.inc1.php';

if (isset($_POST['submissionId']) && isset($_POST['points'])) {
    $submissionId = $_POST['submissionId'];
    $points = $_POST['points'];
    $query = "update submission set points = " . $points . " where id = " . $submissionId;
    $handle = @mysqli_connect('localhost', 'root', '2002', 'pi2');
    $query_run = mysqli_query($handle, $query);

    echo "Successfully evaluated submission: " . $submissionId;
} else {
    echo "Please evaluate the submission!";
}
?>
