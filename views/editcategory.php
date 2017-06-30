<?php 
	include("../controller/editcategory.php")
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="../public/css/category.css">
</head>
<body>

	<div class="container">
	  <form id="contact" action="" method="post">
	    <h3>Edit Form</h3>
	    
	    <fieldset>
	      <input placeholder="Your name" type="text" name="nameauthor" value="<?php echo $arredit['name_author'] ?>" >
	    </fieldset>
	    <fieldset>
	      <input placeholder="Your Age" type="text" name="age" value="<?php echo $arredit['age_author']  ?>" >
	    </fieldset>
	    <fieldset>
	      <input placeholder="Your Phone Number" type="text" name="phone" value="<?php echo $arredit['numberPhone']  ?>" >
	    </fieldset>
	    <fieldset>
	    	<input name="submit" value="submit" type="submit">
	    </fieldset>
	    
	  </form>
</div>
</body>
</html>