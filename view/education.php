
<h2 class="cent">新增 學歷與進修</h2>

<hr>
<form action="./api/add.php" method="post" 
      enctype="multipart/form-data" 
      style="width:60%;margin:auto">
<table>
    <tr>
        <td>學歷</td>
        <td><input type="text" name="level" id="level" style="color: white;"></<input></td>
    </tr>
    <tr>
        <td>教育單位</td>
        <td><input type="text" name="school" id="school" style="color: white;"></<input></td>
    </tr>        
   <tr>
        <td>主修</td>
        <td><input type="text" name="major" id="major" style="color: white;"></<input></td>
    </tr>
    <tr>
        <td>期間</td>
        <td><input type="text" name="period" id="period" style="color: white;"></<input></td>
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