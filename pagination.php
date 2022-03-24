<?php
require 'connect.php';
$qr=mysqli_query($conn,"SELECT COUNT(id) FROM images");
$row=mysqli_fetch_row($qr);
$page_rows =6;
$last = ceil($row[0]/$page_rows);
if($last < 1){
	$last = 1;
}
$pagenum = 1;
if(isset($_GET['pn'])){
	$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
}
if ($pagenum < 1) { 
    $pagenum = 1; 
} else if ($pagenum > $last) { 
    $pagenum = $last; 
}
$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
$rq=mysqli_query($conn,"SELECT * FROM `images` ORDER BY id DESC  $limit ");
$paginationCtrls = '';
if($last != 1){
if ($pagenum > 1) {
$previous = $pagenum - 1;
$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'">Prev</a> &nbsp; &nbsp; ';
for($i = $pagenum-2; $i < $pagenum; $i++){
if($i > 0){
$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
}
}
}
$paginationCtrls .= ''.$pagenum.' &nbsp; ';
for($i = $pagenum+1; $i <= $last; $i++){
$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
		if($i >= $pagenum+2){
			break;
		}
	}
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'">Next</a> ';
    }
}
$list = '';
while($row=mysqli_fetch_assoc($rq)){
	$id = $row["id"];
	$comment = $row["comment"];
	$name = $row['name'];
	$x="zola";
	$list .='<div class="imgs" ><img src="images/'.$name.'"><p>'.$comment.'</p></div>';
}

?>