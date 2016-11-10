//while loops
<?php
$currentYear = date('Y');
$year = $currentYear - 100;

while (++$year <= $currentYear){ //notice you can add ++ in the while loop () to increment
  echo $year . "<br/>\n";
  // $year++;
}

//DO WHILE loop .... you want something to happen at least OutOfBoundsException
do {
echo $year . "<br/>\n"; // will run the first year before the loop starts
} while (++$year <= $currentYear);

//////PHP Each function ///////////////////////////////
$learn = array('conditionals', 'Arrays', 'Loops');
//echo implode("\n",$learn);

//to add values to the array
//$learn[] = "Build something awesome";

array_push($learn,'Functions', 'Forms', 'Objects');
array_unshift($learn, 'HTML', 'CSS');
asort($learn); // stands for array sort

//Loops through the array and returns the $key and $val for each item
$count = 0;
while ((list($key, $val) = each($learn)) && $count++ < 2){
  echo "$key => $val\n";
  echo $count;
}



 ?>
