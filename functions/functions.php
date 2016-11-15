<?php
//Functions test

$current_user = 'Josh';

function is_josh(){
  global $current_user; // informs there is a global variable outside of function scope
  if($current_user == 'Josh'){
    echo 'It is Josh';
  } else {
    echo 'Is not Josh';
  }
}
// is_josh();
//Function arguments
function hello($arr){ //using an ArrayAccess
  if(is_array($arr)){ //verify if IS an array is a built in function
    foreach($arr as $name){//loops through array
      echo "Hello, $name, how aew you?\n";
    }
  } else {
    echo 'Hello, friends!';
  }
}

$names = array(
  'Josh',
  'Ben',
  'Holly',
  'Justin'
);

hello($names);
 ?>
