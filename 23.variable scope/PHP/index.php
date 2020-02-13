<?php include 'inc/header.php';?>
<?php
 
//variable scope


$number = 30;

function test1(){
    
    global $number;
	$x = 10;
	echo $x."<br/>";
	echo $number."<br/>";

}


test1();


function test2(){
    
    global $number;
	$y = 20;
	echo $y."<br/>";
	echo $x."<br/>"; // it will show error
	echo $number."<br/>";

}


test2();





function test3(){

	 static $x = 0;
	 echo $x."<br/>";
	 $x++;
}



test3();
test3();
test3();











?>
<?php include 'inc/footer.php';?>