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
 

//Case Change



//$string = "Traning with live project";

//echo strtolower($string);
//echo strtoupper($string );
//echo ucfirst($string);
//echo lcfirst($string);
//echo ucwords($string);


if (isset($_POST['text'])) {
	
	  $text = $_POST['text'];

	  echo strtoupper($text);
}//

 


















?>
<?php include 'inc/footer.php';?>