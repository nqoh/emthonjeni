<?php
include 'connect.php';
$error='<p align="center" id="error"></p><br>';
if(isset($_POST['name']) && isset($_POST['email']) ){
   $name=mysqli_real_escape_string($conn,$_POST['name']);
   $email=mysqli_real_escape_string($conn,$_POST['email']);
   $message=mysqli_real_escape_string($conn,$_POST['message']);
   
   if(empty($name) && empty($email ) && empty($message)){
   $error='<p align="center" id="error">All fields fequired</p>';
   }else if(strlen($name) <= 2 ){
   $error='<p align="center" id="error"><?php echo $error  ?>Invalid Name</p>';   
   }else if(filter_var($email , FILTER_VALIDATE_EMAIL)){
	   $error='<p align="center" id="error">Invalid email addres</p>';
   }else{
   $query=mysqli_query($conn , "INSERT INTO `comments` VALUES(null ,'$name','$email','$message',CURRENT_TIMESTAMP)");
   $error='<p align="center" id="error" style="color:green">Successfuly send</p>';  
   }
}
   

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Emthonjeni</title>
</head>
        <link rel="stylesheet" href="css/smalyllx.css" type="text/css" media="screen and (max-width: 300px)"> 
        <link rel="stylesheet" href="css/smalyllx.css" type="text/css" media="screen and (min-width: 300px)"> 
        <link rel="stylesheet" href="css/small.css" type="text/css" media="screen and (min-width: 400px)">
        <link rel="stylesheet" href="css/s_small.css" type="text/css" media="screen and (min-width: 600px">
        <link rel="stylesheet" href="css/large.css" type="text/css" media="screen and (min-width: 1200px)" >
        <link rel="icon" type="image/ico" href="thumbnails/favicon (4).ico">
<script src="javascript/validate.js" ></script>
<script>
function iconin(){
	document.getElementById("myicon").src="thumbnails/logo namee.png";
}
function iconout(){
	document.getElementById("myicon").src="thumbnails/logoHov.png";
}
var ti="none";
function collaps(){
	if(ti=="none"){
       document.getElementById("mynavs").style.display="block";
	   document.getElementsByClassName("content").item(0).style.marginTop="40px";
	   ti="block";
	}else{
		document.getElementById("mynavs").style.display="none";
		document.getElementsByClassName("content").item(0).style.marginTop="0px";
		ti="none";
	}
}
</script>
<body>


<nav>
<a href="index.php" class="logo" onMouseOver="iconin()" onMouseOut="iconout()"><img src="thumbnails/logoHov.png" style="margin:-10px; height:40px" id="myicon"></a>  

<div id="menus" onClick="collaps()">
<div></div>
<div></div>
<div></div>
</div><br><br>

<div id="mynavs">
<a href="contactus.php" style="color:white; background-color:black;padding:10px;margin:0px;margin-right:8px;">Contact us</a>
<a href="bank.php" >Bank Details</a>
<a href="gallery.php"  >Gallery</a>
<a href="events.php" >Events</a>
<a href="index.php" >Home</a>
</div>

</nav>

<br><br><br>
<div class="content">
  <h1 style="margin:0px auto; font-size:40px" align="center"> Contact us</h1>
  <hr>
  <h4 align="center"> If you want more information about our church or have enquiries please fill out the form the form below. </h4>
  <hr><br>
  <form method="post" enctype="multipart/form-data" action="contactus.php" >
  
  <fieldset><legend>Send your message</legend>
  <div class="contact">
  <p ><b>Phone&nbsp;: </b> 083664 848 374</p>
  <p ><b>Cell&nbsp;&nbsp;&nbsp;&nbsp;: </b> 083664 848 374</p>
  <p ><b>Email&nbsp;: </b> myemail@gmail.com</p>
  <p ><b>Physical Address&nbsp;:</b>
         199246 Umzinyathi Area<br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INANDA<br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4310 </p>

  <a href="#"><img src="thumbnails/icon-facebook.png" style="margin-left:15px; float:left"></a>
  <a href="#"><img src="thumbnails/twitter.png" style="margin-left:30px;"></a>
  </div>
  
     <b><?php echo $error ?><b>
  <b><label>Your Name:<span style="color:red">*</span></label> </b><br><br>
<input type="text" name="name" id="name" onBlur="text_validate(this)" style="width:200px" onKeyUp="text_name(this)" placeholder="Name"><br><br>
   
  <b><label>Your Email  Address:<span style="color:red">*</span></label></b><br><br>
  <input type="email" name="email" onBlur="email_validate(this)" style="width:200px" placeholder="Email adress"><br><br>
  <b><label>Enter Your Message :<span style="color:red">*</span></label></b><br><br>
  <textarea rows="5" cols="30" name="message" placeholder="Comment...."></textarea><br><br>
  <input type="submit" value="Send">
  
  </fieldset>
  </form><br>
  <hr>
</div><br>

<footer > <p class="footer" align="center" style="color:white;"> Emthonjeni Ministries &copy; <?php echo date("Y") ?> <a href="aboutus.php" style="color:white; font-weight:bold">About us</a></p><a href="#"><img src="thumbnails/fbs.png" id="fb"></a> <a href="#" ><img src="thumbnails/tws.png" id="tw"></a></footer>

</body>
</html>