
<?php
print_r($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Information</title>
</head>
<body>
	<form method="POST">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name"><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br>

		<input type="submit" value="Submit">
	</form>
</body>
</html>
