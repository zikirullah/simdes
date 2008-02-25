<?php

/**
 * USER
 *
 * @package simdes
 * @author Yaumil Akhir
 * @copyright 2008
 * @version $Id$
 * @access public
 */
class USER
{
	var $userid;
	var $username;
	var $nama;
	var $password;
	var $isAdmin;
	var $ADODB;
	
	function USER(&$ADODB)
	{
		$this->ADODB =& $ADODB;
	}
	
	function login($username, $password)
	{
		$statement = "
		SELECT 
			userid, nama, password, is_admin 
		FROM 
			user 
		WHERE username='".$username."'";
		
		$result = new Collection();
		$result = $this->ADODB->selectRecord($statement);
		if($result->isEmpty())
			return "Silahkan mengisi username dan password dengan benar!";
				
		list($this->userid, $this->nama, $pass) = $result->elementAt(0);
		
		if($pass === md5($password)){
			$_SESSION["user"]["userid"] = $this->userid;
			$_SESSION["user"]["username"] = $username;
			$_SESSION["user"]["nama"] = $this->nama;
			$_SESSION["user"]["is_admin"] = $this->isAdmin;
			
			header("Location:index.php?form=A.01");
		}else
			return "Silahkan mengisi username dan password dengan benar!";	
				
	}
	
	function logout()
	{
		session_unregister('user');
	}
	
	function detail()
	{
		$statement = "
		SELECT 
			userid, nama, password ,is_admin 
		FROM 
			user 
		WHERE username=".$this->ADODB->text($this->username);
		
		$result = new Collection();
		$result = $this->ADODB->selectRecord($statement);
		if($result->isEmpty())
			return false;
		list($this->userid, $this->nama, $this->password ,$this->isAdmin) = $result->elementAt(0);
		return true;
		
	}

	function fetchAll()
	{
		$statement = "
		SELECT 
			userid, username, nama, is_admin 
		FROM 
			user";
		
		$result = new Collection();
		$result = $this->ADODB->selectAll($statement,false);
		if($result->isEmpty())
			return false;
		
		return $result->getElements();
		
	}
	
	function getUser()
	{
		if($_SESSION["user"]){
			$this->userid = $_SESSION["user"]["userid"];
			$this->username = $_SESSION["user"]["username"];
			$this->nama = $_SESSION["user"]["nama"];
			$this->isAdmin = $_SESSION["user"]["is_admin"];
			return true;
		}else
			return false;
	}
	
	function add($username, $password, $nama, $isAdmin)
	{
		$statement = "
		INSERT INTO user(username, password, nama, is_admin) VALUES (
		".$this->ADODB->text($username).", 
		".$this->ADODB->text(md5($password)).", 
		".$this->ADODB->text($nama).", 
		".(int)$isAdmin." 
		)";
		
        $result = $this->ADODB->execute($statement);
        if($this->ADODB->getNumAffected() > 0 ){
        	$this->userid = $this->ADODB->getLastID();
			return true;
		}
		return false;
	}
	
	function changePassword($newPassword)
	{
		$statement = "
		UPDATE user SET password = ".$this->ADODB->text(md5($newPassword))." 
		WHERE userid = ".(int)$this->userid;
		$result = $this->ADODB->execute($statement);
		return true;
	}
	
	function delete($userid)
	{
		$statement = "
		DELETE FROM user 
		WHERE userid = ".(int)$userid;
		if($this->isAdmin == 1){
			$result = $this->ADODB->execute($statement);
			return true;	
		}
		return false;
	}
	
}

?>