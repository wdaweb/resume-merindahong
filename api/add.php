<?php
include_once "../base.php";

//取得要編輯資料的資料表名稱
$table=$_POST['table'];

//判斷是否有成功上傳檔案，進行取得檔名及搬移檔案的動作
if(!empty($_FILES['file']['tmp_name'])){
    $data['file']=$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"../img/".$data['file']);
}

//依據資料表來做不同的處理
switch($table){
  case "admin":
    if(!empty($_POST['acc']) && !empty($_POST['pw'])){
        $data["acc"]=$_POST['acc'];
        $data["pw"]=$_POST['pw'];
    }
  break;

  case "work":
    if(!empty($_POST['company']) 
       && !empty($_POST['period']) 
       && !empty($_POST['jobtitle'])
       && !empty($_POST['jobs'])
    ){
        $data["company"]=$_POST['company'];
        $data["period"]=$_POST['period'];
        $data["jobtitle"]=$_POST['jobtitle'];
        $data["jobs"]=$_POST['jobs'];
    }
  break;

  case "education":
    if(!empty($_POST['level']) 
       && !empty($_POST['school']) 
       && !empty($_POST['major'])
       && !empty($_POST['period'])
    ){
        $data["level"]=$_POST['level'];
        $data["school"]=$_POST['school'];
        $data["major"]=$_POST['major'];
        $data["period"]=$_POST['period'];
    }
  break;

  case "autobiPages":
    if(!empty($_POST['phase']) 
       && !empty($_POST['content']) 
    ){
        $data["phase"]=$_POST['phase'];
        $data["content"]=$_POST['content'];
    }
  break;
  
  case "menu":
    if(!empty($_POST['text']) && !empty($_POST['href'])){
        $data["text"]=$_POST['text'];
        $data["href"]=$_POST['href'];
    }
  break;

  default:
    //判斷是否有傳遞text欄位的資料，有的話就進行資料的取得
    if(!empty($_POST['text'])){
        $data['text']=$_POST['text'];
    }  
}

  //利用save()函式將存在$data陣列中的資料寫入資料表中
  save($table,$data);  

to("../admin.php?do=$table");

?>