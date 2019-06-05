<?php
include 'db.php';
include 'adminheader.php';
?>
<html>
<head>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div id="divvhead">
View Agent Details
</div>
<div id="divvagent">
<table border=2>
<th>S.NO</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Action</th>

<?php
  $n=1;      
        $result=mysql_query("SELECT * from add_agent");
         while($row = mysql_fetch_array($result))
		 {?>	
	          
		   <tr>
		   <td><?=$n++?></td>
		    <td><?=$row['agname']?></td>
		    <td><?=$row['agemail']?></td>
           <td><?=$row['agphone']?></td>
		    <td><?=$row['agplace']?></td>
			<td><a href="delete_agent.php?id=<?=$row['agid']?>">Delete</a></td>
			
			<?php
					  //echo "<pre>";
					  //print_r($row);
		    }?>
		 </tr>
		 </table>
		 </div>
		 </body>
		 </html>
		 