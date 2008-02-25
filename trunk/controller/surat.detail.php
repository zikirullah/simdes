<?php
// surat detail
require_once ("component/Surat.php");
require_once ("component/List.php");

// get parameter
$suratId = $getVars_id;
$print = $getVars_print;

if ($suratId) {
    // get detail surat
    $surat = new Surat($ADODB);
    $surat->id = $suratId;
    if (!$surat->detail())
        $errorCode = "invalidSurat";
    if (!$errorCode){
        $list = new Lists($ADODB);

        $M_KAWIN = $list->getMKawin();
        $M_AGAMA = $list->getMAgama();
        $M_WARGA = $list->getMWarga();
        $M_KERJA = $list->getMKerja();
        $M_DUSUN = $list->getMDusun();
        $M_PENDIDIDKAN = $list->getMPendidikan();
        
		$confSurat = $M_SURAT[$surat->kSurat];
        $content = json_decode($surat->content, true);
        
        foreach($content as $key => $value){
            if(!$value)
                $content[$key] = "&nbsp;";
        }
        
		$id = $surat->id;
        $noSurat = $surat->noSurat;
        $kSurat = $surat->kSurat;
        
        if ($print)
            include_once ("template/" . $confSurat["template"]["print"]);
        else
            include_once ("template/surat.detail.php");
    }
}
else
    header("Location:index.php?form=C.01");

?>