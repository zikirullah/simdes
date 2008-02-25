<?php include "header.php" ?>
<?php include "navigation.php" ?>
<script type="text/javascript" src="javascript/prototype.js"></script>
<div class="subjudul">
  <img src="themes/images/ico-judul.gif" style="vertical-align: bottom" />
  <span style="padding-left: 3px; vertical-align: bottom;"><?php echo "Buat ".$confSurat["name"]; ?></span>
</div>
<?php include $confSurat["template"]["input"]; ?>
<?php include "footer.php" ?>