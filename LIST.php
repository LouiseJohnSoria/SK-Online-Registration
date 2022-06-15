<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Barangay Registration</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<link rel="icon" href="Logo.png" type="image/icon type">
</head>
<body>
	
	
	<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
	  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      	<li class="nav-item active">
		        	<a class="nav-link text-light font-weight-bold" href="HOME.html">HOME</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link text-light font-weight-bold" href="FORM.html">REGISTER</a>
		      	</li>
		      	<li class="nav_item">
		        	<a class="nav-link text-light font-weight-bold" href="LIST.php">LIST</a>
		      	</li>
		  	</ul>
		</div>
	</nav>
<script type="text/javascript">
	var text = prompt("Enter adminitrative password:", "Patchwork");
	var pass = "Patchwork";
	if(text == pass){

	}else{
		history.back();
	}
</script>
<form method="get">
	<div class="Head" align="center" >
		<h1>Registration List</h1>
		<input type="number" name="regID" min=1 placeholder="Search for a record." required>
		<input type="submit" name="submit" class="btn btn-primary mb-2">
	</div>
		<div class="Tbl">
		<table border="1" style = "width: 100%">
		<table class="table">
  			<thead class="thead-dark">	
				<tr> 
					<th><li>NAME</li></th>
					<th><li>RESIDENCE/ADDRESS</li></th>
				</tr>

		<td align="Left"> <br>
			  	<div class="form-group font-weight-bold">
				    <label for="formGroupExampleInput">Last Name:</label>
				    	<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Last Name" name="lastName" disabled><br>
				    <label for="formGroupExampleInput2">First Name:</label>
				    	<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="First Name" name="firstName" disabled><br>
				    <label for="formGroupExampleInput2">Middle Name:</label>
				    	<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Middle Name" name="middleName" disabled>
				</div>

				<div class="form-group font-weight-bold"><br><br>
				 	<label for="formGroupExampleInput">Email Address:</label>
				    	<input type="text" class="form-control" id="formGroupExampleInput" placeholder="*Example:@newcabalan@gmail.com" name="eMail" disabled><br> 
				    <br><br>
				    <img style="padding-left: 15%" src="Logo.png" class="img-fluid" alt="Responsive image" name="image" width="300">
				</div>
		</td>

	<td align="Left"> <br>

		<div class="form-group font-weight-bold">
		    <label for="formGroupExampleInput">Province</label>
		    	<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Province" name="province" disabled>
		    <label for="formGroupExampleInput">City/Municipality:</label>
		    	<input type="text" class="form-control" id="formGroupExampleInput" placeholder="City/Municipality" name="municipality" disabled>
			<label for="formGroupExampleInput">Barangay:</label>
		    	<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Barangay" name="barangay" disabled>
		    <label for="formGroupExampleInput">House No./ Street / Subdivision:</label>
		    	<input type="text" class="form-control" id="formGroupExampleInput" placeholder="House No./ Street / Subdivision" name="street" disabled>
		</div>


	<table border="1" style = "width: 100%">
		
		<tr> 
			<th><li>NICKNAME  OR STAGE NAME <br>( Indicate only one nickanme or stage name )</li></th>
			<th><li>AGE<br><br></li></th>
		</tr>
		<br>

		<td align="Left"> 
			<div class="form-group font-weight-bold">
	    		<label for="formGroupExampleInput">Nickname:</label>
	    			<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nickname" name="nickname" disabled>
			</div>

		<td align="Left">
			<div class="form-group font-weight-bold">
	    		<label for="formGroupExampleInput">Age:</label>
					<input type="number" class="form-control" placeholder="Age" name="age" disabled>
			</td>

		<table border="1" style = "width: 100%">	
			<tr> 
				<th><li>PLACE OF BIRTH</li></th>
				<th><li>DATE OF BIRTH</li></th>
			</tr>

		<td align="Left">
			<div class="form-group font-weight-bold">
			    <label for="formGroupExampleInput">Province</label>
			    	<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Province" name="birthProv" disabled>
			    <label for="formGroupExampleInput">City/Municipality:</label>
			    	<input type="text" class="form-control" id="formGroupExampleInput" placeholder="City/Municipality" name="birthMun" disabled>
			</div>
		</td>

		<td align="Left">
			<div class="form-group font-weight-bold"><br>
	    		<label for="formGroupExampleInput">Birth Date:</label>
					<input type="text" class="form-control" placeholder="Month" value="" name="birthDate" disabled>
			</div>
		</td>
	</table>

	<table border="1" style = "width: 100%">
	
		<tr> 
			<th><li>PERIOD IN RESIDENCE IN THE BARANGAY</li></th>
			<th><li>SEX</li></th>
		</tr>
		
		<div class=" font-weight-bold">
			<td align="Left"> <br>
				<div class="form-group font-weight-bold">
			    	<label for="formGroupExampleInput">No. of Years:</label>
						<input type="Years" placeholder="No. of Years" value="" name="years" disabled>
					<label for="formGroupExampleInput">No. of Month's:</label>
						<input type="Years" placeholder="No. of Month's" value="" name="months" disabled>
				</div>
			</td>
			
			<td align="Left"><br>
				<label for="formGroupExampleInput">Sex: </label>
						<input type="text" placeholder="No. of Years" value="" name="sex" disabled>
			</td>
		</div>
	</table>
	<br>
	<center>
		
	</center>
	</form>
	</thead>
	
