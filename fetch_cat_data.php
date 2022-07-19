<?php
	require 'connection.php';
	$catname = $_POST['catname'];
	$qry = "SELECT * from tbl_dashboard WHERE catname='$catname'";
	$checkqry = mysqli_query($con,$qry);

	if(mysqli_num_rows($checkqry)>0){
	
	while($row= $checkqry->fetch_assoc()){
		$response[] = $row; 
	}
	
}
	else
	{
		$response['error'] = "400";
		
	}
	echo json_encode($response);


?>