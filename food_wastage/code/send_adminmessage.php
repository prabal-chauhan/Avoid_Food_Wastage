<?php
include_once 'db.php';
$uid1=$_GET['uid'];
$res=mysql_query("select uid,name,email,phone,address,food,status from admin_request where uid=".$uid1);
$userRow=mysql_fetch_array($res);
if(isset($_POST['send_request']))
{
	
 $uid=$_POST['uid'];
 $uname = mysql_real_escape_string($_POST['username']);
 $email = mysql_real_escape_string($_POST['email']);
 $phone=mysql_real_escape_string($_POST['phone']);
 $address=mysql_real_escape_string($_POST['address']);
 $food=mysql_real_escape_string($_POST['food']);
 $status=mysql_real_escape_string($_POST['status']);
 
 
 
 if(mysql_query("INSERT INTO send_message(uid,name,email,phone,address,food,status) VALUES('$uid','$uname','$email','$phone','$address','$food','$message','$sta')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
		header("location:adminhome.php");
 }
 else
 {
  ?>
        <script>alert('error occur...');</script>
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
<a href="view_donar.php">View Donator</a>
<a href="view_feedback.php">View Feedback</a>
<a href="logout.php">Logout</a>
</div>
<form method="POST">
<input type="hidden" name="uid" value="<?php echo $userRow['uid'];?>"><br>
<label>Username&nbsp;</label><input type="text" name="username"  value="<?php echo $userRow['name'];?>"><br><br>
<label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="email" name="email" value="<?php echo $userRow['email'];?>"><br><br>
<label>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="phone" value="<?php echo $userRow['phone'];?>"><br><br>
<label>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="address" value="<?php echo $userRow['address'];?>"><br><br>
<label>Food Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="food" value="<?php echo $userRow['food'];?>"><br><br>
<div id="regdiv"><input type="submit" name="send_request" Value="Send Request"></div>
 
   
  
   </form>
</body>
</html>