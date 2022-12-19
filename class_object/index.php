<?php
class Car {
    // properties 
    // public $name;
    private $name;
    public $price;

    //methods
    public function getCarName($userName) { //void
        $this -> name = $userName;
        // echo $this -> name;
        return $this -> name;
    } 

    public function getName() {
        return $this -> name;
    }

    public function setCarName($name = "default") {
        $this -> name = $name;
    }

    public function getCarPrice($userPrice = "0") {
        $this -> price = $userPrice;
        echo $this -> price;
    }
}

$car = new Car();
// var_dump($car);
// $name = $car -> getCarName("BMW");
// echo $name;
$name = $car -> setCarName("BMW");
// echo $car -> name;
echo $car -> getName();
echo "<br>";
$car -> getCarPrice("233$");

// echo "<br>";
// var_dump($name);