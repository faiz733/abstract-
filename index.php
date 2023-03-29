<?php 
abstract class Car{
public $name;
function __construct($name){
    $this->name = $name;
}
abstract public function get_name();
}

class Audi extends Car
{
    public function get_name()
    {
        echo "my name is audi and $this->name";
    }
}
$audi = new Audi('audi');
$audi->get_name();
?>
