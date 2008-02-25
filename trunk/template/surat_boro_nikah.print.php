<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Surat Boro Nikah</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.kop {
	font-family:Geneva, Arial, Helvetica, sans-serif;
	letter-spacing: 2px;
	font-stretch:extra-condensed;
	word-spacing: 10px;
}
table.data {
	border:1px solid black;
	border-collapse:collapse;
}
table.data td {
	border:1px solid black;
	padding:1px 5px;
}
table.data th {
	border:1px solid black;
	font-weight:bold;
	padding:2px 5px;
}
-->
</style>
</head>
<body onLoad="window.print()">
<table width="700" align="center" border="0">
  <tr>
    <td colspan="4" align="center" class="kop"><strong><font size="+1" >PEMERINTAH KABUPATEN BLITAR<br>
      KECAMATAN SRENGAT<br>
      KANTOR KEPALA DESA SELOKAJANG</font><br>
      <font size="-1"><em> JLN. A. YANI NO.1 TELP 552296</em></font></strong> </td>
  </tr>
  <tr>
    <td colspan="4" align="center"><hr style="padding:0px;margin:0px;height:4px;color:#000000;"/>
    </td>
  </tr>  
</table>
<table width="700" align="center" border="0">
  <tr>
    <td colspan="4"><div align="center"><strong>SURAT KETERANGAN BEPERGIAN / BORONIKAH</strong></div></td>
  </tr>
  <tr>
    <td width="25%">&nbsp;</td>
    <td width="22%"><div align="right"><strong>Nomor</strong></div></td>
    <td width="28%"><strong>: <? echo $content['noSurat'] ; ?></strong></td>
    <td width="25%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nama Lengkap</td>
    <td colspan="2">: <? echo $content['nama']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tempat, Tanggal Lahir</td>
    <td colspan="2">: <? echo $content['tempatLahir']; ?>, <? echo $content['tglLahir']; ?> (Umur : <? echo $content['umur']; ?>)</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td colspan="2">: <? echo $content['kelamin']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Warga Negara</td>
    <td colspan="2">: <? echo $content['wargaNegara']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Agama</td>
    <td colspan="2">: <?php echo $M_AGAMA[$content['kAgama']]; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Status Perkwinan</td>
    <td colspan="2">: <?php echo $M_KAWIN[$content['kKawin']]; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Alamat Asal</td>
    <td colspan="2">: <? echo $content['alamat']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pekerjaan</td>
    <td colspan="2">: <? echo $content['pekerjaan']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pendidikan</td>
    <td colspan="2">: <? echo $content['pendidikan']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nomor KTP</td>
    <td colspan="2">: <? echo $content['noKTP']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Bepergian Ke :</td>
    <td>Desa / Kelurahan</td>
    <td>: <? echo $content['desa']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Kecamatan</td>
    <td>: <? echo $content['kecamatan']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td> Kabupaten / Kodya</td>
    <td>: <? echo $content['kabupaten']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td> Propinsi</td>
    <td>: <? echo $content['propinsi']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Waktunya : </td>
    <td>Tanggal : <? echo $content['dariTgl']; ?></td>
    <td colspan="2">S.d tanggal : <? echo $content['hinggaTgl']; ?></td>
  </tr>
  <tr>
    <td>Alasan Bepergian</td>
    <td colspan="3">: <? echo $content['alasan']; ?>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">Pengikut : <? echo $content['jmlPengikut']; ?> orang, yaitu :</td>
  </tr>
</table>
<table width="700" align="center" border="0" class="data" cellpadding="0" cellspacing="0">
  <tr>
    <td width="3%"><div align="center">No</div></td>
    <td width="18%"><div align="center">Nama</div></td>
    <td width="5%"><div align="center">L/P</div></td>
    <td width="17%"><div align="center">Status Perkawinan</div></td>
    <td width="16%"><div align="center">Pendidikan</div></td>
    <td width="16%"><div align="center">No. KTP</div></td>
    <td width="25%"><div align="center">Keterangan</div></td>
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
</table>
<table width="700" align="center" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Selokajang, <? echo $content['tglSurat'];?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center">Kepala Desa </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center"><? echo $content['kades']; ?></div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">Mengetahui, </div></td>
  </tr>
  <tr>
    <td><div align="center">CAMAT &#8211; SRENGAT </div></td>
    <td><div align="center">DANRAMIL 0808 06 SRENGAT</div></td>
    <td><div align="center">KAPOLSEK</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" style="padding:0px;margin:0px;"><? echo $content['camat']; ?></td>
    <td align="center"><? echo $content['danramil']; ?></td>
    <td align="center"><? echo $content['kapolsek']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIP <? echo $content['camat_nip']; ?></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NRP <? echo $content['danramil_nrp']; ?></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NRP <? echo $content['kapolsek_nrp']; ?></td>
  </tr>
</table>
</body>
</html>
