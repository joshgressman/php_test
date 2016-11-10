<?php
$player1 = 0;
$player2 = 0;
$round = 0;
//WIN
//player must reach a score of 11
//player must be a minimum of 2 points higher than apponent

while (abs($player1 - $player2) <2 || ($player1 < 11 && $player2 <11)) { //abs is an absolut number function
    $round++;
    echo "<h2>Round $round</h2>"
    ////add a random intiger/////
    if (rand(0,1)){ //random number min 0 max
      $player1++; // will run if 1 because 1 == true
    } else {
      $player2++; // will run if 0 because 0 == false
    }
    echo "Player1 = $player1<br  />\n";
    echo "Player2 = $player2<br  />\n";
}
echo "<h1>";
if ($player1 > $player2){
  echo "player1";
} else {
  echo "Player2";
}
echo " is the winner after $round rounds!";
 ?>
