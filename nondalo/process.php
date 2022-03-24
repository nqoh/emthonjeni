<?php
include '../connect.php';
if(isset($_POST['files'])){
$name=$_POST['files'];
$q=mysqli_query($conn,"SELECT * FROM images  ");
while($x=mysqli_fetch_assoc($q)){
 if($x['name'] == $name){
	echo " File already exits in the database"; 
	break;
 }
}

}
?>