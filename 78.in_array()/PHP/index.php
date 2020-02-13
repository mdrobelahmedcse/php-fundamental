<?php include 'inc/header.php';?>
<?php
 

//in_array()

 

$people = array("Peter", "Joe", "Glenn", "Cleveland", 23);

if (in_array("23", $people, TRUE))
  {
  echo "Match found<br>";
  }
else
  {
  echo "Match not found<br>";
  } 
if (in_array("Glenn",$people, TRUE))
  {
  echo "Match found<br>";
  }
else
  {
  echo "Match not found<br>";
  }

if (in_array(23,$people, TRUE))
  {
  echo "Match found<br>";
  }
else
  {
  echo "Match not found<br>";
  }























?>
<?php include 'inc/footer.php';?>