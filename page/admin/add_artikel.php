<?php
  defined("PAGE")or die("Access Denied");
  $query = "SELECT * FROM profile WHERE username='".$_SESSION['username']."'";
  $sql = QueryArr($query);
  include("require/adm_edit.php");
 ?>
 <h1>Tambah Artikel</h1>
<p>
  Halaman untuk menambahkan artikel.
</p>
<form  action="#" method="post" enctype="multipart/form-data">
  <div class="">
    &nbsp;
  </div>
  <div style="margin-bottom:20px">
    Tanggal :<br>
    <input type="text" readonly="" class="input input-edit" name="tanggal" value="<?php echo date("d-m-Y") ?>">
  </div>
  <div style="margin-bottom:20px">
    Judul Artikel :<br>
    <input type="text" name="judul" class="input input-edit" value="" placeholder="Judul Artikel...">
  </div>
  <div style="margin-bottom:20px">
    isi :<br>
    <textarea name="isi" rows="8" cols="40" class="textarea textarea-edit" placeholder="Isi Artikel..."></textarea>
  </div>
  <div style="margin-bottom:20px">
    Thumbnail:<br>
    <input type="file" name="gambar" value="" class="input input-upload">
  </div>
  <div style="margin-bottom:20px">
    URL :<br>
    <?php echo base_url() ?>?url=<input type="text" class="input input-url" name="url" value="" placeholder="URL..."><br>
    <small>Notice : *URL tidak dapat diedit kembali jika sudah diinputkan</small>
  </div>
  <div style="margin-bottom:20px">
    Pembuat :<br>
    <input type="text" class="input input-edit" readonly="" name="author" value="<?php echo $sql['nama'] ?>">
  </div>
  <div style="margin-bottom:20px">
    URL Pembuat : <br>
    <input type="text" class="input input-edit" readonly  name="author_url" value="<?php echo $sql['url'] ?>">
  </div>
  <div style="margin-bottom:20px">
    <button type="submit" class="submit submit-edit" name="add">Submit</button>
  </div>
</form>
