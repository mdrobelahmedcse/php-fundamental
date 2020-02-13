<?php include 'inc/header.php';?>
<?php
 

//array_keys()




$array_one = array(


   "a"=>"red",
   "b"=>"green",
   "c"=>"blue",
   "d"=>"yellow",
   "e"=>"pink"

);



$result = array_keys($array_one);





echo "<pre>";
print_r($result);
echo "</pre>";

 
















?>
<?php include 'inc/footer.php';?>