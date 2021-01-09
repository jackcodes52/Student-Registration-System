<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$con = mysqli_connect($host, $user, $pass);
	
	mysqli_select_db($con, 'registration');
	
	$sql = "SELECT * FROM personal INNER JOIN education ON personal.id=education.id INNER JOIN picture ON personal.id=picture.id INNER JOIN address ON personal.id=address.id";
	$result = mysqli_query($con, $sql);
	$sql2 = "SELECT * FROM  guardian";
	$result2 = mysqli_query($con, $sql2);
	$sql3 = "SELECT * FROM  emergency";
	$result3 = mysqli_query($con, $sql3);	


?>
<html>
<head>
    <title>Admin</title>
	<link rel="stylesheet" type="text/css" href="admin.css"/>
</head>
<body>
	<h1 class="adtitle">Admin's Reference</h1>
		<table align = "center" cellpadding = "10">
		<thead>
		<tr>
			<th colspan="16">Personal Info</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>ID					  </td>
		<td>Name                  </td>
		<td>Picture               </td>
		<td>IC / Passport No.     </td>
		<td>Gender			      </td>
		<td>Nationality 		  </td>
		<td>Date of Birth 		  </td>
		<td>Tel No.			      </td>
		<td>E-mail 			      </td>
		<td>Address 		      </td>
		<td>City  		          </td>
		<td>State 	 		      </td>
		<td>Postal Code			  </td>
		<td>Programme 	 		  </td>
		<td>Interest  		      </td>
		<td>Intake  		      </td>
		<td>Feedback from You     </td>			
		</tr>
		<?php
		if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_array($result))
			{	echo "<tr>";		
		echo "<td>" .$row["id"]."</td>";
		echo "<td>" .$row["name"]."</td>";
        echo "<td>";
		echo  '<img  src="data:image/jpeg;base64,'.base64_encode($row['pic']).'" width="200em" height="150em"/>' ;
		echo "</td>'";
        echo "<td>" .$row["ic"]."</td>";
        echo "<td>" .$row["gender"]."</td>";
        echo "<td>" .$row["nationality"]."</td>";
        echo "<td>" .$row["birth"]."</td>";
        echo "<td>" .$row["phone"]."</td>";
        echo "<td>" .$row["email"]."</td>";
        echo "<td>" .$row["address1"]."<br>".$row["address2"]."</td>";
        echo "<td>" .$row["city"]."</td>";
        echo "<td>" .$row["state"]."</td>";
        echo "<td>" .$row["zip"]."</td>";
        echo "<td>" .$row["programme"]."</td>";
        echo "<td>" .$row["interest"]."</td>";
        echo "<td>" .$row["intake"]."</td>";
        echo "<td>" .$row["thoughts"]."</td>";
		echo "</tr>";
			}
		}
		?>
		</tbody>
		</table>
		<br><br>
		<table align = "center" cellpadding = "10">
			<thead>
				<tr>
				<th colspan="9">Guardian Info</th>
				</tr>
			</thead>	
			<tbody>
				<tr>
				<td>ID					  </td>
				<td>Name                  </td>
				<td>Relation              </td>
				<td>Contact               </td>
				<td>Office No.            </td>
				<td>Address               </td>
				<td>City                  </td>
				<td>State                 </td>
				<td>Postal Code           </td>
				<td>Emergency Contact     </td>
				</tr>
				
		<?php
		if(mysqli_num_rows($result2)>0)
		{
			while($row = mysqli_fetch_array($result2))
			{
		
		echo "<tr>";
		echo "<td>" .$row["id"]."</td>";
		echo "<td>".$row["name"]."</td>";
		echo "<td>".$row["relation"]."</td>";
		echo "<td>".$row["tel"]."</td>";
		echo "<td>".$row["office"]."</td>";
		echo "<td>".$row["address1"]. "," .$row["address2"]."</td>";
		echo "<td>".$row["city"]."</td>";
		echo "<td>".$row["state"]."</td>";
		echo "<td>".$row["zip"]."</td>";
		echo "<td>".$row["emergency"]."</td>";
		echo "</tr>";

			}
		}
		?>
			</tbody>
		</table>
		<br><br>
	
	
	
		<table align = "center" cellpadding = "10"> 
			<thead>
				<tr>
				<th colspan="3">Emergency Contact</th>
				</tr>
			</thead>
			<tbody>		
				<tr>
				<td>ID					  </td>
				<td>Name                  </td>
				<td>Contact               </td>
				<td>Office No.            </td>
				</tr>

		<?php
		if(mysqli_num_rows($result3)>0)
		{
			while($row = mysqli_fetch_array($result3))
			{

			echo "<tr>";
			echo "<td>" .$row["id"]."</td>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["tel"]."</td>";
			echo "<td>".$row["office"]."</td>";
			echo "</tr>";

			}
		}
		?>
		</table>		

</body>

</html>