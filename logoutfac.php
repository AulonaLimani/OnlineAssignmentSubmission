<?php
	require 'core.inc1.php';
    setcookie('logged_in_fac', null, -1);
	session_destroy();
	header('Location: new.php');
?>
