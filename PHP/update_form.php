<!DOCTYPE html>
<html>
<head>
	<title>Update form</title>
</head>

<body>
<?php ?>
<h1>Update form</h1>
<form action="php_update.php" method="GET">
<div>
<label>Enter ID:</label>
<input type="text" name="id">
</div>
<div>
<label>Enter First Name:</label>
<input type="text" name="firstname">
</div>
<div>
<label>Enter Last Name:</label>
<input type="text" name="lastname">
</div>
<div>
<label>Enter the Age:</label>
<input type="text" name="age">
</div>
<input type="submit" name="update" value="update">
</form>

</body>

</html>