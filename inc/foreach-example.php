<?php
$flavors = array();

//Using a foreach, create a loop that goes through each of the flavors in the $flavors array.

$flavors[] = array("name" => "Cookie Dough",      "in_stock" => true);
$flavors[] = array("name" => "Vanilla",           "in_stock" => false);
$flavors[] = array("name" => "Avocado Chocolate", "in_stock" => false);
$flavors[] = array("name" => "Bacon Me Crazy",    "in_stock" => true);
$flavors[] = array("name" => "Strawberry",        "in_stock" => false);

//add your code below this line
//Inside of your foreach loop echo each of the flavors to the screen.
// only print flavors in stock
foreach ($flavors as $value) {
  if($value['in_stock'] == true){
   echo $value['name'];
 }
}

 ?>
