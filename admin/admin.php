<?php
//建立一個資料表專用的變數，後續需要使用到資料表名稱的地方都使用這個變數即可
//可以減少手打的錯誤，並且方便其他功能的延用
 $useTable="admin";

?>

<div style="width:50%; height:65%; 
            margin:auto; ">  <!-- 原有設overflow:auto;取消 -->

<p class="t cent botli">登入帳號管理</p>
  <form method="post" action="./api/edit.php">
    <table width="100%">
      <tbody>
        <tr class="yel">
          <td width="30%">帳號</td>
          <td width="30%">密碼</td>
          <td>刪除</td>
        </tr>
        <?php
        //取出資料表的所有資料
        $rows=all($useTable);

        //以迴圈的方式逐筆列出資料
        foreach($rows as $r){
        ?>
        <tr class="cent">
          <td>
            <input type="text" name="acc[]" value="<?=$r['acc'];?>">
          </td>
          <td>
            <!--checkbox是多選的機制，因此name的屬性需要使用陣列的型式-->
            <input type="password" name="pw[]" value="<?=$r['pw'];?>">
          </td>
          <td>
            <input type="checkbox" name="del[]" value="<?=$r['id'];?>">
          </td>
          <td>
            <!--這裹帶入一個隱藏欄位用來存放每筆資料的id，以利識別-->
            <input type="hidden" name="id[]" value="<?=$r['id'];?>">
          </td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <table style="margin-top:20px; width:100%;">
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
                       value="新增帳號">
          </td>
          <td width="20%">
                <input type="submit" value="修改確定">
         </td>
          <td width="20%">  
                <input type="reset" value="重置"></td>
          <td width="20%"></td>
        </tr>
      </tbody>
    </table>

  </form>
</div>