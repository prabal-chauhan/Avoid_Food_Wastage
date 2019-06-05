<?php
include 'db.php';
include 'adminheader.php';
$rs=mysql_query("select * from user_comments"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  </head>
  <body>
  <div id="ufeedback">
USER FEEDBACK</div>
<div id="feedbackform">
<table border=2>
<th>S.NO</th>
<th>Name</th>
<th>Email</th>
<th>Comments</th>
<?php
$n=1;
 while($row=mysql_fetch_array($rs))
 {?>
<tr>
	 <td><?= $n++?></td>
	 <td><?= $row['name']?></td>
	 <td><?= $row['email']?></td>
	 <td><?= $row['comments']?></td>
	  
<?php  }
?>
</table>
</div>


</body>
</html>
