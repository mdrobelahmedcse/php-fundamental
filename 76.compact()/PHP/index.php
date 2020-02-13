<?php include 'inc/header.php';?>
<?php
 

//compact()

 



$first_name = "Delowar";
$last_name  = "Jahan";
$dep = "CSE";

$result = compact("first_name","last_name","dep");


echo "<pre>";
print_r($result);
echo "</pre>";























?>
<?php include 'inc/footer.php';?>