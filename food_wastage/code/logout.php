<?php
session_start();
session_unset('login');
header("Location: index.php");
?>