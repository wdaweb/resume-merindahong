<?php
include_once "../base.php";

//取得要編輯資料的資料表名稱
$table=$_POST['table'];

//利用迴圈來判斷資料要刪除還是更新內容
foreach($_POST['id'] as $key => $id){
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
        del($table,$id);
    }else{

        //先取出該筆資料
        $data=find($table,$id);

        //依據不同的資料表來做不同的動作
        switch($table){
            case "admin":
                $data['acc']=$_POST['acc'][$key];
                $data['pw']=$_POST['pw'][$key];                
            break;

            case "personal":
                //將欄位內容更新成表單傳遞過來的內容
                $data['name']=$_POST['name'][$key];
                $data['phone']=$_POST['phone'][$key];
                $data['email']=$_POST['email'][$key];
                $data['birthday']=$_POST['birthday'][$key];
                $data['addr']=$_POST['addr'][$key];
            break;
            

            case "work":
                //將欄位內容更新成表單傳遞過來的內容                
                $data['sh']=(in_array($id,$_POST['sh']))?1:0;
                $data['period']=$_POST['period'][$key];
                $data['company']=$_POST['company'][$key];
                $data['jobtitle']=$_POST['jobtitle'][$key];
                $data['jobs']=$_POST['jobs'][$key];

            break;

            case "education":
                //將欄位內容更新成表單傳遞過來的內容 
                /*
                text的資料可以用post對應或尋找，
                但sh欄位，在建立資料表時就設定為bool布林值，
                (1為true，0為false)
                並非只用單純的post，還要用in_array的方式，
                來找某個陣列裡是否有值，語法in_array(陣列)
                */               
                $data['sh']=(in_array($id,$_POST['sh']))?1:0;
                $data['level']=$_POST['level'][$key];
                $data['school']=$_POST['school'][$key];
                $data['major']=$_POST['major'][$key];
                $data['period']=$_POST['period'][$key];
            break;
            
            case "autobiPages":             
                $data['sh']=(in_array($id,$_POST['sh']))?1:0;
                $data['phase']=$_POST['phase'][$key];
                $data['content']=$_POST['content'][$key];
            break;


            case "artsps":
                $data['sh']=(in_array($id,$_POST['sh']))?1:0;                
                $data['theme']=$_POST['theme'][$key];
                $data['text']=$_POST['text'][$key];                
            break;

            
            case "menu":
                $data['text']=$_POST['text'][$key];
                $data['href']=$_POST['href'][$key];
                $data['sh']=(in_array($id,$_POST['sh']))?1:0;                  
            break;
            
            case "title":
                /*
                此處sh為單選機制，並非陣列，所以指定找$id
                */
                $data['sh']=($id==$_POST['sh'])?1:0;
                $data['text']=$_POST['text'][$key];
            break;
               
            default:
                //將欄位內容更新成表單傳遞過來的內容
                $data['text']=$_POST['text'][$key];
                $data['sh']=(in_array($id,$_POST['sh']))?1:0;
            break;
        }


        //利用save()函式將該筆資料寫回資料表
        save($table,$data);
    }
}

//返回功能頁面
to("../admin.php?do=$table");

?>