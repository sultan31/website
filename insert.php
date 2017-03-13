<html>
	<head>
		<title>Registeration</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<style>
			body{background-color:silver;}
			#cont{background-color:white;box-shadow:10px 10px 15px grey;margin:10px;}
			h4{color:red;}
			td{padding:8px;}
			#result{color:red;text-align:center;}
		</style>
		<script>
			
		</script>
	</head>
	<body>
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4" id="cont">
			<form action="process.php" method="post" enctype="multipart/form-data" id="myForm" onsubmit="return validation()">
				<table align="center">
					<tr>
						<td colspan="5"><h4 style="text-align:center;">User Registeration</h4></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><input type="text" name="username" id="username" placeholder="Enter name" class="form-control"></td>
					</tr>
					<tr>
						<td>Age</td>
						<td><input type="text" name="age" id="age" placeholder="Enter age" class="form-control"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><button id="insert" class="btn btn-danger">Insert</button></td>
					</tr>
				</table>
			</form>
				<p id="result">
				</p>
		</div>
		<div class="col-sm-4">
		</div>
	</body>
</html>