<?php
include_once 'db.php';
include 'adminheader.php';
$uid3=$_GET['uid2'];
$res=mysql_query("select uid,name,email,phone,address,av_food from food_details where uid=".$uid3);
$userRow=mysql_fetch_array($res);
if(isset($_POST['send_request']))
{
 $uid=$_POST['uid'];
 $agid=$_POST['agent_name'];
 $uname = mysql_real_escape_string($_POST['username']);
 $email = mysql_real_escape_string($_POST['email']);
 $email = mysql_real_escape_string($_POST['email']);
 $phone=mysql_real_escape_string($_POST['phone']);
 $address=mysql_real_escape_string($_POST['address']);
 $food=mysql_real_escape_string($_POST['food']);
 $message=mysql_real_escape_string($_POST['message']);
 $sta="pending";
 if(mysql_query("INSERT INTO admin_request(uid,agid,name,email,phone,address,food,message,status) VALUES('$uid','$agid','$uname','$email','$phone','$address','$food','$message','$sta')"))
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
<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
<div id="divagsend">Send Request To Agent</div>
<div id="agform">
<form method="POST">
<?php $rs_new = mysql_query("SELECT agid from add_agent");while($row1=mysql_fetch_array($rs_new)) { ?> 
<input type="hidden" name="agent_name" value="<?php echo $row1['agid'];?>"><?php } ?><br>
<input type="hidden" name="uid" value="<?php echo $userRow['uid'];?>"><br>
<label>Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="username"  value="<?php echo $userRow['name'];?>"><br><br>
<label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="email" name="email" value="<?php echo $userRow['email'];?>"><br><br>
<label>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="phone" value="<?php echo $userRow['phone'];?>"><br><br>
<label>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="address" value="<?php echo $userRow['address'];?>"><br><br>
<label>Food Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><input type="text" name="food" value="<?php echo $userRow['av_food'];?>"><br><br>
<label>Message&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><input type="text" name="message"><br><br> 
<input type="hidden" name="status"></div>
<div id="agdiv"><input type="submit" name="send_request" Value="Send Request"></div>
</form>
</body>
</html>