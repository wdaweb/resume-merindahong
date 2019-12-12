<h3 class="cent">新增作品</h3>
<hr>
<form action="./api/add.php" method="post" 
enctype="multipart/form-data" style="width:40%;margin:auto">


<table>
    <tr class="cent">
        <td><input type="file" name="file" id="file">    
            <input type="hidden" name="table" value="<?=$_GET['table'];?>"></td>
    </tr>

    <tr class="cent">
        <td>
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </td>
    
        
    </tr>
</table> 
</form>