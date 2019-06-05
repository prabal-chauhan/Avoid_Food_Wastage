<?php
include 'db.php';
include'adminheader.php';
$uid=$_GET['id'];
$result=mysql_query("select uid from food_details where uid=".$uid);
$userRow=mysql_fetch_assoc($result);
?>
<html>
<head>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div id="divahead">
View Agent Details
</div>
<div id="divagent">
<table border=2>
<th>S.NO</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Action</th>
<th>Action</th>

<?php
  $n=1;      
        $result=mysql_query("SELECT agid,agname,agemail,agphone,agplace from add_agent");
         while($row = mysql_fetch_array($result))
		 {	
	          $userid=mysql_query("select uid from food_details ")?>
		   <tr>
		   <td><?=$n++?></td>
		    <td><?=$row['agname']?></td>
		    <td><?=$row['agemail']?></td>
           <td><?=$row['agphone']?></td>
		    <td><?=$row['agplace']?></td>
			<td><a href="add_requestag.php?uid2=<?=$userRow['uid']?>">send request to agent</a></td>
			<td><a href="sendmessage_todonator.php?uid3=<?=$row['agid']?>">Send Message to Donator</a></td>
			<?php
					  //echo "<pre>";
					  //print_r($row);
		    }?>
		 </tr>
		 </table>
		 </div>
		 </body>
		 </html>
		 