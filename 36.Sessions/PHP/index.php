<?php include 'inc/header.php';?>

<?php
 
     
//Sessions

 
session_start();

//session_destroy();
//session_unset();

$_SESSION["username"] = "mdrobel";
$_SESSION["password"] = "12345";



echo "Username is: ".$_SESSION["username"]."<br/>";


echo "Username is: ".$_SESSION["password"]."<br/>";












?>

 
<?php include 'inc/footer.php';?>