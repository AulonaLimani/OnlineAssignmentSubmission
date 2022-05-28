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
                <li><a href="loginfac.php"> HOME</a></li>
                <li><a href="logoutfac.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
            </ul>
        </div>
    </div>
</nav>
<br><br><br><br>
<div class="container">
    <h1>The<span style="color: #284B63; font-weight: bolder"> submissions for assignments</span> for Assignment id <span style="color: #284B63; font-weight: bolder"><?php echo $assignmentid; ?></span> Subject
        <span style="color: #284B63; font-weight: bolder"><?php echo $subject; ?></span></h1>
    <div id="body">
        <table width="80%" border="1" class="responstable">
            <tr>
                <th colspan="12"style="background-color: #3C6E71">SEE THE SUBMISSIONS HERE!</th>
            </tr>
            <tr>
                <td><strong>File Name</strong></td>
                <td><strong>File Type</strong></td>
                <td><strong>First Name</strong></td>
                <td><strong>Last Name</strong></td>
                <td><strong>Dept</strong></td>
                <td><strong>Year</strong></td>
                <td><strong>Subject</strong></td>
                <td><strong>Date</strong></td>
                <td><strong>View</strong></td>
                <td><strong>Points</strong></td>
                <td><strong>Evaluation</strong></td>
            </tr>
            <?php
             $handle = @mysqli_connect('localhost', 'root', 'root', 'pi2');

            $sql = "SELECT * FROM Submission where Assignmentid='" . mysqli_real_escape_string($handle, $assignmentid) . "'";
            $result_set = mysqli_query($handle, $sql);
            while ($row = mysqli_fetch_array($result_set)) {
                ?>
                <tr>
                    <td><?php echo $row['file'] ?></td>
                    <td><?php echo $row['type'] ?></td>
                    <td><?php echo $row['Firstname'] ?></td>
                    <td><?php echo $row['Lastname'] ?></td>
                    <td><?php echo $row['Department'] ?></td>
                    <td><?php echo $row['Year'] ?></td>
                    <td><?php echo $row['Subject'] ?></td>
                    <td><?php echo $row['Date'] ?></td>
                    <td><a href="submissions/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
                    <td><input id="points_<?php echo $row['id'] ?>" type="number" value="<?php echo $row['Points'] ?>">
                    </td>
                    <td>
                        <button class="evaluation-btn" data-submission="<?php echo $row['id'] ?>">Evaluate</button>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js'></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.evaluation-btn').click(function () {
                    var submissionId = $(this).attr("data-submission");
                    var points = $('#points_' + submissionId).val();
                    if (!points) {
                        alert("Please evaluate the Submission");
                        return;
                    }
                    $.ajax({
                        type: "POST",
                        url: 'evaluation.php',
                        data: {
                            submissionId: submissionId,
                            points: points
                        },
                        success: function (data) {
                            alert(data);
                        }
                    });
                });
            });
        </script>
    </div>
</div>
</body>
</html>
