<?php

	session_start();
	include 'connection.php';


	$_SESSION["username"] = $_POST['username'];
	$_SESSION["password"] = $_POST['password'];

	$username=$_SESSION["username"];
	$password=$_SESSION["password"];

	mysqli_select_db($conn,"maidaan");

	$query="select * from account_holder where username='$username'&& password='$password'";
	$result=mysqli_query($conn,$query);
	$num=mysqli_num_rows($result);

	if($num==1)
	{
	//$_SESSION["account_no"]=$ac;
	//header('location:http://localhost/MV/hello.php');
		echo "<script>
			               		 		 alert(' welcome;
			               		 		 window.location.href='start.php';
			               		 		 </script>";

	}
	else
	{	echo "nahi hua";
			// echo "<script>
			  //             		 		 alert(' Invalid Id and password :-(');
			    //           		 		 window.location.href='';
			      //         		 		 </script>";
	}


	?>
