<?php include 'inc/header.php';?>
<?php
 

//array_combine()


$name = array("Robel Ahammed","Shibbir Ahammed","Ujjwal dev");
$dep  = array("CSE","Maths","Civil");



$result = array_combine($name, $dep);

echo "<pre>";
print_r($result);
echo "</pre>";

 















?>
<?php include 'inc/footer.php';?>