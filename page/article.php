<?php
defined("PAGE") or die("Access Denied");
  $url = $_GET['url'];
  if(!$url){
    redirect("index.php");
  }
  $query = "SELECT * FROM artikel WHERE url='".$url."' ";
  $data = Query($query);
  if(mysqli_num_rows($data) >1){
    redirect('index.php');
  }
  else if(mysqli_num_rows($data) == 0){
    redirect('index.php');
  }
  while ($dat = $data->fetch_array()) {
    $hit = $dat['hit'] + 1;
    ?>
    <a href="?url=<?php echo $dat['url'] ?>">
    <article class="main-artikel">
      <div class="read-content">
        <h1 class="detail"><?php echo $dat['title'] ?></h1>
        <b><?php echo $dat['date'] ?></b><b><?php echo $dat['author'] ?></b>
        <img src="<?php echo base_url().$dat['thumbnail'] ?>" alt="" class="full" />
        <p>
          <?php
            echo $dat['content'];
          ?>
        </p>
      </div>
      <div style="clear:both;margin-bottom:50px;">

      </div>
    </article>
    </a>
    <?php
  }
  $sql = "UPDATE artikel SET hit='".$hit."' WHERE url='".$url."'";
  $quer = Query($sql);
 ?>
