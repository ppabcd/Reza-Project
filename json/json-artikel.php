<?php
  include("json-default.php");
  $row = array();
  $query = "SELECT * FROM artikel";
  $data = Query($query);
  while($dat = $data->fetch_assoc()){
    $row[] = $dat;
  }
echo json_encode($row);
?>
