<?php include 'inc/header.php';?>

<?php
 
    //URL/E-mail Validation

	// define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = $commentErr = "";
	$name = $email = $gender = $comment = $website = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	 

			  if (empty($_POST["name"])) {

			       $nameErr = "Name is required";

			  }else{

			       $name = validate($_POST["name"]);
			  }

			  if (empty($_POST["email"])) {

			      $emailErr = "Email is required";

			  }elseif ((!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))) {
			  
                  $emailErr = "Invalid E-mail address!";

			  } else {

			     $email = validate($_POST["email"]);

			  }

			  if (empty($_POST["website"])) {

			     $websiteErr = "website is required";

			  }elseif ((!filter_var($_POST["website"], FILTER_VALIDATE_URL))) {
			  
                  $websiteErr = "Invalid URL";

			  } else {

			     $website = validate($_POST["website"]);

			  }

			  if (empty($_POST["comment"])) {

			     $commentErr = "Comment is required";

			  } else {

			     $comment = validate($_POST["comment"]);

			  }

			  if (empty($_POST["gender"])) {

			     $genderErr = "Gender is required";

			  } else {

			     $gender = validate($_POST["gender"]);

			  }

 

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
		 	 <td><input type="text" name="name"><span class="error">*<?php echo $nameErr;?></span></td>
		 </tr>
		 <tr>
		 	 <td>E-mail:</td>
		 	 <td><input type="text" name="email"><span class="error">*<?php echo $emailErr;?></span></td>
		 </tr>
		 <tr>
		 	 <td>Website:</td>
		 	 <td><input type="text" name="website"><span class="error">*<?php echo $websiteErr;?></span></td>
		 </tr>
		 <tr>
		 	 <td>Comment:</td>
		 	 <td><textarea name="comment" rows="5" cols="40"></textarea><span class="error">*<?php echo $commentErr;?></span></td>
		 </tr>
		  <tr>
		 	 <td>Gander:</td>
		 	 <td>
		 	 	<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="other">Other
				<span class="error">*<?php echo $genderErr;?></span>
			</td>
		 </tr>
		  <tr>
		 	 <td></td>
		 	 <td><input type="submit" name="submit" value="submit"></td>
		 </tr>
		  
	</table>
 </form>

<?php include 'inc/footer.php';?>