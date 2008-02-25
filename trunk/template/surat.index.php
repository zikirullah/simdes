<?php include "header.php" ?>
<?php include "navigation.php" ?>

<div class="subjudul">
  <img src="themes/images/ico-judul.gif" style="vertical-align: bottom" />
  <span style="padding-left: 3px; vertical-align: bottom;"><?php echo $tpl_pageTitle ?></span>
</div>
<form id="form1" method="post" action="index.php?form=C.04">
  <div class="table-region">
    <table class="data" border="0" cellspacing="0" width="100%">
    <tr>
        <td colspan="2">jumlah : <?php echo $result["numRows"];?></td>
        <td colspan="2">Jenis Surat : <select id="kSurat" name="kSurat" onchange="submit()">
            <?php echo printOptions($kTipeSuratOption, $kSurat); ?>
            </select></td>
        <td colspan="2" align="right">halaman :
            <select id="page" name="page" onchange="submit()">
            <?php echo printOptions($pageOptions, $page); ?>
            </select></td>
     </tr>      
      <tr>
      	<th>NO</th>
        <th>JENIS SURAT</th>
        <th>NO SURAT</th>
        <th>TANGGAL</th>
        <th>PEMBUAT</th>
        <th>&nbsp;</th>
      </tr>
<?php for($i=0; $i < count($result["content"]); $i++) : 
?>
      <tr>
      <td><?php echo ($no++); ?></td>
      <td><?php echo $M_SURAT[$result["content"][$i]["k_surat"]]["singkat"];?></td>
      <td><?php echo $result["content"][$i]["no_surat"];?></td>
      <td><?php echo $result["content"][$i]["tgl_buat"];?></td>
      <td><?php echo $result["content"][$i]["userid"];?></td>
      <td><a href="index.php?form=C.03&id=<?php echo $result["content"][$i]["id"];?>" class="text">Detail</a></td>
      </tr>
<?php endfor ?>
    </table>
  </div>
</form>

<?php include "footer.php" ?>