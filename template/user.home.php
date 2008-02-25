<?php include "header.php" ?>
<?php include "navigation.php" ?>

<div class="subjudul">
  <img src="themes/images/ico-judul.gif" style="vertical-align: bottom" />
  <span style="padding-left: 3px; vertical-align: bottom;"><?php echo $tpl_pageTitle ?></span>
</div>

<div class="form-region">
  <div>
  <table cellpadding="0" cellspacing="0">
        <? if ($message){ ?>
        <tr>
          <td>&nbsp;</td>
          <td style="padding-bottom: 5px" class="errors"><?php echo $message;?></td>
        </tr>
        <? } ?>
  	<tr>
  		<td><b>Username</b></td>
  		<td style="padding: 2px"><?php echo $user->username; ?></td>
  	</tr>
  	<tr>
  		<td><b>Nama</b></td>
  		<td style="padding: 2px"><?php echo $user->nama; ?></td>
  	</tr>
  	<tr>
  		<td><b>Status</b></td>
  		<td style="padding: 2px"><?php echo ($user->isAdmin == 1 ? "Admin" : "Operator"); ?></td>
  	</tr>
  </table>
  </div>
  <p>Untuk mengganti password anda silahkan klik <a href="index.php?form=Z.03" class="text">GANTI PASSWORD</a></p>
  <?php if($user->isAdmin == 1) :?>
  <p>Untuk menambah user silahkan klik <a href="index.php?form=Z.02" class="text">TAMBAH USER</a></p>
  <p>Untuk melihat daftar user silahkan klik <a href="index.php?form=Z.04" class="text">DAFTAR USER</a></p>
  <?php endif ?>
</div>

<?php include "footer.php" ?>