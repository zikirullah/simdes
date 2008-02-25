<?php
require_once ("component/Penduduk.php");
require_once ("component/List.php");


// get parameter
$id = (int)$getVars_id;
$delete = $getVars_delete;

if(!$id)
		header("Location:index.php?form=B.06");

$penduduk = new Penduduk($ADODB);
    
if($delete){
	$penduduk->id = $id;
	$penduduk->delete();
	header("Location:index.php?form=B.06");
}

if ($id){
    $list = new Lists($ADODB);

    $M_KAWIN = $list->getMKawin();
    $M_AGAMA = $list->getMAgama();
    $M_WARGA = $list->getMWarga();
    $M_KERJA = $list->getMKerja();
    $M_DUSUN = $list->getMDusun();
    $M_PENDIDIDKAN = $list->getMPendidikan();

    $penduduk->id = $id;
	if(!$penduduk->detail())
		$errorCode = "notFound";    
}
include_once ("template/penduduk.detail.php");

?>