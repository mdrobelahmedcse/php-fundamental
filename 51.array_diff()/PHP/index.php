<?php include 'inc/header.php';?>
<?php
 

//array_diff()




$array_one = array(

    "a"=>"red",
    "b"=>"green",
    "c"=>"blue",
    "k"=>"pink"

);

$array_two = array(

    "d"=>"red",
    "e"=>"green",
    "f"=>"yellow"
);

$array_three = array(

    "g"=>"red",
    "h"=>"purple",
    "i"=>"blue"
);



$result = array_diff($array_one, $array_two, $array_three);


echo "<pre>";
print_r($result);
echo "</pre>";

 
















?>
<?php include 'inc/footer.php';?>