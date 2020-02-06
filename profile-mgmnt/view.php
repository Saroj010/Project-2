<?php
session_start();

if(!isset($_SESSION['username'])) {
	header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>View all USERS</title>
</head>
<body>
<?php
	include_once('includes/connection.php');
	$query = "SELECT * FROM userss";
	$result = mysqli_query($conn, $query);
	?>
	<table border="1">
		<thead>
			<tr>
				<td>ID</td>
				<td>USERNAME</td>
				<td>NAME</td>
				<td>EMAIL</td>
				<td>ACTION</td>
			</tr>
		</thead>
		<tbody>
	<?php
	if (mysqli_num_rows($result) > 0) {
	    while($row = mysqli_fetch_assoc($result)) {
	  ?>
	  	<tr>
	  		<td><?= $row['id']; ?></td>
	  		<td><?= $row['username']; ?></td>
	  		<td><?= $row['name']; ?></td>
	  		<td><?= $row['email']; ?></td>
			<td>

			<a href="edit.php?id=<?=$row['id'];?>">EDIT</a>
			<from action="edit.php" method="POST">
			<input type="hidden" name="id" value="<?=$row['id'];?>">
			</form>
			</td>

		<td>
			<a href="process/delete.php?id=<?=$row['id'];?>">DELETE</a>
			<from action="delete.php" method="POST">
			<input type="hidden" name="id" value="<?=$row['id'];?>">
			</form>
			</td>
	  	</tr>
	    <?php   
	    }
	} else {
	?>
	<tr>
		<td colspan="4">No any DATA</td>
	</tr>
	<?php	
	}
	?> 
 </tbody>
</table>
</body>
</html>