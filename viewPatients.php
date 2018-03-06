<?php 

 include("includes/header.php") ?>

<?php 
	$query = "SELECT * FROM patients";
	$result = mysqli_query($jenkinsDbConnection, $query);

	if (!$result) {
		die("Query error: ".mysqli_connect_error($jenkinsDbConnection));
	}

	else{
		echo "Query Success!";
	}
 ?>

<div class="bg-danger">
	<h2 class="text-center text-primary">Read/Retrieve data from your mysql db</h2>
</div>

<table class="table table-responsive  table-striped">
	<thead>
		<th>No.</th>
		<th>Name</th>
		<th>Gender</th>
		<th>Date</th>
		<th>Age</th>
		<th>Phone</th>
		<th>HIV Status</th>
		<th></th>
		<th><a class='btn btn-danger'> DELETE</a> <a class='btn btn-warning'> EDIT</a></th>
	</thead>
	<tbody>
		<?php 
		//fetch data and display it in a table
		//use a while loop

		while ($row = mysqli_fetch_assoc($result)) {
		
		 	echo "<tr>
		 			<td>$row[patientID]</td>
		 			<td>$row[name]</td> 
		 			<td>$row[gender]</td> 
		 			<td>$row[date]</td> 
		 			<td>$row[age]</td> 
		 			<td>$row[phone]</td> 
		 			<td>$row[hiv]</td> 
		 			<td><a href='databasedelete.php' class='btn btn-danger'> DELETE</a></td> 
		 			<td><a href='#' class='btn btn-warning'> EDIT</a></td> 
		 		</tr>
		 			";
		 	
		 } 

		 ?>
	</tbody>
</table>




<?php include("includes/footer.php") ?>
