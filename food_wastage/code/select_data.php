<?php     
   if(isset($_POST['get_option']))
   {
     include 'db.php';
      
     print_r($_POST);
     $company = $_POST['get_option'];
	 echo "select uname from add_agent where agid=".$company;
     $find=mysql_query("select uname from add_agent where agid=".$company);
     while($row=mysql_fetch_array($find))
     {
       echo "<option value=".$row['agid'].">".$row['uname']."</option>";
     }
   //exit;
   }

?>