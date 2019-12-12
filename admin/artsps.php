<?php
//建立一個資料表專用的變數，後續需要使用到資料表名稱的地方都使用這個變數即可
//可以減少手打的錯誤，並且方便其他功能的延用
//Copy from images
 $useTable="artsps";

?>
<div style="width:70%; height:87%; margin:auto; overflow: hidden;">
  <p class="t cent botli">作品集</p>
  <form method="post" action="./api/edit.php">
    <table width="100%">
      <tbody>
        <tr class="yel">
          <td width="10%">顯示</td>
          <td width="10%">縮圖</td>
          <td width="20%">主題</td>
          <td width="40%">設計理念</td>
          <td width="10%">刪除</td>
          <td></td>
        </tr>
        <?php
        
        // 先取得資料表中的總筆數(要注意是否有條件限制，比如顯示不顯示)
        $sum=nums($useTable);

        // 決定每個頁面的筆數
        $div=3;

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
          <!-- 
          input type=checkbox時，多寫判斷 PHP = ($r['sh']==1)?"checked":""; 
          是因為 checkbox是多選的機制，資料表建立sh欄位屬性時，有做1或0設定，1為顯示 
          -->
            <input type="checkbox" name="sh[]" value="<?=$r['id'];?>"<?=($r['sh']==1)?"checked":"";?>>
          </td>          
          <td>
            <img src="./img/<?=$r['file'];?>" style="width:100px;height:68px">
          </td>
          <td>
            <input type="text" name="theme[]" style="width:95%;height:68px" value="<?=$r['theme'];?>">          </td>

          <td>
          <!-- 
          textarea標籤：要把抓到資料，放在標籤容器內，加放PHP語法 =$r['text'];?>
          input type=text時，是把抓到資料，放在value裡面，藉由自由命名如theme與系統對應 
          -->
            <textarea class="textbox" name="text[]" style="width:95%;height:68px"><?=$r['text'];?></textarea>
          </td> 


          <td>
            <input type="checkbox" name="del[]" value="<?=$r['id'];?>">
          </td>
          <td>
            <!--這裹使用素材提供的op()函式來載入更新圖片需要的表單檔案，
                同時利用get機制帶入相關的資料id及資料表名稱等資訊-->
            <input type="button" value="更換圖片" onclick="op('#cover','#cvr','./view/update_<?=$useTable;?>.php?id=<?=$r['id'];?>&table=<?=$useTable;?>')" >

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
    
    
    
    <table style="margin-top:20px; width:50%;">
      <tbody>
        <tr>

          <!--這裹帶入一個隱藏欄位用來存放資料表名稱，以利api識別要處理的目標資料表-->
          <input type="hidden" name="table" value="<?=$useTable;?>">

          <!--這裹使用素材提供的op()函式來載入新增資料需要的表單檔案，
              同時利用get機制帶入相關的資料表名稱等資訊-->
          <td>
            <input type="button"      
                   onclick="op('#cover','#cvr','./view/<?=$useTable;?>.php?table=<?=$useTable;?>')" 
                   value="新增圖片">
            <input type="submit" value="修改確定">
            <input type="reset" value="重置"></td>
        </tr>
      </tbody>
    </table>

  </form>
</div>