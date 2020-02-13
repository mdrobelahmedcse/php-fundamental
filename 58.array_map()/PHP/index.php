<?php include 'inc/header.php';?>
<?php
 

//array_map()




function myfunction($value){

   
     return ($value*$value);

}


$array_one = array(1,3,5,7);




$result = array_map("myfunction",$array_one);





echo "<pre>";
print_r($result);
echo "</pre>";

 
















?>
<?php include 'inc/footer.php';?>