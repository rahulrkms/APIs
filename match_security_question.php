<?php
require 'connection.php';

$match_ques = $_POST['match_ques'];
$match_ans = $_POST['match_ans'];
$email= $_POST['email'];

$qry = "SELECT * FROM reset_password WHERE question = '$match_ques' AND answer = '$match_ans' AND email = '$email'";
$result = mysqli_query($con,$qry);
$count = mysqli_num_rows($result);
 	if ($count>0) {
 		$response ['message'] = "data";
 	}

 	else
 	{
 		$response  ['message'] = "data not matched";
 	}

echo json_encode($response);


?>