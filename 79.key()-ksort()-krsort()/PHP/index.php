<?php include 'inc/header.php';?>
<?php
 

//key()-ksort()-krsort()

 


//key()

$array_one = array("red","green","blue");

echo key($array_one);


//ksort

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($age);

echo "<pre>";
print_r($age);
echo "</pre>";



//krsort

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
krsort($age);


echo "<pre>";
print_r($age);
echo "</pre>";
















?>
<?php include 'inc/footer.php';?>