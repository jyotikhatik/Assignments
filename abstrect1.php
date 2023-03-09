<?php
abstract class animal
{
    abstract public function display();
    public function show()
    {
        echo"This is non Abstract method"."<br>";
    }

}
class b extends animal
{
    public function display()
    {
        echo "this is abstect class"."<br>";
    }
}
$obj = new b;
$obj->display();
$obj ->show();




     






?>