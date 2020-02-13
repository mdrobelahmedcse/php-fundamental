<?php include 'inc/header.php';?>
<?php
 

//array_multisort()


$array_one = array("cat","dog");
$array_two = array("monkey","horse");


array_multisort($array_one,$array_one);


echo "<pre>";
print_r($array_one);
echo "</pre>";

echo "<pre>";
print_r($array_two);
echo "</pre>";

















?>
<?php include 'inc/footer.php';?>