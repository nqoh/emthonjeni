<!DOCTYPE html>
<html>
<head>
<title>Emthonjeni Ministries</title>
</head>
        <link rel="stylesheet" href="css/smalyllx.css" type="text/css" media="screen and (max-width: 300px)"> 
        <link rel="stylesheet" href="css/smalyllx.css" type="text/css" media="screen and (min-width: 300px)"> 
        <link rel="stylesheet" href="css/small.css" type="text/css" media="screen and (min-width: 400px)">
        <link rel="stylesheet" href="css/s_small.css" type="text/css" media="screen and (min-width: 600px">
        <link rel="stylesheet" href="css/large.css" type="text/css" media="screen and (min-width: 1200px)" >
        <link rel="icon" type="image/ico" href="thumbnails/favicon (4).ico">
        
<script type="text/javascript">
var ii=0;
var images=['thumbnails/IMG-20160729-WA0004.jpg ','thumbnails/IMG-20160728-WA0004.jpg','thumbnails/IMG-20160728-WA0010.jpg',' thumbnails/IMG-20160728-WA0008.jpg','thumbnails/PASTOR.jpg'];
window.onload=was;
function test(){
	
}
function slider(){
	ii++;
	document.getElementById("img").style.opacity=0.4;
	if( ii > (images.length-1)){	
	ii=0;	
	}
	setTimeout('was()',1000)
}
function was(){
	document.getElementById("img").style.opacity=1;
	document.getElementById("image").src=images[ii];
	setTimeout('slider()',4000);

}
window.addEventListener("load", function nn(){
	if(window.innerWidth <= 599){
	document.getElementById("menus").style.display="block";
	document.getElementById("mynavs").style.display="none";
	document.getElementById("myimg").style.marginTop="0px";
}else{
	 document.getElementById("mynavs").style.display="block";
	 document.getElementById("menus").style.display="none";
	 document.getElementById("myimg").style.marginTop="40px";
}
}, false);
window.addEventListener("resize" , function xx(){
if(window.innerWidth <= 599){
	document.getElementById("menus").style.display="block";
	document.getElementById("mynavs").style.display="none";
	document.getElementById("myimg").style.marginTop="0px";
}else{
	 document.getElementById("mynavs").style.display="block";
	 document.getElementById("menus").style.display="none";
	 document.getElementById("myimg").style.marginTop="40px";
}
}, false);
function iconin(){
	document.getElementById("myicon").src="thumbnails/logo namee.png";
}
function iconout(){
}

window.onload=widths
window.onresize=widths

var ti="none";
function collaps(){
	if(ti=="none"){
       document.getElementById("mynavs").style.display="block";
	   document.getElementById("myimg").style.marginTop="45px";
	   ti="block";
	}else{
		document.getElementById("mynavs").style.display="none";
		document.getElementById("myimg").style.marginTop="0px";
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
<a href="gallery.php" >Gallery</a>
<a href="events.php">Events</a>
<a href="index.php" style="color:white; background-color:black;padding:10px;margin:0px;margin-right:8px;" >Home</a>
</div>

</nav>



<br><br>
<img src="thumbnails/EmthoWave.png" id="myimg" >
<div class="menu">

 <div id="img"><img src="thumbnails/fore.png" id="image" ></div>
 </div>
 <h1 align="center" style="color:#261863" class="slogan">THE APOSTOLIC FAITH MISSION OF SOUTH AFRICA</h1>
 

</div>
<div class="wrap">
 <h1 style="color:#261863 " align="center">MISSION</h1>
 <p align="center"><b>The Assembly Prescribes to the Mission of the Apostolic Faith Mission of South Africa in terms of section P.4 (preamble) <br>to the constitution of the church, which reads as follows:</b><br>
<b>The Mission of the church is:</b><br>
<ul>
<li>To glorify God</li>
<li>To proclaim the Kingdom of God by preaching the gospel of Jesus Christ through the power of the Holy Spirit;</li>
 <li>To minister to the needs of the total person;</li>
<li>To develop, equip and release believers into ministry;</li>
<li>To extend the influence of the church beyond its boundaries and abroad;</li>
 <li> To promote the fellowship of the believers and network ministries.</li><br>
 <b> Therefore the Mission of the assembly is:</b><br>
<b>By the development and establishment of inspired leadership and management within dynamic functional structure and action to-</b><br>
<li>Develop and strengthen a Christ- centered evangelical character and stewardship in the Assembly;</li>
<li>Take care of the Spiritual and temporal needs of the members of the assembly;</li>
<li>Empower the members, individually and corporately, to use their talents and calling in the service of the Church of Jesus Christ and the commit so that people will commit themselves to Jesus and reach their full life-potential.</li>
</ul>
</p>
<h1 style="color:#261863" align="center">VISION</h1>
<p><ul><li>To lead people to life to fulfilment in Christ Jesus.</li></ul></p>
</div>
<div class="wraps" >
<div style="float:left">
<h1 class="zone_pastor">ZONE PASTORS</h1>
<img src="thumbnails/IMG-20160729-WA0007.jpg" class="zone"   style="box-shadow:0px 0px 2px 0px">
</div>
<hr class="hrs">
<div style="float:right">
<h1 class="executive_commitee">EXECUTIVE COMMITEE</h1>
<img src="thumbnails/IMG-20160729-WA0005.jpg" class="executive"  style="box-shadow:0px 0px 2px 0px">
</div>
</div>

<footer > <p class="footer" align="center" style="color:white;"> Emthonjeni Ministries &copy; <?php echo date("Y") ?> <a href="aboutus.php" style="color:white;font-weight:bold">About us</a></p><a href="#"><img src="thumbnails/fbs.png" id="fb"></a> <a href="#" ><img src="thumbnails/tws.png" id="tw"></a></footer>

</body>

</html>	
