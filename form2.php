<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$con = mysqli_connect($host, $user, $pass);
	
		if(!$con)
	{
		echo 'Not Connected To Server';
	}

	
		if(!mysqli_select_db($con,'registration'))
	{
		echo 'Database Not Selected';
	}

	$name = $_POST['name'];
	$ic = $_POST['ic'];
	$gender = $_POST['gender'];
	$birth = $_POST['birth'];
	$nationality = $_POST['nationality'];
	$phone = $_POST['phone'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$email = $_POST['email'];
	$file = addslashes(file_get_contents($_FILES['personalImage']['tmp_name']));
	

	$sql = "INSERT INTO personal (name, ic, gender, nationality, birth, phone, email) VALUES ('$name', '$ic', '$gender', '$nationality', '$birth','$phone','$email')";
	$sql1 ="INSERT INTO address (address1, address2, city, state, zip) VALUES ('$address1', '$address2', '$city', '$state', '$zip')";
	$sql2 = "INSERT INTO picture (pic) VALUES ('$file')";
	
	
		if(!mysqli_query($con, $sql))
	{
		echo 'Not Inserted';
	}
		if(!mysqli_query($con, $sql1))
	{
		echo 'Not Inserted';
	}

		if(!mysqli_query($con, $sql2))
	{
		echo 'Not Inserted';
	}
		else
	{
		echo 'Inserted';
	}
	
?>
<html>
<head>
	<title>Form Page 2</title>
	<link rel="stylesheet" href="style1.css" type="text/css">
	<script type="text/javascript">
	
	
	</script>
</head>
<body>
	<h1>Programme Preferences</h1>
	<form  action="form3.php" method="post">
    <table align = "center" cellpadding = "10">
	<tr><td><label>Programme :
	<select name="programme">
		<optgroup label="Foundation Programme">
			<option value="Foundation in Arts">						Foundation in Arts</option>
			<option value="Foundation in Business">					Foundation in Business</option>
			<option value="Foundation in Science">					Foundation in Science</option>
			<option value="Foundation in Management">				Foundation in Management</option>
			<option value="Foundation in Information Technology">	Foundation in Information Technology</option>
		</optgroup>
		<optgroup label="Diploma Programme">
			<option value="Diploma in Accounting">					Diploma in Accounting</option>
			<option value="Diploma in Business Administration">		Diploma in Business Administration</option>
			<option value="Diploma in Culinary Arts">           	Diploma in Culinary Arts</option>
			<option value="Diploma in Chemistry">              		Diploma in Chemistry</option>
			<option value="Diploma in Engineering">             	Diploma in Engineering</option>
			<option value="Diploma in Hotel Management">       	 	Diploma in Hotel Management</option>
			<option value="Diploma in Information Technology">  	Diploma in Information Technology</option>
		</optgroup>
		<optgroup label="Bachelor Programme">
			<option value="Bachelor of Accounting">                 Bachelor of Accounting</option>
			<option value="Bachelor of Business Administration">    Bachelor of Business Administration</option>
			<option value="Bachelor of Communication">              Bachelor of Communication</option>
			<option value="Bachelor of Culinary Arts">              Bachelor of Culinary Arts</option>
			<option value="Bachelor of Education">                  Bachelor of Education</option>
			<option value="Bachelor of English">                    Bachelor of English</option>
			<option value="Bachelor of Engineering">                Bachelor of Engineering</option>
			<option value="Bachelor of Chemical Engineering">       Bachelor of Chemical Engineering</option>
			<option value="Bachelor of Finance">                    Bachelor of Finance</option>
			<option value="Bachelor of IT">                         Bachelor of IT</option>
			<option value="Bachelor of Management">                 Bachelor of Management</option>
			<option value="Bachelor of Multimedia">                 Bachelor of Multimedia</option>
			<option value="Bachelor of Software Engineering">       Bachelor of Software Engineering</option>
		</optgroup>
		<optgroup label="Masters Programme">
			<option value="Masters of Accounting">                  Masters of Accounting</option>
			<option value="Masters of Business Administration">     Masters of Business Administration</option>
			<option value="Masters of Education">                   Masters of Education</option>
			<option value="Masters of Information Technology">      Masters of Information Technology</option>
			<option value="Masters of Science">                     Masters of Science</option>
			<option value="Masters of Finance">                     Masters of Finance</option>
		</optgroup>
	</select></td></tr>
	<tr><td><label>Course Interest : </label><br>
        <div>
		<input type="checkbox" name="interest[]" value="Accounting & Finance">	Accounting & Finance<br>
		<input type="checkbox" name="interest[]" value="Architecture">			Architecture<br>
		<input type="checkbox" name="interest[]" value="Art & Design">			Art & Design<br>
		<input type="checkbox" name="interest[]" value="Chemical Engineering">	Chemical Engineering<br>
		<input type="checkbox" name="interest[]" value="Computer Science">		Computer Science<br>
		<input type="checkbox" name="interest[]" value="Criminology">				Criminology<br>
		<input type="checkbox" name="interest[]" value="Culinary Arts">			Culinary Arts<br>
		<input type="checkbox" name="interest[]" value="Information Technology">	Information Technology<br>
		<input type="checkbox" name="interest[]" value="Marketing">				Marketing<br>
		<input type="checkbox" name="interest[]" value="Robotics">				Robotics<br>
		<input type="checkbox" name="interest[]" value="Sociology">				Sociology<br>
        </div>
	</td></tr>
	<tr><td><label>Intake : <input type="month" name="intake"></label></td></tr>	
	<tr><td><label>What are you looking forward <br> to when studying here :<br>
	<textarea name="comment" style="position:absolute;  height: 80; width: 310;" noresize="none"></textarea></label></td></tr>
	
	<tr><td><br><br><input type="checkbox" required><label>*  I accept the <a href="#">Terms and Conditions</a></label></td></tr>
	<tr><td align="center"><input type="submit" value = "Next Page" style="width:10%; height:30px; color:red; background-color:#F8DD88;"></td></tr>
    </table>
	</form>

</body>
</html>
