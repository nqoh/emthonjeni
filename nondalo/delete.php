<?php
include '../connect.php';
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$name=$_GET['name'];
mysqli_query($conn,"Delete FROM `images` WHERE id=$id");	
unlink("../images/$name");
header('location:admin.php');

}

?>