<!DOCTYPE html>
<html>
<head>
<title>NSCT Registration</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>NSCT Student Information Form</h2>

<form action="insert.php" method="POST">

<label>Name</label>
<input type="text" name="name" required>

<label>Father Name</label>
<input type="text" name="father_name" required>

<label>CNIC</label>
<input type="text" name="cnic" required>

<label>Date of Birth</label>
<input type="date" name="dob" required>

<label>Address</label>
<textarea name="address"></textarea>

<label>CNIC Issue Date</label>
<input type="date" name="issue_date">

<label>CNIC Expiry Date</label>
<input type="date" name="expiry_date">

<input type="submit" value="Submit">

</form>

</div>

</body>
</html>