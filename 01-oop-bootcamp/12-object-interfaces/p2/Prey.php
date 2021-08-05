<?php

interface Prey {

  public function chasedBy(Predator $predator);

  public function caughtBy(Predator $predator);

}