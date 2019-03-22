<?php 
$name = $email = $u_name = $password = $date = $exp_date = $gender = $salary = $conf_pass = $marital = $address = $city = $postal 
	  = $credit = $url = $gpa = $home_ph = $mobile_ph;

$nameErr = $emailErr = $u_nameErr = $passwordErr = $dateErr = $exp_dateErr = $genderErr = $salaryErr = $conf_passErr = $maritalErr = $addressErr = $cityErr = $postalErr = $creditErr = $urlErr = $gpaErr = $home_phErr = $mobile_phErr;

	if (isset($_POST['name'])) {
		$name = $_POST['name'];
		if (!preg_match("/.{2,}/", $name)) {
			$nameErr = "Real name please";
		}
		
	if (isset($_POST["email"])) {
		$email = $_POST["email"];
		if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email) ) {
			$emailErr = "Invalid email address!";
		}
	}

	if (isset($_POST["u_name"])) {
		$u_name = $_POST["u_name"];
		if (!preg_match("/.{5,}/", $u_name) ) {
			$u_nameErr = "Pleae write at least 5 characters!";
		}
	}

	if (isset($_POST["password"])) {
		$password = $_POST["password"];
		if (!preg_match("/(?=^.{6,10}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/", $password) ) {
			$passwordErr = "Password must contain 6-10 characters, at least one lowercase and at least one uppercase and number!";
		}
	}

	if (isset($_POST["conf_pass"])) {
		$conf_pass = $_POST["conf_pass"];
		if ($conf_pass != $password){
			$conf_passErr = "Password doesn't match";
		}
	}
	if (isset($_POST["gender"])) {
		$gender = $_POST["gender"];
		if (!preg_match("/(male)|(female)/", $gender)){
			$genderErr = "Please write only 2 options (male, female)";
		}
	}
	if (isset($_POST["marital"])) {
		$marital = $_POST["marital"];
		if (!preg_match("/(single)|(married)|(widowed)|(divorced)/", $marital)){
			$maritalErr = "Only 4 options accepted (single, married, widowed and divorced)";
		}	
	}
	if (isset($_POST["postal"])) {
		$postal = $_POST["postal"];
		//if (is_numeric($postal)){
			if(preg_match("/.{6}/", $postal)){
				$postalErr = "Exactly 6 digits are required!";
		// 	}				
		// }else{
		// 		$postalErr = "Only digits required!";

		}

	}
}
	


 ?>
		
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	<style type="text/css">
		span{
			color: red;
		}
	</style>
	<body>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		<form action="index.php" method="post"> 
		<h2>Please, fill below fields correctly</h2>
		<dl>
			<dt>Name</dt>
			<dd>
				<input type="text" name="name" value="<?= $name ?>" required/><span><?= $nameErr; ?></span>
			</dd>				
			</dd>
			<dt>E-mail</dt>
			<dd>
				<input type="text" name="email" value="<?= $email ?>" required/><span><?= $emailErr; ?></span>
			</dd>				
			</dd>
			<dt>Username</dt>
			<dd>
				<input type="text" name="u_name" value="<?= $u_name ?>" required/><span><?= $u_nameErr; ?></span>
			</dd>				
			</dd>
			<dt>Password</dt>
			<dd>
				<input type="password" name="password" value="<?= $password ?>" required/><span><?= $passwordErr; ?></span>
			</dd>				
			</dd>
			<dt>Confirm Password</dt>
			<dd>
				<input type="password" name="conf_pass" value="<?= $conf_pass ?>" required/><span><?= $conf_passErr; ?></span>
			</dd>				
			</dd>
			<dt>Date of Birth</dt>
			<dd>
				<input type="Date" name="date" required/ value="<?= $date ?>>
			</dd>				
			</dd>
			<dt>Gender</dt>
			<dd>
				<input type="text" name="gender" value="<?= $gender ?>" required/><span><?= $genderErr; ?></span>
			</dd>				
			</dd>
			<dt>Marital status</dt>
			<dd>
				<input type="text" name="marital" required/ value="<?= $marital ?>"><span><?= $maritalErr; ?></span>
			</dd>				
			</dd>
			<dt>Address</dt>
			<dd>
				<input type="text" name="address" required/>
			</dd>				
			</dd>
			<dt>City</dt>
			<dd>
				<input type="text" name="city" required/>
			</dd>				
			</dd>
			<dt>Postal code</dt>
			<dd>
				<input type="text" name="postal" required/ value="<?= $postal ?>"><span><?= $postalErr; ?></span>
 			</dd>				
			</dd>
<!--			<dt>Home phone</dt>
			<dd>
				<input type="text" name="home_ph" required/>
			</dd>				
			</dd>
			<dt>Mobile phone</dt>
			<dd>
				<input type="text" name="mobile_ph" required/>
			</dd>				
			</dd>
			<dt>Credit card number</dt>
			<dd>
				<input type="text" name="credit" required/>
			</dd>				
			</dd>
			<dt>Credit card expiry date</dt>
			<dd>
				<input type="Date" name="exp_date" required/>
			</dd>				
			</dd>
			<dt>Monthly salary</dt>
			<dd>
				<input type="text" name="salary" required/>
			</dd>				

			</dd>
			<dt>Web site Url</dt>
			<dd>
				<input type="text" name="url" required/>
			</dd>				
			</dd>
			<dt>Overall GPA</dt>
			<dd>
				<input type="text" name="gpa" required/>
			</dd>				
			</dd> -->
		</dl>

		<div>
		<input type="submit" value="register">
		</form>
		</div>
	</body>
</html>