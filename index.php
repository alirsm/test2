<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>jQuery Validation: length validation examples</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <form method="post" name="productform" id="productform" >
	<p>
		<label for='prodid'>Product ID: (maxlength 10)</label><br>
		<input type="text" name="prodid" >
	</p>
	<p>
		<label for='email'>Email: (minlength 10)</label><br>
		<input type="text" name="email" >
	</p>
    <p>
		<label for='address'>Address( length between 10 and 250)</label><br>
		<input type="text" name="address">
	</p>    
	<p>
		<label for='message'>Message:( length between 50 and 1050)</label> <br>
		<textarea name="message"></textarea>
	</p>
	   
	<input type="submit" name='submit' value="Post it !">
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
