<?php 
	require_once 'templates/head.php'; 
	require_once 'connection.php'; 
	$bookFailed = "";

	if (isset($_SESSION['bookFailed']) && $_SESSION['bookFailed']) {
		unset($_SESSION['bookFailed']);
		$bookFailed = "<div class='alert bg-danger px-5 text-white'>
							Member already exists!!!
						</div>";
	}

?>


<body>
	<section id="head" class="bg-dark text-white">
		<div class="myNav">
			<?php require_once 'templates/menu.php'; ?>
		</div>

		<div class="container py-5">
			<h1 class="text-center pt-5">Book a sit Now!!!</h1>
			<div class="row">
				<div class="col-xl-6 col-md-6 col-sm-12 mr-auto ml-auto py-5">
					<?php echo $bookFailed; ?>
					<form class="form-group bg-secondary border p-5" method="POST" action="book-process.php">
						<div class="row">
							<div class="col-xl-3 col-sm-12 py-2">
								<label for="firstName">First Name</label>
							</div>
							<div class="col-xl-9 col-sm-12 py-2">
								<input type="text" class="form-control" name="firstName" placeholder="Enter First Name">
							</div>
							<div class="col-xl-3 col-sm-12 py-2">
								<label for="lastName">Last Name</label>
							</div>
							<div class="col-xl-9 col-sm-12 py-2">
								<input type="text" class="form-control" name="lastName" placeholder="Enter Last Name">
							</div>
							<div class="col-xl-3 col-sm-12 py-2">
								<label for="email">Email</label>
							</div>
							<div class="col-xl-9 col-sm-12 py-2">
								<input type="email" class="form-control" name="email" placeholder="Enter Your Email">
							</div>
							<div class="col-xl-3 col-sm-12 py-2">
								<label for="number">Mobile Number</label>
							</div>
							<div class="col-xl-9 col-sm-12 py-2">
								<input type="text" class="form-control" name="number">
							</div>
							<div class="col-xl-3 py-2">
								<label for="date">Date</label>
							</div>
							<div class="col-xl-9 py-2">
								<input type="text" class="form-control" name="date" placeholder="yyyy-mm-dd">
							</div>
							<div class="col-xl-3 col-sm-12 py-2">
								<label for="status">Will you be Attending?</label>
							</div>
							<div class="col-xl-9 col-sm-12 py-2">
								<select name="status" class="form-control">
									<option>--Select--</option>
									<option>Definitely</option>
									<option>Maybe</option>
									<option>No</option>
								</select>
							</div>
							<div class="col-xl-4 col-sm-12 py-2 mr-auto ml-auto">
								<input type="submit" class="form-control btn-success text-white" name="submit" value="Submit">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<div class="myFoot">
		<?php require_once 'templates/footer-pry.php'; ?>
	</div>

</body>

	<?php require_once 'templates/footer-sec.php'; ?>
	