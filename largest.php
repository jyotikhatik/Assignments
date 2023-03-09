<?php
$n1=100;
$n2=500;
$n3=200;
$max;
$max = ($n1 > $n2) ?
          ($n1 > $n3 ? $n1 : $n3) :
          ($n2 > $n3 ? $n2 : $n3);
          echo "the largest Number is".$max;
?>
