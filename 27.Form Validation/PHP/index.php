<?php include 'inc/header.php';?>

<?php
 
    //Form Validation

	// define variables and set to empty values
	$name = $email = $gender = $comment = $website = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		  $name = validate($_POST["name"]);
		  $email = validate($_POST["email"]);
		  $website = validate($_POST["website"]);
		  $comment = $_POST["comment"];
		  $gender = validate($_POST["gender"]);


		  echo $name."<br/>";
		  echo $email."<br/>";
		  echo $website."<br/>";
		  echo $comment."<br/>";
		  echo $gender."<br/>";
	}//

	function validate($data) {

		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
	}//


 


?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<table class="table">
		 <tr>
		 	 <td>Name:</td>
		 	 <td><input type="text" name="name"></td>
		 </tr>
		 <tr>
		 	 <td>E-mail:</td>
		 	 <td><input type="text" name="email"></td>
		 </tr>
		 <tr>
		 	 <td>Website:</td>
		 	 <td><input type="text" name="website"></td>
		 </tr>
		 <tr>
		 	 <td>Comment:</td>
		 	 <td><textarea name="comment" rows="5" cols="40"></textarea></td>
		 </tr>
		  <tr>
		 	 <td>Gander:</td>
		 	 <td>
		 	 	<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="other">Other
			</td>
		 </tr>
		  <tr>
		 	 <td></td>
		 	 <td><input type="submit" name="submit" value="submit"></td>
		 </tr>
		  
	</table>
 </form>

<?php include 'inc/footer.php';?>