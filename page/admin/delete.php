<?php
  defined("PAGE") or die("Access Denied");
  if($_GET['url'] == null){
    redirect('index.php?admin&&page=list_article');
  }
  $url = $_GET['url'];
  $sql = "DELETE FROM artikel WHERE url='".$url."'";
  $query = Query($sql);
  if($query){
    redirect("index.php?admin&&page=list_article&&alert=success");
  }
  else {
    redirect("index.php?admin&&page=list_article&&alert=fail");
  }
?>
