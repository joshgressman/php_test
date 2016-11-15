<?php
//Functions wiht a starting default value passed
function greet($name = 'friend', $time_of_day = Null){ //optional parameters
  if($time_of_day = ){
  echo "Hi, $name, good $time_of_day";
} else {
    echo "Hello, $name";
  }
}
//greet('Josh', 'afternoon'); or
//greaat('Josh');

function get_info($name, $title = Null){ //sets default parameter title optinal with Null
  if($title){ //runs true IF there is a $title
  echo "$name has arrived, they are with us as a $title";
} else {
  echo "$name has arrived, welcome";
  }
}
//Eaither one will run the function
//$get_info('Josh', 'President'); or
//$get_info('Josh')



 ?>
