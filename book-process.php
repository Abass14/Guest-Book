<?php 
	require_once 'connection.php';

	$firstName = htmlentities($_POST['firstName']);
	$lastName = htmlentities($_POST['lastName']);
	$email = htmlentities($_POST['email']);
	$number = htmlentities($_POST['number']);
	$status = htmlentities($_POST['status']);
	$date = htmlentities($_POST['date']);

	$query = "SELECT * FROM `guest` WHERE email = '$email'";
	$result = mysqli_query($connect, $query);
	$num = mysqli_num_rows($result);

	if ($num) {
		$_SESSION['bookFailed'] = true;
		header('Location:book.php');
	}else{
		$insert = "INSERT INTO `guest`(`firstname`, `lastname`, `email`, `phone`, `date`, `status`) VALUES ('$firstName','$lastName','$email','$number','$date','$status')";
		mysqli_query($connect, $insert);

		$_SESSION['bookSuccessful'] = true;
		header('Location:list.php');
	}
?>