<?php
//建立一個資料表專用的變數，後續需要使用到資料表名稱的地方都使用這個變數即可
//可以減少手打的錯誤，並且方便其他功能的延用
// Copy from images
 $useTable="work";

?>
<div style="width:70%; height:87%; 
            margin:auto;">
  <p class="t cent botli">工作經歷</p>

  <form method="post" action="./api/edit.php">

    <table width="100%">

      <tbody>
      <tr class="yel">
        <td width="10%">項目</td>
        <td width="70%">內容</td>
        <td></td>
      </tr>
      
       
        <?php
        
        // 先取得資料表中的總筆數(要注意是否有條件限制，比如顯示不顯示)
        $sum=nums($useTable);

        // 決定每個頁面的筆數
        $div=1;

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



        <tr>
              <td>職稱</td>
              <td>
                    <input type="text" name="jobtitle[]"                            
                           value="<?=$r['jobtitle'];?>">
              </td>
        </tr>
        <tr>
              <td>公司</td>
              <td>
                    <input type="text" name="company[]" 
                           value="<?=$r['company'];?>">
              </td>
        </tr>
        <tr>
              <td>期間</td>
              <td>
                    <input type="text" 
                           name="period[]" 
                           value="<?=$r['period'];?>">
              </td>
        </tr>
        <tr>
              <td style="vertical-align:top; padding: 30px 0px;">工作內容</td>
              <td>
                    <textarea class="textbox"
                              name="jobs[]"  >
                              <?=$r['jobs'];?></textarea>
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



    <table class="center" 
           style="margin-top:10px; 
                 ">

      <tbody>
        <tr>

          <td width="20%" >
                <!--這裹使用素材提供的op()函式來載入新增資料需要的表單檔案，
                同時利用get機制帶入相關的資料表名稱等資訊-->
              <input class="btn" type="button"      
                     onclick="op('#cover','#cvr','./view/<?=$useTable;?>.php?table=<?=$useTable;?>')" 
                     value="新增工作經歷">    
          </td>
         
          <td width="20%" >      
              <input class="btn" type="submit" value="修改確定">   
          </td>
         
          <td width="20%" > 
              <input class="btn" type="reset" value="重置">
          </td>
         
          <td width="10%" >
                <!--radio是單選的機制，因此name的屬性不需使用陣列的型式-->
                顯示：<input class="btn" type="checkbox" 
                      name="sh[]" value="<?=$r['id'];?>" <?=($r['sh']==1)?"checked":"";?>>
          </td>
          
          <td width="10%" >  
                刪除：<input class="btn" type="checkbox" 
                      name="del[]" value="<?=$r['id'];?>">
                <!--這裹帶入一個隱藏欄位用來存放每筆資料的id，以利識別-->
         <td width="20%" >  
                <!--這裹帶入一個隱藏欄位用來存放資料表名稱，以利api識別要處理的目標資料表-->
                <input type="hidden" name="table" value="<?=$useTable;?>">
                <!--這裹帶入一個隱藏欄位用來存放每筆資料的id，以利識別，
              才能指向該頁面的特定id，才能進行修改。-->
                <input type="hidden" name="id[]" value="<?=$r['id'];?>">

                
                
          </td>
          <td></td>
        </tr>
      </tbody>
    </table>

  </form>
</div>