<?php

// Encapsulation - protect internal inform, but expose public data

// Implemented via visibility or access modifiers
// 'Public' - variable can be manipulated outside class, method can be called
// Private
// Protected 

class Video {
    private $type;
    private $duration;
    protected $published = false;

    public function __construct($type, $duration, $title){
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
}

//header('Content-Type:text/plain', true);

// Error because properties are private
// $video1 = new Video('mp3', '15.00', 'Intro PHP' );
// $video1->published = true;
// var_dump($video1);


// Getters & Setters

class Audio {
    // Data
    private $type;
    private $duration;
    protected $published = false;
    private $title;
    private $playStatus;

    // Getters and Setters
    // Public methods that will allow client to interact with object

    // Sets and gets state of published property
    public function setPublished(bool $state){
      $this->published = $state;
    }

    private function getPublished(){
      return $this->published;
    }

    // Set and get title property
    public function setTitle($title){
      $this->title = $title;
    }

    public function getTitle(){
      return $this->title;
    }

    // Methods
    public function play(){
      if($this->getPublished()){
        $this->playStatus = true;
        return 'The audio is playing';
      }
      return "This audio is not yet available";
    }
    
    public function pause(){
      return $this->playStatus ? "This audio is paused" : "";
    }
}


$audio = new Audio;
$audio->setPublished(true);
echo $audio->play(), PHP_EOL, PHP_EOL;

$audio->setTitle('Intro to OOP');
echo $audio->getTitle(), PHP_EOL, PHP_EOL;

echo $audio->play(), PHP_EOL, $audio->pause(), PHP_EOL;