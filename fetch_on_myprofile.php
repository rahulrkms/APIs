<?php
require 'connection.php';

$email = $_POST['email'];

$qry= "SELECT name,email,mobile FROM tbl_user WHERE email='$email'";
$result=mysqli_query($con,$qry);
	
	

if (mysqli_num_rows($result)>0) {
	while($showdata =$result->fetch_assoc()){
			$response[]= $showdata;
		
		 }
}
else{
		$response['error'] = "Invalid email";
	}


echo json_encode($response);

?>