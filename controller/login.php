<?php

// get parameter
$username	= $postVars_username;
$password	= $postVars_password;
$login 		= $postVars_login;
$out 		= $getVars_out;


if($out){
	$user->logout();
}
// if(next)
if($login){
//		validate parameter -- dipastikan semua data yg dimasukkan user benar+aman
	if($username && $password){
		// validate login
		$errorCode = $user->login($username, $password); 
	}else{
		$errorCode = "Username dan password harus diisi!";
	}

}

require_once("template/login.php");


?>