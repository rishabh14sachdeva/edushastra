<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 
 <div class="container">
 	<div class="row">
 		<div class="col-sm-offset-4 col-sm-4" style="margin-top: 100px;">
 			<form  method="post" action="test.php">
		 		<div class="form-group">
		 			<label for="email">Email:</label>
		 			<input type="email" name="email" class="form-control" placeholder="Enter email id">
		 		</div>
		 		<div>
		 			<label for="password">Password:</label>
		 			<input type="password" name="pwd" class="form-control" placeholder="Enter password">	
		 		</div>
		 		<button type="submit" class="btn btn-default center-block" style="margin-top: 20px;">Submit</button>
		 	</form>
 		</div>
 	</div>
 </div>
</body>
</html>