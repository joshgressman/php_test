<?php
// Multidimensional arrays allow me to create an nested array of information
// for each item in my list. In this video we'll take a look at the format for
// creating multidimensional arrays.

//These are now miltidimensional arrays (arrays in arrays)
$list['Task 1'] = [ //This is an associated array
  'title' => 'Laundry',
  'priority' => 2,
  'due' => '',
  'complete' => true,
];
//Short array syntax $list = [] KEY goes inside the []
$list['Task 2'] = [ //This is an associated array
  'title' => 'Clean Fridge',
  'priority' => 3,
  'due' => '07/30/2016',
  'complete' => false,
];

// $list = array($task1, $task2);

// var_dump($list);

//access first task from $list
echo $list[0]['title']; // will return Laundry

//exercise for the code challenge
$contacts = array(
  array( 'name' => 'Alena Holligan', 'email' => 'alena.holligan@teamtreehouse.com'),
  array( 'name' => 'Dave McFarland', 'email' => 'dave.mcfarland@teamtreehouse.com'),
  array( 'name' => 'Treasure Porth', 'email' => 'treasure.porth@teamtreehouse.com'),
  array( 'name' => 'Andrew Chalkley', 'email' => 'andrew.chalkley@teamtreehouse.com' )
  );

  echo "<ul>\n";
//$contacts[0] will return 'Alena Holligan' in our simple array of names.
echo "<li>" . $contacts[0]['name'] . " : " . $contacts[0]['email'] . "</li>\n";
echo "<li>" . $contacts[1]['name'] . " : " . $contacts[1]['email'] . "</li>\n";
echo "<li>" . $contacts[2]['name'] . " : " . $contacts[2]['email'] . "</li>\n";
echo "<li>" . $contacts[3]['name'] . " : " . $contacts[3]['email'] . "</li>\n";
echo "</ul>\n";
 ?>

 //the $list[] took the place of the $task1 and
 //manually inserted into list. Did not need $list = array($task1, $task2);
// can also replace the array() with [] as the shorthand
