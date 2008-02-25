<?php

class Penduduk
{
    var $id;
    var $nik;
    var $noKTP;
    var $nama;
    var $kAgama;
    var $kKerja;
    var $pekerjaan;
    var $alamat;
    var $kDusun;
    var $rt;
    var $rw;
    var $tempatLahir;
    var $tglLahir;
    var $kelamin;
    var $kWarga;
    var $kKawin;
    var $kPendidikan;
    var $pendidikan;
    var $suku;
    var $umur;

    var $ADODB;

    function Penduduk(&$ADODB)
    {
        $this->ADODB = &$ADODB;
    }

    function add()
    {
        $statement = "
		INSERT INTO penduduk (
			nik ,
			no_ktp,
			nama ,
			k_agama ,
			k_kerja ,
			pekerjaan ,
			alamat ,
			k_dusun ,
			rt ,
			rw ,
			tempat_lahir ,
			kelamin ,
			k_warga ,
			k_kawin ,
			k_pendidikan ,
			pendidikan, 
			suku,
			tgl_lahir )
		VALUES (
			" . ($this->nik ? $this->ADODB->text($this->nik) : "NULL"). ", 
			" . ($this->noKTP ? $this->ADODB->text($this->noKTP) : "NULL"). ", 
			" . $this->ADODB->text($this->nama) . ", 
			" . (int)$this->kAgama . ", 
			" . (int)$this->kKerja . ", 
			" . $this->ADODB->text($this->pekerjaan) . ", 
			" . $this->ADODB->text($this->alamat) . ",
			" . (int)$this->kDusun . ", 
			" . (int)$this->rt . ", 
			" . (int)$this->rw . ", 
			" . $this->ADODB->text($this->tempatLahir) . ",
			" . $this->ADODB->text($this->kelamin). ",
			" . (int)$this->kWarga . ", 
			" . (int)$this->kKawin . ", 
			" . (int)$this->kPendidikan . ",
			" . $this->ADODB->text($this->pendidikan). ",
			" . $this->ADODB->text($this->suku) . ",
			" . ($this->tglLahir ? $this->ADODB->text($this->tglLahir) : "NULL") . "
			); ";
			
        $result = $this->ADODB->execute($statement);
        if($this->ADODB->getNumAffected() > 0 ){
        	$this->id = $this->ADODB->getLastID();
			return true;
		}
		return false;
        	
    }

    function edit()
    {
    	$statement = "
		UPDATE penduduk SET 
			nik = " . $this->ADODB->text($this->nik). ",
			no_ktp = " . $this->ADODB->text($this->noKTP). ",
			nama = " . $this->ADODB->text($this->nama) . ",
			k_agama = " . (int)$this->kAgama . ", 
			k_kerja = " . (int)$this->kKerja . ", 
			pekerjaan = " . $this->ADODB->text($this->pekerjaan) . ", 
			alamat = " . $this->ADODB->text($this->alamat) . ",
			k_dusun = " . (int)$this->kDusun . ", 
			rt = " . (int)$this->rt . ", 
			rw = " . (int)$this->rw . ", 
			tempat_lahir = " . $this->ADODB->text($this->tempatLahir) . ",
			kelamin = " . $this->ADODB->text($this->kelamin). ",
			k_warga = " . (int)$this->kWarga . ", 
			k_kawin = " . (int)$this->kKawin . ", 
			k_pendidikan = " . (int)$this->kPendidikan . ",
			pendidikan = " . $this->ADODB->text($this->pendidikan). ",
			suku = " . $this->ADODB->text($this->suku) . ", 
			tgl_lahir = " .($this->tglLahir ? $this->ADODB->text($this->tglLahir) : "NULL") . " 
		WHERE id = " . (int)$this->id . "; ";
        $result = $this->ADODB->execute($statement);

		return true;

    }

    function delete()
    {
    	$statement = "
		DELETE FROM penduduk 
		WHERE id = " . (int)$this->id . "; ";
		
        $result = $this->ADODB->execute($statement);
		return true;
    }

