<?php include 'pagination.php '; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gallery</title>
</head>
        <link rel="stylesheet" href="css/smalyllx.css" type="text/css" media="screen and (max-width: 300px)"> 
        <link rel="stylesheet" href="css/smalyllx.css" type="text/css" media="screen and (min-width: 300px)"> 
        <link rel="stylesheet" href="css/small.css" type="text/css" media="screen and (min-width: 400px)">
        <link rel="stylesheet" href="css/s_small.css" type="text/css" media="screen and (min-width: 600px">
        <link rel="stylesheet" href="css/large.css" type="text/css" media="screen and (min-width: 1200px)" >
        <link rel="icon" type="image/ico" href="thumbnails/favicon (4).ico">
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
<a href="contactus.php">Contact us</a>
<a href="bank.php">Bank Details</a>
<a href="gallery.php" style="color:white; background-color:black;padding:10px;margin:0px;margin-right:8px;" >Gallery</a>
<a href="events.php" >Events</a>
<a href="index.php" >Home</a>
</div>

</nav>

<br><br><br>
<div class="content">
 <p align="center" class="vission">Gallery</p><hr>
   <div class="img-content">
   <?php echo $list  ?>
  
</div><h3 align="center"><?php echo $paginationCtrls ?></h3>
  <hr>
</div>
<br>



<footer > <p class="footer" align="center" style="color:white;"> Emthonjeni Ministries &copy; <?php echo date("Y") ?> <a href="aboutus.php" style="color:white; font-weight:bold">About us</a></p><a href="#"><img src="thumbnails/fbs.png" id="fb"></a> <a href="#" ><img src="thumbnails/tws.png" id="tw"></a></footer>
</body>
</html>