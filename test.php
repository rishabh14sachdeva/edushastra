<?php
	session_start();
 	$host="mysql.hostinger.in";
 	$username="u890928687_edu";
 	$password="123456789";
 	$db_name="u890928687_edu";
 	$tbl_name="questionare";

 	$con=mysqli_connect($host,$username,$password);
 	if(!$con)
 	{
 		die("Connection failed: " . mysqli_connect_error());
 	} 
 	if(!mysqli_select_db($con,$db_name))
	{
		echo "no such  database";
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$email=$_POST["email"];
		$password=$_POST["pwd"];
	}

	$sql="SELECT * FROM $tbl_name WHERE email='$email'";
	$result=mysqli_query($con, $sql);

	if (mysqli_num_rows($result)==1) 
	{
		$row=mysqli_fetch_assoc($result);
		if($password==$row["password"])
		{
			echo "Login Successful!";
			$_SESSION["user_email"]=$email;
			header("refresh:2; url=form.php");
		}
		else
		{
			echo "Wrong Password!";
			return false;
		}
	} 
    else 
    {
    	echo "Wrong email or password!";	
	}

	mysqli_close($con);
 ?>