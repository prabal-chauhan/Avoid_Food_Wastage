<?php
session_start();
include_once 'db.php';
include 'adminheader.php';
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
		header("location:adminhome.php");
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
<div id="adivhead">Add Agent Details</div>
<form method="POST">
<div id="agent">
<label>Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="username"><br><br>
<label>Agent Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="agname"><br><br>
   <label>Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="password" name="password"><br><br>
   <label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="email" name="email"><br><br>
   <label>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="phone"><br><br>
   <label>Working Place&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="place"><br><br></div>
   <div id="agentadd"><input type="submit" name="add_agent" Value="Add Agent"></div>
   </form>
	</body>
	</html>
	
	
	
	
	