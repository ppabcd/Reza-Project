<?php
defined("PAGE") or die("Access Denied");
if(isset($_GET['alert'])){
  if($_GET['alert'] == "success"){
    ?>
    <div class="alert alert-success">
        Berhasil memproses Data
    </div>
    <?php
  }
  else if($_GET['alert'] == "fail"){
    ?>
    <div class="alert alert-fail">
        Gagal Mempreoses Data
    </div>
    <?php
  }
}
 ?>
<h1>Page</h1>
<a href="#"><button type="button" name="button" class="input input-add"><b class="fa fa-plus"></b>Tambah Page</button></a>
<div class="notif">

</div>
<div class="table">
  <table class="table">
    <thead class="table">
      <tr>
        <th>
          #
        </th>
        <th>
          Judul
        </th>
        <th>
          Content
        </th>
        <th>
          Action
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
      url : "http://localhost/projeka/json/json-page.php",
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
          content = data[i].body;
          content = content.substr(0,32)+"...";
          if(data[i].url == "about"){
            data_table += "<tr><td>"+no+"</td><td>"+data[i].title+"</td><td>"+content+"</td><td> <a href='?admin&&page=edit_p&&url="+data[i].url+"'><button type=\"button\" class=\"form-edit-icon\"><b class=\"fa fa-edit\"></b></button> </a> </td></tr>"
          }
          else {
            data_table += "<tr><td>"+no+"</td><td>"+data[i].title+"</td><td>"+content+"</td><td><a href='?admin&&page=edit_p&&url="+data[i].url+"'><button type=\"button\" class=\"form-edit-icon\"><b class=\"fa fa-edit\"></b></button> </a><a href='?admin&&page=delete_p&&url="+data[i].url+"'><button type='button' class='form-delete-icon'><b class='fa fa-trash'></b></button></a></td></tr>"
          }
          no++;
        }
        $(".table-content").append(data_table);
      }
    }
  });
</script>
