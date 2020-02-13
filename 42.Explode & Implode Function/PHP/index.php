<?php include 'inc/header.php';?>

<?php
 



//implode() and explode() function


//implode()


$string = array("traning","with","live","project");

$result = implode(" ",$string);

echo "<pre>";
print_r($result);
echo "</pre>";


//explode()


$str = "Hello world. It's a beautiful day.";

echo "<pre>";
print_r (explode(" ",$str));
echo "</pre>";



















?>
<?php include 'inc/footer.php';?>