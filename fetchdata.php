<?php
require 'connection.php';

$users1 = "SELECT cpname,url FROM tbl_dashboard";
$result1 = mysqli_query($con,$users1);



if(mysqli_num_rows($result1)>0){
	
	while($row= $result1->fetch_assoc())
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