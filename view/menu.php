<h3 class="cent">選單新增</h3>
<hr>
<form action="./api/add.php" method="post" 
enctype="multipart/form-data" style="width:60%;margin:auto">
<table>
    <tr>
        <td>主選單名稱：</td>
        <td><input type="text" name="text" style="color: white;"></td>
    </tr>
    <tr>
        <td>選單連結網址：</td>
        <td><input type="text" name="href" style="color: white;"></td>
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