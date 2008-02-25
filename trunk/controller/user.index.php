<?php
// get param
$delete = $getVars_delete;

if ($user->detail() && $user->isAdmin != 1)
    header("Location:index.php?out=true");

if($delete){
	$user->delete($delete);
}
$listUser = $user->fetchAll();

include_once ("template/user.index.php");

?>