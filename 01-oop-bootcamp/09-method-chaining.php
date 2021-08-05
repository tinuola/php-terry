<?php
// Method Chaining

class Database {
  static private $pdo;
  static public $operators = ['=', '<>', 'and', 'or', 'like'];
  private $table;

  // Inside a static method, return new static
  public static function connect(string $method){

    // self::$pdo = $method;
    // or
    static::$pdo = $method;

    // When line 13 is done, return the entire class object Database
    return new static;
  }

  //  Inside a non-static method, return $this
  public function table(string $name){
    $this->table = $name;
    return $this;
  }

  public function insert(array $data){
    var_dump('Connecting to the database using '. self::$pdo);
    var_dump("INSERTING INTO {$this->table} VALUES(".json_encode($data).")");
  }

}

Database::connect('pdo')->table('users')->insert(['username'=>'Kara', 'password'=>'nunya']);