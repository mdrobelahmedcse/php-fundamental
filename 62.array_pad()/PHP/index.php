<?php include 'inc/header.php';?>
<?php
 

//array_pad()




$colors = array(
  
   "a"=>"red",
   "b"=>"green",
   "c"=>"blue"
);



$result = array_pad($colors,5,"yellow");



echo "<pre>";
print_r($result);
echo "</pre>";

 
















?>
<?php include 'inc/footer.php';?>