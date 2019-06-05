<?php
include 'db.php';

$usernam=mysql_real_escape_string($_GET['usernam']);
$pending = "Cancel";
mysql_query("UPDATE admin_request SET status= '$pending' WHERE name='".mysql_real_escape_string($_REQUEST["usernam"])."'");
echo("<script type='text/javascript'>
	alert('The work is not completed')		
	window.location='viewadmin_message.php';
	  </script>");
?>