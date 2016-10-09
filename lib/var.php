<?php
defined("LIB") or die("Access Denied");
define("VAR",1);
function base_url(){
  global $HOST;
  return $HOST;
}

function base_asset(){
  return base_url()."asset/";
}
function base_css(){
  return base_asset()."css/";
}
function base_js(){
  return base_asset()."js/";
}
function base_json(){
  return base_url()."json/";
}
if(isset($_SESSION['log_in'])){
  $sess_user = $_SESSION['username'];
  $sess_status = $_SESSION['stat'];
  $sess_login = $_SESSION['log_in'];
}
else {
  $sess_user = "";
  $sess_login = "";
  $sess_status = "";
}
function redirect($data){
  header('Location:'.$data);
}
function p_sidebar($dat=""){
  if($dat){
    $dat = "admin/";
  }
  include("page/".$dat."structure/sidebar.php");
}
function p_header($dat=""){
  if($dat){
    $dat = "admin/";
  }
  include("page/".$dat."structure/header.php");
}
function _inc($dat){
  $var = "page/";
  include($var.$dat.".php");
}
function _adm_inc($dat){
  $var = "page/admin/";
  include($var.$dat.".php");
}
function checker($dat){
  $hasil = mysqli_real_escape_string(koneksi(),trim(htmlentities($dat)));
  return $hasil;
}
function randomstring()
{
    $chrc = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $radstrng = array();
    for ($i = 0; $i < 32; $i++) {
        $radstrng .= $chrc[rand(0, strlen($chrc))];
    }
    return $radstrng;
}
