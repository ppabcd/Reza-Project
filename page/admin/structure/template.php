<?php
  defined("PAGE") or die("Acces Denied");
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Admin Panel</title>
     <link rel="stylesheet" href="./asset/css/style.css" media="screen" title="no title" charset="utf-8">
     <link rel="stylesheet" href="./asset/css/font-awesome.css" media="screen" title="no title" charset="utf-8">
     <script src="./asset/js/jquery.js" charset="utf-8"></script>
   </head>
   <body>
     <div class="wrapper">
         <?php echo p_header("1") ?>
     </div>
     <div class="wrapper">
       <div class="content-adm">
         <?php echo p_sidebar("1") ?>
         <div class="artikel-adm">
           <div class="main-artikel-adm">
             <?php
              if($pag){
                _adm_inc($pag);
              }
              else {
                _adm_inc("home");
              }
             ?>
            <!-- <h1></h1>
             <p>

             </p>-->
           </div>
         </div>
       </div>
     </div>
   <script type="text/javascript">
     $(document).ready(function(){
       function ukuran(){
         var panjang = $(window).width();
         if(panjang < 1360){
           $(".admin-sidebar").hide();
           $(".respon").show();
           $(".artikel-adm").css({width : "100%"});
         }
         else {
           $(".admin-sidebar").show();
           $(".respon").hide();
           $(".artikel-adm").css({width : "80%"});
         }
       }
       $(".respon").click(function(){
         var resp = $(".respon").attr("hilang");
         if(resp){
           $(".admin-sidebar").show();
           $(".admin-sidebar").css({width : "25%"});
           $('.respon').removeAttr('hilang');
         }
         else {
           $(".admin-sidebar").hide();
           $('.respon').attr('hilang','ya');
         }
       });
       $(window).resize(function(){
         ukuran();
       });
       ukuran();
       $(".alert").click(function(){
        $(this).hide();
       });
     });
   </script>
   </body>
 </html>
