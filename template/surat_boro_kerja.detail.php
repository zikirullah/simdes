  <div class="form-region">
    <table border="0" cellspacing="0" width="100%">
      <td width="35%"><strong>Nomor Surat</strong></td>
        <td width="65%" style="padding: 2px"><? echo $content['noSurat'] ; ?></td>
      </tr>
      <tr>
        <td><strong>Tanggal</strong></td>
        <td style="padding: 2px"><? echo $content['tglSurat'];?></td>
      </tr>
      <tr>
        <td colspan="2" style="padding-top:10px;"><strong>BIODATA</strong></td>
      </tr>
      <tr>
        <td><strong>Nama Lengkap</strong></td>
        <td style="padding: 2px"><? echo $content['nama']; ?></td>
      </tr>
      <tr>
        <td><strong>Tempat Lahir</strong></td>
        <td style="padding: 2px"><? echo $content['tempatLahir']; ?></td>
      </tr>
      <tr>
        <td><strong>Tanggal Lahir</strong></td>
        <td style="padding: 2px"><? echo $content['tglLahir']; ?></td>
      </tr>
      <tr>
        <td><strong>Jenis Kelamin</strong></td>
        <td style="padding: 2px"><? echo $content['kelamin']; ?></td>
      </tr>
      <tr>
        <td><strong>Umur</strong></td>
        <td style="padding: 2px"><? echo $content['umur']; ?></td>
      </tr>
      <tr>
        <td><strong>Warga Negara</strong></td>
        <td style="padding: 2px"><? echo $content['wargaNegara']; ?></td>
      </tr>
      <tr>
        <td><strong>Agama</strong></td>
        <td style="padding: 2px"><?php echo $M_AGAMA[$content['kAgama']]; ?></td>
      </tr>
      <tr>
        <td><strong>Status Perkawinan</strong></td>
        <td style="padding: 2px"><?php echo $M_KAWIN[$content['kKawin']]; ?></td>
      </tr>
      <tr>
        <td><strong>Alamat Asal</strong></td>
        <td style="padding: 2px"><? echo $content['alamat']; ?></td>
      </tr>
      <tr>
        <td><strong>Pekerjaan</strong></td>
        <td style="padding: 2px"><? echo $content['pekerjaan']; ?></td>
      </tr>
      <tr>
        <td><strong>Pendidikan</strong></td>
        <td style="padding: 2px"><? echo $content['pendidikan']; ?></td>
      </tr>
      <tr>
        <td><strong>Nomor KTP</strong></td>
        <td style="padding: 2px"><? echo $content['noKTP']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="padding-top:10px;"><strong>BEPERGIAN KE</strong></td>
      </tr>
      <tr>
        <td><strong>Desa/Kelurahan</strong></td>
        <td style="padding: 2px"><? echo $content['desa']; ?></td>
      </tr>
      <tr>
        <td><strong>Kecamatan</strong></td>
        <td style="padding: 2px"><? echo $content['kecamatan']; ?></td>
      </tr>
      <tr>
        <td><strong>Kabupaten/Kodya</strong></td>
        <td style="padding: 2px"><? echo $content['kabupaten']; ?></td>
      </tr>
      <tr>
        <td><strong>Propinsi</strong></td>
        <td style="padding: 2px"><? echo $content['propinsi']; ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td style="padding: 2px">&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Dari tanggal</strong></td>
        <td style="padding: 2px"><? echo $content['dariTgl']; ?></td>
      </tr>
      <tr>
        <td><strong>Hingga tanggal</strong></td>
        <td style="padding: 2px"><? echo $content['hinggaTgl']; ?></td>
      </tr>
      <tr>
        <td><strong>Alasan Bepergian</strong></td>
        <td style="padding: 2px"><? echo $content['alasan']; ?></td>
      </tr>
      <tr>
        <td><strong>Jumlah Pengikut</strong></td>
        <td style="padding: 2px"><? echo $content['jmlPengikut']; ?></td>
      </tr>
      <tr>
        <td colspan="2" style="padding-top:10px;"><strong>PENGIKUT</strong></td>
      </tr>
      <tr>
        <td colspan="2"><table class="data-pengikut" border="0" cellspacing="0" width="100%">
            <tr>
              <td width="4%" style="padding:3px;"><div align="center"><strong>No</strong></div></td>
              <td width="18%" style="padding:3px;"><div align="center"><strong>Nama</strong></div></td>
              <td width="7%" style="padding:3px;"><div align="center"><strong>L / P</strong></div></td>
              <td width="12%" style="padding:3px;"><div align="center"><strong>Status Perkawinan</strong></div></td>
              <td width="18%" style="padding:3px;"><div align="center"><strong>Pendidikan</strong></div></td>
              <td width="16%" style="padding:3px;"><div align="center"><strong>No. KTP</strong></div></td>
              <td width="25%" style="padding:3px;"><div align="center"><strong>Keterangan
                  </th>
                  </strong></div>
            </tr>
            <tr>
              <td>1.</td>
              <td><?php echo $content['pengikut_nama_1']; ?></td>
              <td><?php echo $content['pengikut_kelamin_1']; ?></td>
              <td><?php echo $content['pengikut_kawin_1']; ?></td>
              <td><?php echo $content['pengikut_pendidikan_1']; ?></td>
              <td><?php echo $content['pengikut_noKtp_1']; ?></td>
              <td><?php echo $content['pengikut_ket_1']; ?></td>
            </tr>
            <tr>
              <td>2.</td>
              <td><?php echo $content['pengikut_nama_2']; ?></td>
              <td><?php echo $content['pengikut_kelamin_2']; ?></td>
              <td><?php echo $content['pengikut_kawin_2']; ?></td>
              <td><?php echo $content['pengikut_pendidikan_2']; ?></td>
              <td><?php echo $content['pengikut_noKtp_2']; ?></td>
              <td><?php echo $content['pengikut_ket_2']; ?></td>
            </tr>
            <tr>
              <td>3.</td>
              <td><?php echo $content['pengikut_nama_3']; ?></td>
              <td><?php echo $content['pengikut_kelamin_3']; ?></td>
              <td><?php echo $content['pengikut_kawin_3']; ?></td>
              <td><?php echo $content['pengikut_pendidikan_3']; ?></td>
              <td><?php echo $content['pengikut_noKtp_3']; ?></td>
              <td><?php echo $content['pengikut_ket_3']; ?></td>
            </tr>
            <tr>
              <td>4.</td>
              <td><?php echo $content['pengikut_nama_4']; ?></td>
              <td><?php echo $content['pengikut_kelamin_4']; ?></td>
              <td><?php echo $content['pengikut_kawin_4']; ?></td>
              <td><?php echo $content['pengikut_pendidikan_4']; ?></td>
              <td><?php echo $content['pengikut_noKtp_4']; ?></td>
              <td><?php echo $content['pengikut_ket_4']; ?></td>
            </tr>
            <tr>
              <td>5.</td>
              <td><?php echo $content['pengikut_nama_5']; ?></td>
              <td><?php echo $content['pengikut_kelamin_5']; ?></td>
              <td><?php echo $content['pengikut_kawin_5']; ?></td>
              <td><?php echo $content['pengikut_pendidikan_5']; ?></td>
              <td><?php echo $content['pengikut_noKtp_5']; ?></td>
              <td><?php echo $content['pengikut_ket_5']; ?></td>
            </tr>
            <tr>
              <td>6.</td>
              <td><?php echo $content['pengikut_nama_6']; ?></td>
              <td><?php echo $content['pengikut_kelamin_6']; ?></td>
              <td><?php echo $content['pengikut_kawin_6']; ?></td>
              <td><?php echo $content['pengikut_pendidikan_6']; ?></td>
              <td><?php echo $content['pengikut_noKtp_6']; ?></td>
              <td><?php echo $content['pengikut_ket_6']; ?></td>
            </tr>
            <tr>
              <td>7.</td>
              <td><?php echo $content['pengikut_nama_7']; ?></td>
              <td><?php echo $content['pengikut_kelamin_7']; ?></td>
              <td><?php echo $content['pengikut_kawin_7']; ?></td>
              <td><?php echo $content['pengikut_pendidikan_7']; ?></td>
              <td><?php echo $content['pengikut_noKtp_7']; ?></td>
              <td><?php echo $content['pengikut_ket_7']; ?></td>
            </tr>
            <tr>
              <td>8.</td>
              <td><?php echo $content['pengikut_nama_8']; ?></td>
              <td><?php echo $content['pengikut_kelamin_8']; ?></td>
              <td><?php echo $content['pengikut_kawin_8']; ?></td>
              <td><?php echo $content['pengikut_pendidikan_8']; ?></td>
              <td><?php echo $content['pengikut_noKtp_8']; ?></td>
              <td><?php echo $content['pengikut_ket_8']; ?></td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td style="padding: 2px">&nbsp;</td>
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
      <td  style="padding: 2px 35px 2px 2px"><div align="right">
        <input  class="formbutton" type="button" name="print" id="print" value="CETAK &raquo;" onClick="window.open('index.php?form=C.03&print=true&id=<?php echo $id;?>','printsurat','scrollbars=yes,status=no,menubar=no,width=800,height=400')"/>
      </div></td>
    </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </div>
