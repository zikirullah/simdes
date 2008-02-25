<?php include "header.php" ?>
<?php include "navigation.php" ?>

<div class="subjudul">
  <img src="themes/images/ico-judul.gif" style="vertical-align: bottom" />
  <span style="padding-left: 3px; vertical-align: bottom;"><?php echo $tpl_pageTitle ?></span>
</div>

<div class="form-region">
  Untuk membuat surat silahkan klik link yang bersesuaian dengan surat yang akan dibuat<br />
  <ul style="margin-top:5px;font-size:12px;">
  <?php foreach ($M_SURAT as $kSurat => $surat) :?>
  <li style="padding:2px;"><a href="index.php?form=C.02&kSurat=<?php echo $kSurat;?>"  class="text"><?php echo $surat['name'];?></a></li>
  <?php endforeach ?>
  </ul>
  <p>Untuk melihat surat keluar terakhir silahkan klik <a href="index.php?form=C.04" class="text">DAFTAR SURAT</a></p>
</div>

<?php include "footer.php" ?>