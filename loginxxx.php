<?php
include ("database.php");

$obj = new database;;
$obj->login_in($_POST,$obj->db_connect());

