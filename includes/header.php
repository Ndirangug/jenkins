
<?php 
	$host = "localhost";
	$dbUser = "root";
	$dbPass = "";
	$dbName = "jenkins-ndisho";
	$jenkinsDbConnection = mysqli_connect($host, $dbUser, $dbPass, $dbName);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hospital MIS</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript">
		alert("<?php 
			if (!$jenkinsDbConnection) {
				die('Connection not successful'.mysqli_connect_error());
				}

			else{
				echo 'Db connnection successful';
			} ?>");
	</script>
</head>
<body>
<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">mySQL Crud</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="hospital.php">Register >Patient(Create) </a></li>
					<li><a href="viewPatients.php">View Patients(Read)</a></li>
					
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="jumbotron text-center">
			<h1>mySql Crud</h1>
			<p><span class="text-primary">Create</span> |
			<span class="text-success">Read</span> |
			<span class="text-info">Update</span> |
			<span class="text-warning">Delete</span> |</p>
			
		</div>