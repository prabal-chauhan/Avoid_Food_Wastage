<?php
$agent_id = $_GET['id'];
include 'db.php';

$rs=mysql_query("delete from add_agent where agid=".$agent_id );
header("location:viewagent_admin.php");
?>