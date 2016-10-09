<article class="main-sidebar">
  <form class="" action="" method="get">
    <input type="text" name="s" value="" class="input input-search" placeholder="Search...">
    <button type="submit" name="submit" class="submit submit-search"><b class="fa fa-search"></b></button>
  </form>
</article>
<?php
defined("PAGE") or die("Access Denied");
$sql = "SELECT * FROM artikel ORDER by date DESC LIMIT 5";
$query = Query($sql);
$jumlah = mysqli_num_rows($query);
if($jumlah == 0){
   ?>
   <article class="main-sidebar">
     <p>
       Tidak ada artikel yang tersedia
     </p>
   </article>
   <?php
}
while($dat = $query->fetch_array()){
?>
<a href="?url=<?php echo $dat['url'] ?>">
<article class="main-sidebar">
  <img src="<?php echo base_url().$dat['thumbnail'] ?>" alt="" />
    <div class="sidebar-content">
      <h1><?php echo $dat['title'] ?></h1>
      <p>
        <?php echo substr($dat['content'],0,100)."..." ?>
      </p>
    </div>
    <div style="clear:both">

    </div>
</article>
</a>
<?php
  }
 ?>
<div style="margin-bottom:100px;">

</div>
