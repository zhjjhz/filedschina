<?php
require_once("cart.php");
session_start();
@$uid=$_SESSION["uid"];
@$lid=$_REQUEST["lid"];
@$count=$_REQUEST["count"];
if($uid!=null&&$lid!=null&&$count!=null)
	insert($uid,$lid,$count);