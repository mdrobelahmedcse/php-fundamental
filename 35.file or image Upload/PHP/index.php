<?php include 'inc/header.php';?>

<?php
 
     
//file or image Upload


 if (isset($_FILES['image'])) {
 	

 	   $filename = $_FILES['image']['name'];
 	   $filetmp  = $_FILES['image']['tmp_name'];


 	   move_uploaded_file($filetmp, "image/".$filename);
 	   echo "Image uploaded successfully...";



 }//

 



?>


<form action="" method="post" enctype="multipart/form-data">
	 <table class="table">
	 	  <tr>
	 	  	  <td>Image:</td>
	 	  	  <td><input type="file" name="image"></td>
	 	  </tr>

	 	  <tr>
	 	  	  <td></td>
	 	  	  <td><input type="submit" name="submit" value="submit"></td>
	 	  </tr>
	 </table>
</form>



<?php include 'inc/footer.php';?>