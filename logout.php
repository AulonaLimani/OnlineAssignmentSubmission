<?php

    require 'core.inc.php';
    setcookie('logged_in_student', null, -1);
    session_destroy();
    header('Location: new.php');
    
?>