
<?php
$command = escapeshellcmd('python3 test.py');
$output = shell_exec($command);
echo $output;
?>
