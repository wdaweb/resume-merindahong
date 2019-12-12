<?php
//建立一個資料表專用的變數，後續需要使用到資料表名稱的地方都使用這個變數即可
//可以減少手打的錯誤，並且方便其他功能的延用
// Copy from images
 $useTable="education";

?>
<div style="width:70%; height:87%; 
            margin:auto; overflow:auto; ">
  <p class="t cent botli">學歷與訓練</p>

  <form method="post" action="./api/edit.php">
    <table width="100%">
      <tbody>      
        <tr class="yel">
          <td width="5%">顯示</td>
          <td width="10%">學&nbsp;&nbsp;&nbsp;&nbsp;歷</td>
          <td width="20%">教育單位</td>
          <td width="20%">主&nbsp;&nbsp;&nbsp;&nbsp;修</td>
          <td width="20%">期&nbsp;&nbsp;&nbsp;&nbsp;間</td>
          <td>刪除</td>


        </tr>
        <?php
        
        // 先取得資料表中的總筆數(要注意是否有條件限制，比如顯示不顯示)
        $sum=nums($useTable);

        // 決定每個頁面的筆數
        $div=10;

        // 計算總頁數(無條件進位法)
        $pages=ceil($sum/$div);

        // 採用網址參數的方式來取得當前頁，預設為第一頁
        $p=(!empty($_GET['p']))?$_GET['p']:1;

        // 計算資料的開始筆數((當前頁-1)*每頁筆數)
        $start=($p-1)*$div;

        // 下SQL查詢語法(LIMIT start,amount) 及 取出分頁資料
        $rows=all($useTable,[]," LIMIT $start,$div");

        //以迴圈的方式逐筆列出資料
        foreach($rows as $r){
        ?>
        <tr class="cent">
          
          <td>          
            <input type="checkbox" name="sh[]" value="<?=$r['id'];?>" <?=($r['sh']==1)?"checked":"";?>>
          </td>
          <td>
            <input type="text" name="level[]" style="height:16px;" value="<?=$r['level'];?>">
          </td>
          <td>
            <input type="text" name="school[]" style="height:16px;" value="<?=$r['school'];?>">
          </td>
          <td>
            <input type="text" name="major[]" style="height:16px;" value="<?=$r['major'];?>">
          </td>
          <td>
          <input type="text" name="period[]" style="height:16px;" value="<?=$r['period'];?>">
          </td> 
          <td>
            <input type="checkbox" name="del[]" value="<?=$r['id'];?>">
            <!--這裹帶入一個隱藏欄位用來存放每筆資料的id，以利識別-->
            <input type="hidden" name="id[]" value="<?=$r['id'];?>">
          </td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <!--插入一個DIV用來放置分頁及頁碼-->
    <div class="cent">
    <?php

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
    </div>
    <table class="cent" style="margin-top:40px; width:100%;">
      <tbody>
        <tr>
          <td width="20%"></td>
          <!--這裹帶入一個隱藏欄位用來存放資料表名稱，以利api識別要處理的目標資料表-->
          <input type="hidden" name="table" value="<?=$useTable;?>">

          <!--這裹使用素材提供的op()函式來載入新增資料需要的表單檔案，
              同時利用get機制帶入相關的資料表名稱等資訊-->
          <td width="20%">
            <input type="button"      
                   onclick="op('#cover','#cvr','./view/<?=$useTable;?>.php?table=<?=$useTable;?>')" 
                   value="新增學歷與進修">
          </td>
          <td width="20%">
              <input type="submit" value="修改確定">
          </td>
          <td width="20%">
              <input type="reset" value="重置">
          </td>
          <td width="20%"></td>
        </tr>
      </tbody>
    </table>

  </form>
</div>