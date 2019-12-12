<?php
//建立一個資料表專用的變數，後續需要使用到資料表名稱的地方都使用這個變數即可
//可以減少手打的錯誤，並且方便其他功能的延用
// Copy from title
 $useTable="personal";
?>


<div style="width:50%; height:65%; 
            margin:auto; ">  <!-- 原有設overflow:auto;取消 -->
            <p class="t cent botli">個人資料</p>

  <form method="post" action="./api/edit.php">                  
  <table width="100%" style="margin:auto">
                    <tbody>    
                        <?php
                        //取出資料表的所有資料
                        $rows=all($useTable);

                        //以迴圈的方式逐筆列出資料
                        foreach($rows as $r){
                        ?>
                        <tr class="cent">  
                              <td rowspan="6">
                                <img src="./img/<?=$r['file'];?>" style="width:160px;height:160px">
                              </td>
                        </tr>
                              <td width="20%">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</td>
                              <td width="35%"><input type="text" name="name[]" value="<?=$r['name'];?>"></td>
                        
                        <tr>
                              <td>連絡電話</td>
                              <td><input type="text" name="phone[]" value="<?=$r['phone'];?>"></td>
                        
                        </tr>
                        <tr>
                              <td>電子信箱</td>
                              <td><input type="text" name="email[]" value="<?=$r['email'];?>"></td>
                        </tr>
                        <tr>
                              <td>生&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;日</td>
                              <td><input type="text" name="birthday[]" value="<?=$r['birthday'];?>"></td>
                        
                        </tr>
                        <tr>
                              <td>聯絡地址</td>
                              <td><input type="text" name="addr[]" value="<?=$r['addr'];?>"></td>
                        </tr>

                        <?php
                        }
                        ?>
                      </tbody>
            </table>

      <table class="cent" 
              style="margin-top:20px; 
                     width:50%;">
                     
          <tbody>
            <tr>
            <td width="25%">
                  <input type="button" 
                         value="更新圖片" 
                         onclick="op('#cover','#cvr','./view/update_<?=$useTable;?>.php?id=<?=$r['id'];?>&table=<?=$useTable;?>')" >
                  <!--這裹帶入一個隱藏欄位用來存放每筆資料的id，以利識別-->
                  <input type="hidden" name="id[]" value="<?=$r['id'];?>">        
                  
                  
            <td width="25%">
                  <!--這裹帶入一個隱藏欄位用來存放資料表名稱，以利api識別要處理的目標資料表-->
                  <input type="hidden" name="table" value="<?=$useTable;?>">

                  <!--這裹使用素材提供的op()函式來載入新增資料需要的表單檔案，
                  同時利用get機制帶入相關的資料表名稱等資訊-->
                  <input type="button"      
                          onclick="op('#cover','#cvr','./view/<?=$useTable;?>.php?table=<?=$useTable;?>')" 
                          value="新增">
              </td>
              <td width="25%">
                    <input type="submit" value="修改確定">
              </td>
              <td width="25%">
                    <input type="reset" value="重置">
              </td>
            </tr>
          </tbody>
        </table>

  </form>
</div>
