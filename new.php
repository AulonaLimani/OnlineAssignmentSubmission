
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Assignment Submission</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <style>
        .jumbotron {
            background: url("images/Wallpaper1.jpg");
            color: #C94B4B;
            padding: 100px 25px;
            background-size: cover;
            background-attachment: fixed;
        }

        .bg-grey {
            background-color: #f6f6f6;
        }

        .container-fluid {
            padding: 60px 50px;
        }

        .logo {
            color: #284B63;
            font-size: 200px;
        }

        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }
        }

        /* Full-width input fields */
        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
        }

        .button {
            border-radius: 4px;
            background-color: #3C6E71;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            padding: 20px;
            width: 320px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '»';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }

        .button1 {
            border-radius: 4px;
            background-color: #2d5256;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            padding: 20px;
            width: 320px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .button1 span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button1 span:after {
            content: '»';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button1:hover span {
            padding-right: 25px;
        }

        .button1:hover span:after {
            opacity: 1;
            right: 0;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top (Important)*/
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
            padding-top: 60px;
            color: #000;
        }

        /* Modal Content/Box */

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }
            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }
            to {
                transform: scale(1)
            }
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }

        .logo-small {
            color: #284B63;
            font-size: 50px;
        }

        p1 {
            color: #A0522D;
            font-size: 40px;
        }

        h1#h01 {
            font-size: 100px;
        }


        .carousel-indicators li {
            border-color: #C94B4B;
        }

        .carousel-indicators li.active {
            background-color: #C94B4B;
        }

        .item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }

        .item span {
            font-style: normal;
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
            font-size: 15px;
        }

        .navbar-nav li a:hover, .navbar-nav li.active a {
            color: #fff !important;
            background-color: #284B63 !important;
        }

        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #C94B4B !important;
        }

        footer .glyphicon {
            font-size: 20px;
            margin-bottom: 20px;
            color: #284B63;
        }

        body {
            font: 400 15px Lato, sans-serif;
            line-height: 1.8;
            color: #818181;
        }

        .jumbotron {
            font-family: Montserrat, sans-serif;
            height: 800px;
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

        .slideanim {
            visibility: hidden;
        }

        .slide {
            /* The name of the animation */
            animation-name: slide;
            -webkit-animation-name: slide;
            /* The duration of the animation */
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            /* Make the element visible */
            visibility: visible;
        }

        /* Go from 0% to 100% opacity (see-through) and specify the percentage from when to slide in the element along the Y-axis */
        @keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }

        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }
    </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#myPage" style="font-size:20px; color:#C94B4B" ;><span
                        class="glyphicon glyphicon-pencil" style="color:#3C6E71"></span>BRIGHT MIND!</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#services">SERVICES</a></li>
                <li><a href="registration.php"><span class="glyphicon glyphicon-user" style="color:#fff" ;></span>
                        REGISTER</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="jumbotron text-center">
    <h1 id="h01" style="color: #D9D9D9">BRIGHT MIND!</h1>
    <p1 style="color: #353535;font-weight: bold;background-color: rgba(255,255,255,0.27);border-radius:25px ">Online
        Assignment Submission
    </p1>
    <div>
        <br><br>
        <form action="loginfac.php" method="GET">
            <button class="button"><span>Login As Faculty</span></button>
        </form>
        <br>
        <form action="login.php" method="GET">
            <button class="button1"><span>Login As Student</span></button>
        </form>
    </div>
</div>
<!-- Container (About Section) -->
<div class="container-fluid" id="about">
    <div class="row">
        <div class="col-sm-8">
            <h2>ABOUT US</h2>
            <br>
            <h4>AN INNOVATIVE DECISION</h4>
            <p>Supports assignment submission and dynamic teacher-student interaction.</p>
            <!--      <button class="btn btn-lg">Get in Touch</button>-->
            <h1 class="btn btn-lg" style="background-color: #3C6E71;border-radius: 7px;color:white">Get in Touch</h1>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-signal logo slideanim"></span>
        </div>
    </div>
</div>

<div class="container-fluid bg-grey" id="ourvalues">
    <div class="row">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-globe logo slideanim"></span>
        </div>
        <div class="col-sm-8">
            <h2>OUR VALUES</h2>
            <br>
            <h4><strong>MISSION:</strong> Save Paper, Register with <strong>BRIGHT MIND!</strong></h4>
            <h4><strong>VISION:</strong> To keep assignments safe and secure without any pen paper requirement.</h4>
        </div>
    </div>
</div>
<div class="container-fluid text-center slideanim" id="services">
    <h2>SERVICES</h2>
    <h4>What we offer</h4>
    <br>
    <div class="row">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-pencil logo-small"></span>
            <h4>WRITE</h4>
            <p>Make an excellent use of your mind, innovate and put the ideas into reality.</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-duplicate logo-small"></span>
            <h4>SUBMIT</h4>
            <p>Don't put your work confined with pen and paper, submit it digitally.</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-earphone logo-small"></span>
            <h4>INTERACT</h4>
            <p>Your doubts will be there no longer with you, interact with teachers and have it cleared.</p>
        </div>
    </div>
</div>

</div>
</div>

<div style="text-align: center">
    <button id="facts-btn" type="button" style="background-color:  #3C6E71 ; border: none">Click for a Funny Fact!</button>
    <textarea id="facts-area" style="width: 700px"></textarea>
</div>
<hr>
<footer class="container-fluid text-center" id="footer">
    <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p> &copy 2022 | All Rights Reserved </p>
</footer>

<script>
    $(document).ready(function () {
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {

                // Prevent default anchor click behavior8
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
        $('#facts-btn').click(function (){
            $.ajax({
                type: "GET",
                url: 'https://uselessfacts.jsph.pl/random.json?language=en',
                success: function (data) {
                    $('#facts-area').text(data.text);
                }
            });
        });
    });
    //FOR SCROLLING TO TOP EFFECT..
    $(window).scroll(function () {
        $(".slideanim").each(function () {
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                $(this).addClass("slide");
            }
        });
    });
</script>
</body>
</html>


