<?php
defined("LIB") or die("Access Denied");
if(!DATABASE){
  die("Gagal mendapatkan info database");
}
function koneksi(){
  global $db;
  return $db['connect'];
}
function Query($data){
  $query = mysqli_query(koneksi(),$data)or die(mysqli_error(koneksi()));
  return $query;
}
function QueryArr($dat){
  $query = Query($dat);
  $query = $query->fetch_array();
  return $query;
}
