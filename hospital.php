
		<?php  include("includes/header.php") ?>
		<form  action="hospital.php" method="post" role="form" class="form-vertical ">
			<div class="row">
				<div class="col-md-5">
					<div class="form-group">
						<label>Name:
							<input type="text" name="name" class="form-control" required>
						</label>
					</div>
					<div class="form-group">
						<label>Gender:
							<select type="text" name="gender" class="form-control" required>
								<option>Male</option>
								<option>Female</option>
							</select>
						</label>
					</div>
					<div class="form-group">
						<label>Date:
							<input type="date" name="date" class="form-control" required>
						</label>
					</div>
				</div>	
				<div class="col-md-5">
					<div class="form-group">
						<label>Age:
							<input type="number" name="age" class="form-control" required>
						</label>
					</div>
					<div class="form-group">
						<label>Phone no:
							<input type="text" name="phone" class="form-control" required>
						</label>
					</div>
					<div class="form-group">
						<label>HIV Status:
							<select type="text" name="hiv" class="form-control" required>
								<option>+ve</option>
								<option>-ve</option>
							</select>
						</label>
					</div>
					
					
				</div>	
				<div class="col-md-2">
						<input type="submit" class="btn btn-primary" name="submit" value="CREATE">
					</div>
			</div>
			
		</form>
	

	
	<?php include("includes/footer.php") ?>


	<?php 
	if (isset($_POST['submit'])) {
		extract($_POST);
		//push/insert data into db
		//syntax for inserting
		//INSERT INTO table_name(col1, col2, col3..) VALUES('value1', 'value2', 'value3'...)
		$insertQuery = "INSERT IGNORE INTO patients(name, gender, date, age, phone, hiv) VALUES('$name', '$gender', '$date', '$age', '$phone', '$hiv')";

   
   		$queryResults = mysqli_query($jenkinsDbConnection, $insertQuery);
   		if ($queryResults) {
   			//refresh browser
   			header("locattion:hopital.php");
   		}

			if ($queryResults) {
				echo "Insert Successful<br/>";
			}

			else{
				die("Query failed : ".mysqli_error($jenkinsDbConnection));
			}
		
		
		


		}

	?>
