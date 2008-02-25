<script type="text/javascript" src="javascript/scriptaculous/scriptaculous.js"></script>
<script type="text/javascript" src="javascript/surat_bersih.add.js"></script>

<form id="form1" method="post" action="index.php?form=C.02">
  <div class="form-region">
    <table border="0" cellspacing="0" width="100%">
      <? if ($errorCode) { ?>
      <tr>
        <td>&nbsp;</td>
        <td style="padding-bottom: 5px" class="errors"><? echo $errorCode ?></td>
      </tr>
      <? } ?>
      <tr>
        <td><strong>Nomor Surat</strong></td>
        <td style="padding: 2px"><input name="noSurat" type="text" id="noSurat" value="<? echo $content['noSurat'] ; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Nama</strong></td>
        <td style="padding: 2px"><input name="nama" type="text" id="nama" value="<? echo $content['nama']; ?>" style="width: 250px"/>
          <div id="autocomplete_nama" class="autocomplete"></div></td>
      </tr>
      <tr>
        <td><strong>Tempat Lahir</strong></td>
        <td style="padding: 2px"><input name="tempatLahir" type="text" id="tempatLahir" value="<? echo $content['tempatLahir']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Tanggal Lahir</strong></td>
        <td style="padding: 2px"><input name="tglLahir" type="text" id="tglLahir" value="<? echo $content['tglLahir']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Jenis Kelamin</strong></td>
        <td style="padding: 2px"><input name="kelamin" type="text" id="kelamin" value="<? echo $content['kelamin']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Agama</strong></td>
        <td style="padding: 2px"><select style="width: 254px" id="kAgama" name="kAgama">
            <?php echo printOptions($M_AGAMA, $content['kAgama']); ?>
          </select></td>
      </tr>
      <tr>
        <td><strong>Organisasi</strong></td>
        <td style="padding: 2px"><input name="organisasi" type="text" id="organisasi" value="<? echo $content['organisasi']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Kebangsaan</strong></td>
        <td style="padding: 2px"><input name="wargaNegara" type="text" id="wargaNegara" value="<? echo $content['wargaNegara']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Pekerjaan</strong></td>
        <td style="padding: 2px"><input name="pekerjaan" type="text" id="pekerjaan" value="<? echo $content['pekerjaan']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Alamat</strong></td>
        <td style="padding: 2px"><textarea name="alamat" id="alamat" style="width: 250px"><? echo $content['alamat']; ?></textarea></td>
      </tr>
      <tr>
        <td><strong>Keperluan</strong></td>
        <td style="padding: 2px"><textarea name="keperluan" id="keperluan" style="width: 250px"><? echo $content['keperluan']; ?></textarea></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td style="padding: 2px">&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Tanggal</strong></td>
        <td style="padding: 2px"><input name="tglSurat" type="text" id="tglSurat" value="<? echo $content['tglSurat'];?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Kades</strong></td>
        <td style="padding: 2px"><input name="kades" type="text" id="kades" value="<? echo $content['kades']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td style="padding: 10px 2px 2px 2px"><input class="formbutton" type="button" name="batal" id="batal" value="&laquo; BATAL"/></td>
        <td style="padding: 10px 230px 2px 2px"><div align="right">
            <input class="formbutton" type="button" name="next" id="next" value="SIMPAN &raquo;"/>
          </div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </div>
  <input type="hidden" name="next" value="true"/>
  <input type="hidden" name="kSurat" value="<?php echo $kSurat;?>"/>
</form>
