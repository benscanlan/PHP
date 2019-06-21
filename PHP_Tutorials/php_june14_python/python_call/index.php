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
<?php
//include 'python_call.php';
if(isset($_GET["submit"])){
	$v1 = $_GET["v1"];
	$v2 = $_GET["v2"];

}
//$d = "python3 test.py".$v1." ".$v2." ".$action
//$command = escapeshellcmd('python3 test.py 2 2 plus');
$command = escapeshellcmd('python3 test.py');
//$d = 'python3 test.py 2 2 plus'
$output = system('python3 test.py')//shell_exec($command);
echo $output;
?>
</p>
</body>
</html>
