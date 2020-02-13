<?php include 'inc/header.php';?>
<?php
 

//array_pop()-array_push()




//array_pop()

 $colors = array(
  
    "a"=>"red",
    "b"=>"green",
    "c"=>"blue"
 );



 $result = array_pop($colors);



 echo "<pre>";
 print_r($colors);
 echo "</pre>";



//array_push() 


$colors = array(
  
   "a"=>"red",
   "b"=>"green",
   "c"=>"blue"
);



$result = array_push($colors,"yellow","pink");



echo "<pre>";
print_r($colors);
echo "</pre>";










?>
<?php include 'inc/footer.php';?>