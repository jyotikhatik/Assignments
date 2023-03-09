<?php
$maths=65;
$english=85;
$biology=63;
$computer=52;
$physics=65;
$total=0;
$aevrage=0;
$persentage=0;
$grade=0;
$persentage=0;
$total=$maths+$english+$biology+$computer+$physics;
$percentage=($total/500)*100;
$aevrage=$total/5;
if($aevrage >= 90)
{
    $grade = "A";
}
else if ($aevrage >= 80 && $aevrage < 90)
{
    $grade = "B";
}
else if ($aevrage >= 70 && $aevrage < 80)
{
    $grade = "C";
}
else if ($aevrage >= 60 && $aevrage < 70)
{
    $grade = "D";
}
else
{
    $grade = "E";

}
echo "The total mark is:".$total."<br>";
echo "THe percentage is:".$percentage."<br>";
echo "The grade is:".$grade."<br>";
echo "The Averaage marks is:".$aevrage."<br>";

?>
