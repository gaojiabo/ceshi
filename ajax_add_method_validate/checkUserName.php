<?php
//远程返回数据时，一定要返回"true"或者"false",否则就是永远就是验证不通过。
// $params = $_GET ? $_GET : $_POST;
// 
// $arr = ['gaohongyu','gaojianbo'];
// 
// echo !in_array($params['userName'], $arr) ? "true" : "false";

$str = [{"number":"4410503748181c1c094f","pic":"11.jpg"}];

print_r(json_decode($str));



?>