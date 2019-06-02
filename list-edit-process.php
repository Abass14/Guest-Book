<?php 
	require_once 'connection.php';

	$id = $_GET['id'];
	$firstName = htmlentities($_POST['firstName']);
	$lastName = htmlentities($_POST['lastName']);
	$email = htmlentities($_POST['email']);
	$number = htmlentities($_POST['number']);
	$status = htmlentities($_POST['status']);
	$date = htmlentities($_POST['date']);

	$query = "SELECT * FROM `guest`";
	$result = mysqli_query($connect, $query);

	if ($result) {
		$update = "UPDATE `guest` SET `firstname`='$firstName',`lastname`='$lastName',`email`='$email',`phone`='$number',`date`='$date',`status`='$status' WHERE id = '$id'";
		mysqli_query($connect, $update);
		$_SESSION['updateSuccess'] = true;
		header('Location:list.php');
	}else{
		$_SESSION['updateFailed'] = true;
		header('Location:list-edit.php');
	}
?>