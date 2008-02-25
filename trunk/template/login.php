<?php include "header.php" ?>

<div style="padding: 5px 0px; margin-bottom: 20px;">
<span style="display: inline; float: right"><div>
<img src="themes/images/ico-header.gif" style="vertical-align: bottom"/>
Selamat datang di layanan <strong>SIMDES WEB CLIENT</strong>
</div>
<div style="margin-top: 2px; white-space: nowrap; text-align: right; color: #888888; font-size: 10px;">
<?php echo date("l, F d, Y H:i") ?></div>
</span>
</div>

<div class="subjudul"><img src="themes/images/ico-judul.gif" style="vertical-align: bottom" />
<span style="padding-left: 3px; vertical-align: bottom;">Area Login</span>
</div>

<form action="index.php" method="post"><div class="form-region">
<table border="0" cellspacing="0">
<?php if ($errorCode) { ?>
	<tr>
		<td>&nbsp;</td>
		<td style="padding-bottom: 5px" class="errors"><?php echo $errorCode ?></td>
	</tr>
<?php } ?>
	<tr>
		<td><strong>Username</strong></td>
		<td style="padding: 3px"><input type="text" name="username" value="<?php echo htmlentities($username); ?>" style="width: 250px"/></td>
	</tr>
	<tr>
		<td><strong>Password</strong></td>
		<td style="padding: 3px"><input type="password" name="password" style="width: 250px"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td style="padding-top: 10px"><input type="submit" class="formbutton" name="login" value="LOGIN &raquo;"/></td>
	</tr>
</table></div>
<input type="hidden" name="login" value="login" />
</form>

<?php include "footer.php" ?>