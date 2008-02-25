<script type="text/javascript" src="javascript/scriptaculous/scriptaculous.js"></script>
<script type="text/javascript" src="javascript/surat_kelakuan_baik.add.js"></script>
<form id="form1" method="post" action="index.php?form=C.02">
  <div class="form-region">
    <table border="0" cellspacing="0" width="100%">
      <? if ($errorCode) { ?>
      <tr>
        <td width="35%">&nbsp;</td>
        <td width="65%" class="errors" style="padding-bottom: 5px"><? echo $errorCode ?></td>
      </tr>
      <? } ?>
      <tr>
      <td><strong>Nomor Surat</strong></td>
      <td style="padding: 2px"><input name="noSurat" type="text" id="noSurat" value="<? echo $content['noSurat'] ; ?>" style="width: 250px"/></td>
    </tr>
      <tr>
        <td colspan="2" style="padding-top:10px;"><strong>BIODATA</strong></td>
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
      <td><strong>Kebangsaan</strong></td>
      <td style="padding: 2px"><input name="wargaNegaraOrtu" type="text" id="wargaNegaraOrtu" value="<? echo $content['wargaNegaraOrtu']; ?>" style="width: 250px"/></td>
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
      <td><strong>Keperluan</strong></td>
      <td style="padding: 2px"><textarea name="keperluan" id="keperluan" style="width: 250px"><? echo $content['keperluan']; ?></textarea></td>
    </tr>
    <tr>
      <td><strong>Tanggal</strong></td>
      <td style="padding: 2px"><input name="tglSurat" type="text" id="tglSurat" value="<? echo $content['tglSurat'];?>" style="width: 250px"/></td>
    </tr>
      <tr>
        <td><strong>Kades Selokajang</strong></td>
        <td style="padding: 2px"><input name="kades" type="text" id="kades" value="<? echo $content['kades']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Camat Srengat</strong></td>
        <td style="padding: 2px"><input name="camat" type="text" id="camat" value="<? echo $content['camat']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>NIP Camat Srengat</strong></td>
        <td style="padding: 2px"><input name="camat_nip" type="text" id="camat_nip" value="<? echo $content['camat_nip']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>DANRAMIL 0808 06 Srengat</strong></td>
        <td style="padding: 2px"><input name="danramil" type="text" id="danramil" value="<? echo $content['danramil']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>NRP DANRAMIL 0808 06 Srengat</strong></td>
        <td style="padding: 2px"><input name="danramil_nrp" type="text" id="danramil_nrp" value="<? echo $content['danramil_nrp']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Kapolsek Srengat</strong></td>
        <td style="padding: 2px"><input name="kapolsek" type="text" id="kapolsek" value="<? echo $content['kapolsek']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>NRP Kapolsek Srengat</strong></td>
        <td style="padding: 2px"><input name="kapolsek_nrp" type="text" id="kapolsek_nrp" value="<? echo $content['kapolsek_nrp']; ?>" style="width: 250px"/></td>
      </tr>
    <tr>
      <td style="padding: 10px 2px 2px 2px"><input class="formbutton" type="button" name="batal" id="batal" value="&laquo; BATAL"/></td>
             <td style="padding: 10px 94px 2px 2px"><div align="right">
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