<!DOCTYPE html>
<html>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/12
 * Time: 23:51
 */
/*echo  "helloworld";
//定义变量
$x =1;
$y=2;
$z = $x+$y;
echo "<h2>$z</h2>";
function test() {
    $e =12;
    global $f;
    echo "<h4>f的值为:$f</h4>";
    echo "e的值为:$e";
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'] + 1 ;
}

//定义函数
function myTest2() {
    static  $i=12;
    $i++;
    echo "i的值为$i";
    echo PHP_EOL;
}
test();
myTest2();
echo  "i的 值为 $i";
$f =12;
test();
echo "<h3 style='font-family=宋体'>e的值为:$e</h3>";
echo "<h3>x的值为:$x</h3>";
echo  "<h4>f的值为:$f</h4>";
echo  "<h5>z的值为:$z</h5>";

if(42 =="42"){
    print("<h6>相等</h6>");
}
if(42==="42"){
    echo "相等";
}else {
    echo "<h7>不相等</h7>";
}*/
echo '0 == false: '; #false 转换为0
var_dump(0 == false);
echo '0 === false: ';
var_dump(0 === false); #null转换为0
echo "<br/>";
echo '0 == null: ';
var_dump(0 == null);
echo '0 === null: ';
var_dump(0 === null);
echo "<br/>";
echo 'false == null: ';
var_dump(false == null); # null 转换为bool
echo 'false === null: ';
var_dump(false === null);
echo "<br/>";
echo '"0" == false: ';
var_dump("0" == false); #布尔转换数字
echo '"0" === false: ';
var_dump("0" === false);
echo "<br/>";
echo '"0" == null: ';
var_dump("0" == null);
echo '"0" === null: ';
var_dump("0" === null);
echo "<br/>";
echo '"" == false: ';
var_dump("" == false);
echo '"" === false: ';
var_dump("" === false);
echo "<br/>";
echo '"" == null: ';
var_dump("" == null);
echo '"" === null: ';
var_dump("" === null);
//php 数组
echo "<br/>";
$arr = array(1,2,3,4);
echo $arr;
echo "<br/>";
for ($index=0;$index<count($arr);$index++){
    print($arr[$index]);
    echo "<br/>";
}
echo "'.__LINE__ ,'"
?>
</body>
</html>
