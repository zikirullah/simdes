<?php include "header.php" ?>
<?php include "navigation.php" ?>
<div class="subjudul">
  <img src="themes/images/ico-judul.gif" style="vertical-align: bottom" />
  <span style="padding-left: 3px; vertical-align: bottom;"><?php echo "Detail ".$confSurat["name"]; ?></span>
</div> 
<?php include $confSurat["template"]["detail"]; ?>
<?php include "footer.php" ?>