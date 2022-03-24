<?php
require '../connect.php';
$qr=mysqli_query($conn,"SELECT COUNT(id) FROM comments");
$row=mysqli_fetch_row($qr);
$page_rows = 4;
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
$rq=mysqli_query($conn,"SELECT * FROM comments ORDER BY id DESC $limit");
$paginationCtrls = '';
if($last != 1){
if ($pagenum > 1) {
$previous = $pagenum - 1;
$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'">Previous</a> &nbsp; &nbsp; ';
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
$emaillist = '';
while($row =mysqli_fetch_assoc($rq)){
	$code = $row["email"];
	$id= $row["id"];
	$date=$row['date'];
	$fileName = $row["name"];
	$download = $row["comment"];
	$emaillist .='<div><b>NAME : </b>'.$fileName.'<br><b> DATE :</b> '.$date.'<br><b>EMAIL :</b> '.$code.'<br><b> MASSEGE :</b>'.$download.'<br>'.'<a href="deletee.php?id='.$id.'">delete</a>'.'</div><br>';
}
?>