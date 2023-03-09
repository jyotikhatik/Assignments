<?php
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2));
print "<br>";


$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array, 2));
print_r(array_chunk($input_array, 2, true));




$array = ['lastname', 'email', 'phone'];
print_r(implode(".", $array));
print "<br>";
$str="hello,php,programming ,language";
print_r(explode('.',$str));
print "<br><br>";


$arr=("hello php language");
print_r(str_split($arr,3));
print "<br><br>";

$arr=("he2oo php language");
print_r(str_word_count($arr,0));



?>