<?php include 'inc/header.php';?>
<?php
 
 //PHP Data Types

 

/*

    PHP supports the following data types:

	1.String
	2.Integer
	3.Float (floating point numbers - also called double)
	4.Boolean
	5.Array
	6.Object
	7.NULL
	8.Resource

*/


//string

$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;

//integer

$x = 5985;
var_dump($x);



//float

$x = 10.365;
var_dump($x);


//Boolean

$x = true;
$y = false;

var_dump($x);
echo "<br/>";
var_dump($y);



//Array


$cars = array("Volvo","BMW","Toyota");
var_dump($cars);



//Object


class Car {

    function Car() {

        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;



//NULL

$x = "Hello world!";
$x = null;
var_dump($x);	











?>
<?php include 'inc/footer.php';?>