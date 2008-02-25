<script type="text/javascript" src="javascript/scriptaculous/scriptaculous.js"></script>
<script type="text/javascript" src="javascript/surat_keterangan.add.js"></script>
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
        <td colspan="2" style="padding-top:10px;"><strong>SISWA</strong></td>
      </tr>
      <tr>
      <td><strong>Nama</strong></td>
      <td style="padding: 2px"><input name="nama" type="text" id="nama" value="<? echo $content['nama']; ?>" style="width: 250px"/><div id="autocomplete_nama" class="autocomplete"></div></td>
    </tr>
    <tr>
      <td><strong>Umur</strong></td>
      <td style="padding: 2px"><input name="umur" type="text" id="umur" value="<? echo $content['umur']; ?>" style="width: 250px"/></td>
    </tr>
    <tr>
      <td><strong>Agama</strong></td>
<td style="padding: 2px"><select style="width: 254px" id="kAgama" name="kAgama">
              <?php echo printOptions($M_AGAMA, $content['kAgama']); ?>
            </select></td>
    </tr>
    <tr>
      <td><strong>Sekolah</strong></td>
      <td style="padding: 2px"><input name="sekolah" type="text" id="sekolah" value="<? echo $content['sekolah']; ?>" style="width: 250px"/></td>
    </tr>
    <tr>
      <td><strong>Kelas</strong></td>
      <td style="padding: 2px"><input name="kelas" type="text" id="kelas" value="<? echo $content['kelas']; ?>" style="width: 250px"/></td>
    </tr>
    <tr>
      <td><strong>Nomor KTP</strong></td>
      <td><input name="noKTP" type="text" id="noKTP" value="<? echo $content['noKTP']; ?>" style="width: 250px"/></td>
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
      <td colspan="2" style="padding-top:10px;"><strong>ORANG TUA</strong></td>
      </tr>
    <tr>
      <td><strong>Nama</strong></td>
      <td style="padding: 2px"><input name="namaOrtu" type="text" id="namaOrtu" value="<? echo $content['namaOrtu']; ?>" style="width: 250px"/><div id="autocomplete_namaOrtu" class="autocomplete"></div></td>
    </tr>
    <tr>
      <td><strong>Umur</strong></td>
      <td style="padding: 2px"><input name="umurOrtu" type="text" id="umurOrtu" value="<? echo $content['umurOrtu']; ?>" style="width: 250px"/></td>
    </tr>
    <tr>
      <td><strong>Agama</strong></td>
<td style="padding: 2px"><select style="width: 254px" id="kAgamaOrtu" name="kAgamaOrtu">
              <?php echo printOptions($M_AGAMA, $content['kAgamaOrtu']); ?>
            </select></td>
    </tr>
    <tr>
      <td><strong>Pekerjaan</strong></td>
      <td style="padding: 2px"><input name="pekerjaanOrtu" type="text" id="pekerjaanOrtu" value="<? echo $content['pekerjaanOrtu']; ?>" style="width: 250px"/></td>
    </tr>
    <tr>
      <td><strong>Alamat</strong></td>
      <td style="padding: 2px"><textarea name="alamatOrtu" id="alamatOrtu" style="width: 250px"><? echo $content['alamatOrtu']; ?></textarea></td>
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
             <td style="padding: 10px 240px 2px 2px"><div align="right">
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