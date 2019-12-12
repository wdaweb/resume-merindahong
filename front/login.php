<?php


//判斷是否需要做帳密檢查
if(!empty($_POST['check'])){
    $acc=$_POST['acc'];
    $pw=$_POST['pw'];

    //利用nums()函式來檢查帳密是否正確
    $chk=nums("admin",["acc"=>$acc,"pw"=>$pw]);
    if($chk>=1){
      
      //帳密正確則建立一個session來紀錄
      $_SESSION['login']=$acc;

      /*帳密正確則導向後台admin.php：
      由於目前login.php的位置在front/之下，
      要回到上層，根目錄寫法..回到上層，再到admin.php頁面
      因admin.php在專案檔案夾的根目錄下，
      寫法，不需要前面放點，直接寫page的名稱即可
      */
      // echo "成功";
      to("admin.php");   

    }else{

      //帳密錯誤則輸入js語法，用以產生提示訊息
      echo "<script>alert('帳號或密碼錯誤')</script>";
    }
}
?>

<div class="di"  
     style="height:540px; 
            width:60%; 
            margin:auto; 
            position:relative;"> 
            
<form class="cent" method="post" action="?do=login"> 

<p class="t cent botli">登入系統</p>

  帳號 ： <input name="acc" autofocus="" type="text">
  密碼 ： <input name="pw" type="password">

  <!--在submit中加上name欄位做為表單送出的識別值-->
  <input value="送出" name="check" type="submit">
  <input type="reset" value="清除">
  </table>
</form>
</div>



<!--正中央-->
<!--刪除target="back"，ps欄位改成pw以符合資料表的欄位名
在本頁做action，所以action=本頁的網址，
action="login.php"或action="?"表示自己這張頁面，
但若要到別頁作執行(跳出的帳密視窗)，則需要改為?do=某頁面

這張front/login.php，在index.php(前台)設定會include(導入)，
在index.php有載明do...
-->

