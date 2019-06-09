<html>
<?php
$data = array(
	      array( "Pubg", 200, "red" ),
	      array( "food", 30, "green" ),
	      array( "workout", 10, "blue" ),
	      array( "work", .50, "black" )
);
$max = 0;
foreach ( $data as $d ) { $max += $d[1]; }
?>
<body>
<table width="400" cellspacing="0" cellpadding="2">
<?php foreach( $data as $d ) {
$percent = ( $d[1] / $max ) * 100;
?>
<tr>

  <td width="20%"><?php echo( $d[0] ) ?></td>
  <td width="10%"><?php echo( $d[1] ) ?>%</td>
  <td>
  <table width="<?php echo($percent) ?>%" bgcolor="<?php echo($d[2]) ?>">
          <tr><td>&nbsp;</td></tr>
  </table>
  </td>
  </tr>
  <?php } ?>
  </table>
  </body>
  </html>

  <html>
  <?php
  $data = array(
  array( "movies", 20, "red" ), array( "food", 30, "green" ), array( "workout", 10, "blue" ), array( "work", 40, "black" )
  );
  $max = 0;
  foreach ( $data as $d ) { $max += $d[1]; }
  ?>
  <body>
  <table width="400" cellspacing="0" cellpadding="2">
  <?php foreach( $data as $d ) {
  $percent = ( $d[1] / $max ) * 100;
  ?>
  <tr>
    <td width="20%"><?php echo( $d[0] ) ?></td>
<td width="10%"><?php echo( $d[1] ) ?>%</td>
<td>
<table width="<?php echo($percent) ?>%" bgcolor="<?php echo($d[2]) ?>">
        <tr><td>&nbsp;</td></tr>
</table>
</td>
</tr>
<?php } ?>
</table>
</body>
</html>
