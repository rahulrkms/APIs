<?php

require 'connection.php';

$email = $_POST['email'];

$qry = "SELECT email, mobile FROM tbl_user WHERE email = '$email'";
$result = mysqli_query($con,$qry);

	if(mysqli_num_rows($result)>0){
	
	while($row= $result->fetch_assoc())
	{
		$response[] = $row; 
	}
}	

else
	{
		$response['error'] = "400";
		
	}
	echo json_encode($response);

?>