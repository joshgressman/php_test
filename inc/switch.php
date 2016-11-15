<?php
switch(date('l')){
  case 'Monday':
  echo 'Chest & Back day';
  break;
  case 'Tuesday':
  echo 'Shoulder Day';
  break;
  case 'Wednesday':
  echo 'Calf and forearm day';
  break;
  case 'Thursday':
  echo 'Off Day';
  break;
  case 'Friday':
  echo 'Legs day';
  break;
  case 'Saturday':
  echo 'Arms';
  break;
  case 'Sunday':
  echo 'off';
  break;
  default:
  echo 'burn it to earn it';
}
?>
