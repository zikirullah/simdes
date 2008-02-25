<?php
require_once("main.php");

// get parameters
$currentForm = strtoupper($getVars_form);

if($getVars_form){
	if(!$user->getUser())
		header("Location:index.php?out=true");	
}
////////////////////////////////////////////////////////////

// goto controller
switch ($currentForm) {
	case 'A.01': 
		$pageTitle="Home"; 
		require_once "controller/home.php"; 
		break;
		
		
	case 'B.01': 
		$pageTitle="Cari Penduduk"; 
		require_once "controller/penduduk.index.php"; 
		break;
	case 'B.02': 
		$pageTitle="Tambah Penduduk"; 
		require_once "controller/penduduk.add.php"; 
		break;
	case 'B.03': 
		$pageTitle="Detail Penduduk"; 
		require_once "controller/penduduk.detail.php"; 
		break;
	case 'B.04': 
		$pageTitle="Edit Penduduk"; 
		require_once "controller/penduduk.edit.php"; 
		break;
	case 'B.05': 
		require_once "controller/penduduk.lookup.php"; 
		break;
	case 'B.06': 
		$pageTitle="Penduduk"; 
		require_once "controller/penduduk.home.php"; 
		break;		
	case 'B.07': 
		$pageTitle="Statistik Penduduk"; 
		require_once "controller/penduduk.stat.php"; 
		break;	
				
	case 'C.01': 
		$pageTitle="Surat-surat"; 
		require_once "controller/surat.home.php"; 
		break;
	case 'C.02': 
		$pageTitle="Buat Surat"; 
		require_once "controller/surat.add.php"; 
		break;		
	case 'C.03': 
		$pageTitle="Detail Surat"; 
		require_once "controller/surat.detail.php"; 
		break;		
	case 'C.04': 
		$pageTitle="Daftar Surat"; 
		require_once "controller/surat.index.php"; 
		break;	
			
	case 'Z.01':
		$pageTitle="Pengguna"; 
		require_once "controller/user.home.php"; 
		break;
	case 'Z.02':
		$pageTitle="Tambah user"; 
		require_once "controller/user.add.php"; 
		break;
	case 'Z.03':
		$pageTitle="Ganti password"; 
		require_once "controller/user.change.php"; 
		break;
	case 'Z.04':
		$pageTitle="Daftar User"; 
		require_once "controller/user.index.php"; 
		break;
	default    : 
		$pageTitle="Login"; 
		require_once "controller/login.php"; 
}

?>