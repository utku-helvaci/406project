<?php
include ('db.php');
$flag = $_POST['flag'] ;
if($flag == 1){
	$room = $_POST['troom'] ;
	$bed =$_POST['bed']  ;
	$sql = "SELECT free_number FROM room WHERE type='$room' AND bedding = '$bed' AND place = 'Free' " ;
	$result = mysqli_query($con,$sql) ;
	$res = mysqli_fetch_array($result, MYSQLI_NUM);
}
else{
	$from = $_POST['from'] ;
	$to = $_POST['to'] ;
	$type = $_POST['type'] ;
	$sql = "SELECT * FROM room WHERE type_s='$type'  AND place = 'Free' " ;
	$res = mysqli_query($con,$sql) ;
	$res = mysqli_fetch_all($res, MYSQLI_ASSOC);
	// mysqli_free_result($res);
}


echo json_encode($res) ;

?>