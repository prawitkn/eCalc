<?php

    include 'session.php';	
	
	$userId = $_POST['userId'];
    $newPassword = $_POST['newPassword'];
	$confirmPassword = $_POST['confirmPassword'];
    
	if($newPassword<>$confirmPassword){
		header('Content-Type: application/json');
		$errors = "New password and confirm password not match";
		echo json_encode(array('success' => false, 'message' => $errors));  
		exit; 
	}

	$userPassword = $confirmPassword;
	// Encript Password
	$salt = "QAzzArVA38rTSm8ctnvrGyDT3ZDVPV88";
	$hashed_userPassword = hash_hmac('md5', $userPassword, $salt);

	$sql = "UPDATE cr_user SET userPassword=:hashed_userPassword WHERE userId=:userId ";		
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':userId', $userId);
	$stmt->bindParam(':hashed_userPassword', $hashed_userPassword);		
	if ($stmt->execute()) {
		header('Content-Type: application/json');
		echo json_encode(array('success' => true, 'message' => 'Data Updated Complete.'));
	} else {
		header('Content-Type: application/json');
		$errors = "Error on Data Update. Please try new username. " . $pdo->errorInfo();
		echo json_encode(array('success' => false, 'message' => $errors));
	}
	
?>