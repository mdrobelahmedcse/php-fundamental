<?php include 'inc/header.php';?>
<?php
 

//array_merge()




$array_one = array("red","green","blue");
$array_two = array("yellow","pink","purple");



$result = array_merge($array_one,$array_two);





echo "<pre>";
print_r($result);
echo "</pre>";

 
















?>
<?php include 'inc/footer.php';?>