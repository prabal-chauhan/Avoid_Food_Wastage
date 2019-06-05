<?php
include_once 'db.php';
include 'agentheader.php';
$usid=$_GET['mid'];
$res=mysql_query("select uid,agid,name,email,phone,address,food,status from admin_request where uid=".$usid);
$userRow=mysql_fetch_array($res);
if(isset($_POST['send_request']))
{
	
 $uid=$_POST['uid'];
 $agid=$_POST['agid'];
 $uname = mysql_real_escape_string($_POST['username']);
 $email = mysql_real_escape_string($_POST['email']);
 $phone=mysql_real_escape_string($_POST['phone']);
 $address=mysql_real_escape_string($_POST['address']);
 $food=mysql_real_escape_string($_POST['food']);
 $status=mysql_real_escape_string($_POST['status']);
 if(mysql_query("INSERT INTO send_message(uid,agid,name,email,phone,address,food,status) VALUES('$uid',' $agid','$uname','$email','$phone','$address','$food','$status')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
		header("location:agenthome.php");
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

	<div id="ahead">
	Send Message To Admin
	</div>
	<div id="admin">
<form method="POST">
<input type="hidden" name="uid" value="<?php echo $userRow['uid'];?>"><br>
<input type="hidden" name="agid" value="<?php echo $userRow['agid'];?>"><br>
<label>Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="username"  value="<?php echo $userRow['name'];?>"><br><br>
<label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="email" name="email" value="<?php echo $userRow['email'];?>"><br><br>
<label>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="phone" value="<?php echo $userRow['phone'];?>"><br><br>
<label>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="address" value="<?php echo $userRow['address'];?>"><br><br>
<label>Food Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="food" value="<?php echo $userRow['food'];?>"><br><br>
<label>Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="status" value="<?php echo $userRow['status'];?>"><br><br></div>
<div id="regdiv1"><input type="submit" name="send_request" Value="Send Request"></div>
 
   
  
   </form>
   </div>
   </div>
</body>
</html>