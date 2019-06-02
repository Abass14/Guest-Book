<?php  
	require_once 'connection.php';
	$id = $_GET['id'];
	$query = "SELECT * FROM `guest`";
	$result = mysqli_query($connect, $query);

	if ($result) {
		$delete = "DELETE FROM `guest` WHERE id = '$id'";
		mysqli_query($connect, $delete);
		header('Location:list.php');
	}


?>