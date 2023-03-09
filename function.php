<?php
$str="jyoti vinod  khatik";
echo strlen($str)."<br>";
$str1=" dhruvang khatik";
echo trim($str1)."<br>";
echo str_word_count($str)."<br>";
echo strtoupper($str1)."<br>";
echo strtolower($str1)."<br>";
echo ucfirst("hello")."<br>";
echo STRPOS($str,'vinod').'<br>';
echo stripos($str,'khatik').'<br>';
echo  substr($str1,6)."<br>";
echo str_replace("khatik","chavla",$str).'<br>';
echo str_ireplace('khatik',"tusavda",$str1)."<br>";
var_dump($str,$str1);
?>