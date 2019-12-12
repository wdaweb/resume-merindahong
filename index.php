<?php include_once "base.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://127.0.0.1/test/exercise/collage/? -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Merinda</title>
<link href="./css/css.css" rel="stylesheet" type="text/css">
<script src="./js/jquery-1.9.1.min.js"></script>
<script src="./js/js.js"></script>
</head>


<body>

<header class="header" id="nav">
<ul>
    <li><h4></h4></li>  
    <li><a href="index.php">首頁</a></li>
    <li><a href="#personal">個人資料</a></li>
    <li><a href="#education">學歷與進修</a></li>
    <li><a href="#work">工作經歷</a></li>
    <li><a href="#arts">作品集</a></li>
	<li><a href="#autobiAll">自傳</a></li>
	    <!-- <li><a href="#autobiP">自傳1</a></li> -->
	
			<?php
			if(empty($_SESSION['login'])){
			?>
				<li><button style="width:100%; margin-left:auto;
								           font-size:1em; margin-right:auto; 
								           margin-top:2px; height:50px;" 
						onclick="lo(&#39;?do=login&#39;)">管理登入</button></li>
			<?php
				}else{
			?>
        <li><button style="width:100%; margin-left:auto; 
                           font-size:1em; 
							             margin-right:auto; 
							             margin-top:2px; height:30px;" 
						onclick="lo(&#39;admin.php&#39;)">返回管理</button></li>
			<?php
			}
			?> 
</ul>
</header>	
                
<div style="clear:both;"></div>


<?php 
//載明傳值的方式，讓URL尾端加上do可以執行導入到其他頁面$path的設定
$do=(!empty($_GET['do']))?$_GET['do']:"home";
$path="./front/" . $do . ".php";
if(file_exists($path)){
      include $path;
    }else{
      include "./admin/home.php";
	}
	

// 導入自傳	
include_once "./admin/autobiAll.php";

?>


</body></html>