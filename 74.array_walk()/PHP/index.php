<?php include 'inc/header.php';?>
<?php
 

//array_walk()

 

//


function myfunction($value,$key){

	echo "$key has value =$value<br/>";
}




$colors = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

array_walk($colors, "myfunction");


//


function myFunction(&$value,$key){

	  $value = "yellow";
}

 

$colors = array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($colors, "myFunction");
 

echo "<pre>";
print_r($colors);
echo "</pre>";











?>
<?php include 'inc/footer.php';?>