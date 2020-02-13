<?php include 'inc/header.php';?>
<?php
 

//array_reverse()

 


$cars = array("Volvo","BMW","Toyota");

// $rsult = array_reverse($cars,true);
$rsult = array_reverse($cars,false);


echo "<pre>";
print_r($rsult);
echo "</pre>";






















?>
<?php include 'inc/footer.php';?>