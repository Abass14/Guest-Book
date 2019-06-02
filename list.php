<?php 
	require_once 'templates/head.php'; 
	require_once 'connection.php'; 
	$bookSuccess = "";

	if (isset($_SESSION['bookSuccessful']) && $_SESSION['bookSuccessful']) {
		unset($_SESSION['bookSuccessful']);
		$bookSuccess = "<div class='alert bg-success px-5 text-white'>
							Successfully booked!!!
						</div>";
	}

	$updateSuccess = "";
	if (isset($_SESSION['updateSuccess']) && $_SESSION['updateSuccess']) {
		unset($_SESSION['updateSuccess']);
		$updateSuccess = "<div class='alert bg-success px-5 text-white'>
							update Success!!!
						</div>";
	}



?>


<body>
	<section id="head" class="bg-dark text-white">
		<div class="myNav">
			<?php require_once 'templates/menu.php'; ?>
		</div>

		<div class="container py-5">
			<h1 class="text-center pt-5">List of Booked Guests</h1>
			<div class="row">
				<div class="col-xl-10 col-md-10 col-sm-12 mr-auto ml-auto py-3">
					<?php 
						echo $bookSuccess; 
						echo $updateSuccess; 
					?>
				</div>
				<div class="col-xl-10 col-md-10 col-sm-12 mr-auto ml-auto py-5">
					<h3 class="pb-3 text-center">Guest Definitely Attending</h3>
					<?php require_once 'list-process.php'; ?> 
				</div>
				<div class="col-xl-10 col-md-10 col-sm-12 mr-auto ml-auto py-5">
					<h3 class="pb-3 text-center">Guest That Might Be Attending</h3>
					<?php require_once 'list-maybe.php'; ?>
				</div>
				<div class="col-xl-10 col-md-10 col-sm-12 mr-auto ml-auto py-5">
					<h3 class="pb-3 text-center">Not Attending</h3>
					<?php require_once 'list-no.php'; ?>
				</div>
			</div>
		</div>
	</section>

	<div class="myFoot">
		<?php require_once 'templates/footer-pry.php'; ?>
	</div>

</body>

	<?php require_once 'templates/footer-sec.php'; ?>
	