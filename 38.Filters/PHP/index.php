<?php include 'inc/header.php';?>

<!-- <table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  // foreach (filter_list() as $id =>$filter) {
  //     echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  // }
  ?>
</table> -->

<?php
 



//Filters



 
//Sanitize a String

// $string = "<h2>Hello world</h2>";

// $newstring = filter_var($string, FILTER_SANITIZE_STRING);
// echo "New string is: ".$newstring;


//Validate an Integer


// $int  = 0;

// if(filter_var($int,FILTER_VALIDATE_INT) || filter_var($int,FILTER_VALIDATE_INT) == 0){

//    echo "this is an integer value<br/>";

// }else{

// 	echo "this is not integer value<br/>";
// }



//Validate an IP Address


// $ip = "127.0.0.1";

// if(filter_var($ip,FILTER_VALIDATE_IP)){

// 	echo "$ip is valid ip address<br/>";

// }else{

// 	echo "$ip is not valid ip address<br/>";
// }




//Sanitize and Validate an Email Address

// $email = "john.doe@example.com";

// // Remove all illegal characters from email
// $email = filter_var($email, FILTER_SANITIZE_EMAIL);

// // Validate e-mail
// if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

//     echo("$email is a valid email address");

// } else {

//     echo("$email is not a valid email address");
// }




//Sanitize and Validate a URL


$url = "https://www.w3schools.com";
// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (filter_var($url, FILTER_VALIDATE_URL)) {

    echo("$url is a valid URL");

} else {

    echo("$url is not a valid URL");

}







?>
<?php include 'inc/footer.php';?>