<?php
defined("PAGE") or die("Access Denied");
if($_GET['url'] == "null"){
  redirect("?admin&&page=list_page");
}
if($_GET['url'] == "about"){
  redirect("?admin&&page=list_page");
}
$url = $_GET['url'];
$sql = "DELETE FROM page where url='".$url."'";
$query = Query($sql);
if($query){
  redirect("?admin&&page=list_page&&alert=success");
}
else {
  redirect("?admin&&page=list_page&&alert=fail");
}
 ?>
