<?php include 'inc/header.php';?>
<?php
 

//array_intersect_key()



$array_one = array(

     "a"=>"red",
     "b"=>"green",
     "c"=>"blue",
     "d"=>"pink"
);




$array_two = array(
 
     "a"=>"red",
     "b"=>"green",
     "c"=>"blue",
     "d"=>"yellow",
);




$array_three = array(

    "a"=>"red",
    "b"=>"green",
    "c"=>"blue",
    "d"=>"purple"
);




// $array_one = array(1,2,3,4,5);
// $array_two = array(1,2,3,4,6);
// $array_three = array(1,2,3,5,6);


$result = array_intersect_key($array_one, $array_two,$array_three);


echo "<pre>";
print_r($result);
echo "</pre>";

 
















?>
<?php include 'inc/footer.php';?>