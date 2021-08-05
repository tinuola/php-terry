<?php

class Lion extends PreyMethod implements Predator {

  public function chases(Prey $prey){
    var_dump('I am chasing a '.get_class($prey));
  }

  public function catches(Prey $prey){
    var_dump('I have just caught a '.get_class($prey));
  }

}