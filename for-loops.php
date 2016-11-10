<?php
//first conditional is executed once unconditionally
$currentYear = date('Y');
$year = $currentYear - 100;

for($year = $currentYear - 100;$year <= $currentYear; $year++){
echo $year . "<br />\n";
}

//or use ////
for($year = date('Y' -99); $year <= date('Y');$year++){
echo $year . "<br />\n";
}

//for loops to index Array

$learn = array('conditionals', 'Arrays', 'Loops');
//var_dump($learn);
//echo $learn[1];
//echo implode("\n",$learn);
//to add values to the array
//$learn[] = "Build something awesome";

array_push($learn,'Functions', 'Forms', 'Objects');
array_unshift($learn, 'HTML', 'CSS');
//asort($learn); // stands for array sort
asort($learn);
sort($learn); //sort to re index the keys

for($1 = 0; i < count($learn); $i++){
  echo $learn[i] . "\n"; // iterate through the array
}



 ?>
