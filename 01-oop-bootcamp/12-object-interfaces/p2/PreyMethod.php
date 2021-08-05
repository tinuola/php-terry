<?php

abstract class PreyMethod {

public function chasedBy(Predator $predator){
  var_dump('Running from a big bad '.get_class($predator));
}

public function caughtBy(Predator $predator){

  $obj = new static;

  var_dump(get_class(new static).' has been caught by a '.get_class($predator));
}


}