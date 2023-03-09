<?php
$fruit=["banana","apple","pineapple","orange","guvava"];
var_dump($fruit)."<br>";

echo $fruit[1]."<br>";
echo $fruit[3];

var_dump(isset($fruit[4]))."<br>";

echo count($fruit)."<br>";

//$fruit[3]="peach";
//echo $fruit[3];
//var_dump($fruit);
array_push($fruit,'foo');
print_r($fruit);

array_pop($fruit);
print_r($fruit)."<br>";

array_unshift($fruit,"greapes");
print_r($fruit);

array_shift($fruit);
print_r($fruit)."<br>";

$str="hello php programming......";
print_r(explode(".",$str));


echo implode("#",$fruit)."<br>";

var_dump(in_array('JYOTI',$fruit))."<br>"."<br>";

$str=array_search("orange",$fruit);
print_r($str);

$vegetable=['tometo','onion'];
$print=array_merge($fruit,$vegetable);
print_r($vegetable)."<br><br>";




rsort($fruit);
var_dump($fruit)."<br>";

$person=['name'=>'bread','surname'=>'chavla','age'=>30,'hobbies'=>"reading","writing","singing"];
echo $person['hobbies'];

?>