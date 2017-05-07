<?php
include ("database.php");

$obj = new database;;
$obj->adminlogin_in($_POST,$obj->db_connect());
?>
