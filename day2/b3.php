<?php

//父類別
class Car{
    function __construct(){

    }
    private $type = 'parent';
    protected $name = "car name";
    public $people = 4;
    static $color = 'blue';        

    public function querryInfo(){
        echo $this->type;
        echo '-';
        echo $this->name;
        echo '-';
        echo $this->people;
    }

    static public function do(){
        echo "do something";
    }
}

$car1 = new Car;
echo $car1->querryInfo();

class Toyota extends Car{
    function __construct(){
        $this->name="toyota";
    }
}

$car2 = new Toyota;
$car2->querryInfo();

echo "<hr><br>";
echo Car::$color;
echo "<br>";
echo Car::do();