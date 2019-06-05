<?php
include 'db.php';
include 'adminheader.php';
?>
<html>
<head>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div id="donorhead">
View Donator Details
</div>
<div id="divadonor">
<table border=2>
<th>S.NO</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>View</th>

<?php
  $n=1;      
        $result=mysql_query("SELECT * from registeration");
         while($row = mysql_fetch_array($result))
		 {	
	          ?>
		   <tr>
		   <td><?=$n++?></td>
		    <td><?=$row['name']?></td>
		    <td><?=$row['email']?></td>
           <td><?=$row['phone']?></td>
		    <td><a href="view_donator.php?uid=<?=$row['uid']?>">View Request</a></td>
		    <?php
					  //echo "<pre>";
					  //print_r($row);
		  
		  }?>
		 </tr>
		 </table>
		 </div>
		 </body>
		 </html>