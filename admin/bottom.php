<div style="width:99%; height:50%; 
            margin:auto; overflow:auto; ;">
  <p class="t cent botli">頁尾版權資料管理</p>
  <form method="post" action="./api/bottom.php">
    <table width="50%" style="margin:auto">
      <tbody>
        <tr class="yel">
          <td width="50%">頁尾版權資料：</td>
          <td width="50%">
            <input type="text" name="bottom" id="bottom" value="<?=find("bottom",1)['bottom'];?>">
          </td>
        </tr>
      </tbody>
    </table>
    <table style="margin-top:40px;margin:auto; width:50%;">
      <tbody>
        <tr>
          <td class="cent">
            <input type="submit" value="修改確定">
            <input type="reset" value="重置">
          </td>
        </tr>
      </tbody>
    </table>

  </form>
</div>