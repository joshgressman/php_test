<?php
//Return statment retunrs a value and ends a Functions
//Do more than just echo values

function hello($name) {
  if($name == 'Josh'){
    return 'Hello, Josh';
  }
  return 'Hello World';
}

$greeting = hello('Josh');
echo $greeting ;

//integer Functions
function add_up ($a, $b){
  return $a + $b;
}
$value = add_up(5, 10);
echo $value;

//Return multiple values with an array
function add_up ($a, $b){
  $arr = array (
  $a,$b,$a + $b // returns the sum
);
  return $arr; //return that array $arr to return multiple values
}
$value = add_up(5, 10);
print_r($value); // get keys and value of the array


 ?>
