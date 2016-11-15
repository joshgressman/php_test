<?php
//variable function use a variables value to call a Functions
//used as a call back for another Function or based on a result of the main Functions
//call a function by using a string variable

function answer(){
  return 42;
}

function add_up($a, $b){
  return $a + $b;
}

$func = 'add_up';
$num = $func(5, 10);
echo $func(); //calls the function answer


 ?>
