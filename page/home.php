<?php
defined("PAGE") or die("Access Denied");
  if(isset($_GET['pag'])){
    $p_dat = $_GET['pag'];
  }
  else {
    $p_dat = 1;
  }
  $JML_DATA = 5;
  $start_pag = ($p_dat-1)*$JML_DATA;
  $query = "SELECT * FROM artikel ORDER BY date DESC LIMIT ".$start_pag.",".$JML_DATA." ";
  $data = Query($query);
  $jumlah = mysqli_num_rows($data);
  if($jumlah == 0){
   ?>
   <div class="alert alert-fail">
     Tidak ada artikel yang tersedia
   </div>
   <?php
  }
  while ($dat = $data->fetch_array()) {
    ?>
    <a href="?url=<?php echo $dat['url'] ?>">
    <article class="main-artikel">
      <img src="<?php echo base_url().$dat['thumbnail'] ?>" alt="" />
      <div class="artikel-content">
        <h1 class="home"><?php echo $dat['title'] ?></h1>
        <b><?php echo $dat['date'] ?></b>
        <p>
          <?php
            $jml = strlen($dat['content']);
            $dot = "";
            if($jml>200){
              $dot = "...";
            }
            echo substr($dat['content'],0,200).$dot;
          ?>
        </p>
      </div>
      <div style="clear:both">

      </div>
  </article>
</a>
    <?php
  }
 ?>
 <div class="pagging" style="margin-bottom:90px;">
   <?php
   $quer = "SELECT COUNT(*) AS total FROM artikel";
   $qr = QueryArr($quer);
   $total = $qr['total'];
   $total_page = ceil($total/$JML_DATA);
   $pag = 1;
   while ($pag <=$total_page) {
     echo "<a href='?pag=".$pag."'><button class='input input-pagging' style='margin-right:5px;'>".$pag."</button></a>";
     $pag ++;
   }
    ?>
 </div>
