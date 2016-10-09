<?php
defined("LIB")or die("Access Denied");
defined("VAR") or die("Access Denied");
define('PAGE', '1');


if(isset($_GET['admin'])){
  session_start();
  //Jika sudah login maka akan dicek sessionnya
  if(isset($_SESSION['log_in'])){
    //jika terdapat get page maka akan memanggil file yang ada di folder page
    if(isset($_GET['page'])){
      if(in_array($_GET['page'],$adm_arr)){
        $pag = $_GET['page'];
        include("page/admin/structure/template.php");
      }
      else {
        $pag = "";
        include("page/admin/structure/template.php");
      }
    }
    else { //jika tidak mengambil get maka akan dijalankan halaman dashboard
      $pag ="";
      include("page/admin/structure/template.php");
    }
    if(isset($_GET['logout'])){//jika melakukan logout
      session_destroy();
      redirect($HOST."?admin");
    }
  }
  else {//jika tidak memiliki session akan mengambil formulir login
    require_once("require/login.php");
    include "page/login.php";
  }
}
else {
  if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pg_arr)){
      $pag = $_GET['page'];
      include("page/structure/template.php");
    }
    else {
      include("page/structure/template.php");
    }
  }
  else {
    if(isset($_GET['s'])){
      $pag = "search";
      include("page/structure/template.php");
    }
    else {
      if(isset($_GET['url'])){
        $pag = "article";
        include("page/structure/template.php");
      }
      else {
        if(isset($_GET['p'])){
          $pag = "page";
          include("page/structure/template.php");
        }
        else {
            include("page/structure/template.php");
        }
      }
    }
  }
}
