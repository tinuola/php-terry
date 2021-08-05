<?php

class Dog extends PreyMethod implements Predator, Prey {

public function chases(Prey $prey){
  var_dump('I am chasing a '.get_class($prey));
}

public function catches(Prey $prey){
  var_dump('I have just caught a '.get_class($prey));
}


}