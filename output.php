<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$con = mysqli_connect($host, $user, $pass);
	
	mysqli_select_db($con, 'registration');
	
	$get = "SELECT * FROM personal ORDER BY id DESC LIMIT 1";
	$result = mysqli_query($con, $get);
	$row = mysqli_fetch_assoc($result);


	$name = $row['name'];
	$ic = $row['ic'];
	$gender = $row['gender'];
	$nationality = $row['nationality'];
	$birth = $row['birth'];
	$phone = $row['phone'];
	$email = $row['email'];
	

	$get = "SELECT * FROM address ORDER BY id DESC LIMIT 1";
	$result = mysqli_query($con, $get);
	$row = mysqli_fetch_assoc($result);

    $address1 = $row['address1'];
	$address2 = $row['address2'];
	$city = $row['city'];
	$state = $row['state'];
	$zip = $row['zip'];
	

	$get = "SELECT * FROM education ORDER BY id DESC LIMIT 1";
	$result = mysqli_query($con, $get);
	$row = mysqli_fetch_assoc($result);

    $programme = $row['programme'];
	$intake = $row['intake'];
	$comment = $row['thoughts'];


	$get = "SELECT * FROM guardian ORDER BY id DESC LIMIT 1";
	$result = mysqli_query($con, $get);
	$row = mysqli_fetch_assoc($result);

    $nameg = $row['name'];
	$relation = $row['relation'];
	$telg = $row['tel'];
	$officeg = $row['office'];
	$addressg1 = $row['address1'];
	$addressg2 = $row['address2'];
	$cityg = $row['city'];
	$stateg = $row['state'];
	$zipg = $row['zip'];
	$emergency = $row['emergency'];

	$get = "SELECT * FROM emergency ORDER BY id DESC LIMIT 1";
	$result = mysqli_query($con, $get);
	$row = mysqli_fetch_assoc($result);

    $namee = $row['name'];
	$tele = $row['tel'];
	$officee = $row['office'];
	
	
	mysqli_free_result($result);
	mysqli_close($con);
	?>
<html>
<head>
	<title>End of Registration</title>
	<link rel="stylesheet" type="text/css" href="output.css"/>
</head>
<body>
	<h1>Thank You For Registering with Us!<br>Please Check Your Information Below!</h1>
		<table align = "center" cellpadding = "10">
		<tr><td>Name : </td> <td class="d2"> 							<?php echo $name; ?></td>
		<td rowspan="4"> 
																		<?php 
																				$con = mysqli_connect($host, $user, $pass);
																				mysqli_select_db($con, 'registration');
																				$get = "SELECT * FROM picture ORDER BY id DESC LIMIT 1";
																				$result = mysqli_query($con, $get);
																				$row = mysqli_fetch_array($result);
																				echo  '<img  src="data:image/jpeg;base64,'.base64_encode($row['pic']).'" width="200em" height="150em"/>';
																		?>
		</td></tr>
		
		<tr><td>IC / Passport No. </td> <td class="d2">					<?php echo $ic; ?></td></tr>
		
		<tr><td>Gender : </td> <td class="d2">							<?php echo $gender; ?></td></tr>
		
		<tr><td>Nationality : </td> <td class="d2">						<?php echo $nationality; ?></td></tr>
		
		<tr><td>Date of Birth : </td> <td class="d2" colspan="2">		<?php echo $birth; ?></td></tr>
			
		<tr><td>Tel No. : </td> <td class="d2" colspan="2">				<?php echo $phone; ?></td></tr>
		
		<tr><td>E-mail : </td> <td class="d2" colspan="2">				<?php echo $email; ?></td></tr>
		
		<tr><td>Address : </td> <td class="d2" colspan="2">				<?php echo $address1; ?><br><?php echo $address2; ?></td></tr>
		
		<tr><td>City : </td> <td class="d2" colspan="2">				<?php echo $city; ?></td></tr>
		
		<tr><td>State : </td> <td class="d2" colspan="2">				<?php echo $state; ?></td></tr>
		
		<tr><td>Postal Code: </td> <td class="d2" colspan="2">			<?php echo $zip; ?></td></tr>
		
		<tr><td>Programme : </td> <td class="d2" colspan="2"> 			<?php echo $programme; ?></td></tr>
		
		<tr><td>Interest : </td> <td class="d2" colspan="2">			<?php
																				$con = mysqli_connect($host, $user, $pass);
																				mysqli_select_db($con, 'registration');
																				$get = "SELECT * FROM education ORDER BY id DESC LIMIT 1";
																				$result = mysqli_query($con, $get);
																				
																				$interest_array = array();
																				while($row = mysqli_fetch_array($result)){	
																				$interest_array[] = "\"".$row['interest']."\"";	
																				}
																				$interest_string = implode(",", $interest_array);
																				echo $interest_string; ?></td></tr>
		
		<tr><td>Intake : </td> <td class="d2" colspan="2">				<?php echo $intake; ?></td></tr>
		
		<tr><td>Feedback from You : </td> <td class="d2" colspan="2">	<?php echo $comment; ?></td></tr>
		
	
		

		</table>
		<h1>Guardian Info</h1>
		<table align = "center" cellpadding = "10">
		<tr><td width="35%">Name : </td> <td class="d2"> 							<?php echo $nameg; ?></td></tr>

		<tr><td>Relation : </td> <td class="d2"> 						<?php echo $relation; ?></td></tr>

		<tr><td>Contact : </td> <td class="d2"> 						<?php echo $telg; ?></td></tr>

		<tr><td>Office No. : </td> <td class="d2"> 						<?php echo $officeg; ?></td></tr>

		<tr><td>Address : </td> <td class="d2">							<?php echo $addressg1; ?><br><?php echo $addressg2; ?></td></tr>

		<tr><td>City: </td> <td class="d2"> 							<?php echo $cityg; ?></td></tr>

		<tr><td>State : </td> <td class="d2"> 							<?php echo $stateg; ?></td></tr>

		<tr><td>Postal Code : </td> <td class="d2"> 					<?php echo $zipg; ?></td></tr>

		<tr><td>Emergency Contact : </td> <td class="d2"> 				<?php echo $emergency; ?></td></tr>
		</table>

		<h1>Emergency Contact</h1>
		<table id="tab2" align = "center" cellpadding = "10">
		<tr><td width="35%">Name : </td> <td class="d2"> 							<?php echo $namee; ?></td></tr>

		<tr><td>Contact : </td> <td class="d2"> 						<?php echo $tele; ?></td></tr>

		<tr><td>Office No. : </td> <td class="d2"> 						<?php echo $officee; ?></td></tr>
		<tr><td align="center" colspan="2"><input style="width:10%; height:30px; color:red; background-color:#F8DD88;" onclick="location='admin.php'" type="button" value="Admin"> </td></tr>
		</table>
</body>

</html>