  <div class="form-region">
    <table border="0" cellspacing="0" width="100%">
      <td width="33%"><strong>Nomor Surat</strong></td>
      <td width="67%" style="padding: 2px"><? echo $content['noSurat'] ; ?></td>
    </tr>
      <tr>
        <td colspan="2" style="padding-top:10px;"><strong>BIODATA</strong></td>
      </tr>
      <tr>
      <td><strong>Nama</strong></td>
      <td style="padding: 2px"><? echo $content['nama']; ?></td>
    </tr>
    <tr>
      <td><strong>Umur</strong></td>
      <td style="padding: 2px"><? echo $content['umur']; ?></td>
    </tr>
    <tr>
      <td><strong>Agama</strong></td>
<td style="padding: 2px"><? echo $M_AGAMA[$content['kAgama']]; ?></td>
    </tr>
    <tr>
      <td><strong>Kebangsaan</strong></td>
      <td style="padding: 2px"><? echo $content['wargaNegara']; ?></td>
    </tr>
    <tr>
      <td><strong>Pekerjaan</strong></td>
      <td style="padding: 2px"><? echo $content['pekerjaan']; ?></td>
    </tr>
    <tr>
      <td><strong>Alamat</strong></td>
      <td style="padding: 2px"><? echo $content['alamat']; ?></td>
    </tr>
    <tr>
      <td colspan="2" style="padding-top:10px;"><strong>ORANG TUA</strong></td>
      </tr>
    <tr>
      <td><strong>Nama</strong></td>
      <td style="padding: 2px"><? echo $content['namaOrtu']; ?></td>
    </tr>
    <tr>
      <td><strong>Umur</strong></td>
      <td style="padding: 2px"><? echo $content['umurOrtu']; ?></td>
    </tr>
    <tr>
      <td><strong>Agama</strong></td>
<td style="padding: 2px"><?php echo $M_AGAMA[$content['kAgamaOrtu']]; ?>
            </td>
    </tr>
    <tr>
      <td><strong>Kebangsaan</strong></td>
      <td style="padding: 2px"><? echo $content['wargaNegaraOrtu']; ?></td>
    </tr>
    <tr>
      <td><strong>Pekerjaan</strong></td>
      <td style="padding: 2px"><? echo $content['pekerjaanOrtu']; ?></td>
    </tr>
    <tr>
      <td><strong>Alamat</strong></td>
      <td style="padding: 2px"><? echo $content['alamatOrtu']; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td style="padding: 2px">&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Keperluan</strong></td>
      <td style="padding: 2px"><? echo $content['keperluan']; ?></td>
    </tr>
    <tr>
      <td><strong>Tanggal</strong></td>
      <td style="padding: 2px"><? echo $content['tglSurat'];?></td>
    </tr>
      <tr>
        <td><strong>Kades Selokajang</strong></td>
        <td style="padding: 2px"><? echo $content['kades']; ?></td>
      </tr>
      <tr>
        <td><strong>Camat Srengat</strong></td>
        <td style="padding: 2px"><? echo $content['camat']; ?></td>
      </tr>
      <tr>
        <td><strong>NIP Camat Srengat</strong></td>
        <td style="padding: 2px"><? echo $content['camat_nip']; ?></td>
      </tr>
      <tr>
        <td><strong>DANRAMIL 0808 06 Srengat</strong></td>
        <td style="padding: 2px"><? echo $content['danramil']; ?></td>
      </tr>
      <tr>
        <td><strong>NRP DANRAMIL 0808 06 Srengat</strong></td>
        <td style="padding: 2px"><? echo $content['danramil_nrp']; ?></td>
      </tr>
      <tr>
        <td><strong>Kapolsek Srengat</strong></td>
        <td style="padding: 2px"><? echo $content['kapolsek']; ?></td>
      </tr>
      <tr>
        <td><strong>NRP Kapolsek Srengat</strong></td>
        <td style="padding: 2px"><? echo $content['kapolsek_nrp']; ?></td>
      </tr>
    <tr>
      <td style="padding: 10px 2px 2px 2px"><input class="formbutton" type="button" name="back" id="back" value="&laquo; KEMBALI" onclick="window.location = 'index.php?form=C.01'"/></td>
      <td style="padding: 2px 35px 2px 2px"><div align="right">
        <input  class="formbutton" type="button" name="print" id="print" value="CETAK &raquo;" onClick="window.open('index.php?form=C.03&print=true&id=<?php echo $id;?>','printsurat','scrollbars=yes,status=no,menubar=no,width=800,height=400')"/>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  </div>