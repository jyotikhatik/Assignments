<?php
class admin
{
    public function display()
    {
        echo "This is parent class"."<br>";
    }
}
class teacher extends  admin
{
    public function sound()
    {
        echo "This is child class";
    }
}
$obj = new  teacher();
$obj -> display();
$obj->sound();

?>