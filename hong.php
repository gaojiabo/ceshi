<?php
function p($arr){
	echo '<pre/>';
	print_r($arr);
	exit;
}

function test($a=0,&$result=[]){
	$a++;
	if($a<10){
		$result[] = $a;
		test($a,$result);
	}
	echo $a;
	return $result;
}
//$re = test();
//p($re);

//& 变量的引用
$a = 'abc';
$b = &$a;
echo $b.PHP_EOL; //abc
echo $a.PHP_EOL; //abc
$b = '132';
echo $a.PHP_EOL; //132
echo $b.PHP_EOL; //132
$a = 'gaohongyu';
echo $a.PHP_EOL; //132
echo $b.PHP_EOL; //132
echo '<hr/>';
//函数的引用传递（传址调用）
function cz(&$a){
	$a += 100;
}
$c = 99;
echo $c.PHP_EOL;
cz($c);//这里实际上是$c变量的内存地址传递给了函数,而在函数里改变$a的值,就可以改变$c的值了
echo $c.PHP_EOL;

//递归 1 1 2 3 5 8 13 21 34 55 89 144

//{"id":"13","name":"测试自营002","address":"菜鸟教程","loc":{"type":"Point","coordinates":[116.287287,39.831575]}}

echo '<hr/>';

$str1 = '中国';
//$str2 = '中国';
$str2 = '中國';

$nameGbk = iconv("UTF-8", "GBK//IGNORE",$str1);
$nameGb2312 = iconv("UTF-8", "GB2312//IGNORE", $str2);

var_dump($nameGb2312 == $nameGbk);
if($i = 3 + $j = 1){
	var_dump($i,$j);die;
}

//{ "id" : "6116", "name" : "测试有公2454", "address" : "香港湾仔区渣甸山睦誠徑258号", "google_location" : { "type" : "Point", "coordinates" : [ 116.27916999, 39.83872444 ] }, "gaode_location" : { "type" : "Point", "coordinates" : [ 116.279169, 39.838724 ] } }


