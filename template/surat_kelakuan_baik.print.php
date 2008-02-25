<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Surat Kelakuan Baik</title>
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
    <td colspan="6"><div align="center"><strong>SURAT KETERANGAN KELAKUAN BAIK</strong></div></td>
  </tr>
  <tr> 
    <td colspan="2"></td>
    <td colspan="3"><strong>Nomor :<? echo $content['noSurat'] ; ?></strong></td>
  </tr>
  <tr> 
    <td width="21%">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td width="34%" colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="6"><p style="text-indent:30px;">Yang bertanda tangan di bawah ini, Kepala 
        Desa Selokajang, Kecamatan Srengat , Kabupaten Blitar dengan ini menerangkan 
        dengan sebenarnya bahwa :</p></td>
  </tr>
  <tr> 
    <td>Nama</td>
    <td colspan="3">: <? echo $content['nama']; ?> / <? echo $content['umur']; ?> tahun</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Agama</td>
    <td colspan="3">: <?php echo $M_AGAMA[$content['kAgama']]; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>Kebangsaan</td>
    <td colspan="3">:  <? echo $content['wargaNegara']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>Pekerjaan </td>
    <td colspan="3">: <? echo $content['pekerjaan']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Alamat</td>
    <td colspan="3">: <? echo $content['alamat']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td colspan="3"></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="6">ADALAH BENAR<br/>
      Selama menjadi penduduk Desa Selokajang berkelakuan baik, belum pernah tersangkut perkara polisi (Pelanggaran / Kejahatan) selalu patuh pada peraturan pemerintah Desa.</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Nama Orang Tua</td>
    <td colspan="3">: <? echo $content['namaOrtu']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Umur</td>
    <td colspan="3">: <? echo $content['umurOrtu']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Agama</td>
    <td colspan="3">: <?php echo $M_AGAMA[$content['kAgamaOrtu']]; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>Kebangsaan</td>
    <td colspan="3">:  <? echo $content['wargaNegaraOrtu']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Pekerjaan</td>
    <td colspan="3">: <? echo $content['pekerjaanOrtu']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Alamat</td>
    <td colspan="3">: <? echo $content['alamatOrtu']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="6"><p style="text-indent:30px;">Orang tersebut pernah / tidak pernah / terlibat G 30 S PKI Parpol, Ormasnya (Organisasi Terlarang) harap menjadi periksa dan diberikan untuk :<? echo $content['keperluan']; ?></p></td>
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
</table></body>
</html>