<?php 
	if(isset($_GET['submit'])){
		$reg_id = $_GET['regID'];
		$server = "localhost";
		$username = "root";
		$password = "";
		$dbname = "db_registration";

		//create connection
		$conn = mysqli_connect($server, $username, $password, $dbname);

		if(!$conn){
			die("No connection made." . mysqli_connect_error());
		}else{

			$sqlSelect = "SELECT * FROM tbl_reg WHERE reg_id = $reg_id";

			$result = $conn->query($sqlSelect);

			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
				$lastName = $row["lastName"];
				$firstName = $row["firstName"];
				$middleName = $row["middleName"];
				$email = $row["email"];
				$province = $row["province"];
				$municipality = $row["municipality"];
				$barangay = $row["barangay"];
				$street = $row["street"];
				$nickname = $row["nickname"];
				$age = $row["age"];
				$birthProv = $row["birthProv"];
				$birthMun = $row["birthMun"];
				$birthDate = $row["birthDate"];
				$years = $row["years"];
				$months = $row["months"];
				$sex = $row["sex"];
			}

			}else{
				echo "0 result";
			}$conn->close();
		}
	}		
?>

	 <script type="text/javascript">
		document.getElementsByName("lastName")[0].setAttribute("placeholder", "<?php echo $lastName ?>");
		document.getElementsByName("firstName")[0].setAttribute("placeholder", "<?php echo $firstName ?>");
		document.getElementsByName("middleName")[0].setAttribute("placeholder", "<?php echo $middleName ?>");
		document.getElementsByName("eMail")[0].setAttribute("placeholder", "<?php echo $email ?>");
		document.getElementsByName("province")[0].setAttribute("placeholder", "<?php echo $province ?>");
		document.getElementsByName("municipality")[0].setAttribute("placeholder", "<?php echo $municipality ?>");
		document.getElementsByName("barangay")[0].setAttribute("placeholder", "<?php echo $barangay ?>");
		document.getElementsByName("street")[0].setAttribute("placeholder", "<?php echo $street ?>");
		document.getElementsByName("nickname")[0].setAttribute("placeholder", "<?php echo $nickname ?>");
		document.getElementsByName("age")[0].setAttribute("placeholder", "<?php echo $age ?>");
		document.getElementsByName("birthProv")[0].setAttribute("placeholder", "<?php echo $birthProv ?>");
		document.getElementsByName("birthMun")[0].setAttribute("placeholder", "<?php echo $birthMun ?>");
		document.getElementsByName("birthDate")[0].setAttribute("placeholder", "<?php echo $birthDate ?>");
		document.getElementsByName("years")[0].setAttribute("placeholder", "<?php echo $years ?>");
		document.getElementsByName("months")[0].setAttribute("placeholder", "<?php echo $months ?>");
		document.getElementsByName("sex")[0].setAttribute("placeholder", "<?php echo $sex ?>");
	</script>
</body>
</html>