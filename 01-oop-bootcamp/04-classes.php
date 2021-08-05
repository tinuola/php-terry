<?php 
// PHP Classes and Objects 

class Video {
    public $type;
    public $duration;
    public $published = false;
    public $title;
    
    public function play(){
        return $this->published ? "This video is playing" : "This video is not yet available";
    }
    
    public function pause(){
        return $this->published ? "This video is paused" : "";
    }
}

header('Content-Type:text/plain', true);

$introduction = new Video();
//var_dump($introduction);

// Returning a method? Use echo
// echo $introduction->play();

// Change value of published
$introduction->published = true;
// Adding new property
// Not recommended to add properties not defined in a class
$introduction->author = "Eniola";

echo $introduction->play(), PHP_EOL, $introduction->pause(), PHP_EOL, $introduction->author, PHP_EOL, PHP_EOL;

$video2 = new Video();
echo $video2->play(), PHP_EOL, $video2->pause(), PHP_EOL;

?>
