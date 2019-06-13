<html>
<head>
<?php
$style = "default" ;
if ( $_GET["style"] )
        $style = $_GET["style"];

$files = array();
$dh = opendir( "styles" );
while( $file = @readdir( $dh ) )
{
        if( preg_match( "/[.]css$/", $file ) )
        {
                $file = preg_replace( "/[.]css$/", "", $file );
                $files []= $file;
        }
}
?>
<style type="text/css">
  <?php
    //include("styles/default.css");
    include("styles/".$style.".css");
  ?>
</style>
</head>
<body>
<table width= "800">
<tr>
<td width="200" class="menu" valign="top">
<div class="menu-active"><a href="home">Home<a/><div>
<div class="menu-inactive"><a href="faq">FAQ<a/></div>
<div class="menu-inactive"><a href="contact">Contact</a></div>
</td>
<td>
<td width="600" valign="top">

        <table class="box">
<tr>
<td class="box-title">
        Important information

</tr>
<tr>
<td class="box-content">
        Lots of information about important events and
stuff. </td>
        </tr>
        </table>
</td>
</tr>
</table>
<form>
Style: <select name="style">
<?php foreach( $files as $file ) { ?>
<option value="<?php echo($file); ?>"
<?php echo( $file == $style ? "selected" : "" ); ?>
><?php echo($file); ?></option>
<?php } ?>

</select>
<input type="submit" value="Select" />
</form>
</body>
</html>
