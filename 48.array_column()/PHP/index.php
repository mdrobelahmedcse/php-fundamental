<?php include 'inc/header.php';?>
<?php
 

//array_column()



$name = array(
   
     array(
        
        "id"=>200,
     	"first_name"=>"Ripon",
     	"last_name"=>"Ahmed"

     ),
     array(
        
        "id"=>201,
     	"first_name"=>"Shibbir",
     	"last_name"=>"Miah"

     ),
     array(
        
        "id"=>202,
     	"first_name"=>"Delowar",
     	"last_name"=>"Imran"

     ),
     array(
        
        "id"=>203,
     	"first_name"=>"Shafi",
     	"last_name"=>"Ahmed"

     )

);



$result = array_column($name,"first_name","id");

echo "<pre>";
print_r($result);
echo "</pre>";

 















?>
<?php include 'inc/footer.php';?>