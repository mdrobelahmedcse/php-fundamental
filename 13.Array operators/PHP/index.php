<?php include 'inc/header.php';?>
<?php
 
 //Array operators



/*

       #PHP divides the operators in the following groups:

		Arithmetic operators
		Assignment operators
		Comparison operators
		Increment/Decrement operators
		Logical operators
		String operators
		Array operators
		Conditional assignment operators
 
*/



 
/* 
  Array operators
*/


//Union of $x and $y

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y); // union of $x and $y




//Returns true if $x and $y have the same key/value pairs

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x == $y);  
 



 
//Returns true if $x and $y have the same key/value pairs in the same order and of the same types

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x === $y);  





//Returns true if $x is not equal to $y

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x != $y);




//Returns true if $x is not equal to $y  

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x <> $y);



//Returns true if $x is not identical to $y

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x !== $y);








?>
<?php include 'inc/footer.php';?>