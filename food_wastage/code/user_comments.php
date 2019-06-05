<?php
session_start();
include 'db.php';
include 'header.php';
$res=mysql_query("select uid,name,email from registeration where uid=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
if(isset($_POST['btn-add']))
{
$id=$_POST['uid'];
$name=$_POST['uname'];
$email=$_POST['email'];
$comment=$_POST['comments'];
$sql="insert into user_comments(uid,name,email,comments)
values ('$id','$name','$email','$comment')";
mysql_query($sql);
{
	header("location:home.php");
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<body>
 
<form method="POST">
		   <div id="feedback">
		  <div id="feedbackhead">
		  Feedback
		  </div>
<div id="feform">
<input type="hidden" name="uid" value="<?php echo $userRow['uid'];?>"><br><br>
<label>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="uname" value="<?php echo $userRow['name'];?>"><br><br>
<label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="email" name="email" value="<?php echo $userRow['email'];?>"><br><br>
<label>Comments&nbsp;&nbsp;&nbsp;</label><textarea name="comments"></textarea><br></div>
<div id="febutton"><input type="submit" name="btn-add" value="SUBMIT"></div>
</form>
</div>
</body>
</html>
