<?php
require_once ("component/Penduduk.php");
require_once ("component/List.php");

// get parameter
$kAgama = $postVars_kAgama;
$kKerja = $postVars_kKerja;
$kDusun = $postVars_kDusun;
$kKawin = $postVars_kKawin;
$kPendidikan = $postVars_kPendidikan;
$kField = $postVars_kField;
$keyword = $postVars_keyword;
$next = $postVars_next;
$download = $postVars_download;
$page = $postVars_page;
$limit = $LIMIT_PENDUDUK_INDEX;

$list = new Lists($ADODB);

$M_KAWIN = $list->getMKawin();
$M_DUSUN = $list->getMDusun();
$M_AGAMA = $list->getMAgama();
$M_WARGA = $list->getMWarga();
$M_KERJA = $list->getMKerja();
$M_PENDIDIDKAN = $list->getMPendidikan();

$M_KAWIN = array('x' => 'Seluruh Status') + $M_KAWIN;
$M_DUSUN = array('x' => 'Seluruh Dusun') + $M_DUSUN;
$M_AGAMA = array('x' => 'Seluruh Agama') + $M_AGAMA;
$M_KERJA = array('x' => 'Seluruh Pekerjaan') + $M_KERJA;
$M_PENDIDIDKAN = array('x' => 'Seluruh Pendidikan') + $M_PENDIDIDKAN;

foreach ($M_FIELD as $key => $field) {
    $fieldOptions[$key] = $field[1];
}

if ($next || $download) {
    
    if (!$errorCode) {
        $penduduk = new Penduduk($ADODB);
        $result = $penduduk->searchAdvance($kField, $keyword, $limit, $page, $kAgama, $kKerja, $kDusun, $kKawin, $kPendidikan, $download);

        if ($download) {
            require_once ('component/psxlsgen.php');
            $myxls = new PhpSimpleXlsGen;
            $myxls->filename = "download";
            $myxls->WriteText_pos(0, 0, 'No');
            $myxls->WriteText_pos(0, 1, 'NIK');
            $myxls->WriteText_pos(0, 2, 'No. KTP');
            $myxls->WriteText_pos(0, 3, 'Nama');
            $myxls->WriteText_pos(0, 4, 'Agama');
            $myxls->WriteText_pos(0, 5, 'Pekerjaan');
            $myxls->WriteText_pos(0, 6, 'Alamat');
            $myxls->WriteText_pos(0, 7, 'Dusun');
            $myxls->WriteText_pos(0, 8, 'No. RT');
            $myxls->WriteText_pos(0, 9, 'No. RW');
            $myxls->WriteText_pos(0, 10, 'Tempat Lahir');
            $myxls->WriteText_pos(0, 11, 'Tanggal Lahir');
            $myxls->WriteText_pos(0, 12, 'Umur');
            $myxls->WriteText_pos(0, 13, 'Jenis Kelamin');
            $myxls->WriteText_pos(0, 14, 'Kewarganegaraan');
            $myxls->WriteText_pos(0, 15, 'Status Perkawinan');
            $myxls->WriteText_pos(0, 16, 'Pendidikan');
            $myxls->WriteText_pos(0, 17, 'Suku');

            for ($i = 0; $i < count($result['content']); $i++) {
                $row = $i + 1;
                $myxls->WriteText_pos($row, 0, ($i + 1));
                $myxls->WriteText_pos($row, 1, $result['content'][$i]['nik']);
                $myxls->WriteText_pos($row, 2, $result['content'][$i]['no_ktp']);
                $myxls->WriteText_pos($row, 3, $result['content'][$i]['nama']);
                $myxls->WriteText_pos($row, 4, $M_AGAMA[$result['content'][$i]['k_agama']]);
                $myxls->WriteText_pos($row, 5, ($result['content'][$i]['k_kerja'] == 0 ? 
                    $result['content'][$i]['pekerjaan'] : 
                    $M_PENDIDIDKAN[$result['content'][$i]['k_kerja']]));
                $myxls->WriteText_pos($row, 6, $result['content'][$i]['alamat']);
                $myxls->WriteText_pos($row, 7, $M_DUSUN[$result['content'][$i]['k_dusun']]);
                $myxls->WriteText_pos($row, 8, $result['content'][$i]['rt']);
                $myxls->WriteText_pos($row, 9, $result['content'][$i]['rw']);
                $myxls->WriteText_pos($row, 10, $result['content'][$i]['tempat_lahir']);
                $myxls->WriteText_pos($row, 11, $result['content'][$i]['tgl_lahir']);
                $myxls->WriteText_pos($row, 12, $result['content'][$i]['umur']);
                $myxls->WriteText_pos($row, 13, $result['content'][$i]['kelamin']);
                $myxls->WriteText_pos($row, 14, $M_WARGA[$result['content'][$i]['k_warga']]);
                $myxls->WriteText_pos($row, 15, $M_KAWIN[$result['content'][$i]['k_kawin']]);
                $myxls->WriteText_pos($row, 16, ($result['content'][$i]['k_pendidikan'] == 0 ? 
                    $result['content'][$i]['pendidikan'] : 
                    $M_PENDIDIDKAN[$result['content'][$i]['k_pendidikan']]));
                $myxls->WriteText_pos($row, 17, $result['content'][$i]['suku']);
            

            }
            $myxls->SendFile();
            exit();
        }

        for ($i = 0; $i < $result["numPage"]; $i++) {
            $pageOptions[$i] = ($i + 1);
        }
        $no = ($page * $limit) + 1;

        if (!$result)
            $errorCode = "Tidak ada penduduk yang memenuhi kriteria pencarian.";
    }
}

include_once ("template/penduduk.index.php");

?>