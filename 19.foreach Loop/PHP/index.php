<?php include 'inc/header.php';?>
<?php
 
 //foreach Loop

/*

#Syntax of foreach Loop:


foreach ($array as $value) {

    //code to be executed;

}

*/

//
 
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {

     echo "$value <br>";

}


//


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {

      echo "$x = $val<br>";

}





?>
<?php include 'inc/footer.php';?>