    function detail()
    {
    	$statement = "
		SELECT 
			nik , no_ktp, nama , 
			k_agama , k_kerja , 
			pekerjaan , alamat , 
			k_dusun , 
			rt , rw , 
			tempat_lahir , kelamin , 
			k_warga , k_kawin ,
			k_pendidikan , pendidikan, 
			suku, tgl_lahir, 
			EXTRACT(YEAR FROM now()) - EXTRACT(YEAR FROM tgl_lahir) umur
		FROM penduduk
		WHERE id = " . (int)$this->id . "; ";
		
        $result = $this->ADODB->selectRecord($statement);
        list($this->nik, $this->noKTP, $this->nama, 
			$this->kAgama, $this->kKerja,
			$this->pekerjaan, $this->alamat, 
			$this->kDusun, 
			$this->rt, $this->rw, 
			$this->tempatLahir, $this->kelamin,
			$this->kWarga, $this->kKawin, 
			$this->kPendidikan,$this->pendidikan,
			$this->suku, $this->tglLahir, $this->umur) = $result->elementAt(0);
			
		return !$result->isEmpty();
    }

    function search($keyword, $limit = 20, $page = 0)
    {
    	
		$statement = "
		SELECT count(*)
		FROM penduduk
		WHERE 
			LCASE(nama) LIKE '%" . strtolower($keyword) . "%' OR
			LCASE(nik) LIKE '%" . strtolower($keyword) . "%' OR 
			LCASE(no_ktp) LIKE '%" . strtolower($keyword) . "%';";
		
		$result  = $this->ADODB->selectRecord($statement);
		$result  = $result->elementAt(0);
		$numRows = $result[0];
		
		if($numRows > 0){
			$numPage = ceil($numRows/$limit);
		}else
			$numPage = 1;
			
		$offset = ($page > $numPage ? 0 : ($page * $limit));
		
		$statement = "
		SELECT 
			id, nik , no_ktp, nama , k_agama , k_kerja , 
			pekerjaan , alamat , k_dusun , 
			rt , rw , tempat_lahir , 
			kelamin , k_warga , k_kawin ,
			k_pendidikan , pendidikan, suku, DATE_FORMAT(tgl_lahir, '%d-%m-%Y') tgl_lahir, 
			EXTRACT(YEAR FROM now()) - EXTRACT(YEAR FROM tgl_lahir) umur
		FROM penduduk
		WHERE 
			LCASE(nama) LIKE '%" . strtolower($keyword) . "%' OR
			LCASE(nik) LIKE '%" . strtolower($keyword) . "%' OR 
			LCASE(no_ktp) LIKE '%" . strtolower($keyword) . "%' ".
		$this->ADODB->limit($offset, $limit)." ;";
		
		
		$result = $this->ADODB->selectAll($statement, false);
		if(!$result->isEmpty()){
			$res["numRows"] = $numRows;
			$res["numPage"] = $numPage;
			$res["limit"]	= $limit;
			$res["content"] = $result->getElements();
			return $res;
		}
		return false;
    }
    
    
    function searchAdvance($kField, $keyword = '', $limit = 20, $page = 0, $kAgama = 'x', $kKerja = 'x', $kDusun = 'x', $kKawin = 'x', $kPendidikan = 'x', $isDownload = false)
    {
    	global $M_FIELD;
		$statement = "
		SELECT count(*)
		FROM penduduk
		WHERE 1 ".
        ($kAgama != 'x' ? " AND k_agama = ".(int)$kAgama : "").
        ($kDusun != 'x' ? " AND k_dusun = ".(int)$kDusun : "").
        ($kKawin != 'x' ? " AND k_kawin = ".(int)$kKawin : "").
        ($kPendidikan != 'x' ? " AND k_pendidikan = ".(int)$kPendidikan : "").
        ($kKerja != 'x' ? " AND k_kerja = ".(int)$kKerja : "").
        ($keyword != '' ? " AND LCASE(".$M_FIELD[$kField].") LIKE '%".$keyword."%'" : "");

		$result  = $this->ADODB->selectRecord($statement);
		$result  = $result->elementAt(0);
		$numRows = $result[0];
		
		if($numRows > 0){
			$numPage = ceil($numRows/$limit);
		}else
			$numPage = 1;
			
		$offset = ($page > $numPage ? 0 : ($page * $limit));
		
		$statement = "
		SELECT 
			id, nik , no_ktp, nama , k_agama , k_kerja , 
			pekerjaan , alamat , k_dusun , 
			rt , rw , tempat_lahir , DATE_FORMAT(tgl_lahir, '%d-%m-%Y') tgl_lahir,  
			EXTRACT(YEAR FROM now()) - EXTRACT(YEAR FROM tgl_lahir) umur, 
			kelamin , k_warga , k_kawin ,
			k_pendidikan , pendidikan, suku
		FROM penduduk 
		WHERE 1 ".
        ($kAgama != 'x' ? " AND k_agama = ".(int)$kAgama : "").
        ($kDusun != 'x' ? " AND k_dusun = ".(int)$kDusun : "").
        ($kKawin != 'x' ? " AND k_kawin = ".(int)$kKawin : "").
        ($kPendidikan != 'x' ? " AND k_pendidikan = ".(int)$kPendidikan : "").
        ($kKerja != 'x' ? " AND k_kerja = ".(int)$kKerja : "").
        ($keyword != '' ? " AND LCASE(".$M_FIELD[$kField][0].") LIKE '%".$keyword."%'" : "").
		($isDownload ? $this->ADODB->limit($offset, $limit) : "")." ;";
		
		$result = $this->ADODB->selectAll($statement, false);
		if(!$result->isEmpty()){
			$res["numRows"] = $numRows;
			$res["numPage"] = $numPage;
			$res["limit"]	= $limit;
			$res["content"] = $result->getElements();
			return $res;
		}
		return false;
    }

