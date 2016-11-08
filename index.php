<?php
$displayName = " Joshua A Gressman";

?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title>PHP Basics by<?php echo $displayName;?> </title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div id="wrap">
        <section class="sidebar text-center">
          <div class="avatar">
            <img src="img/logo.png" alt="Alt For Image">
          </div>
          <h1><?php echo $displayName;?></h1>
          <p>Contact:<br />
          <a href="mailto:">EMAIL</a></p>
          <hr />
          <ul class="social">
            <li><a href=""><span class="icon twitter"></span></a></li>
          </ul>
          <hr />
          <p>Today: D, d M Y</p>
        </section>
        <section class="main">
          <h1>My First PHP Page</h1>

          <h2>Unit Conversion</h2>
          <?php include'inc/units.php'?> //this brings php in from oher pages


          <h2>Daily Exercise</h2>
          <?php include'inc/exercise.php'?> //this brings in php from other pages
        </section>
    </div>
    <section class="footer text-center">
      &copy;  <?php echo date('Y');  echo " " . $displayName . " ";

// outputs e.g. 'Last modified: March 04 1998 20:43:59.'
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod()); //month day, year
?>
    </section>
  </body>
</html>
