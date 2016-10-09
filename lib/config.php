<?php
defined("LIB") or die("Access Denied");
$db['connect'] = mysqli_connect("127.0.0.1","root","","aa")or die(mysqli_error());
define('DATABASE', '1');
require_once($PATH_LIB."api.php");
