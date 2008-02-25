<?php
require_once ("component/Penduduk.php");
require_once ("component/List.php");

$penduduk = new Penduduk($ADODB);
$list = new Lists($ADODB);

// get parameter
$id = $postVars_id ? $postVars_id:$getVars_id;
$nik = $postVars_nik;
$noKTP = $postVars_noKTP;
$nama = $postVars_nama;
$kAgama = $postVars_kAgama;
$kKerja = $postVars_kKerja;
$pekerjaan = $postVars_pekerjaan;
$alamat = $postVars_alamat;
$kDusun = $postVars_kDusun;
$rt = $postVars_rt;
$rw = $postVars_rw;
$tempatLahir = $postVars_tempatLahir;
$kelamin = $postVars_kelamin;
$kWarga = $postVars_kWarga;
$kKawin = $postVars_kKawin;
$kPendidikan = $postVars_kPendidikan;
$pendidikan = $postVars_pendidikan;
$suku = $postVars_suku;
$next = $postVars_next;

$M_KAWIN = $list->getMKawin();
$M_AGAMA = $list->getMAgama();
$M_WARGA = $list->getMWarga();
$M_KERJA = $list->getMKerja();
$M_DUSUN = $list->getMDusun();
$M_PENDIDIDKAN = $list->getMPendidikan();

if(!$id)
		header("Location:index.php?form=B.06");

if ($next)
{
    // validate parameter
    if (!$nama)
        $errorCode = "emptyNama";
    if ($kKawin && !$M_KAWIN[$kKawin])
        $errorCode = "invalidkKawin";
    if ($kAgama && !$M_AGAMA[$kAgama])
        $errorCode = "invalidkAgama";
    if ($kKerja !== "0" && !$M_KERJA[$kKerja])
        $errorCode = "invalidkKerja";
    if ($kWarga && !$M_WARGA[$kWarga])
        $errorCode = "invalidkWarga";
    if ($kDusun && !$M_DUSUN[$kDusun])
        $errorCode = "invalidkDusun";    
    if ($kPendidikan !== "0" && !$M_PENDIDIDKAN[$kPendidikan])
        $errorCode = "invalidkPendidikan";

    $pekerjaan = ($kKerja === "0" ? $pekerjaan : "");
    $kKerja = ($pekerjaan ? "0" : $kKerja);
    $pendidikan = ($kPendidikan === "0" ? $pendidikan : "");
    $kPendidikan = ($pendidikan ? "0" : $kPendidikan);
    
    if($kKerja == "0" && !$pekerjaan)
    	$errorCode = "emptyPekerjaan";
    if($kPendidikan == "0" && !$pendidikan)
    	$errorCode = "emptyPendidikan";

    if (!$errorCode)
    {
        //fill param
        $penduduk->id = $id;
        $penduduk->nik = $nik;
        $penduduk->noKTP = $noKTP;
        $penduduk->nama = $nama;
        $penduduk->kAgama = $kAgama;
        $penduduk->kKerja = $kKerja;
        $penduduk->pekerjaan = $pekerjaan;
        $penduduk->alamat = $alamat;
        $penduduk->kDusun = $kDusun;
        $penduduk->rt = $rt;
        $penduduk->rw = $rw;
        $penduduk->tempatLahir = $tempatLahir;
        $penduduk->kelamin = $kelamin;
        $penduduk->kWarga = $kWarga;
        $penduduk->kKawin = $kKawin;
        $penduduk->kPendidikan = $kPendidikan;
        $penduduk->pendidikan = $pendidikan;
        $penduduk->suku = $suku;

        // save
        if ($penduduk->edit())
        {
            // go to where
            header("Location:index.php?form=B.03&id=" . $penduduk->id);
        }
        else // error
            $errorCode = "editFail";
    }
}
else
{
    //init
    if ($id)
    {
        $penduduk->id = $id;
        if ($penduduk->detail())
        {
            $nik = $penduduk->nik;
            $noKTP = $penduduk->noKTP;
            $nama = $penduduk->nama;
            $kAgama = $penduduk->kAgama;
            $kKerja = $penduduk->kKerja;
            $pekerjaan = $penduduk->pekerjaan;
            $alamat = $penduduk->alamat;
            $kDusun = $penduduk->kDusun;
            $rt = $penduduk->rt;
            $rw = $penduduk->rw;
            $tempatLahir = $penduduk->tempatLahir;
            $kelamin = $penduduk->kelamin;
            $kWarga = $penduduk->kWarga;
            $kKawin = $penduduk->kKawin;
            $kPendidikan = $penduduk->kPendidikan;
            $pendidikan = $penduduk->pendidikan;
            $suku = $penduduk->suku;
        }
        else
            $errorCode = "invalidID";
    }

}

//load template
include_once ("template/penduduk.edit.php");

?>