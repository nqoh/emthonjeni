<?php
session_start();
include 'emailpagnation.php';
if(isset($_SESSION['username'])){
include '../connect.php';
include 'pagination.php';
$imageerror='';
$text='';
if(isset($_GET['logout'])){
 session_destroy(); header('location:index.php');		
}
if(isset($_POST['text2']) ){
	 $text1=$_POST['text1'];
	 $text2=$_POST['text2'];
     $text3=$_POST['text3'];
     $text4=$_POST['text4'];
     $text5=$_POST['text5'];
     $text6=$_POST['text6'];
     $text7=$_POST['text7'];	
     $text8=$_POST['text8'];
 $array= Array($text1,$text2,$text3,$text4,$text5,$text6,$text7,$text8);
 $name=$_FILES['file']['name'];

$type=$_FILES['file']['type'];
$size=$_FILES['file']['size'];
$enctype=$_FILES['file']['tmp_name'];
$error=$_FILES['file']['error']	;

for($i=0; $i < count($type) ; $i++){
	 if($enctype[$i] != ""){
	if(move_uploaded_file($enctype[$i] , "../images/".$name[$i])){
		
		$query=mysqli_query($conn,"INSERT INTO `images` VALUES(null,'$name[$i]','$type[$i]','$array[$i]',CURRENT_TIMESTAMP)");		
	}else{
	 $imageerror='<p align="center" style="color:red"><b>'.$name[$i].' Failed to upload</b>'.'</p>';
		break;
	}
	 }	
}
 $imageerror='<p align="center" style="color:green"><b>All file successfull uploaded</b></p>';
}
}else{
header('location:index.php');	
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $_SESSION['username'] ?></title>
<link rel="stylesheet" href="../css/large.css" type="text/css"  >
<link rel="stylesheet" href="../css/admin.css" type="text/css"  >
<script src="../javascript/validate.js"></script>
</head>
<script>
function  logout(){

}
</script>
<body>
<nav>
<a href="index.php" class="logo"><img src="../thumbnails/logo namee.png" style="margin:-10px; height:40px"></a> 
<a href="admin.php?logout=<?php echo $_SESSION['username'] ?>" onclick="logout()"  id="logout">Logout</a>
<a href="#" onclick="return false" onMouseDown="change(this,'email-div','View Emails')" id="view-email">View Emails</a>
<!--<a href="aboutus.php" onclick="return false" onMouseDown="change(this)" id="vie">View Events</a>
<a href="=cultare.php" onclick="return false" onMouseDown="change(this)" id="view-events" >Add events</a> -->
<a href="#" onclick="return false" onmousedown="change(this,'upload','Add Gallery')" id="view-cultare" >Add Gallery</a>
<a href="#" onclick="return false" onmousedown="change(this,'culture-div','View Gallery')" id="add-cultare"   style="color:white; background-color:black;padding:10px;margin:0px;margin-right:8px;">View Gallery</a>
</nav>
<br><br><br>
<div class="content">
<span id="welcome" style="text-align:center"><b>Welcome  <?php echo $_SESSION['username'] ?></b></span>
  <p align="center" class="vission" id="notice">View Gallery</p>
  <?php echo $imageerror  ?>
  <hr>
  <div id="upload" style="display:none">
 
  <form method="post" enctype="multipart/form-data" action="admin.php"  class="myform" >
  <div  class="box">
      
   <div class="img-box">
   <input type="file" id="file1" name="file[]" onChange="validate(this)"><br>
   <textarea cols="27" rows="3"  name="text1" ></textarea><br>
  </div>
  
   <div class="img-box">
   <input type="file" id="file2" name="file[]" onChange="validate(this)"><br>
   <textarea cols="27" rows="3" name="text2"></textarea><br>
   <div id="progressbar2" class="progressbar">
   <div class="percent" id="percent2"></div>
   </div>
  </div>
  
   <div class="img-box">
   <input type="file" id="file3" name="file[]" onChange="validate(this)"><br>
   <textarea cols="27" rows="3" name="text3"></textarea><br>
   <div id="progressbar3" class="progressbar">
   <div class="percent" id="percent3"></div>
   </div>
  </div>
  
   <div class="img-box">
   <input type="file" id="file4" name="file[]" onChange="validate(this)"><br>
   <textarea cols="27" rows="3" name="text4"></textarea><br>
   <div id="progressbar4" class="progressbar">
   <div class="percent" id="percent4"></div>
   </div>
  </div>
  
   <div class="img-box">
   <input type="file" id="file5" name="file[]" onChange="validate(this)"><br>
   <textarea cols="27" rows="3" name="text5"></textarea><br>
   <div id="progressbar5" class="progressbar">
   <div class="percent" id="percent5"></div>
   </div>
  </div>
  
   <div class="img-box">
   <input type="file" id="file6" name="file[]" onChange="validate(this)"><br>
   <textarea cols="27" rows="3" name="text6"></textarea><br>
   <div id="progressbar6" class="progressbar">
   <div class="percent" id="percent6"></div>
   </div>
  </div>
  
   <div class="img-box">
   <input type="file" id="file7" name="file[]" onChange="validate(this)"><br>
   <textarea cols="27" rows="3" name="text7"></textarea><br>
   <div id="progressbar7" class="progressbar">
   <div class="percent" id="percent7"></div>
   </div>
  </div>
  
   <div class="img-box">
   <input type="file" id="file8" name="file[]" onChange="validate(this)"><br>
   <textarea cols="27" rows="3" name="text8"></textarea><br>
   <div id="progressbar8" class="progressbar">
   <div class="percent" id="percent8"></div>
   </div>
  </div>
  
  <input type="submit" value="Upload All Files">
  </div>
  </form>
  <hr><br>
  </div>
  
  <div id="culture-div" >
      <div class="img-content" >
      <?php echo $list  ?>
 <!-- <div class="imgs"><img src="../thumbnails/1.jpg"><p>nqobile , manisa , zodwa , cele , malume</p></div>
  <div class="imgs"><img src="../thumbnails/1.jpg"><p>nqobile , manisa , zodwa , cele , malume</p></div>
  <div class="imgs"><img src="../thumbnails/1.jpg"><p>nqobile , manisa , zodwa , cele , malume , nmmmnmmn , nnjiji</p></div><div class="imgs"><img src="../thumbnails/1.jpg"><p>nqobile , manisa , zodwa , cele , malume , nmmmnmmn , nnjiji</p></div>
  <div class="imgs"><img src="../thumbnails/1.jpg"><p>nqobile , manisa , zodwa , cele , malume , nmmmnmmn , nnjiji</p></div><div class="imgs"><img src="../thumbnails/1.jpg"><p>nqobile , manisa , zodwa , cele , malume , nmmmnmmn , nnjiji</p></div>
    
  </div>
  --></div>
  <h3 align="center"><?php echo $paginationCtrls  ?></h3>
  <hr><br>
  </div>
  
  <div id="email-div" style="display:none">
  <?php echo $emaillist;  ?>
  <hr>
  </div>
  
</div>

  
</div>


</body>
</html>