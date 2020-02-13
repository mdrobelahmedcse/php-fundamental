<?php include 'inc/header.php';?>
<?php
 

//Create an array

//index array


$name = array("Ripon","Saddam","Robel","Shibbir","Mizan","Tanvir");



echo $name[0]."<br/>";
echo $name[1]."<br/>";
echo $name[2]."<br/>";
echo $name[3]."<br/>";
echo $name[4]."<br/>";
echo $name[5]."<br/>";



$length = count($name); 

for($i = 0; $i<$length; $i++){

    echo "Name is: ".$name[$i]."<br/>";
} 




//associative array


$name = array(

    "Ripon"=>28,
    "Shibbir"=>27,
    "Mizan"=>23,
    "Saddam"=>30,
    "Tanvir"=>15
);



echo $name["Ripon"]."<br/>";
echo $name["Shibbir"]."<br/>";
echo $name["Mizan"]."<br/>";
echo $name["Saddam"]."<br/>";
echo $name["Tanvir"]."<br/>";



foreach($name as $key=>$value){

	 echo "Name: ".$key."; Age: ".$value."<br/>";
}






//multidimentional array


$cars = array(

    array("Volvo","X-12",200),
    array("BMW","X-23",300),
    array("Toyota","C-12",20)

);


echo $cars[0][0]." ,".$cars[0][1]." ,".$cars[0][2]."<br/>";
echo $cars[1][0]." ,".$cars[1][1]." ,".$cars[1][2]."<br/>";
echo $cars[2][0]." ,".$cars[2][1]." ,".$cars[2][2]."<br/>";





for($row = 0; $row<3; $row++){

	 for($col = 0; $col<3;$col++){

	 	  echo $cars[$row][$col]."===";
	 }

	 echo "<br/>";
}

















?>
<?php include 'inc/footer.php';?>