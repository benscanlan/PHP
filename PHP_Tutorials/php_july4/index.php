<!DOCTYPE html>
<html>
<head>
	<title>create a php site</title>
</head>
<body>
<div>
	<h1> create a php site</h1>
</div>
<p> create a php site that takes and address or has clickable address and redirects to google map site.
site can be a single page
must have a redirect link
</p>
<p>
<?php
echo "hello";
$var = 5812;
$link_address = "https://www.google.com/maps/place/5812+devon+drive,+Rocklin,+CA+95765"
?>

//google style guide target first then rel
<a href="<?php echo $link_address;?>" target="_blank" rel="noopener noreferrer"> Link </a>

</p>
</body>
</html>
