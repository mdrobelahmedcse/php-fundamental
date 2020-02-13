<?php include 'inc/header.php';?>
<?php
 

//array_unique()

 

$colors = array("a"=>"red","b"=>"green","c"=>"red","d"=>"blue");


$result = array_unique($colors);




echo "<pre>";
print_r($result);
echo "</pre>";



 

 










?>
<?php include 'inc/footer.php';?>