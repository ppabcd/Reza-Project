<?php
defined("PAGE") or die("Access Denied");
$quer = "SELECT * FROM profile WHERE username='".$_SESSION['username']."'";
include("require/adm_edit.php");
$sql = QueryArr($quer);
 ?>
<h1>Tambah Page</h1>
<p>
  Halaman Penambahan data page
</p>
<form  class="" action="" method="post" enctype="multipart/form-data">
  <div class="">
    &nbsp;
  </div>
  <div style="margin-bottom:20px">
    Tanggal : <br>
    <input type="text"  name="date" class="input input-edit" readonly="" value="<?php echo date('d-m-Y') ?>">
  </div>
  <div style="margin-bottom:20px">
    Title : <br>
    <input type="text" name="title" value="" class="input input-edit" placeholder="Title...">
  </div>
  <div style="margin-bottom:20px">
    Judul : <br>
    <input type="text" name="judul" value="" class="input input-edit" placeholder="Judul...">
  </div>
  <div style="margin-bottom:20px">
    Isi : <br>
    <textarea name="isi" rows="8" cols="40" class="textarea textarea-edit" placeholder="Isi Page..."></textarea>
  </div>
  <div style="margin-bottom:20px">
    Thumbnail :<br>
    <input type="file" name="gambar" class="input input-upload" value="">
  </div>
  <div style="margin-bottom:20px">

  </div>
  <div style="margin-bottom:20px">
    URL : <br>
    <?php echo base_url() ?>?p=<input type="text" name="url" value="" class="input input-edit" placeholder="URL">
    <br><small>Notice : *URL tidak dapat diubah</small>
  </div>
  <div style="margin-bottom:20px">
    Pembuat : <br>
    <input type="text" name="author" readonly="" class="input input-edit" value="<?php echo $sql['nama'] ?>">
  </div>
  <div style="margin-bottom:20px">
    URL Pembuat : <br>
    <input type="text" name="author_url" readonly="" class="input input-edit" value="<?php echo $sql['url'] ?>">
  </div>
  <button type="submit" name="add_p" class="submit submit-edit">Submit</button>
</form>
