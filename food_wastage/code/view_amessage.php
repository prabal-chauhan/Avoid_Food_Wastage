<?php
session_start();
include 'db.php';
include 'header.php';
?>
<html>
<head>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div id="mhead">
Message From Admin</div>
<div id="divf1"><?php
  $n=1;      
        $result=mysql_query("SELECT * from send_donator where uid=".$_SESSION['user']);
         while($row = mysql_fetch_array($result))
		 {	?>
	 <div id="divf1c">
	          Agent Name&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp; <?=$row['agname']?><br>
		    Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=$row['agemail']?><br>
           Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=$row['agphone']?><br>
		    Place&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=$row['agplace']?><br></div>
			<?php
					  //echo "<pre>";
					  //print_r($row);
		    }?>
		 </div>
		 </body>
		 </html>
		 