	function statUsia()
	{
		$statement = "
		SELECT EXTRACT( YEAR FROM now( ) ) - EXTRACT( YEAR FROM tgl_lahir ) UMUR, 
			count( EXTRACT( YEAR FROM now( ) ) - EXTRACT( YEAR FROM tgl_lahir ) ) JUMLAH
		FROM penduduk
		WHERE tgl_lahir is not NULL or tgl_lahir <> '0000-00-00' 
		GROUP BY umur
		ORDER BY umur ASC ";
		$result = $this->ADODB->selectAll($statement, false);
		if(!$result->isEmpty()){
			return $result->getElements();
		}
		return false;		
	}

	function statJenisKelamin()
	{
		$statement = "
		SELECT kelamin `JENIS KELAMIN` , count( kelamin ) JUMLAH
		FROM `penduduk`
		GROUP BY kelamin";
		$result = $this->ADODB->selectAll($statement, false);
		if(!$result->isEmpty()){
			return $result->getElements();
		}
		return false;		
	}

	function statDusun()
	{
		$statement = "
		SELECT b.content DUSUN, count( b.content ) JUMLAH
		FROM penduduk a, m_dusun b
		WHERE a.k_dusun = b.k_dusun
		GROUP BY b.content";
		$result = $this->ADODB->selectAll($statement, false);
		if(!$result->isEmpty()){
			return $result->getElements();
		}
		return false;		
	}

	function statPekerjaan()
	{
		$statement = "
		SELECT b.content PEKERJAAN, count( b.content ) JUMLAH
		FROM penduduk a, m_kerja b
		WHERE a.k_kerja = b.k_kerja
		GROUP BY b.content
		ORDER BY PEKERJAAN";
		$result = $this->ADODB->selectAll($statement, false);
		if(!$result->isEmpty()){
			return $result->getElements();
		}
		return false;		
	}
	
	function statPendidikan()
	{
		$statement = "
		SELECT b.content PENDIDIKAN, count( b.content ) JUMLAH
		FROM penduduk a, m_pendidikan b
		WHERE a.k_pendidikan = b.k_pendidikan
		GROUP BY b.content
		ORDER BY PENDIDIKAN";
		$result = $this->ADODB->selectAll($statement, false);
		if(!$result->isEmpty()){
			return $result->getElements();
		}
		return false;		
	}
	
}

?>