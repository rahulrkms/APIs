<?php 
	require 'connection.php';

	$new_password = $_POST['new_password'];
	$email = $_POST['email'];


	$qry = "UPDATE tbl_user SET password = '$new_password' WHERE email='$email'";
	$result = mysqli_query($con,$qry);

	if ($result>0) {
		$response['message'] = "password updated";
	}
	else
		$response['message'] = "password not updated";
	
	echo json_encode($response);
?>