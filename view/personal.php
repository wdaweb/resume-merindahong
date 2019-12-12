<h3 class="cent">個人資料新增</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data" 
style="width:60%;margin:auto">
<table>
    
    <tr>
        <td>姓名</td>
        <td><input type="text" name="text" id="text" style="color: white;"></td>
    </tr>
    <tr>
        <td>電話</td>
        <td><input type="text" name="phone" id="phone" style="color: white;"></td>
    </tr>
    <tr>
        <td>電子信箱</td>
        <td><input type="text" name="email" id="email" style="color: white;"></td>
    </tr>
    <tr>
        <td>生日</td>
        <td><input type="text" name="birthday" id="birthday" style="color: white;"></td>
    </tr>
    <tr>
        <td>聯絡地址</td>
        <td><input type="text" name="addr" id="addr" style="color: white;"></td>        
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