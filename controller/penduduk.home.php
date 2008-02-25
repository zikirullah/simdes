<?php
// get param
$message = $_SESSION["message"];
session_unregister("message");

include_once("template/penduduk.home.php");
?>