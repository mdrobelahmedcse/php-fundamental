<?php include 'inc/header.php';?>
<form action="" method="post">
<table class="table">
	 <tr>
	 	<td></td>
	 	<td><input type="text" name="text"></td>
	 </tr>
	 <tr>
	 	<td></td>
	 	<td><input type="submit" name="submit" value="submit"></td>
	 </tr>
</table>
</form>
<?php
 

//Strip whiltespace Characters

if (isset($_POST['text'])) {
	
	  $text = $_POST['text'];

	  //echo trim($text);
	  // echo rtrim($text, " ");
	   echo ltrim($text, " ");
}//


//ltrim()

$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"Hello");



//rtrim()

$str = "Hello World!";
echo $str . "<br>";
echo rtrim($str,"World!");
 


















?>
<?php include 'inc/footer.php';?>