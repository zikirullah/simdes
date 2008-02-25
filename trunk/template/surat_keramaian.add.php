<script type="text/javascript" src="javascript/scriptaculous/scriptaculous.js"></script>
<script type="text/javascript" src="javascript/surat_keramaian.add.js"></script>

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
        <td><strong>Umur</strong></td>
        <td style="padding: 2px"><input name="umur" type="text" id="umur" value="<? echo $content['umur']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Pekerjaan</strong></td>
        <td style="padding: 2px"><input name="pekerjaan" type="text" id="pekerjaan" value="<? echo $content['pekerjaan']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Agama</strong></td>
        <td style="padding: 2px"><select style="width: 254px" id="kAgama" name="kAgama">
            <?php echo printOptions($M_AGAMA, $content['kAgama']); ?>
          </select></td>
      </tr>
      <tr>
        <td><strong>Hajat</strong></td>
        <td style="padding: 2px"><textarea name="hajat" id="hajat" style="width: 250px"><? echo $content['hajat']; ?></textarea></td>
      </tr>
      <tr>
        <td><strong>Jenis Hiburan</strong></td>
        <td style="padding: 2px"><input name="jenisHiburan" type="text" id="jenisHiburan" value="<? echo $content['jenisHiburan']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>No Induk</strong></td>
        <td style="padding: 2px"><input name="noInduk" type="text" id="noInduk" value="<? echo $content['noInduk']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Tanggal Acara</strong></td>
        <td style="padding: 2px"><input name="tglAcara" type="text" id="tglAcara" value="<? echo $content['tglAcara']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Hari</strong></td>
        <td style="padding: 2px"><input name="hari" type="text" id="hari" value="<? echo $content['hari']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Keterangan Lain-lain</strong></td>
        <td style="padding: 2px"><textarea name="ket" id="ket" style="width: 250px"><? echo $content['ket']; ?></textarea></td>
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
        <td style="padding: 10px 153px 2px 2px"><div align="right">
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
