<?php
$array1=array(1,2,3,45);
// $str=array("red","blue","white");
// $array=array("red",2,"blue",3);
$number=array(6,9,28,30);
// print_r($array);
// print_r($array1); 
// $array=array("color"=>"blue",
//         "Name"=>"jyoti",
//         "adress" =>"delhi");
//         echo "<br>";
//         // print_r($array);
// $result=array_change_key_case($array,CASE_UPPER);
// var_dump($result);
// echo "<br>";
//  $result=array_chunk($array1,2);
// print_r($result);
// $result=array_combine($array1,$str);
//  print_r($result);
// $result=array_merge($array1,$str);
// print_r($result);
$result=array_combine($array1,$number);
print_r($result);
?>