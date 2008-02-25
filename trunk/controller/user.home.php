<?php
// get param
$message = $_SESSION["message"];
session_unregister("message");

$user->detail();

include_once("template/user.home.php");
?>