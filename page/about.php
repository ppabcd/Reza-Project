<?php
  defined("PAGE") or die("Access Denied");
  $query = "SELECT * FROM page WHERE url='about'";
  $dat = QueryArr($query);
  $jml = $dat['hit'] + 1;
  $qr = "UPDATE page SET hit='".$jml."' WHERE url='about'";
  $quer= Query($qr);
 ?>
 <a href="?page=<?php echo $dat['url'] ?>">
 <article class="main-artikel">
   <div class="artikel-content">
     <h1><?php echo $dat['head'] ?></h1>
     <b><?php echo $dat['date'] ?></b><b><?php echo $dat['author'] ?></b>
   <p>
       <?php echo $dat['body'] ?>
   </p>
   </div>
   <div style="clear:both">

   </div>
 </article>
</a>
