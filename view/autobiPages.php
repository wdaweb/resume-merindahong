
<h2 class="cent">新增自傳內容</h2>

<hr>
<form action="./api/add.php" method="post" 
      enctype="multipart/form-data" 
      style="width:60%;margin:auto">
<table width="70%">
    <tr>
        <td width="10%" style="vertical-align:top; text-align: right; color: white;">階&nbsp;&nbsp;&nbsp;&nbsp;段：</td>
        <td><input type="text" name="phase" id="phase" style="color: white;"></input></td>
    </tr>
    <tr>
        <td width="80%" style="vertical-align:top; text-align: right;">內&nbsp;&nbsp;&nbsp;&nbsp;容：</td>
        <td><textarea name="content" id="content"
                      style="width:150%;height:250px;                            
                            margin:2.5px;padding:2.5px;
                            border-radius:2px;">                        
            </textarea>
        </td>
    </tr>

    <tr>
        <td></td>
        <td>
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="submit" value="新增">
        </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="reset" value="重置"></td>
    </tr>

</table>
</form>