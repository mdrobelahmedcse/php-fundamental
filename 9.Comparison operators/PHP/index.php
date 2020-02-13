<?php include 'inc/header.php';?>
<?php
 
 //Comparison operators



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
   Comparison operators
   ==, ===, !=, <>, !==, >, < , >=, <= , <=>

*/



//==
$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal

//===
$x = 100;  
$y = "100";

var_dump($x === $y); // returns false because types are not equal

//!=

$x = 100;  
$y = "100";

var_dump($x != $y); // returns false because values are equal

//<>
$x = 100;  
$y = "100";

var_dump($x <> $y); // returns false because values are equal
 

// !==

$x = 100;  
$y = "100";

var_dump($x !== $y); // returns true because types are not equal 

// >

$x = 100;
$y = 50;

var_dump($x > $y); // returns true because $x is greater than $y

// <

$x = 10;
$y = 50;

var_dump($x < $y); // returns true because $x is less than $y

// >=


$x = 50;
$y = 50;

var_dump($x >= $y); // returns true because $x is greater than or equal to $y


// <=


$x = 50;
$y = 50;

var_dump($x <= $y); // returns true because $x is greater than or equal to $y











?>
<?php include 'inc/footer.php';?>