<?php
//Harus meninclude file ini untuk mendapatkan file yang digunakan proses berikutya
define('LIB', '1');
$PATH_LIB = "../lib/";
require_once($PATH_LIB."config.php");
require_once($PATH_LIB."api.php");
define("JSON","1");
header('Content-Type: application/json');
