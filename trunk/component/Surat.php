<?php

/**
 * Surat
 *
 * @package simdes
 * @author Yaumil Akhir
 * @copyright 2008
 * @version $Id$
 * @access public
 */
class Surat
{
	var $id;
	var $kSurat;
	var $noSurat;
	var $userid;
	var $tglBuat;
	var $content;
	var $ADODB;
	
	function Surat(&$ADODB)
	{
		$this->ADODB =& $ADODB;
	}
	
	function add()
	{
		$statement = "
		INSERT INTO surat (
			k_surat ,
			no_surat,
			userid ,
			tgl_buat,
			content)
		VALUES (
			".(int)$this->kSurat.", 
			".$this->ADODB->text($this->noSurat).", 
			".$this->ADODB->text($this->userid).", 
			NOW(),
			".$this->ADODB->text($this->content).");";
		$result = $this->ADODB->execute($statement);
		if($this->ADODB->getNumAffected() > 0){
			$this->id = $this->ADODB->getLastID();
			return true;
		}
		return false;
	}
	
	function detail()
	{
		$statement = "
		SELECT k_surat, no_surat, userid, tgl_buat, content 
		FROM surat 
		WHERE id = ".$this->ADODB->text($this->id);
		$result = new Collection;
		$result = $this->ADODB->selectRecord($statement);
		if(!$result->isEmpty()){
			list($this->kSurat,$this->noSurat,
				$this->userid, $this->tglBuat,$this->content) 
				= $result->elementAt(0);
			return true;
		}
		return false;		
	}
	
	function fetchAll()
	{
		$statement = "
		SELECT id, k_surat, no_surat, tgl_buat, userid
		FROM surat
		ORDER BY tgl_buat DESC LIMIT 20";
		$result = new Collection;
		$result = $this->ADODB->selectAll($statement,false);
		if(!$result->isEmpty())
			return $result->getElements();
		return false;
		
	}
	
    function fetchPages($limit = 20, $page = 0, $kSurat = 'x')
    {
    	
		$statement = "SELECT count(*) FROM surat ".
        ($kSurat != 'x' ? 'WHERE k_surat = '.(int)$kSurat : "");
		
		$result  = $this->ADODB->selectRecord($statement);
		$result  = $result->elementAt(0);
		$numRows = $result[0];
		
		if($numRows > 0){
			$numPage = ceil($numRows/$limit);
		}else
			$numPage = 1;
			
		$offset = ($page > $numPage ? 0 : ($page * $limit));
		
		$statement = "
		SELECT id, k_surat, no_surat, tgl_buat, userid
		FROM surat ".
        ($kSurat != 'x' ? 'WHERE k_surat = '.(int)$kSurat : "")."
		ORDER BY tgl_buat DESC ".
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
	
}
?>