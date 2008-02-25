<?php

$tpl_Username  = $user->nama;
$tpl_pageTitle = ucwords($pageTitle);

?>

<div style="padding: 5px 0px; margin-bottom: 20px;">
  <span style="display: inline; float: right">
    <div>
      <img src="themes/images/ico-header.gif" style="vertical-align: bottom" />
      Welcome <strong><?php echo $tpl_Username ?></strong>
      | <strong><a href="index.php?form=A.01" class="text">HOME</a></strong>
      | <strong><a href="index.php?form=B.06" class="text">PENDUDUK</a></strong>
      | <strong><a href="index.php?form=C.01" class="text">SURAT</a></strong>
      | <strong><a href="index.php?form=Z.01" class="text">PENGGUNA</a></strong>
      | <strong><a onclick="javascript:return confirm('Anda yakin akan keluar aplikasi ?')" href="index.php?out=true" class="text">LOGOUT</a></strong>
    </div>
    <div style="margin-top: 2px; white-space: nowrap; text-align: right; color: #888888; font-size: 10px;">
      <?php echo date("l, F d, Y H:i") ?>
    </div>
  </span>
</div>
<div>&nbsp;</div>