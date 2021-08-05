<?php
// Initialize Objects with a Constructor

// Constructor: a method (if defined) called when a class is instantiated, that is, the initial behavior of an object when created
// It can contain parameters
// Parameters can have default values
// Parameters can have set types

// Destructor: Method that runs after initial methods defined for a class have completed their operation

class Video {
    public $type;
    public $duration;
    public $published = false;
    public $title;

  // public function __construct($type, $duration, $title){

  // public function __construct($type='mp4', $duration='10.4', $title='Intro Programming'){

public function __construct(string $type='mp4', float $duration=10.4, string $title='Intro Programming'){
    $this->type = $type;
    $this->duration = $duration;
    $this->title = $title;
}

public function play(){
    return $this->published ? "This video is playing" : "This video is not yet available";
}

    public function pause(){
      return $this->published ? "This video is paused" : "";
    }

    // Destructor also runs automatically when object is initialized.
    public function __destruct(){
      var_dump('Destroying instance of '.get_class());
    }
  }

  // header('Content-Type:text/plain', true);

  $video1 = new Video('mp3', '15.00', 'Intro PHP' );
  var_dump($video1);

  // Prints out default values
  $video2 = new Video();
  var_dump($video2);

  // Value type strictly defined
  // Gives error
  // $video3 = new Video('mp3', 'duration', 'Intro JS');
  $video3 = new Video('mp3', 13, 'Intro JS');

  var_dump($video3);