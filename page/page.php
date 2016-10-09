<?php
defined("PAGE") or die("Acces Denied");
if($_GET['p'] == null){
  redirect("index.php");
}
$url = $_GET['p'];
$sql = "SELECT * FROM page WHERE url='".$url."'";
$dat = QueryArr($sql);
$hit = $dat['hit'] + 1;
$sqli = "UPDATE page SET hit='".$hit."' WHERE url='".$url."'";
$qw = Query($sqli);
?>
<a href="<?php echo $dat['url'] ?>">
<article class="main-artikel">
  <div class="read-content">
  <h1><?php echo $dat['head'] ?></h1>
  <img src="<?php echo base_url().$dat['thumbnail'] ?>" alt="" class="full" />
  <br><b><?php echo $dat['date'] ?></b><b><?php echo $dat['author']?></b>
  <p>
    <?php
      echo $dat['body'];
     ?>
  </p>
  </div>
  <div style="clear:both">

  </div>
</article>
</a>
