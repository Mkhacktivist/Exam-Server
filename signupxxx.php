<?php
include ("database.php");

$obj = new database;;
$obj->sign_up($_POST,$obj->db_connect());

var_dump($obj);