
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title> 
  <link rel="stylesheet" type="text/css" href="public/css/style.css">   
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      	@import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
		@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Neo<span>Lab</span></div>
		</div>
		<br>
		<?php if(isset($is_error)) echo $is_error;?>
		<form class="login" action="index.php" method="post">
				<input type="text" placeholder="email" name="email"><br>
				<input type="password" placeholder="password" name="password"><br>
				<input type="submit" value="Login" name="login">
		</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  
</body>
</html>
