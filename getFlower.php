<?php
header("Content-Type:application/json");
require_once("../init.php");
$sql="SELECT * FROM `index_content` WHERE lid>24 && lid<=30";
$result=mysqli_query($conn,$sql);
echo json_encode(mysqli_fetch_all($result,1));