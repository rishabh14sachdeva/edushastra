<?php
 session_start();
 $host="localhost";
 	$host="mysql.hostinger.in";
 	$username="u890928687_edu";
 	$password="123456789";
 	$db_name="u890928687_edu";
 	$tbl_name="questionare";
 	$email=$_SESSION["user_email"];
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
		$ans1=$_POST["optradio"];
		$ans2=$_POST["optradio1"];
		$ans3=$_POST["optradio2"];
		$ans4=$_POST["optradio3"];
		$ans5=$_POST["optradio4"];
	}

	$sql="UPDATE $tbl_name SET ques1='$ans1', ques2='$ans2', ques3='$ans3', ques4='$ans4', ques5='$ans5' WHERE email='$email'";
	if(mysqli_query($con,$sql))
	{
		echo "<h1>THANKS FOR TAKING THE QUIZ</h1><br>";
		echo "Your Response Has Been Recorded!";
		header("refresh:2 url=login.php");
	}
	else
	{
		echo "some error occured!";
	}
	mysqli_close($con);
	session_unset();
	session_destroy();
?>