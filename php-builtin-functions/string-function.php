<?php
//common php built in functions
$phrase = "We only hit what we aim for";
$len = strlen($phrase); //returns the lenght of the string
echo $len; //shows the lenght of the string as an integer

//strlen();
//substr();
substr($phrase, 0, 5); // retreives the first 5 character indexes
//strpos();
strpos($phrase, 'hit'); //finds position of string, start positon.

$start = strpos($phrase, 'hit');
echo substr($phrase, $start); //can use the integer value of 8 
 ?>
