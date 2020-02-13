<?php include 'inc/header.php';?>
<?php
 

//array_count_values()



$animals = array("Cow","Dog","Cat","Cow","Dog","Dog");





$result = array_count_values($animals);

echo "<pre>";
print_r($result);
echo "</pre>";

 















?>
<?php include 'inc/footer.php';?>