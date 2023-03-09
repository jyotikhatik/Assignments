 <!-- <?php
function hello()
 {
$detail=['name' => 'jyoti',
         'surname' => 'khatik',
         'hobbies' => 'shopping',
         'village' => 'bhinder',
         'city' => 'udaipur',
         'state' => 'rajasthan',
         'qualification' => 'm.c.a',
         'stetus' => 'merried'];

foreach ($detail as $key => $value)
     {
        echo $key.'='.$value."<br>";
     }
    }
    hello();
?> -->
<?php
$name="jyoti";
$age="19";
if($age > 18)
{
    echo "jyoti is eligible for vote";
}
else
{
    echo "jyoti is not eligible for vote";
}

?>