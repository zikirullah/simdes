<?php
// get parameter
$next = $postVars_next;
$oldPassword = $postVars_oldPassword;
$newPassword = $postVars_newPassword;
$newPasswordAgain = $postVars_newPasswordAgain;

if (!$user->detail())
    $errorCode = "invalidUser";

if ($next) {
    if (!$oldPassword || !$newPassword || !$newPasswordAgain)
        $errorCode = "Silahkan mengisi semua field!";

    
    if (!$errorCode) {
    	// validate old password
        if ($user->password === md5($oldPassword)) {
            // validate new password
            if ($newPassword === $newPasswordAgain) {
                //change password
                $user->changePassword($newPassword);
                $_SESSION["message"] = "Anda tel;ah mengganti password!";
                header("Location:index.php?form=Z.01");
            }
            else
                $errorCode = "Konfirmasi password baru salah";
        }
        else
            $errorCode = "Password lama salah";

    }
}
include_once ("template/user.change.php");
?>