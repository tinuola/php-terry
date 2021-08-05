<?php

// Object Interfaces

spl_autoload_register(function($className){
  include 'src1_11a/'.$className. '.php';
});

$dog = new Dog;
$dog->chases('Rabbit');
$dog->catches('Rabbit');

$cat = new Cat;
$cat->chases('Bird');
$cat->catches('Bird');