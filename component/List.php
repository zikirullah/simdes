<?php

/**
 * Lists
 *
 * @package simdes
 * @author omealz
 * @copyright 2008
 * @version $Id$
 * @access public
 */
class Lists
{
	function Lists(&$ADODB)
	{
		$this->ADODB =& $ADODB;
	}
	
	function getMAgama()
	{
		$statement = "
		select 
			k_agama, content 
		from 
			m_agama";
		
		$result = new Collection();
		$result = $this->ADODB->selectAll($statement);

		$result = $result->getElements();
		foreach($result as $item){
			$res[$item[0]] = $item[1];
		}
		return $res; 	
	}
	
	function getMKawin()
	{
		$statement = "
		select 
			k_kawin, content 
		from 
			m_kawin";
		
		$result = new Collection();
		$result = $this->ADODB->selectAll($statement);
		
		$result = $result->getElements();
		foreach($result as $item){
			$res[$item[0]] = $item[1];
		}
		return $res; 			
	}
	
	function getMKerja()
	{
		$statement = "
		select 
			k_kerja, content 
		from 
			m_kerja";
		
		$result = new Collection();
		$result = $this->ADODB->selectAll($statement);
		
		$result = $result->getElements();
		foreach($result as $item){
			$res[$item[0]] = $item[1];
		}
		return $res;   			
	}
	
	function getMWarga()
	{
		$statement = "
		select 
			k_warga, content 
		from 
			m_warga";
		
		$result = new Collection();
		$result = $this->ADODB->selectAll($statement);
		
		$result = $result->getElements();
		foreach($result as $item){
			$res[$item[0]] = $item[1];
		}
		return $res;   			
	}
	
	function getMPendidikan()
	{
		$statement = "
		select 
			k_pendidikan, content 
		from 
			m_pendidikan";
		
		$result = new Collection();
		$result = $this->ADODB->selectAll($statement);
		
		$result = $result->getElements();
		foreach($result as $item){
			$res[$item[0]] = $item[1];
		}
		return $res;   			
	}
	
	function getMDusun()
	{
		$statement = "
		select 
			k_dusun, content 
		from 
			m_dusun";
		
		$result = new Collection();
		$result = $this->ADODB->selectAll($statement);
		
		$result = $result->getElements();
		foreach($result as $item){
			$res[$item[0]] = $item[1];
		}
		return $res;   			
	}
}



?>