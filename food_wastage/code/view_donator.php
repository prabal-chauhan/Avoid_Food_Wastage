<?php
include 'db.php';
include 'adminheader.php';
$usid=$_GET['uid'];
?>
<html>
<head>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div id="donorhead">
Donator Requset Details
</div>
<div id="donorrequest">
<table border=2>
<th>S.NO</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Food Quantity</th>
<?php
  $n=1;      
        $result=mysql_query("SELECT * FROM food_details where uid=".$usid);
         while($row = mysql_fetch_array($result))
		 {	?>
		   <tr>
		   <td><?=$n++?></td>
		    <td><?=$row['name']?></td>
		    <td><?=$row['email']?></td>
           <td><?=$row['phone']?></td>
		    <td><?=$row['address']?></td>
			<td><?=$row['av_food']?></td>
			<a href="view_agent.php?id=<?=$row['uid']?>">View Agent</a>
			<?php
					  //echo "<pre>";
					  //print_r($row);
		    }?>
		 </tr>
		 </table>
		 </div>
		 </body>
		 </html>
		 