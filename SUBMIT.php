<script type="text/javascript">
	if(confirm("Are your sure to submit?")){
		alert("Sending information...");
	}else{
		history.back();		
	}
</script>

<?php 
	$targetFile = 'uploads/' . basename($_FILES["pictureID"]["name"]);

    if (move_uploaded_file($_FILES["pictureID"]["tmp_name"], $targetFile)) {
    }
 ?>

<?php

if(isset($_POST['submitInput'])){

	$lastName = $_POST['lastName'];
	$firstName = $_POST['firstName'];
	$middleName = $_POST['middleName'];	
	$eMail = $_POST['eMail'];
	$province = $_POST['province'];
	$municipality =  $_POST['municipality'];
	$barangay = $_POST['barangay'];
	$street  =$_POST['street'];
	$nickname = $_POST['nickname'];
	$age = $_POST['age'];
	$birthProv = $_POST['birthProv'];
	$birthMun = $_POST['birthMun'];
	$birthDate = $_POST['birthDate'];
	$years = $_POST['years'];
	$months = $_POST['months'];
	$sex = $_POST['sex'];

		$server = "localhost";
		$username = "root";
		$password = "";
		$dbname = "db_registration";

		//create connection
		$conn = mysqli_connect($server, $username, $password, $dbname);

		if(!$conn){
			die("No connection made." . mysqli_connect_error());
		}else{
			$sqlInsert = "INSERT INTO tbl_reg(lastName, firstName, middleName, image, email, province, municipality, barangay, street, nickname, age, birthProv, birthMun, birthDate, years, months, sex)VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

				if($stmt = $conn->prepare($sqlInsert)){
					$stmt->bind_param("ssssssssssisssiis", $lastName, $firstName, $middleName, $image, $eMail, $province, $municipality, $barangay, $street, $nickname, $age, $birthProv, $birthMun, $birthDate, $years, $months, $sex);
					$stmt->execute();
					$stmt->close();
					echo '<script type="text/javascript">
					alert("Success! Thank you for applying!");
					var url = "HOME.html";
					window.location = url;
					</script>';
				}else{
					echo '<script type="text/javascript">
					alert("Failed. Please contact the developers.");
					</script>';
				}
				$conn->close();		
		}
}
?>



	