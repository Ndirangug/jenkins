<?php require "includes/header.php" ?>
<div class="bg-info text-center" >
	
	<h1 class="text-danger" style="font-size: 3em;">Deleterecords from DB</h1>
</div>

<?php 
	//sql syntax for deleting
	//DELETE FROM table WHERE ID = 1;
	$query = "DELETE FROM patients WHERE patientID = 1 LIMIT 1";
	$delete = mysqli_query($jenkinsDbConnection, $query);

	//check if successful
	if ($delete && mysqli_affected_rows($jenkinsDbConnection) == 1) {
		echo "<h2>Record deleted sucessfully</h2>";
	}

	else {
		die("Delete failed :".mysqli_error($jenkinsDbConnection));
	}
		
 ?>
<?php require "includes/footer.php" ?>
