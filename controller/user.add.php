<?php
// get param
$username = $postVars_username;
$nama = $postVars_nama;
$password = $postVars_password;
$isAdmin = $postVars_isAdmin;
$next = $postVars_next;

if ($user->detail() && $user->isAdmin != 1)
    header("Location:index.php?out=true");

if ($next)
{
    if (!$username || !$nama || !$password)
        $errorCode = "Silahkan mengisi username, nama dan password.";
    if (!$errorCode)
    {
        if ($user->add($username, $password, $nama, $isAdmin))
        {
            $_SESSION["message"] = "Anda telah berhasil menambah user ".$nama;
            header("Location:index.php?form=Z.01");
        }
    }
}
include_once ("template/user.add.php");
?>