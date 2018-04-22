<?php
header("Content-Type:application/json");
require_once("../init.php");
session_start();
@$uid=$_SESSION["uid"];
if($uid!=null){
	$sql="select * ,(select sm from fc_vegetable_pic where vegetable_id=lid limit 1) as pic from `fc_cart_list` inner join fc_vegetable on lid=product_id where user_id=$uid";
	$result=mysqli_query($conn,$sql);
	echo json_encode(mysqli_fetch_all($result,1));
	}