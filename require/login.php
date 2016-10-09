<?php
defined("PAGE") or die("Access Denied");
if(isset($_POST['login'])){
  if(isset($_POST['name'])){
    if(isset($_POST['pass'])){
      $user = trim($_POST['name']);
      $pass = trim($_POST['pass']);
      if($user != "" AND $pass != ""){
        $sql = "SELECT * FROM login WHERE username='".$user."'";
        $dat = QueryArr($sql);
        $pass = hash("sha256",$pass);
        echo $pass;
        print_r($dat);
        if($pass == $dat['password']){
          $_SESSION['username'] = $_POST['name'];
          $_SESSION['log_in'] = 1;
          $_SESSION['stat'] = "Admin";
          print_r($_SESSION);
          redirect($HOST."?admin");
        }
        else {
          echo "gagal";
        }

      }
      else {
        echo "error2";
      }
    }
    else {
      echo "error3";
    }
  }
}
