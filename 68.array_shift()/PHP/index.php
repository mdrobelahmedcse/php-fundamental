<?php include 'inc/header.php';?>
<?php
 

//array_shift()

 


$colors = array("a"=>"red","b"=>"green","c"=>"blue");

$result = array_shift($colors);


echo "<pre>";
print_r($result);
echo "</pre>";



echo "<pre>";
print_r($colors);
echo "</pre>";




//


$colors = array(1=>"red",2=>"green",3=>"blue");

$result = array_shift($colors);


echo "<pre>";
print_r($result);
echo "</pre>";



echo "<pre>";
print_r($colors);
echo "</pre>";










?>
<?php include 'inc/footer.php';?>