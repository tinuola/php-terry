<?php

class Animal {
  
  public function chases($target){
    var_dump('Chasing a '.$target);
  }

  public function catches($target){
    var_dump('I have caught the '.$target);
  }

}