<?php
defined("PAGE") or die("Access Denied");
if($_GET['s'] == null){
  redirect("index.php");
}
if(strlen($_GET['s'])<5){
  redirect("index.php");
}
$search = mysqli_real_escape_string(koneksi(),trim($_GET['s']));
$query = "SELECT * FROM artikel WHERE content like '%".$search."%'";
$data = Query($query);
$jumlah = mysqli_num_rows($data);
$jml = "";
if($jumlah == 0){
  $jml = "Tidak ada data yang ditemukan di content.</br> Akan Melakukan pencarian berdasarkan judul";
  $query = "SELECT * FROM artikel WHERE title like '%".$search."%'";
  $data = Query($query);
  $aa = TRUE;
}
else {
  $aa = FALSE;
}
?>
<?php
while ($dat = $data->fetch_array()) {
 ?>
 <article class="main-artikel">
   <div class="artikel-content">
     <h1 class="home"><a href="?url=<?php echo $dat['url'] ?>"><?php echo $dat['title'] ?></a></h1>
     <b><?php echo $dat['date'] ?></b><b><?php echo $dat['author'] ?></b>
     <?php
       if($dat['thumbnail'] !=null){
         echo 'gambar';
       }
     ?>
     <p>
       <?php
         $jml = strlen($dat['content']);
         $dot = "";
        if(!$aa){
          $content = str_replace($search, "<b>".$dat['content']."</b>" ,$dat['content']);
        }
        else {
          $content = $dat['content'];
        }
         echo substr($content,0,200)."...";
       ?>
     </p>
   </div>
   <div style="clear:both">

   </div>
 </article>
<?php
  }
 ?>
