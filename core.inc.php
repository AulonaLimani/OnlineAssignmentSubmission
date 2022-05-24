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
function getuserfield($field)
	{
		require 'connect.inc.php';
		$query="SELECT $field from Student where id='".$_SESSION['user_id_student']."'";
        $handle = @mysqli_connect('localhost', 'root', 'root','pi');
        if($query_run=mysqli_query($handle,$query))
		{
			while($query_row=mysqli_fetch_assoc($query_run))
			{
				return $query_row[$field];
			}
		}
	}
?>
