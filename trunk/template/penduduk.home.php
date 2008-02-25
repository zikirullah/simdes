<?php include "header.php" ?>
<?php include "navigation.php" ?>

<div class="subjudul">
  <img src="themes/images/ico-judul.gif" style="vertical-align: bottom" />
  <span style="padding-left: 3px; vertical-align: bottom;"><?php echo $tpl_pageTitle ?></span>
</div>

<div class="form-region">
<? if ($message){ ?>
  <div>
  <table cellpadding="0" cellspacing="0">
        
        <tr>
          <td>&nbsp;</td>
          <td style="padding-bottom: 5px" class="errors"><?php echo $message;?></td>
        </tr>
        
  </table>
  </div>
  <? } ?>
  <p>Untuk menambah penduduk silahkan klik <a href="index.php?form=B.02" class="text">PENDUDUK BARU</a></p>
  <p>Untuk pencarian penduduk silahkan klik <a href="index.php?form=B.01" class="text">CARI PENDUDUK</a></p>
  <p>Untuk melihat statistik penduduk silahkan klik <a href="index.php?form=B.07" class="text">STATISTIK PENDUDUK</a></p>
</div>

<?php include "footer.php" ?>