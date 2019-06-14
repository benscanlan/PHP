<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
<div>
	<h1> Calculator</h1>
</div>
<p>
<form method="get" action="index.php">
	<input name="v1">
	<select name="action">
		<option value="plus">+</option>
		<option value="minus">-</option>
	</select>
	<input name="v2"/>
	<!-- <button name="submit" value="Submit">submit</> -->
	<input type="submit" name="submit" value="Submit"/>
</form>
<?php  include 'indexcopy.php';  ?>
</p>
</body>
</html>
