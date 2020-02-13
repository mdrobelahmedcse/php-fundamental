<?php include 'inc/header.php';?>
<?php
 

//array_intersect



$array_one = array(

     "a"=>"red",
     "b"=>"green",
     "c"=>"blue",
     "d"=>"yellow"
);




$array_two = array(
 
     "e"=>"red",
     "f"=>"green",
     "g"=>"blue",
     "h"=>"pink",
);




$array_three = array(

    "i"=>"red",
    "j"=>"green",
    "k"=>"yellow",
    "l"=>"blue"
);


$result = array_intersect($array_one, $array_two,$array_three);


echo "<pre>";
print_r($result);
echo "</pre>";

 
















?>
<?php include 'inc/footer.php';?>