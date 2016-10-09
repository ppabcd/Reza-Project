<?php
  defined("PAGE") or die("Access Denied");
  if(isset($_POST['edit'])){
    $url = checker($_POST['url']);
    $judul = checker($_POST['title']);
    $content = checker($_POST['isi']);
    $sql = "UPDATE artikel SET title='".$judul."',content='".$content."' WHERE url='".$url."'";
    $query = Query($sql);
    if($query){
      redirect("index.php?admin&&page=list_article&&alert=success");
    }
    else {
      redirect("index.php?admin&&page=list_article&&alert=fail");
    }
  }
  if(isset($_POST['add_p'])){
    $image_path = "asset/img/page/";
    $title = checker($_POST['title']);
    $judul = checker($_POST['judul']);
    $isi = checker($_POST['isi']);
    $url = checker($_POST['url']);
    $sq = "SELECT * FROM page WHERE url='".$url."'";
    $que = QueryArr($sq);
    if(count($que)!= null){
      redirect("?admin&&page=list_page&&alert=fail");
    }
    $author = checker($_POST['author']);
    $author_url = checker($_POST['author_url']);
    print_r($_FILES);
    if(!empty($_FILES['gambar']['tmp_name'])){
      $file_name = $_FILES['gambar']['name'];
      $file_size = $_FILES['gambar']['size'];
      $file_type = $_FILES['gambar']['type'];
      $file_tmp = $_FILES['gambar']['tmp_name'];
      $image_id = randomstring();
      $path = $image_path.$image_id.$file_name;
      //Checker type file
      if($file_type == "image/jpeg"||$file_type == "image/png"){
        if($file_size <= 10000000){
          if(move_uploaded_file($file_tmp,$path)){
            $quer = "INSERT into image VALUES(null,'".$file_name."','".$file_size."','".$file_type."','".$path."','".$image_id."')";
            $sql = Query($quer);
            $thumb = $path;
          }
          else {
            redirect("?admin&&page=add_artikel&&1");
          }
        }
        else {
          echo $file_size;
        }
      }
      else {
        redirect("?admin&&page=add_artikel&&3");
      }
    }
    else {
      $thumb = "asset/img/placeholder3.png";
    }
    $date = date("d-m-Y H:i:s");
    $hit = 0;
    $query = "INSERT INTO page VALUES(null,'".$judul."','".$title."','".$isi."','".$date."','".$url."','".$author_url."','".$thumb."','".$author."','".$hit."')";
    $sq = Query($query);
    if(!$sq){
      //redirect("?admin&&page=list_page&&alert=fail");
      echo "alert3";
    }
    //redirect("?admin&&page=list_page&&alert=success");
    echo "alert4";
  }
  if(isset($_POST['add'])){
    $image_path = "asset/img/";
    $title = checker($_POST['judul']);
    $content = checker($_POST['isi']);
    $url = checker($_POST['url']);
    $sq = "SELECT * FROM artikel WHERE url='".$url."'";
    $que = QueryArr($sq);
    if(count($que)!= null){
      redirect("index.php?admin&&page=list_article&&alert=fail");
    }
    $author = checker($_POST['author']);
    $author_url = checker($_POST['author_url']);
    if(!empty($_FILES['gambar']['tmp_name'])){
      $file_name = $_FILES['gambar']['name'];
      $file_size = $_FILES['gambar']['size'];
      $file_type = $_FILES['gambar']['type'];
      $file_tmp = $_FILES['gambar']['tmp_name'];
      $image_id = randomstring();
      $path = $image_path.$image_id.$file_name;
      //Checker type file
      if($file_type == "image/jpeg"||$file_type == "image/png"){
        if($file_size <= 10000000){
          if(move_uploaded_file($file_tmp,$path)){
            $quer = "INSERT into image VALUES(null,'".$file_name."','".$file_size."','".$file_type."','".$path."','".$image_id."')";
            $sql = Query($quer);
          }
          else {
            redirect("?admin&&page=add_artikel&&1");
          }
        }
        else {
          echo $file_size;
        }
      }
      else {
        redirect("?admin&&page=add_artikel&&3");
      }
    }
    else {
      $path = $image_path."placeholder3.png";
    }
    $date = date("d-m-Y H:i:s");
    $hit = 0;
    $sql = "INSERT INTO artikel VALUES(null ,'".$title."','".$content."','".$path."','".$date."','".$author."','".$url."','".$author_url."',".$hit.")";
    $query = Query($sql);
    if(!$query){
      redirect("index.php?admin&&page=list_article&&alert=fail");
    }
    redirect("index.php?admin&&page=list_article&&alert=success");
  }
?>
