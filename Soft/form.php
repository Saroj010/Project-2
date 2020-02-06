<!DOCTYPE html>
<html>
<head>
	<title>Driving Lisecnces Form</title>
</head>
<body>
<form action="process.php" method="get">
	Firstname: <input type="text" name="fname" id="fname" required="required" placeholder="Enter your name"><br><br>
	DOB<input type="date" name="dob">
	<br><br>
	<label for="nation">Nationality</label>
	<select name="nationality" id="nation">
		<option value="indian">India</option>
		<option  value="Chinese">China</option>
		<option value="nepalese">Nepal</option>
	</select>
	<br><br>
	 <label for="hobbies">Hobby</label>
	 <input type="checkbox" name="hobbies[]" value="dancing">Dancing
 	 <input type="checkbox" name="hobbies[]" value="singing">Singing
 	 <input type="checkbox" name="hobbies[]" value="palying">Playing
 	 <br><br>

 	 <label for="gender">Gender</label>
 	 <input type="radio" name="gender" value="male">Male
 	 <input type="radio" name="gender" value="female">female
	 <input type="radio" name="gender" value="others">Others
	 <br><br>

	 <button name="btn">Submit</button>
</body>
</form>
</html>