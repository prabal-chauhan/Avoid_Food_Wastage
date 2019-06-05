<?php
session_start();
include_once 'db.php';
if(isset($_POST['register']))
{
 $uname = mysql_real_escape_string($_POST['uname']);
 $upass = mysql_real_escape_string($_POST['upass']);
 $email = mysql_real_escape_string($_POST['email']);
 $dob=mysql_real_escape_string($_POST['dob']);
 $phone=mysql_real_escape_string($_POST['phone']);
 
 
 if(mysql_query("INSERT INTO registeration(name,password,email,dob,phone) VALUES('$uname','$upass','$email','$dob','$phone')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
		header("location:index.php");
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
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
 <script>
  function check()
{

    var pass1 = document.getElementById('phone');


    var message = document.getElementById('message');

   var goodColor = "#0C6";
    var badColor = "#FF9B37";
	
    if(phone.value.length!=10)
	{

        phone.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "required 10 digits, match requested format!";
	return false;
    }
	console.log(phone.value.length);
	message.innerHTML="";
	return true;
	}
	
	
	</script>
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
<form method="POST">
<div id="regbackimage">
<div id="regback">
   <div id="reghead">
   Register Here
   </div>
   <div id="regpage">
   <label>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="uname" required /><br><br>
   <label>Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="password" name="upass" required /><br><br>
   <label>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="email" name="email" required /><br><br>
   <label>Date Of Birth&nbsp;&nbsp;&nbsp;</label><input type="text" name="dob" required /><br><br>
   <label>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="phone" id="phone" onkeyup="check()" required /><span id="message"></span></div>
   <div id="regdiv"><input type="submit" name="register" Value="REGISTER"></div>
   </div>
   </div>
   </div>
   </div>
   </form>
   </body>
   </html>