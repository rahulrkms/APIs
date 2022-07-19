<?php
require 'connection.php';

$email=$_POST['email'];
$current=$_POST['current'];
$new=$_POST['new'];

$checkUser= "SELECT email, password from tbl_user WHERE email ='$email' and password = '$current'";
$result=mysqli_query($con,$checkUser);

if (mysqli_num_rows($result)>0) {
	$update_query = "UPDATE tbl_user SET password='$new' WHERE email='$email'";
	$result = mysqli_query($con,$update_query);
	if ($result>0) {
		$response['message'] = "password updated";
	}
	else{
		$response['message'] = "password not updated";
	}
}
else{
	$response['message'] = "invalid password";
}
echo json_encode($response);




?>