<?php 
require 'connection.php';

$email=$_POST['email'];
$newname = $_POST['newname'];
$newmob = $_POST['newmob'];

$qry = "SELECT name,email,mobile FROM tbl_user WHERE email = '$email' ";
$checkqry= mysqli_query($con,$qry);

	if (mysqli_num_rows($checkqry)>0) {
		
		$update_query = "UPDATE tbl_user SET name='$newname', mobile= '$newmob'
				WHERE email ='$email' ";

		$result=mysqli_query($con,$update_query);

		if ($result>0) {
			$response ['msg']="Details Updated";

		}
		else
			$response ['msg']="Something Wrong";

	}
	else
		$response ['msg']="Invalid Email";

	echo json_encode($response);


?>