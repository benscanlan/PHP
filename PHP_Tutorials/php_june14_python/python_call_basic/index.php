<!DOCTYPE html>
<html>
<head>
	<title>Basic</title>
</head>
<body>
<div>
	<h1> Basic</h1>
</div>
<p>
<?php
//include 'python_call.php';
$a = 5;
$b = 5;
//$d = "python3 test.py".$v1." ".$v2." ".$action
//$command = escapeshellcmd('python3 test.py 2 2 plus');
$command = escapeshellcmd('python3 test.py');
//$d = 'python3 test.py 2 2 plus'
$output = system("python3 test.py $a $b");//shell_exec($command);
echo $output;
?>
</p>
</body>
</html>
