<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
</head>
<body>
	<h1>Student Registration Form</h1>
 <form action="insert.php" method="POST">
    <label>Year :</label>
    <input type="text" name="year" placeholder="Year" required="true">
	<br>
    <label>Student Full Name</label>
    <input type="text" name="name" placeholder="Name" required="true">
	<br>
	<label>Student Roll No</label>
    <input type="text" name="rollno" placeholder="Roll No" required="true">
	<br>
	<label>Student Email ID</label>
    <input type="text" name="emailid" placeholder="EmailId" required="true">
	<br>
<label for="department">Student Department</label>
<select name="department">
<option value="">Select the department</option>
<option value="CS">CS</option>
<option value="SE">SE</option>
<br>
</select>

<input type="submit" value="submit">
</form>
</body>
</html>