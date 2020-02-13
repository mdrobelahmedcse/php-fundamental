<?php include 'inc/header.php';?>
<?php
 
 //Conditional Statements



/*

	  #syntex of if:
	  if (condition) {
	    code to be executed if condition is true;
	  }


      #syntex of if else:
      if (condition) {

        //code to be executed if condition is true;

      }else{
	
       //code to be executed if coindion is false

      }

      #syntex of if elseif else:

      if(condition1){

      	    //code.....

      }elseif(condition2){
	
           //code.....

      }else{
	
	      //code.....
      }

*/




//if

$firstNumber  = 30;
$secondNumber = 20;

if($firstNumber>$secondNumber){

	echo "firstNumber is greater than secondNumber";
}





//if else

$firstNumber  = 10;
$secondNumber = 20;

if($firstNumber>$secondNumber){

	echo "firstNumber is greater than secondNumber";

}else{

    echo "secondNumber is greater than firstNumber";
}




//if elseif else


$number = -10;

if($number > 0){

	echo "the number is positive.<br/>";

}elseif ($number < 0) {
	
	echo "the number is nagative.<br/>";

}else{

   echo "the number is zero.<br/>";
}      










?>
<?php include 'inc/footer.php';?>