<?php
	require 'connection.php';

	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	$mobile = trim($_POST['mobile']);
	$address = trim($_POST['address']);

	$qry = "SELECT * FROM tbl_user WHERE email = '$email'";
	$raw = mysqli_query($con,$qry);
	$count = mysqli_num_rows($raw);
	if ($count>0) {
		$response['message'] = 'userexits';
	}
	else{
		$qry2 = "INSERT INTO tbl_user(name,email,password,mobile,address) VALUES('$name','$email','$password','$mobile','$address')";
		$checkqry2 = mysqli_query($con,$qry2);

		if ($checkqry2 == true) {
			$response['message'] = 'inserted';
		}
		else{
			$response['message'] = 'failed';
		}
	}
	echo json_encode($response);
?>