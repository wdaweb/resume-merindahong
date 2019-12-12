<?php
include_once "base.php";
?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0068)?do=title -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>About Merinda</title>
  <link href="./css/css.css" rel="stylesheet" type="text/css">
  <script src="./js/jquery-1.9.1.min.js"></script>
  <script src="./js/js.js"></script>


</head>

<!-- (1) 設一個隱藏div命名cover，彈跳使用 -->
<div id="cover" style="display:none; ">
        <div id="coverr">
                  <a style="position:absolute; 
                  right:3px; top:4px;
                  cursor:pointer; 
                  font-weight: bold;
                  z-index:9999;"
                    onclick="cl(&#39;#cover&#39;)"> CLOSE </a>
                  <div id="cvr" 
                            style="position:absolute; 
                            width:99%; height:100%; 
                            margin:auto; z-index:9898;"></div>
        </div>
</div>

<!-- (2) 插入Navi -->
<?php include "navigate.php";?>


<!-- (3) main div開始 -->
<div id="main">
    <div id="ms"> <!-- div ms不知為何? -->
        <!--class=di為正中央區域資料盛放區-->  
      <div class="di"
        style="height:100vh; 
              width:99%; 
              margin:0px; 
              float:left; 
              /* background-color: red; */
              position:relative;">        

        <?php
              //利用網址傳值的方式來取得$_GET['do']的值，
              // 這個值代表我們要include進來的檔案
              $do=(!empty($_GET['do']))?$_GET['do']:"personal";

              //我們將所有要include進來的後台功能檔案都
              // 放在 ./admin 目錄下，因此根據GET的值來組合include檔的完整路徑
              $path="./admin/" . $do . ".php";

              //判斷檔案是否存在來決定是要匯入檔案還是預設匯入personal.php
              if(file_exists($path)){
                include $path;
              }else{
                include "./admin/personal.php";
              }             
        ?>

      </div>
      <!-- div di結束 -->

              <!-- display none的div 不知為何?-->
      <div id="alt"
        style="position: absolute; width: 350px; 
               min-height: 100px; word-break:break-all; 
               text-align:justify;  
               background-color: rgb(255, 255, 204); 
               top: 50px; left: 400px; z-index: 99; 
               display: none; 
               padding: 5px; 
               border: 3px double rgb(255, 153, 0); 
               background-position: initial initial; 
               background-repeat: initial initial;">
      </div>

      <script>
        $(".sswww").hover(
          function () {
            $("#alt").html("" + $(this).children(".all").html() + "").css({
              "top": $(this).offset().top - 50
            })
            $("#alt").show()
          }
        )
        $(".sswww").mouseout(
          function () {
            $("#alt").hide()
          }
        )
      </script>

  </div>
  <!-- div ms結束 -->

  <div style="clear:both;"></div>

  

</div>
<!-- div main結尾 -->

<div style="border:0.5px solid white;
            border-radius: 10px;
            position:relative;                                 
            display:block;">
            <div class="total" >
                  進站總人數 :<?=$_SESSION['total'];?>
            </div>      
            <div class="total" >
                  <?=find("bottom",1)['bottom'];?>    
            </div>
  </div>

</body>

</html>