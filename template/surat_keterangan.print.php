<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Surat Keterangan</title>
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
    <td colspan="6"><div align="center"><strong>SURAT KETERANGAN</strong></div></td>
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
    <td colspan="6"><p style="text-indent:30px;">Yang bertanda tangan di bawah ini , Kepala 
        Desa Selokajang, Kecamatan Srengat , Kabupaten Blitar dengan ini menerangkan 
        dengan sebenarnya bahwa :</p></td>
  </tr>
  <tr> 
    <td>Nama</td>
    <td colspan="3">: <? echo $content['nama']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Umur</td>
    <td colspan="3">: <? echo $content['umur']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Agama</td>
    <td colspan="3">: <?php echo $M_AGAMA[$content['kAgama']]; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Pekerjaan </td>
    <td colspan="5"> : Pelajar : <? echo $content['sekolah']; ?>, 
        Kelas :<? echo $content['kelas']; ?>
      <div align="center"></div></td>
  </tr>
  <tr> 
    <td>Nomor KTP</td>
    <td colspan="3">: <? echo $content['noKTP']; ?></td>
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
    <td colspan="6"><p style="text-indent:30px;">Anak tersebut di atas adalah benar&#8211;benar penduduk Desa 
      Selokajang dan selanjutnya akan dipergunakan untuk : <? echo $content['keperluan']; ?></p></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="6">ORANG TUA / WALI :</td>
  </tr>
  <tr> 
    <td>Nama</td>
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
    <td colspan="6"><p style="text-indent:30px;">Demikian surat keterangan ini kami buat dengan sebenarnya 
      dan akan dipergunakan sebagaimana mestinya.</p></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td colspan="3"> <div align="right"></div></td>
    <td colspan="2" style="padding-left:30px;">Selokajang , <? echo $content['tglSurat'];?></td>
  </tr>
  <tr> 
    <td><div align="center">Pemegang Surat </div></td>
    <td colspan="3">&nbsp;</td>
    <td colspan="2"> <div align="center">Kepala Desa Selokajang</div></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>__________________</td>
    <td colspan="3">&nbsp;</td>
    <td colspan="2"> <div align="center" style="text-decoration:underline;"><? echo $content['kades']; ?></div></td>
  </tr>
</table>
</body>
</html>
