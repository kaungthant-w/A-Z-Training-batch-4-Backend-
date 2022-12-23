<?php
class Animals {
    public $name;
    public $color;
    public function __construct($animalName, $animalColor) {
        echo $this -> name = $animalName;
        echo $this -> color = $animalColor;
        // $this -> name = $animalName;
        // $this -> color = $animalColor;
    }

    public function night () {
        echo "Good night <br>";
    }
}

class Cat extends Animals {
    public function greeting () {
        echo "Meow meow... <br>";
    }
}

class Dog extends Animals {
    public function greeting() {
        echo "Woow woow wooW... <br>";
    }
}


// $cat = new Animals("Shwe War", "Yellow");
// echo $cat -> name."<br>";
// echo $cat -> color;

$cat = new Cat("Shwe War <br>", "Yellow <br>");
$cat -> greeting();
$cat -> night();

echo "<br>";

$dog = new Dog("Aung Net <br>", " black <br>"); 
$dog -> greeting();
// echo $dog -> name;
// echo $dog -> color;
