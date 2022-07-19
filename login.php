<?php
	require 'connection.php';

	$email = trim($_POST['email']);
	$password = trim($_POST['password']);

	$qry = "SELECT * FROM tbl_user WHERE email='$email' AND password = '$password'";
	$checkqry = mysqli_query($con,$qry);
	$count = mysqli_num_rows($checkqry);
	if ($count>0) {
		$response ['message']= 'exist';
	}
	else
	{
		$response ['message']= 'notexist';
	}
	echo json_encode($response);
?>