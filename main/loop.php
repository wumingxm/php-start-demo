<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2019/12/13
 * Time: 13:05
 */

function  printArray($arr){
    for ($i=0;$i<count($arr);$i++){
        echo $arr[$i];
        echo PHP_EOL;
    }
}

function getConnection(){
    $servername = "localhost";
    $password = "root";
    $username = "root";
    $dbname = "mysql";
    $conn = new mysqli($servername,$username,$password,$dbname);
    if(!$conn){
        die($conn->connect_error);
    }
    if($conn->query("create table student(
       id int(13),
       sname varchar(40),
       age int (3),
       sex int(2)
    )")===TRUE) {
        echo "创建表成功";
    }else {
        echo "表已经存在";
    }
    mysqli_connect();
    echo("插入数据成功");
}

function printRelationArray($arr2){
    foreach ($arr2 as $x=>$x_value){
        echo "Key = $x ","Value=" . $x_value ;
        echo "<br/>";
    }
}
echo "hellworld";
echo "<br/>";
$favorColor = "red";
switch($favorColor){
    case "red":
        echo "you like red";
        break;
    case "green":
        echo "you like green";
        break;
    default:
        echo "you like others";
        break;
}
echo "<br/>";
$cars = array("背驰","aaaa");
sort($cars);
printArray($cars);
echo "<br/>";
$age = array("zhangsan"=>"20","lisi"=>"30");
printRelationArray($age);
getConnection();
?>