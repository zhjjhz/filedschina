<?php
/**
* 接收客户端
*/
header('Content-Type: application/json;charset=UTF-8');

@$phone = $_REQUEST['phone'] or die('{"code":401,"msg":"uname required"}');
@$upwd = $_REQUEST['upwd'] or die('{"code":402,"msg":"upwd required"}');

require_once('../init.php');
$sql = "INSERT INTO fc_user(upwd,phone) VALUES('$upwd','$phone')";
$result = mysqli_query($conn,$sql);

if(!$result){
  echo('{"code":500, "msg":"db execute err"}');
}else {
  $uid = mysqli_insert_id($conn);
  echo('{"code":200, "msg":"register succ", "uid":'.$uid.'}');
}