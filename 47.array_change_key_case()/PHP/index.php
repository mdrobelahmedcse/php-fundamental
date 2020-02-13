<?php include 'inc/header.php';?>
<?php
 

//array_change_key_case()


//change to upper case

$colors = array("a"=>"red","b"=>"green","c"=>"blue", "d"=>"yellow"); 

$result = array_change_key_case($colors, CASE_UPPER);

echo "<pre>";
print_r($result);
echo "</pre>";




//change to lower case

$name = array("Ripon"=>28,"Shibbir"=>27,"Hasan"=>26);

$result = array_change_key_case($name,CASE_LOWER);

echo "<pre>";
print_r($result);
echo "</pre>";















?>
<?php include 'inc/footer.php';?>