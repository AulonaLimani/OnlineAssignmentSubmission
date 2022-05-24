<?php
	ob_start();
	session_start();
	require 'connect.inc.php';
	$current_file=$_SERVER['SCRIPT_NAME'];
	if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']))
	{
		$http_referer=$_SERVER['HTTP_REFERER'];
	}
	function logged_in()
	{
        if(isset($_COOKIE['logged_in_student']))
		{
            $_SESSION['user_id_student'] = $_COOKIE['logged_in_student'];
			return true;
		}
		else
		{
			return false;
		}
	}
