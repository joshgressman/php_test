<?php
$a = 15;
$b = 10;

if($a == $b){
  echo 'Values are equak';
} else if ($a < $b){
  echo 'A is less than b';
} else if ($a > $b){
  echo '$a is greater than $b';
}else {
  echo 'values are not equal';
}

if($a != $b){ //evaluates if NOT equal
  echo 'Not equal!';
}

if($a != $b){ // evaluates in not equal exact
  echo 'Not equal!';
}

//Nested conditionals... can get messy quickly
$num = 10;

if($num >= 10){
  if($num <= 1000){
    echo 'Your number is within range';
  } else {
    echo 'Your number is greater than 1,000, not within the range';
  }
} else {
  echo 'Your number is NOT within range';
}

//Logical Operaors for conditionals || && can also use AND or OR

if($num >= 10 && $num <= 1000){ // and
  echo 'Your number is within range';
} else {
  echo 'Your number is out of range';
}

if($num == 10 || is_string($num)){ // or operator
  echo '10 or string';
} else {
  echo 'NOT 10 or string';
}

?>
