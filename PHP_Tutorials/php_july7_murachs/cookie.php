<?php
//set
$name = 'userid';
$value = '87';
//$expire = strtotime('+1 year');
$expire = time() + (86400 * 30);
$path = '/';
setcookie($name, $value, $expire, $path);
//get value of cookie from browser user filter_input()
//if the browser has a cookie named userid
$userid = filter_input(INPUT_COOKIE, 'userid', FILTER_VALIDATE_INT); //87
echo $userid;
//there are goats.


?>
