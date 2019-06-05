<?php
include 'db.php';
include 'adminheader.php';
?>
<html>
<head>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div id="madhead">
Agent Message Details
</div>
<div id="madmin">
<table border=2>
<th>S.NO</th>
<th>Agent id</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Food</th>
<th>Status</th>
<?php
  $n=1;      
        $result=mysql_query("SELECT * from send_message");
         while($row = mysql_fetch_array($result))
		 {	?>
	          
		   <tr>
		   <td><?=$n++?></td>
		   <td><?=$row['agid']?></td>
		    <td><?=$row['name']?></td>
		    <td><?=$row['email']?></td>
           <td><?=$row['phone']?></td>
		    <td><?=$row['address']?></td>
			<td><?=$row['food']?></td>
			<td><?=$row['status']?></td>
			<?php
					  //echo "<pre>";
					  //print_r($row);
		    }?>
		 </tr>
		 </table>
		 </div>
		 </body>
		 </html>
		 