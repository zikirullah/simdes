<script type="text/javascript" src="javascript/scriptaculous/scriptaculous.js"></script>
<script type="text/javascript" src="javascript/surat_pindah.add.js"></script>

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
        <td><strong>Tanggal</strong></td>
        <td style="padding: 2px"><input name="tglSurat" type="text" id="tglSurat" value="<? echo $content['tglSurat'];?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td colspan="2" style="padding-top:10px;"><strong>BIODATA</strong></td>
      </tr>
      <tr>
        <td><strong>Nama Lengkap</strong></td>
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
        <td><strong>Umur</strong></td>
        <td style="padding: 2px"><input name="umur" type="text" id="umur" value="<? echo $content['umur']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Warga Negara</strong></td>
        <td style="padding: 2px"><input name="wargaNegara" type="text" id="wargaNegara" value="<? echo $content['wargaNegara']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Agama</strong></td>
        <td style="padding: 2px"><select style="width: 254px" id="kAgama" name="kAgama">
            <?php echo printOptions($M_AGAMA, $content['kAgama']); ?>
          </select></td>
      </tr>
      <tr>
        <td><strong>Status Perkawinan</strong></td>
        <td style="padding: 2px"><select style="width: 254px" id="kKawin" name="kKawin">
            <?php echo printOptions($M_KAWIN, $content['kKawin']); ?>
          </select></td>
      </tr>
      <tr>
        <td><strong>Alamat Asal</strong></td>
        <td style="padding: 2px"><textarea name="alamat" id="alamat" style="width: 250px"><? echo $content['alamat']; ?></textarea></td>
      </tr>
      <tr>
        <td><strong>Pekerjaan</strong></td>
        <td style="padding: 2px"><input name="pekerjaan" type="text" id="pekerjaan" value="<? echo $content['pekerjaan']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Pendidikan</strong></td>
        <td style="padding: 2px"><input name="pendidikan" type="text" id="pendidikan" value="<? echo $content['pendidikan']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Nomor KTP</strong></td>
        <td><input name="noKTP" type="text" id="noKTP" value="<? echo $content['noKTP']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td colspan="2" style="padding-top:10px;"><strong>PINDAH KE</strong></td>
      </tr>
      <tr>
        <td><strong>Desa/Kelurahan</strong></td>
        <td style="padding: 2px"><input name="desa" type="text" id="desa" value="<? echo $content['desa']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Kecamatan</strong></td>
        <td style="padding: 2px"><input name="kecamatan" type="text" id="kecamatan" value="<? echo $content['kecamatan']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Kabupaten/Kodya</strong></td>
        <td style="padding: 2px"><input name="kabupaten" type="text" id="kabupaten" value="<? echo $content['kabupaten']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Propinsi</strong></td>
        <td style="padding: 2px"><input name="propinsi" type="text" id="propinsi" value="<? echo $content['propinsi']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td style="padding: 2px">&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Dari tanggal</strong></td>
        <td style="padding: 2px"><input name="dariTgl" type="text" id="dariTgl" value="<? echo $content['dariTgl']; ?>" style="width: 250px"/></td>
      </tr>
      <tr>
        <td><strong>Alasan Pindah</strong></td>
        <td style="padding: 2px"><textarea name="alasan" id="alasan" style="width: 250px"><? echo $content['alasan']; ?></textarea></td>
      </tr>
      <tr>
        <td><strong>Jumlah Pengikut</strong></td>
        <td style="padding: 2px"><input name="jmlPengikut" type="text" id="jmlPengikut" value="<? echo $content['jmlPengikut']; ?>" style="width: 250px"/></td>
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
            </strong></div>            </tr>
            <tr>
              <td>1.</td>
              <td><input name="pengikut_nama_1" type="text" id="pengikut_nama_1" value="<? echo $content['pengikut_nama_1']; ?>" style="width: 100%"/>
              <div id="autocomplete_pengikut_1" class="autocomplete"></div></td>
              <td><input name="pengikut_kelamin_1" type="text" id="pengikut_kelamin_1"value="<? echo $content['pengikut_kelamin_1']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_kawin_1" type="text" id="pengikut_kawin_1"value="<? echo $content['pengikut_kawin_1']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_pendidikan_1" type="text" id="pengikut_pendidikan_1"value="<? echo $content['pengikut_pendidikan_1']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_noKtp_1" type="text" id="pengikut_noKtp_1"value="<? echo $content['pengikut_noKtp_1']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_ket_1" type="text" id="pengikut_ket_1" value="<? echo $content['pengikut_ket_1']; ?>" style="width: 100%"/>              </td>
            </tr>
            <tr>
              <td>2.</td>
              <td><input name="pengikut_nama_2" type="text" id="pengikut_nama_2" value="<? echo $content['pengikut_nama_2']; ?>" style="width: 100%"/>
              <div id="autocomplete_pengikut_2" class="autocomplete"></div></td>
              <td><input name="pengikut_kelamin_2" type="text" id="pengikut_kelamin_2" value="<? echo $content['pengikut_kelamin_2']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_kawin_2" type="text" id="pengikut_kawin_2" value="<? echo $content['pengikut_kawin_2']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_pendidikan_2" type="text" id="pengikut_pendidikan_2" value="<? echo $content['pengikut_pendidikan_2']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_noKtp_2" type="text" id="pengikut_noKtp_2" value="<? echo $content['pengikut_noKtp_2']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_ket_2" type="text" id="pengikut_ket_2" value="<? echo $content['pengikut_ket_2']; ?>" style="width: 100%"/>              </td>
            </tr>
            <tr>
              <td>3.</td>
              <td><input name="pengikut_nama_3" type="text" id="pengikut_nama_3" value="<? echo $content['pengikut_nama_3']; ?>" style="width: 100%"/>
              <div id="autocomplete_pengikut_3" class="autocomplete"></div></td>
              <td><input name="pengikut_kelamin_3" type="text" id="pengikut_kelamin_3" value="<? echo $content['pengikut_kelamin_3']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_kawin_3" type="text" id="pengikut_kawin_3" value="<? echo $content['pengikut_kawin_3']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_pendidikan_3" type="text" id="pengikut_pendidikan_3" value="<? echo $content['pengikut_pendidikan_3']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_noKtp_3" type="text" id="pengikut_noKtp_3" value="<? echo $content['pengikut_noKtp_3']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_ket_3" type="text" id="pengikut_ket_3" value="<? echo $content['pengikut_ket_3']; ?>" style="width: 100%"/>              </td>
            </tr>
            <tr>
              <td>4.</td>
              <td><input name="pengikut_nama_4" type="text" id="pengikut_nama_4" value="<? echo $content['pengikut_nama_4']; ?>" style="width: 100%"/>
              <div id="autocomplete_pengikut_4" class="autocomplete"></div></td>
              <td><input name="pengikut_kelamin_4" type="text" id="pengikut_kelamin_4" value="<? echo $content['pengikut_kelamin_4']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_kawin_4" type="text" id="pengikut_kawin_4" value="<? echo $content['pengikut_kawin_4']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_pendidikan_4" type="text" id="pengikut_pendidikan_4" value="<? echo $content['pengikut_pendidikan_4']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_noKtp_4" type="text" id="pengikut_noKtp_4" value="<? echo $content['pengikut_noKtp_4']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_ket_4" type="text" id="pengikut_ket_4" value="<? echo $content['pengikut_ket_4']; ?>" style="width: 100%"/>              </td>
            </tr>
            <tr>
              <td>5.</td>
              <td><input name="pengikut_nama_5" type="text" id="pengikut_nama_5" value="<? echo $content['pengikut_nama_5']; ?>" style="width: 100%"/>
              <div id="autocomplete_pengikut_5" class="autocomplete"></div></td>
              <td><input name="pengikut_kelamin_5" type="text" id="pengikut_kelamin_5" value="<? echo $content['pengikut_kelamin_5']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_kawin_5" type="text" id="pengikut_kawin_5" value="<? echo $content['pengikut_kawin_5']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_pendidikan_5" type="text" id="pengikut_pendidikan_5" value="<? echo $content['pengikut_pendidikan_5']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_noKtp_5" type="text" id="pengikut_noKtp_5" value="<? echo $content['pengikut_noKtp_5']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_ket_5" type="text" id="pengikut_ket_5" value="<? echo $content['pengikut_ket_5']; ?>" style="width: 100%"/>              </td>
            </tr>
            <tr>
              <td>6.</td>
              <td><input name="pengikut_nama_6" type="text" id="pengikut_nama_6" value="<? echo $content['pengikut_nama_6']; ?>" style="width: 100%"/>
              <div id="autocomplete_pengikut_6" class="autocomplete"></div></td>
              <td><input name="pengikut_kelamin_6" type="text" id="pengikut_kelamin_6" value="<? echo $content['pengikut_kelamin_6']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_kawin_6" type="text" id="pengikut_kawin_6" value="<? echo $content['pengikut_kawin_6']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_pendidikan_6" type="text" id="pengikut_pendidikan_6" value="<? echo $content['pengikut_pendidikan_6']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_noKtp_6" type="text" id="pengikut_noKtp_6" value="<? echo $content['pengikut_noKtp_6']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_ket_6" type="text" id="pengikut_ket_6" value="<? echo $content['pengikut_ket_6']; ?>" style="width: 100%"/>              </td>
            </tr>
            <tr>
              <td>7.</td>
              <td><input name="pengikut_nama_7" type="text" id="pengikut_nama_7" value="<? echo $content['pengikut_nama_7']; ?>" style="width: 100%"/>
              <div id="autocomplete_pengikut_7" class="autocomplete"></div></td>
              <td><input name="pengikut_kelamin_7" type="text" id="pengikut_kelamin_7" value="<? echo $content['pengikut_kelamin_7']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_kawin_7" type="text" id="pengikut_kawin_7" value="<? echo $content['pengikut_kawin_7']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_pendidikan_7" type="text" id="pengikut_pendidikan_7" value="<? echo $content['pengikut_pendidikan_7']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_noKtp_7" type="text" id="pengikut_noKtp_7" value="<? echo $content['pengikut_noKtp_7']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_ket_7" type="text" id="pengikut_ket_7" value="<? echo $content['pengikut_ket_7']; ?>" style="width: 100%"/>              </td>
            </tr>
            <tr>
              <td>8.</td>
              <td><input name="pengikut_nama_8" type="text" id="pengikut_nama_8" value="<? echo $content['pengikut_nama_8']; ?>" style="width: 100%"/>
              <div id="autocomplete_pengikut_8" class="autocomplete"></div></td>
              <td><input name="pengikut_kelamin_8" type="text" id="pengikut_kelamin_8" value="<? echo $content['pengikut_kelamin_8']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_kawin_8" type="text" id="pengikut_kawin_8" value="<? echo $content['pengikut_kawin_8']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_pendidikan_8" type="text" id="pengikut_pendidikan_8" value="<? echo $content['pengikut_pendidikan_8']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_noKtp_8" type="text" id="pengikut_noKtp_8" value="<? echo $content['pengikut_noKtp_8']; ?>" style="width: 100%"/>              </td>
              <td><input name="pengikut_ket_8" type="text" id="pengikut_ket_8" value="<? echo $content['pengikut_ket_8']; ?>" style="width: 100%"/>              </td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td style="padding: 2px">&nbsp;</td>
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
        <td style="padding: 10px 35px 2px 2px"><div align="right">
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
