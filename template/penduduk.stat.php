<?php include "header.php" ?>
<?php include "navigation.php" ?>

<div class="subjudul">
  <img src="themes/images/ico-judul.gif" style="vertical-align: bottom" />
  <span style="padding-left: 3px; vertical-align: bottom;"><?php echo $tpl_pageTitle ?></span>
</div>


<form id="form1" method="post" action="index.php?form=B.07">
  <div class="form-region">
    <table border="0" cellspacing="0">
      <? if ($errorCode) { ?>
      <tr>
        <td>&nbsp;</td>
        <td style="padding-bottom: 5px" class="errors"><? echo $errorCode ?></td>
      </tr>
      <? } ?>
      <tr>
        <td><strong>Jenis Statistik</strong></td>
        <td style="padding-right: 5px"><select style="width: 254px" id="kStat" name="kStat">
              <?php echo printOptions($M_STAT, $kStat); ?>
            </select></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td style="padding-top: 10px"><input class="formbutton" type="submit" name="next" id="next" value="TAMPILKAN &raquo;"/></td>
      </tr>
    </table>
    <input type="hidden" name="next" value="true"/>
  </div>

<?php if($stat) : $total = 0;?>
  <div class="subjudul">
  	<img src="themes/images/ico-subjudul.gif" style="vertical-align: bottom;"/>
  	<span style="padding-left: 3px; vertical-align: bottom;"><?php echo $M_STAT[$kStat]; ?></span>
  </div>
  <div class="table-region">
    <table class="data" border="0" cellspacing="0" width="100%">
      <tr>
      <?php foreach ($stat[0] as $header => $value):?>
      	<th width="50%"><?php echo $header; ?></th>
    <?php endforeach ?>
      </tr>
<?php foreach ($stat as $index => $item): $total += $item['JUMLAH'];?>
      <tr>
      <?php foreach ($item as $key => $value):  ?>
      <td><?php echo $value ;?></td>
      <?php endforeach ?>
      </tr>
<?php endforeach ?>
    <tr style="font-size:12px;background-color:#EEE;">
    <td><b>TOTAL</b></td>
    <td><b><?php echo $total;?></b></td>
    </tr>
    </table>
  </div>
</form>
<?php endif ?>

<?php include "footer.php" ?>