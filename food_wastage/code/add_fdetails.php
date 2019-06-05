<?php
session_start();
include 'header.php';
include_once 'db.php';
$res=mysql_query("select uid,name,email,phone from registeration where uid=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
if(isset($_POST['send_request']))
{
 $uid=$_POST['uid'];
 $uname = mysql_real_escape_string($_POST['username']);
 $email = mysql_real_escape_string($_POST['email']);
 $phone=mysql_real_escape_string($_POST['phone']);
 $address=mysql_real_escape_string($_POST['address']);
 $food=mysql_real_escape_string($_POST['food']);
 
 
 if(mysql_query("INSERT INTO food_details(uid,name,email,phone,address,av_food) VALUES('$uid','$uname','$email','$phone','$address','$food')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
		header("location:add_fdetails.php");
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
<div id="divback">
<div id="divhead">Donate Food</div>
<form method="POST">
<div id="divfood">
<input type="hidden" name="uid" value="<?php echo $userRow['uid'];?>"><br>
<label>Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="username"  value="<?php echo $userRow['name'];?>"><br><br>
<label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="email" name="email" value="<?php echo $userRow['email'];?>"><br><br>
<label>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="phone" value="<?php echo $userRow['phone'];?>"><br><br>
<label>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="address"><br><br>
<label>Food Quantity&nbsp;&nbsp;</label><input type="text" name="food"><br><br></div> <div id="fooddiv"><input type="submit" name="send_request" Value="Send Request"></div>
</form>
</div>
</body>
</html>