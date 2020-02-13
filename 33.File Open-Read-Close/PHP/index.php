<?php include 'inc/header.php';?>

<?php
 
     
//File Open/Read/Close






$myfile = fopen("text.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("text.txt"));
fclose($myfile);





//Read Single Line - fgets()
$myfile = fopen("text.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);




//Check End-Of-File - feof()

$myfile = fopen("text.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);



//Read Single Character - fgetc()


$myfile = fopen("text.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile) . "<br>";
}
fclose($myfile);





 


?>



<?php include 'inc/footer.php';?>