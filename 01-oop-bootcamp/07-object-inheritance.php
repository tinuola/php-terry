<?php
// Object Inheritance

// Base Class
class Animal {
  public $weight;

  public function eat(){
    var_dump('All animals can eat');
  }

  public function reproduce(){
    var_dump('All animals can reproduce');
  }
}

// Every Mammal object inherits the public or protected properties and methods of Animal

class Mammal extends Animal {
  public $heartRate;

  public function breathe(){
    var_dump('Mammals breathe.');
  }
}

// Every Dog object auto inherits from Mammal and Animal
class Dog extends Mammal {
  public $color;

  public function bark(){
    var_dump(strtoupper(get_class()) .' can bark.');
  }

  // Overriding parent / default method breathe()
  public function breathe(){
    var_dump('I breathe very fast.');
  }

  public function chase(){
    var_dump('I am chasing a Rabbit.');
  }
}

$akita = new Dog;
$akita->weight = 20.4;
$akita->color = 'Black';
$akita->heartRate = 'Grrrreat';

// var_dump($akita);

echo "Weight: ".$akita->weight, '<br>', "Color: ".$akita->color, '<br>', "Heart rate: ".$akita->heartRate;

$akita->bark();
echo '<br>';
$akita->chase();
echo '<br>';
$akita->eat();
echo '<br>';
$akita->reproduce();
echo '<br>';
$akita->breathe();