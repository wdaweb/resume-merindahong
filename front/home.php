<?php
include_once "base.php";
$useTable1="personal";
?>

<div class="containerXXL">


<div id="personal" style="width:100%; height:100% ;margin:auto; top:50px;">
            <p class="t cent botli">個人資料</p>
  <form method="post" action="./api/edit.php">                  
  <table width="100%" style="margin:auto">
   
       <?php
       $rows=all($useTable1);
       foreach($rows as $r){
       ?>
       <tr class="cent">  
             <td rowspan="6">
               <img src="./img/<?=$r['file'];?>" style="width:160px;height:160px">
             </td>
       </tr>
             <td>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</td>
             <td><input type="text" name="name[]" value="<?=$r['name'];?>"></td> 
       <tr>
             <td>連絡電話</td>
             <td><input type="text" name="phone[]" value="<?=$r['phone'];?>"></td>
       </tr>
       <tr>
             <td>電子信箱</td>
             <td><input type="text" name="email[]" value="<?=$r['email'];?>"></td>
       </tr>
       <tr>
             <td>生&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;日</td>
             <td><input type="text" name="birthday[]" value="<?=$r['birthday'];?>"></td>
       </tr>
       <tr>
             <td>聯絡地址</td>
             <td><input type="text" name="addr[]" value="<?=$r['addr'];?>"></td>
       </tr>
       <tr></tr>
       <tr></tr>
      <?php
       }
       ?>
        </tbody>
    </table>
    </form>



<!-- EDUCATION  -->

<?php

$sql="SELECT * FROM `education` WHERE `sh` = 1";
$eduData=$pdo->query($sql)->fetchAll();
?>

<div id="education" style="width:100%; height:100%; margin:auto;">
            <p class="t cent botli">學歷與進修</p>

  <form method="post" action="./api/edit.php">
    <table width="100%">   
        <tr class="yel">

          <td width="10%">學&nbsp;&nbsp;&nbsp;&nbsp;歷</td>
          <td width="30%">教育單位</td>
          <td width="40%">主&nbsp;&nbsp;&nbsp;&nbsp;修</td>
          <td width="30%">期&nbsp;&nbsp;&nbsp;&nbsp;間</td>

        </tr>
        <?php        

        foreach($eduData as $e){
        ?>
        <tr class="cent"> 

          <td>
            <input type="text" name="level[]" style="height:16px; width:80%;" value="<?=$e['level'];?>">
          </td>
          <td>
            <input type="text" name="school[]" style="height:16px; width:90%;" value="<?=$e['school'];?>">
          </td>
          <td>
            <input type="text" name="major[]" style="height:16px; width:90%;" value="<?=$e['major'];?>">
          </td>
          <td>
          <input type="text" name="period[]" style="height:16px; width:80%;" value="<?=$e['period'];?>">          
          </td>

        </tr>
        <?php
        }
        ?>
    </table>
  </form>
</div>
</div>


<!-- WORK -->
<?php

$sql="SELECT * FROM `work` WHERE `sh` = 1";
$workData=$pdo->query($sql)->fetchAll();
?>

<div id="work" style="width:100%; height:100%; overflow: auto;">
  <p class="t cent botli">工作經歷</p>

  <form method="post" action="./api/edit.php">

    <table width="100%" style="border: 1px solid white;">     
      <tr class="yel">
        <td width="20%">職&nbsp;&nbsp;&nbsp;&nbsp;稱</td>
        <td width="50%">職務內容</td>
        
      </tr>
    <?php
      foreach($workData as $w){
    ?>

    <tr>
      <td>
        <input type="text" name="jobtitle[]"  style="border:none; font-size:1.5em; width=90%;"                          
               value="<?=$w['jobtitle'];?>">
      </td>
    </tr>

    <tr>
      <td rowspan="3" style="vertical-align:top; font-size: 1.2em;
                              font-weight:bolder;">
      </td>
      <td>
        <input type="text" style="border:none;" 
               name="period[]" 
               value="<?=$w['period'];?>">
        </td>
    </tr>

    <tr>      
      <td><input type="text" name="company[]" style="border:none;" 
                 value="<?=$w['company'];?>"></td></td>
    </tr>

    <tr>      
      <td>
          <textarea class="textbox2" style="border: none;"
                    name="jobs[]"  >
                    <?=$w['jobs'];?></textarea></td>
          <!--這裹帶入一個隱藏欄位用來存放資料表名稱，以利api識別要處理的目標資料表-->
          <input type="hidden" name="table" value="<?=$useTable;?>">
           <!--這裹帶入一個隱藏欄位用來存放每筆資料的id，以利識別，
           才能指向該頁面的特定id，才能進行修改。-->
          <input type="hidden" name="id[]" value="<?=$r['id'];?>">

    </tr>   
          <?php
        }
        ?>
    </table>
  </form>
</div>



<!-- ARTS -->
<?php

$sql="SELECT * FROM `artsps` WHERE `sh` = 1";
$artsData=$pdo->query($sql)->fetchAll();
$useTable="artsps";
?>

<div id="arts" style="width:100%; height:100%; margin:auto;">
  <p class="t cent botli">作品集</p>
  
  <form method="post" action="./api/edit.php">

  <table width="100%">

        <tr class="yel">
        </tr>
        <?php
        
        // 頁碼
        $sum=nums($useTable);     
        $div=3;
        $pages=ceil($sum/$div);
        $p=(!empty($_GET['p']))?$_GET['p']:1;
        $start=($p-1)*$div;
        $rows=all($useTable,[]," LIMIT $start,$div");
        //頁碼語法結束


        foreach($artsData as $arts){
        ?>

        <div class="containerMM">
          <input type="hidden" name="id[]" value="<?=$arts['id'];?>">
          <div><img src="./img/<?=$arts['file'];?>" 
               style="width:30%; height:100%;"></div>
          <div><input type="text" name="theme[]" 
               style="width:25%;height:16px" value="<?=$arts['theme'];?>"></div>
        </div>

        <?php
        }
        ?>
  </table>

    <!--插入一個DIV用來放置分頁及頁碼
    先暫時不要做這個-->
    <!-- <div class="cent">
    <php
        if(($p-1)>0){
          echo "<a href='admin.php?do=$useTable&p=".($p-1)."' style='text-decoration:none'> < </a>";
        }
        for($i=1;$i<=$pages;$i++){
          $fontSize=($i==$p)?"24px":"16px";
          echo "<a href='admin.php?do=$useTable&p=$i' style='font-size:$fontSize;text-decoration:none'> ".$i." </a>";
        }
        if(($p+1)<=$pages){
          echo "<a href='admin.php?do=$useTable&p=".($p+1)."' style='text-decoration:none'> > </a>";
        }
    ?>
    </div> -->

    
    <!-- AUTOBI PAGE -->

 


<div id="autobiAll" style="width:100%; height:100%; margin:auto;">
  <p class="t cent botli">自傳</p>  






  </div>

</div>
<!-- containerXXL end -->







