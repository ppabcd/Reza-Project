<?php
defined("PAGE") or die("Access Denied");
if(isset($_GET['alert'])){
  if($_GET['alert'] == "success"){
    ?>
    <div class="alert alert-success">
      Berhasil memproses data.
    </div>
    <?php
  }
  else if($_GET['alert'] == "fail"){
   ?>
    <div class="alert alert-fail">
      Gagal memproses data.
    </div>
   <?php
  }
}
 ?>
<h1>Artikel</h1>
<a href="<?php echo base_url() ?>?admin&&page=add_artikel"><button class="input input-add" name="button"><b class="fa fa-plus"></b> Tambahkan Artikel</button></a>
<div class="notif">

</div>
<div class="table">
  <table class="tabel">
    <thead class="table">
      <tr>
        <th class="short">
          #
        </th>
        <th class="normal">
          Judul
        </th>
        <th class="normal">
          isi
        </th>
        <th class="normal">
          action
        </th>
      </tr>
    </thead>
    <tbody class="table-content">

    </tbody>
  </table>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $.ajax({
      url : "http://localhost/projeka/json/json-artikel.php",
      dataType : "json",
      type : "GET",
      success : giveresult
    });
    function giveresult(data){
      var data_table;
      var content;
      var no = 1;
      var surfiks;
      if(data.length==0){
        $(".notif").append("Tidak ada data yang tersedia");
        $(".tabel").hide();
      }
      else {
        for (var i = 0; i < data.length; i++) {
          content = data[i].content;
          content = content.substr(0,32)+"...";
          data_table += "<tr><td>"+no+"</td><td>"+data[i].title+"</td><td>"+content+"</td><td><a href='?admin&&page=edit&&url="+data[i].url+"'><button type=\"button\" class=\"form-edit-icon\"><b class=\"fa fa-edit\"></b></button> </a><a href='?admin&&page=delete&&url="+data[i].url+"'><button type='button' class='form-delete-icon'><b class='fa fa-trash'></b></button></a></td></tr>"
          no++;
        }
        $(".table-content").append(data_table);
      }
    }
  });
</script>
