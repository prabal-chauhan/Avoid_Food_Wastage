<?php
session_start();
include_once 'db.php';
if(isset($_POST['add_agent']))
{
 print_r($_POST);
$uname = mysql_real_escape_string($_POST['username']);
 $agname=mysql_real_escape_string($_POST['agname']);
 $upass = mysql_real_escape_string($_POST['password']);
 $email = mysql_real_escape_string($_POST['email']);
 $phone=mysql_real_escape_string($_POST['phone']);
 $place=mysql_real_escape_string($_POST['place']);
 
 
 if(mysql_query("INSERT INTO add_agent(uname,agname,password,agemail,agphone,agplace) VALUES('$uname','$agname','$upass','$email','$phone','$place')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
		header("location:add_agent.php");
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
<html>
<head>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div  id="head">
</div>
<div id="menu">
<a href="add_agent.php">Add Agent</a>
<a href="view_amessage.php">View agent Message</a>
<a href="view_drequest.php">View Donator request</a>
<a href="view_feedback.php">View Feedback</a>
</div>
<form method="POST">

<label>Username&nbsp;</label><input type="text" name="username"><br><br>
<label>Agent Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="agname"><br><br>
   <label>Password&nbsp;</label><input type="password" name="password"><br><br>
   <label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="email" name="email"><br><br>
   <label>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="phone"><br><br>
   <label>Working Place&nbsp;</label><input type="text" name="place"><br><br>
   <div id="regdiv"><input type="submit" name="add_agent" Value="ADD"></div>
   </form>
</body>
</html>