<?php
  defined("PAGE") or die("Access Denied");
  if(isset($_GET['url'])){
    $url = checker($_GET['url']);
    $sql = "SELECT * FROM artikel WHERE url='".$url."'";
    $dat = QueryArr($sql);
    $jml = Query($sql);
    if(mysqli_num_rows($jml)>1){
      redirect('index.php?admin&page=list_article');
    }
    else if(mysqli_num_rows($jml) == 0){
      redirect('index.php?admin&page=list_article');
    }
    include("require/adm_edit.php");
    ?>
    <h1>Edit Artikel</h1>
    <p>
      Halaman Pengeditan artikel.
    </p>
    <form action="#" method="post">
      <div class="">
        &nbsp;
      </div>
      <div style="margin-bottom:20px;">
        Tanggal :<br>
        <input readonly="" class="input input-edit" type="text" name="date" value="<?php echo date("d-m-Y") ?>">
      </div>
      <div style="margin-bottom:20px;">
        Judul artikel :<br>
        <input class="input input-edit" type="text" name="title" value="<?php echo $dat['title'] ?>">
      </div>
      <div style="margin-bottom:20px;">
        Isi artikel :<br>
        <textarea class="textarea textarea-edit" name="isi" rows="8" cols="40"><?php echo $dat['content'] ?></textarea>
      </div>
      <div style="margin-bottom:20px;">
        URL :<br>
        <input class="input input-edit" type="text"  readonly="" name="url" value="<?php echo $dat['url'] ?>">
      </div>
      <div style="margin-bottom:20px;">
        <button type="submit" class="submit submit-edit" name="insert">Submit</button>
      </div>
    </form>
    <?php
  }
  else {
    redirect('index.php?admin&page=list_article');
  }
 ?>
