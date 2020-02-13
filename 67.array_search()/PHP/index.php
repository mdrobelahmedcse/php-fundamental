<?php include 'inc/header.php';?>
<?php
 

//array_search()

 


$colors = array("a"=>"red","b"=>"green","c"=>"blue",23,24);

$result = array_search(24,$colors,true);


echo "<pre>";
print_r($result);
echo "</pre>";






















?>
<?php include 'inc/footer.php';?>