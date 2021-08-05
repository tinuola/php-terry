<?php

// Object Interfaces

spl_autoload_register(function($className){
  include 'src1_11b/'.$className. '.php';
});

$fido = new Dog;

$simba = new Lion;

$thumper = new Rabbit;

$fido->chases($thumper);
$fido->catches($thumper);

$simba->chases($fido);
$simba->catches($fido);

$thumper->chasedBy($simba);
$thumper->caughtBy($simba);