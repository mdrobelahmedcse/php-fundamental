<?php include 'inc/header.php';?>
<?php
 
 //Logical operators



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
   Logical operators
   

*/


// and  True if both $x and $y are true

$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!"; //output : Hello world!
}



// or  True if either $x or $y is true
 
$x = 10;  
$y = 80;

if ($x == 100 or $y == 80) {
    echo "Hello world!";
}



// Xor 	True if either $x or $y is true, but not both

$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}






// &&  True if both $x and $y are true

$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world!"; //output : Hello world!
}



// || True if either $x or $y is true
 
$x = 10;  
$y = 80;

if ($x == 100 || $y == 80) {
    echo "Hello world!";
}



// ! True if $x is not true

$x = 100;  

if ($x !== 90) {
    echo "Hello world!";
}










?>
<?php include 'inc/footer.php';?>