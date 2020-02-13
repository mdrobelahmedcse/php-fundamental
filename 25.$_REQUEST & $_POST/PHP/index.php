<?php include 'inc/header.php';?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<?php
 
//Superglobals


/*

	$GLOBALS
	$_SERVER
	$_REQUEST
	$_POST
	$_GET
	$_FILES
	$_ENV
	$_COOKIE
	$_SESSION

*/


//$_REQUEST and $_POST

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
   // $name = $_POST['fname'];
    if (empty($name)) {
        echo "<span style='color:red;'>Name is empty</span>";
    } else {
        echo "<span style='color:green;'>".$name."</span>";
    }
}//

















?>
<?php include 'inc/footer.php';?>