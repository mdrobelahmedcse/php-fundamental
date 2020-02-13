<?php include 'inc/header.php';?>
<?php
 

//arsort()-asort()

 

//

$numbers = array("a"=>20,"b"=>30,"c"=>25);


arsort($numbers);



foreach($numbers as $x=>$x_value){
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
}


//

$numbers = array("a"=>20,"b"=>30,"c"=>25);


asort($numbers);



foreach($numbers as $x=>$x_value){
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
}




//
$numbers = array("a"=>20,"b"=>30,"c"=>25);


ksort($numbers);



foreach($numbers as $x=>$x_value){
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
}


//
$numbers = array("a"=>20,"b"=>30,"c"=>25);


krsort($numbers);



foreach($numbers as $x=>$x_value){
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
}


?>
<?php include 'inc/footer.php';?>