<?php
include '../connect.php';
$erro='<br>';
if(isset($_POST['username']) && isset($_POST['password'])){
$uname=$_POST['username'];
$pas=md5($_POST['password']);
if($uname != "" && $pas !=""){
$q=mysqli_query($conn,"SELECT * FROM `login` WHERE username='$uname' AND password='$pas'");
$row=mysqli_fetch_assoc($q);
if($row['id'] != 0){
	session_start();
	$_SESSION['username']=$uname;
	header('location:admin.php');
}else{
$erro='<h5 style="margin:0px auto; text-align:center; color:red; font-size:20px">Invalid username or password</h5>';	
}
}else{
$erro='<h5 style="margin:0px auto; text-align:center; color:red; font-size:20px">All fields required</h5>';	
}
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="../css/large.css" type="text/css"  >
</head>

<body>
 
 <form class="login-form" method="post" enctype="multipart/form-data">
    <?php echo $erro ?>
    <label><b>Username</b></label><br>
    <input type="text" placeholder="Username" name="username" id="username"><br><br>
    <label><b>Password</b></label><br>
    <input type="password" placeholder="Password" name="password" id="password"><br><br>
    <input type="submit" value="Login">
  </form>
   
  
</body>
</html>