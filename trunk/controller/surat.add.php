<?php
// surat add
require_once("component/Surat.php");
require_once ("component/List.php");

// get parameter
	$kSurat = $getVars_kSurat ? $getVars_kSurat : $postVars_kSurat;
	$noSurat = $postVars_noSurat;
	$next = $postVars_next;
	$content = $_REQUEST;


// validasi surat
if(!$kSurat || !$M_SURAT[$kSurat]){
	header("Location:index.php?form=C.01");
}

$list = new Lists($ADODB);

$M_KAWIN = $list->getMKawin();
$M_AGAMA = $list->getMAgama();
$M_WARGA = $list->getMWarga();
$M_KERJA = $list->getMKerja();
$M_DUSUN = $list->getMDusun();
$M_PENDIDIDKAN = $list->getMPendidikan();

$confSurat = $M_SURAT[$kSurat];
// if next

if($next){
	// validasi data
	if(!$noSurat)
		$errorCode = "Silahkan mengisi no surat!";
	
	if(!$errorCode){
		$surat = new Surat(&$ADODB);
	// input
		$surat->kSurat = $kSurat;
		$surat->noSurat = $noSurat;
		$surat->content = json_encode($content);
		$surat->userid = $user->username;
		
	// if success
		if($surat->add())
			header("Location:index.php?form=C.03&id=".$surat->id);
		else
			$errorCode = "addFail";
	}
}else{	
	$content["kades"] = $KADES_NAMA;
	$content["camat"] = $CAMAT_NAMA;
	$content["camat_nip"] = $CAMAT_NIP;
	$content["danramil"] = $DANRAMIL_NAMA;
	$content["danramil_nrp"] = $DANRAMIL_NRP;
	$content["kapolsek"] = $KAPOLSEK_NAMA;
	$content["kapolsek_nrp"] = $KAPOLSEK_NRP;
	$content["tglSurat"] = date("d M Y");
}
include_once("template/surat.add.php");

?>