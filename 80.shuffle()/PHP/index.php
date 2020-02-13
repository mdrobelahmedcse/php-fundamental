<?php include 'inc/header.php';?>
<?php
 

//shuffle()




$array_one = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"pink");

 
shuffle($array_one);


echo "<pre>";
print_r($array_one);
echo "</pre>";

















?>
<?php include 'inc/footer.php';?>