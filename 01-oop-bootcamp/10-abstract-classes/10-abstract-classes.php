<?php
// Abstract Classes

// Get an error message that class cannot be found-- because Database is an abstract class
// $db = new Database;

// PHP autoloading function to automatically load a class that's required inside main.php
spl_autoload_register(function($className){
  // An anonymous function
  // include the specific class
  include 'src1_10/'.$className. '.php';
});

// Now spits out actual error msg that abstract class cannot be instantiated
// $db = new Database;

// instance of pdo class
$pdo = (new PDOClient('mysql', 'localhost', 'store', 'store', 'secret'))->connect();
$mysqli = (new MySQLiClient('localhost', 'store', 'store', 'secret'))->connect();


$products = $pdo->select("SELECT * FROM products")->get();

// $raw = $mysqli->select("SELECT * FROM products")->get();
// $raw = $mysqli->getConnection();
// $raw->query();

$handler = $mysqli->getConnection();
$p = $handler->query("Select * from products where id > 6")->fetch_all();

var_dump($p);
//var_dump($products);

foreach ($products as $product){
  var_dump($product->name);
}
