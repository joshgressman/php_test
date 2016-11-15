<?php
//to do application with list file included.
include 'list.php';

$status = 'all'; // diplay incomplete tasks if false ... completed = true
$field = 'priority'; //allows to sort by a field
$action = 'week';

$order = array();
if($status == 'all'){
  $order = array_keys($list);
} else {
foreach ($list as $key => $item) {
  if ($item['complete'] == $status){
    $order[] = $key;
  }
 }
}

switch ($action) {
  case 'sort';
if($field){
  $sort = array();
  foreach ($order as $id){
    $sort[$id] = $list[$id][$field];
  }
  asort($sort);
  $order = array_keys($sort);
}
break;
case 'week':
foreach ($order as $key => $value){
  if (strtotime($list[$value][$due]) >  strtotime("+1 week")){ //means from one week from today
    unset($order[$key]);
  }
}
break;
}
echo '<table>';
echo '<tr>';
echo '<th>Title</th>';
echo '<th>priority</th>';
echo '<th>Due Date</th>';
echo '<th>Complete</th>';
echo '</tr>';
foreach ($order as $id) { //iterate through list array and places values into a table
echo '<tr>';
echo '<td>' . $list[$id]['title'] . "</td>\n";
echo '<td>' . $list[$id]['priority'] . "</td>\n";
echo '<td>' . $list[$id]['due'] . "</td>\n";
echo '<td>';
if ($list[$id]){
  echo 'Yes';
} else {
  echo 'No';
}
echo "</td>\n";
echo '</tr>';
}
echo '</table>';

 ?>
