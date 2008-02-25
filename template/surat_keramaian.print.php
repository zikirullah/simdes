<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Surat Keterangan Ijin Keramaian</title>
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
    <td colspan="6"><div align="center"><strong>SURAT KETERANGAN IJI KERAMAIAN</strong></div></td>
  </tr>
  <tr> 
    <td colspan="2"></td>
    <td colspan="3"><strong>Nomor :<? echo $content['noSurat'] ; ?></strong></td>
  </tr>
  <tr> 
    <td width="24%">&nbsp;</td>
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
    <td colspan="3">: <? echo $content['nama']; ?>, <? echo $content['umur']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Pekerjaan</td>
    <td colspan="3">: <? echo $content['pekerjaan']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Agama</td>
    <td colspan="3">: <?php echo $M_AGAMA[$content['kAgama']]; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="6"><p style="text-indent:30px;">Orang tersebut di atas bermaksud mnenyelenggarakan perttunjukan kesenian , dalam rangka punya hajat : <? echo $content['hajat']; ?></p></td>
  </tr>
  <tr> 
    <td>Jenis Hiburan</td>
    <td colspan="3">: <? echo $content['jenisHiburan']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>No Induk</td>
    <td colspan="3">: <? echo $content['noInduk']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Diselenggarakan pada</td>
    <td colspan="3">: Hari <? echo $content['hari']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;&nbsp;Tgl <? echo $content['tglAcara']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td>Keterangan Lain-lain</td>
    <td colspan="3" rowspan="2" align="left" valign="top">: <? echo $content['ket']; ?></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" style="padding-left:30px;">&nbsp;</td>
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
    <td><div align="center" style="text-decoration:underline;"><? echo $content['nama']; ?> </div></td>
    <td colspan="3">&nbsp;</td>
    <td colspan="2"> <div align="center" style="text-decoration:underline;"><? echo $content['kades']; ?></div></td>
  </tr>
</table>
</body>
</html>
