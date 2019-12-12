
<h2 class="cent">新增 工作經歷</h2>

<hr>
<form action="./api/add.php" method="post" 
      enctype="multipart/form-data" 
      style="width:60%;margin:auto">
<table>
    <tr>
        <td>期&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;間</td>
        <td><input type="text" name="period" id="period" style="color: white;"></<input></td>
    </tr>
    <tr>
        <td>公司名稱</td>
        <td><input type="text" name="company" id="company" style="color: white;"></<input></td>
   <tr>
        <td>職&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;稱</td>
        <td><input type="text" name="jobtitle" id="jobtitle" style="color: white;"></<input></td>
    </tr>
    <tr>
        <td>工作內容</td>
        <td><textarea name="jobs[]" id="jobs"
                      style="width:100%;height:150px;
                            margin:2.5px;padding:2.5px;
                            border-radius:2px;"></textarea></td>

    </tr>
         
    <tr class="cent">
        <td colspan="2">
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </td>
    </tr>
</table>
</form>