<?php
// get param
require_once ("component/Surat.php");

$page = $postVars_page;
$kSurat = $postVars_kSurat;
$limit = $LIMIT_SURAT_INDEX;

if(!$kSurat)
    $kSurat = '1';

$surat = new Surat($ADODB);
$result = $surat->fetchPages($limit,$page,$kSurat);

for ($i = 0; $i < $result["numPage"]; $i++) {
    $pageOptions[$i] = ($i + 1);
}
foreach($M_SURAT as $kodeSurat => $surat){
    $kTipeSuratOption[$kodeSurat] = $surat['name'];
}

$kTipeSuratOption['x'] = 'Seluruh Jenis Surat';

$no = ($page*$limit)+1;
include_once ("template/surat.index.php");

?>