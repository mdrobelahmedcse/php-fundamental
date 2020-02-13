<?php include 'inc/header.php';?>
<?php
 

//array_slice()

 


$colors = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

$result = array_slice($colors,1,2);


echo "<pre>";
print_r($result);
echo "</pre>";

 




$colors = array(1,2,3,4,5);

$result = array_slice($colors,1,2,true);


echo "<pre>";
print_r($result);
echo "</pre>";


 










?>
<?php include 'inc/footer.php';?>