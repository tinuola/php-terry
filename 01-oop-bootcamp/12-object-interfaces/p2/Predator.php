<?php

interface Predator {

// Doesn't say how, but if using this class, must chase, catch a Prey
// Only a prey can be chased/caught



public function chases(Prey $prey);

public function catches(Prey $prey);

}