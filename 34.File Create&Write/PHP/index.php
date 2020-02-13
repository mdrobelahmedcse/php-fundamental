<?php include 'inc/header.php';?>

<?php
 
     
//File Create/Write



 

$myfile = fopen("newfile.txt", "w");
$txt1 = "Traning with live project\n";
fwrite($myfile, $txt1);
$txt2 = "I am learning PHP\n";
fwrite($myfile, $txt2);
fclose($myfile);




//Overwriting

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt1 = "Mickey Mouse\n";
fwrite($myfile, $txt1);
$txt2 = "Minnie Mouse\n";
fwrite($myfile, $txt2);
fclose($myfile);





 


?>



<?php include 'inc/footer.php';?>