<!DOCTYPE html>
<html>
<head>
	<title>Process</title>
</head>
<body>
	<table  border="2px solid black";>
		<tr>
			<td>Username:</td>
			<td><?php echo $_GET['fname']; ?></td>
		</tr>
		<tr>
			<td>DOB:</td>
			<td><?php echo $_GET['dob']; ?></td>
		</tr>
		<tr>
			<td>Nationality:</td>
			<td><?php echo $_GET['nationality']; ?></td>
		</tr>
		<tr>
			<td>Hobbies:</td>
			<td>
				<?php
				  foreach($_GET['hobbies']as $hobby)
				  {
				  	echo "$hobby";
				  	echo "<br />";
				  }
				?>
			</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<?php 
				if(isset($_GET['gender'])){
					 echo $_GET['gender'];
				}
				?>
			</td>
		</tr>

	</table>

</body>
</html>	