<?php include 'inc/header.php';?>

<?php
 



//Filters Advanced


 
//Validate an Integer Within a Range

$intnum = 100;
$min = 1;
$max = 200;

if(filter_var($intnum,FILTER_VALIDATE_INT, array("options"=>array("min_range"=>$min, "max_range"=>$max))) === false){

	echo "Variable value is not within the legal range";

}else{
   
   echo "Variable value is within the legal range";
}





//Validate URL - Must Contain QueryString

$url = "https://www.w3schools.com";

if(filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)){

	echo "this is valid url<br>";

}else{

	echo "It has not query string<br/>";
}









?>
<?php include 'inc/footer.php';?>