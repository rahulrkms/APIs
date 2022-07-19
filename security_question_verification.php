<?php 

require 'connection.php';

$question = $_POST['question'];
$answer = $_POST['answer'];
$email = $_POST['email'];



$qry = "INSERT INTO `reset_password` (`id`, `question`, `answer`, `email`) VALUES (		NULL, '$question', '$answer', '$email')";

$result=mysqli_query($con,$qry);
 	if($result ==true){
 		$response ['message'] = "Inserted";
 	}
 	else{
 		$response ['message'] = "failed";
 	}

echo json_encode($response);


?>
