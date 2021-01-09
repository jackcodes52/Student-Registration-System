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
		
		if(isset($_REQUEST['interest']))
		{
			$interest = implode(" , ", $_POST['interest']);
			
		}
	$programme = $_POST['programme'];
	$intake = $_POST['intake'];
	$comment = $_POST['comment'];

	
	

	$sql = "INSERT INTO education (programme, interest, intake, thoughts) VALUES ('$programme', '$interest','$intake','$comment')";
	
	
	
		if(!mysqli_query($con, $sql))
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
    <title>Form page 3</title>
    <link rel="stylesheet" href="style2.css">
    <script type="text/javascript" src="emergency.js">
        
    </script>
</head>
<body>
    <h1>Guardian Contact</h1>
    <form  action="submit.php" method="post">
        <table align="center" cellpadding="10">
            <tr><td><label>Name : <input type="text" name="gname"></label></td></tr>
            
            <tr><td><label>Relation : <input type="text" name="relation"></label></td></tr>
            
            <tr><td><label>Contact. : <input type="text" name="telG"></label></td></tr>
			
			 <tr><td><label>Office no. : <input type="text" id="officeG" name="officeG"></label></td></tr>
            
            <tr><td><label>Address   :<br><input type="text" placeholder="Street Address" name="addressg1"><br>
		<input type="text" placeholder="Street Address 2" name="addressg2"></td></tr>
		<tr><td><label>City : <input type="text" name="cityg"></label></td></tr>
		<tr><td><label>State : <input list="states" name="stateg"></label>
								<datalist id="states">
									<option value="Johor">
									<option value="Kedah">
									<option value="Kelantan">
									<option value="Kuala Lumpur">
									<option value="Melaka">
									<option value="Negeri Sembilan">
                                    <option value="Pahang">
									<option value="Perak">
									<option value="Perlis">
									<option value="Pulau Pinang">
									<option value="Sabah">	
									<option value="Sarawak">
									<option value="Selangor">
									<option value="Terengganu">
								</datalist></td></tr>					
		<tr><td><label>Postal Code : <input type="text" name="zipg" maxlength="5" placeholder="Postal / Zip Code"></label></td></tr>
            
			
        <tr><td><label>Is This Your Emergency Contact? <input type="radio" onclick="javascript:eCheck();" name="emer" id="nocheck" value="Yes">YES
														<input type="radio" onclick="javascript:eCheck();" name="emer" id="yescheck" value="No">NO</label>
		</td></tr>

		<tr><td align="center"> <input style="width:10%; height:30px; color:red; background-color:#F8DD88;" id="singlesubmit" type="submit" value="Submit"></td></tr>
            </table>
			
			  <table id="Emergency" align="center" cellpadding="10" style="visibility:hidden" >
				<h1 id="Emergencytitle" style="visibility:hidden">Emergency Contact</h1>
                <tr><td><label>Name : <input type="text" id="nameS" name="namee" value="N/A"></label></td></tr>
           
                <tr><td><label>Contact. : <input type="text" name="tele" value="N/A"></label></td></tr>
                    
                <tr><td><label>Office no. : <input type="text" id="officeS" name="officee" value="N/A"></label></td></tr>
				<tr><td align="center"> <input style="width:10%; height:30px; color:red; background-color:#F8DD88;" type="submit" value="Submit"></td></tr>
				</table>
			
    </form>
</body>
</html>