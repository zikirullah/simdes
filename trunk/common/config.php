<?php

$microtime  = explode(' ', microtime());
$startTimer = $microtime[1].substr($microtime[0], 1);

// error reporting
error_reporting(0);
error_reporting(E_ALL ^ E_NOTICE);

// database properties
$DB_Driver     = "mysql";
$DB_Hostname   = "localhost";
$DB_Username   = "root";
$DB_Password   = "";
$DB_Database   = "simdes_demo";
$DB_PrintQuery = false;



// DO NOT change this!
set_magic_quotes_runtime(0);

///////////////////////////////////////////////

$M_GENDER["L"]="Laki-laki";
$M_GENDER["P"]="Perempuan";

////////////////////////////////////////////////
$M_SURAT["1"]["name"] = "Surat Keterangan";
$M_SURAT["1"]["singkat"] = "Keterangan";
$M_SURAT["1"]["template"]["input"] = "surat_keterangan.add.php";
$M_SURAT["1"]["template"]["detail"] = "surat_keterangan.detail.php";
$M_SURAT["1"]["template"]["print"] = "surat_keterangan.print.php";

$M_SURAT["2"]["name"] = "Surat Keterangan Boro Nikah";
$M_SURAT["2"]["singkat"] = "Boro Nikah";
$M_SURAT["2"]["template"]["input"] = "surat_boro_nikah.add.php";
$M_SURAT["2"]["template"]["detail"] = "surat_boro_nikah.detail.php";
$M_SURAT["2"]["template"]["print"] = "surat_boro_nikah.print.php";

$M_SURAT["3"]["name"] = "Surat Keterangan Boro Kerja";
$M_SURAT["3"]["singkat"] = "Boro Kerja";
$M_SURAT["3"]["template"]["input"] = "surat_boro_kerja.add.php";
$M_SURAT["3"]["template"]["detail"] = "surat_boro_kerja.detail.php";
$M_SURAT["3"]["template"]["print"] = "surat_boro_kerja.print.php";

$M_SURAT["4"]["name"] = "Surat Keterangan Pindah";
$M_SURAT["4"]["singkat"] = "Pindah";
$M_SURAT["4"]["template"]["input"] = "surat_pindah.add.php";
$M_SURAT["4"]["template"]["detail"] = "surat_pindah.detail.php";
$M_SURAT["4"]["template"]["print"] = "surat_pindah.print.php";

$M_SURAT["5"]["name"] = "Surat Keterangan Kelakuan Baik";
$M_SURAT["5"]["singkat"] = "SKKB";
$M_SURAT["5"]["template"]["input"] = "surat_kelakuan_baik.add.php";
$M_SURAT["5"]["template"]["detail"] = "surat_kelakuan_baik.detail.php";
$M_SURAT["5"]["template"]["print"] = "surat_kelakuan_baik.print.php";

$M_SURAT["6"]["name"] = "Surat Keterangan Ijin Istri/Suami/Orang tua";
$M_SURAT["6"]["singkat"] = "Ijin";
$M_SURAT["6"]["template"]["input"] = "surat_ijin.add.php";
$M_SURAT["6"]["template"]["detail"] = "surat_ijin.detail.php";
$M_SURAT["6"]["template"]["print"] = "surat_ijin.print.php";

$M_SURAT["7"]["name"] = "Surat Keterangan KTP Sementara";
$M_SURAT["7"]["singkat"] = "KTP";
$M_SURAT["7"]["template"]["input"] = "surat_ktp.add.php";
$M_SURAT["7"]["template"]["detail"] = "surat_ktp.detail.php";
$M_SURAT["7"]["template"]["print"] = "surat_ktp.print.php";

$M_SURAT["8"]["name"] = "Surat Keterangan Ijin Keramaian";
$M_SURAT["8"]["singkat"] = "Ijin Keramaian";
$M_SURAT["8"]["template"]["input"] = "surat_keramaian.add.php";
$M_SURAT["8"]["template"]["detail"] = "surat_keramaian.detail.php";
$M_SURAT["8"]["template"]["print"] = "surat_keramaian.print.php";

$M_SURAT["9"]["name"] = "Surat Keterangan Bersih Diri";
$M_SURAT["9"]["singkat"] = "Bersih Diri";
$M_SURAT["9"]["template"]["input"] = "surat_bersih.add.php";
$M_SURAT["9"]["template"]["detail"] = "surat_bersih.detail.php";
$M_SURAT["9"]["template"]["print"] = "surat_bersih.print.php";

////////////////////////////////////////////
$M_FIELD["1"] = array('nama','Nama');
$M_FIELD["2"] = array('nik','NIK');
$M_FIELD["3"] = array('no_ktp','No. KTP');
$M_FIELD["4"] = array('alamat','Alamat');

//////////////////////////////////////////////
$LIMIT_PENDUDUK_INDEX = 20;
$LIMIT_SURAT_INDEX = 15;


/////////////////////////////////////////////////////
$M_STAT["1"] = "Penduduk Berdasarkan Usia";
$M_STAT["2"] = "Penduduk Berdasarkan Jenis Kelamin";
$M_STAT["3"] = "Penduduk Berdasarkan Dusun";
$M_STAT["4"] = "Penduduk Berdasarkan Pekerjaan";
$M_STAT["5"] = "Penduduk Berdasarkan Pendidikan";

$GROUP_USIA[] = array(0,10);
$GROUP_USIA[] = array(11,20);
$GROUP_USIA[] = array(21,30);
$GROUP_USIA[] = array(31,40);
$GROUP_USIA[] = array(41,50);
$GROUP_USIA[] = array(51,60);
$GROUP_USIA[] = array(61,70);
$GROUP_USIA[] = array(71,80);
$GROUP_USIA[] = array(81,1000);

///////////////////////////////
$KADES_NAMA = "Sarjuni, BE";
$CAMAT_NAMA = "";
$CAMAT_NIP = "";
$DANRAMIL_NAMA = "";
$DANRAMIL_NRP = "";
$KAPOLSEK_NAMA = "";
$KAPOLSEK_NRP = "";

?>