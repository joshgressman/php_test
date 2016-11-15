<?php
//Closures, ananymouse functions
// Can access variables outside of the functions scope
//Set the output to the variable, function is assigned to a variable
$name = 'Josh';
$greet = function () use($name) { //use() allows use of the global variable $name
  echo "Hello, $name";
}; // must use a ; on closures

$greet();

 ?>
