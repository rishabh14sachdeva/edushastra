<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
	session_start();
	echo "Welcome : ".$_SESSION["user_email"]."<br>";
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<form method="post" action="thank.php" id="questionare">
					<h3>Question 1</h3>
						<div class="radio">
					      <label><input type="radio" name="optradio" value="Option1">Option 1</label>
					    </div>
					    <div class="radio">
					      <label><input type="radio" name="optradio" value="Option2">Option 2</label>
					    </div>
					    <div class="radio">
					      <label><input type="radio" name="optradio" value="Option3">Option 3</label>
					    </div>
					    <div class="radio">
					      <label><input type="radio" name="optradio" value="Option4">Option 4</label>
					    </div>
					    <div class="radio" style="display: none;">
					      <label><input type="radio" name="optradio" value="None" checked="checked"></label>
					    </div>
					
					<h3>Question 2</h3>
					
						<div class="radio">
					      <label><input type="radio" name="optradio1" value="Option1">Option 1</label>
					    </div>
					    <div class="radio">
					      <label><input type="radio" name="optradio1" value="Option2">Option 2</label>
					    </div>
					    <div class="radio">
					      <label><input type="radio" name="optradio1" value="Option3">Option 3</label>
					    </div>
					    <div class="radio">
					      <label><input type="radio" name="optradio1" value="Option4">Option 4</label>
					    </div>
					    <div class="radio" style="display: none;">
					      <label><input type="radio" name="optradio1" value="None" checked="checked"></label>
					    </div>
					
					<h3>Question 3</h3>
					
						<div class="radio">
					      <label><input type="radio" name="optradio2" value="Option1">Option 1</label>
					    </div>
					    <div class="radio">
					      <label><input type="radio" name="optradio2" value="Option2">Option 2</label>
					    </div>
					    <div class="radio">
					      <label><input type="radio" name="optradio2" value="Option3">Option 3</label>
					    </div>
					    <div class="radio">
					      <label><input type="radio" name="optradio2" value="Option4">Option 4</label>
					    </div>
					    <div class="radio" style="display: none;">
					      <label><input type="radio" name="optradio2" value="None" checked="checked"></label>
					    </div>
					
					<h3>Question 4</h3>
					
						<div class="radio">
					      <label><input type="radio" name="optradio3" value="Option1">Option 1</label>
					    </div>
					    <div class="radio">
					      <label><input type="radio" name="optradio3" value="Option2">Option 2</label>
					    </div>
					    <div class="radio">
					      <label><input type="radio" name="optradio3" value="Option3">Option 3</label>
					    </div>
					    <div class="radio">
					      <label><input type="radio" name="optradio3" value="Option4">Option 4</label>
					    </div>
					    <div class="radio" style="display: none;">
					      <label><input type="radio" name="optradio3" value="None" checked="checked"></label>
					    </div>
					
					<h3>Question 5</h3>
					
						<div class="radio">
					      <label><input type="radio" name="optradio4" value="Option1">Option 1</label>
					    </div>
					    <div class="radio">
					      <label><input type="radio" name="optradio4" value="Option2">Option 2</label>
					    </div>
					    <div class="radio">
					      <label><input type="radio" name="optradio4" value="Option3">Option 3</label>
					    </div>
					    <div class="radio">
					      <label><input type="radio" name="optradio4" value="Option4">Option 4</label>
					    </div>
					    <div class="radio" style="display: none;">
					      <label><input type="radio" name="optradio4" value="None" checked="checked"></label>
					    </div>
					
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<br><br>
			</div>
			<div class="col-sm-6">
				<div style="float: right;" id="status">

				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		secs = 60;
		timer = setInterval(function () 
			{	
				var element = document.getElementById("status");
		    	element.innerHTML = "<h2>You have <b>"+secs+"</b> seconds to answer the questions</h2>";
		   		 if(secs < 1)
		   		 {
		        	clearInterval(timer);
		       		document.getElementById("questionare").submit();
		    	 }
		    	secs--;
			}, 1000)
	</script>
</body>
</html>