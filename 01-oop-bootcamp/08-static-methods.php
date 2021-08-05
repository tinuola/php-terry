<?php
// Static Methods & Properties

// Access methods and properties of a class without instantiating the class

class Database {
  static private $pdo;
  static public $operators = ['=', '<>', 'and', 'or', 'like'];
  // not equal <>
  private $table;

  // order of keyword does not matter
  public static function connect(string $method){

    // cannot refer to a non-static property inside of a static method
    // $this->table;

    // Instead use this technique called "late static binding" to access a non-staic property inside a static method
    $obj = new static;
    $obj->table;

    // self:: means referring to class Database
    // cannot use $this on static property/method
    self::$pdo = $method;
    // or
    // static::$pdo = $method;
  }

  public static function create(array $data){
    var_dump('Creating a new database with '. self::$pdo);
  }

  // Anything set as public requires a new instance of the Database class
  public function getMethod(){
    return self::$pdo;
  }

}

var_dump(Database::$operators);
Database::connect('pdo');
Database::create([]);

$db = new Database;
echo PHP_EOL, $db->getMethod();