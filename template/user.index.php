<?php include "header.php" ?>
<?php include "navigation.php" ?>

<div class="subjudul">
  <img src="themes/images/ico-judul.gif" style="vertical-align: bottom" />
  <span style="padding-left: 3px; vertical-align: bottom;"><?php echo $tpl_pageTitle ?></span>
</div>

  <div class="table-region">
    <table class="data" border="0" cellspacing="0" width="100%">
      <tr>
      	<th>NO</th>
        <th>USERNAME</th>
        <th>NAMA</th>
        <th>STATUS</th>
        <th>&nbsp;</th>
      </tr>
<?php for($i=0; $i < count($listUser); $i++) : 
?>
      <tr>
      <td><?php echo ($i+1); ?></td>
      <td><?php echo $listUser[$i]["username"];?></td>
      <td><?php echo $listUser[$i]["nama"];?></td>
      <td><?php echo ($listUser[$i]["is_admin"] ? "Admin" : "Operator") ;?></td>
      <td><a href="index.php?form=Z.04&delete=<?php echo $listUser[$i]["userid"]; ?>" onclick="javascript:return confirm('Anda yakin akan menghapus user <?php echo $listUser[$i]["username"];?>?')" class="text">hapus</a></td>
      </tr>
<?php endfor ?>
    </table>
  </div>


<?php include "footer.php" ?>