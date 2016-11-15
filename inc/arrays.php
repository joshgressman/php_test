<?php
$learn = array('conditionals', 'Arrays', 'Loops'); //syntax for array
var_dump($learn); //gives the value of array,lenght and type
echo $learn[1]; //bracket notation to pull access array elements
echo implode("\n",$learn); // gives the array list values

$learn[] = "Build something awesome"; // add a value to an array must use [] or you will override the array

//Adding multiple items to the array, USE PHP built in function
array_push($learn,'Functions', 'Forms', 'Objects'); //function, $array name then values adds elements to the END

array_unshift($learn, 'HTML', 'CSS'); //Add values to the START of the array

//Remove elements from an array the PHP built in functions RESET the index valus
array_shift($learn); // removes the first element from an array

array_pop($learn); // will remove the last element from an array

unset($learn[1]); //removes specified element based in index key

unset($learn[1],$learn[2]); //Remove multiple elements DOES not reset keys values, simply removes them

//re indexing the values
$learn = array_values($learn); // creates a new array, from the array values, like a refresh to the key

//Changing array values
$learn[0] = 'Email'; //changes value at index

//Associative Array... Creating specific array keys (index values)
//Can use words instead of numbers, helps with clairity


?>
