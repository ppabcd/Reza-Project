<?php
  $titl = "";
  if(isset($_GET['url'])){
    $sq = "SELECT * FROM artikel WHERE url='".$_GET['url']."'";
    $query = QueryArr($sq);
    $titl = $query['title'];
    $titl = " | ".$titl;
  }
  if(isset($_GET['p'])){
    $sq = "SELECT * FROM page WHERE url='".$_GET['p']."'";
    $query = QueryArr($sq);
    $titl = $query['title'];
    $titl = " | ".$titl;
  }
  if(isset($_GET['page'])){
    if($_GET['page'] == "about"){
      $sq = "SELECT * FROM page WHERE url='".$_GET['page']."'";
      $query = QueryArr($sq);
      $titl = $query['title'];
      $titl = " | ".$titl;
    }
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reza Juliandri <?php echo $titl  ?></title>
    <link rel="stylesheet" href="asset/css/style.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="asset/css/font-awesome.css" media="screen" title="no title">
    <script src="asset/js/jquery.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="wrapper">
      <?php echo p_header() ?>
    </div>
    <div class="wrapper">
      <section class="content">
        <div class="artikel">
          <!-- Default -->
          <!--<article class="main-artikel">
            <div class="artikel-content">
            <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h1>
            <b></b><b></b>
            <p>
              content
            </p>
            </div>
          </article>-->
          <!--content data -->
          <?php
            if(isset($pag)){
              _inc($pag);
            }
            else {
              _inc("home");
            }
           ?>

        </div>
        <div class="sidebar">
          <?php echo p_sidebar() ?>
        </div>
      </section>
    </div>
    <footer>
      <p>
        Copyright &copy; Reza Juliandri. All Right Reserved.
      </p>
    </footer>
    <script type="text/javascript">
    $(document).ready(function(){
      $(".alert").click(function(){
       $(this).hide();
      });
    })
    </script>
  </body>
</html>
