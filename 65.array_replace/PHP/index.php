<?php include 'inc/header.php';?>
<?php
 

//array_replace()

//
$array_one = array("red","green","blue");
$array_two = array("yellow","pink","purple");



$result = array_replace($array_one, $array_two);

echo "<pre>";
print_r($result);
echo "</pre>";


//

$array_one = array("a"=>"red","green");
$array_two = array("a"=>"blue","d"=>"yellow");

$result = array_replace($array_one, $array_two);


 

echo "<pre>";
print_r($result);
echo "</pre>";


//
$array_one = array("red","green","blue");
$array_two = array("yellow","black","white");
$array_three = array("pink","purple","orange");

$result = array_replace($array_one, $array_two,$array_three);


 

echo "<pre>";
print_r($result);
echo "</pre>";












?>
<?php include 'inc/footer.php';?>