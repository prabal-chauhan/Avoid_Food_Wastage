<?php
session_start();
include_once 'db.php';
if(isset($_POST['btn_submit']))
{
 $uname = mysql_real_escape_string($_POST['uname']);
 $upass = mysql_real_escape_string($_POST['upass']);
 $res=mysql_query("SELECT * FROM admin WHERE aname='$uname' and apass='$upass'");
 $row=mysql_fetch_array($res);
 if($row > 0)
 {
  $_SESSION['user1']= $row['uname'];
   header("Location:adminhome.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="keywords" content="slideman, sliderman.js, javascript slider, jquery, slideshow, effects" />
	<meta name="description" content="Sliderman.js - will do all the sliding for you :)" />
	<style type="text/css">
		* { margin: 0; outline: none; }
		
		.c { clear: both; }
		#wrapper { margin: 0 auto; padding: 0 40px 60px 40px; width: 960px; }
		h2 { padding: 20px 0 10px 0; font-size: 24px; line-height: 40px; font-weight: normal; color: #adc276; text-shadow: 0 1px 3px #222222; }
	</style>

	<!-- sliderman.js -->
	<script type="text/javascript" src="js/sliderman.1.3.8.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
	<link href="style.css" rel="stylesheet">
	<!-- /sliderman.js -->
</div>
<body>
<div id="back">
<div id="head"></div>
	<div id="slider_container_1">

				<div id="SliderName">
                  <img src="images/banner2.jpg" title="Description from Image Title" width="1000" height="300"/>
					<img src="images/banner3.jpg" />
					<img src="images/banner1.jpg" />
					
				</div>
				<div class="c"></div>
				<div id="SliderNameNavigation"></div>
				<div class="c"></div>

				<script type="text/javascript">

					// we created new effect and called it 'demo01'. We use this name later.
					Sliderman.effect({name: 'demo01', cols: 10, rows: 5, delay: 10, fade: true, order: 'straight_stairs'});

					var demoSlider = Sliderman.slider({container: 'SliderName', width: 900, height: 300, effects: 'demo01',
					display: {
						pause: true, // slider pauses on mouseover
						autoplay: 2000, // 3 seconds slideshow
						always_show_loading: 200, // testing loading mode
						description: {background: '#ffffff', opacity: 0.5, height: 50, position: 'bottom'}, // image description box settings
						loading: {background: '#000000', opacity: 0.2, image: 'img/loading.gif'}, // loading box settings
						buttons: {opacity: 1, prev: {className: 'SliderNamePrev', label: ''}, next: {className: 'SliderNameNext', label: ''}}, // Next/Prev buttons settings
						navigation: {container: 'SliderNameNavigation', label: '&nbsp;'} // navigation (pages) settings
					}});

				</script>

				<div class="c"></div>
				
			<div class="c"></div>
			</div>
		<div class="c"></div>
	<div id="main">
	<div id="menubar">
      <ul id="menu">
        <li class="selected"><a href="index.php">Donor</a></li>
        <li><a href="Agentindex.php">Agent</a></li>
       <li><a href="adminindex.php">Admin</a></li>
      </ul>
    </div>
	
          <form method="POST">
          <div id="lbackimage">
		   <div id="loginback">
		  <div id="loginhead">
		  Login
		  </div>
		  <div id="loginarea">
		  <label>Username</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="uname" required/><br><br>
		  <label>Password</label> &nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="upass" required/>
		  <div id="dbutton1"> 
		  <input type="submit" name="btn_submit" value="LOGIN">
		</div>
		  </div>
		  </form>
</body>
</html>