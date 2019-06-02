<?php  
	require_once 'connection.php';
	$query = "SELECT * FROM `guest` WHERE status = 'No'";
	$result = mysqli_query($connect, $query);

	if ($result){
			$table = "<table border = '1' class = 'table text-white bg-primary staff-table'>
						<tr>
							<th>S/N</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
							<th>Phone Number</th>
							<th>Date</th>
							<th>Delete</th>
							<th>Edit</th>
						</tr>
						";
						$i = 1;
					while (($row = mysqli_fetch_assoc($result)) && $i >= 1) {
					$table .= "<tr>
								<td>{$i}</td>
								<td>{$row['firstname']}</td>
								<td>{$row['lastname']}</td>
								<td>{$row['email']}</td>
								<td>{$row['phone']}</td>
								<td>{$row['date']}</td>
								<td><a href='list-delete.php?id={$row['id']}' class='text-danger px-3'><i class='fas fa-trash'></i></a></td>
								<td><a href='list-edit.php?id={$row['id']}' class='text-white px-2'><i class='far fa-edit'></i></a></td>
							</tr>";
						$i++;
				}

		$table .= "</table>";
		echo $table;
	}
?>