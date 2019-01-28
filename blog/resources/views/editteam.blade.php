<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
    td{
        padding:2px 2px;
    }
    table{
        border:1px solid;
        width:25cm;
        margin-left:10px;
        margin-top:5px;
        margin-bottom:8px;
    }
    tr:hover{
       background-color:#EEFFBB;
    }
</style>
</head>
<body>
    <form>
        <caption><span class="glyphicon glyphicon-list-alt"></span><font color="#FFAA33" size="4px"><strong>系隊簡介列表</strong></font></font><span style="margin-left:15cm"class="glyphicon glyphicon glyphicon-search"></span>&nbsp
        <input type="text" name="search" placeholder="在此輸入任一欄位資訊">&nbsp<input type="button" class="btn" value="搜尋"></caption>
        <table rules="all" cellpadding='5'>
            <tr>
                <td>&nbsp</td>
                <td>隊長</td>
                <td>副隊長</td>
                <td>連絡電話</td>
                <td>球經</td>
                <td>封面圖檔</td>
                <td>&nbsp</td>
            </tr>
            <tr>
                <td><strong>系籃</strong></td>
                <td><input type="text" style="width:2cm" value="簡孟獲"></td>
                <td><input type="text" style="width:2cm" value="傑哥飛"></td>
                <td><input type="text" style="width:4cm" value="0909999000"></td>
                <td><input type="text" style="width:2cm" value="某某某"></td>
                <td><input type="file" accept="image/*"></td>
                <td><input type="button" class="btn btn-primary" value="編輯"></td>
            </tr>
            <tr>
                <td><strong>系男排</strong></td>
                <td><input type="text" style="width:2cm" value="陳灝"></td>
                <td><input type="text" style="width:2cm" value="及川"></td>
                <td><input type="text" style="width:4cm" value="0899999999"></td>
                <td><input type="text" style="width:2cm" value="某某某"></td>
                <td><input type="file" accept="image/*"></td>
                <td><input type="button" class="btn btn-primary" value="編輯"></td>
            </tr>
            <tr>
                <td><strong>系女排</strong></td>
                <td><input type="text" style="width:2cm" value="某某某"></td>
                <td><input type="text" style="width:2cm" value="某某某"></td>
                <td><input type="text" style="width:4cm" value="0899999999"></td>
                <td><input type="text" style="width:2cm" value="某某某"></td>
                <td><input type="file" accept="image/*"></td>
                <td><input type="button" class="btn btn-primary" value="編輯"></td>
            </tr>
            <tr>
                <td><strong>系羽</strong></td>
                <td><input type="text" style="width:2cm" value="某某某"></td>
                <td><input type="text" style="width:2cm" value="某某某"></td>
                <td><input type="text" style="width:4cm" value="0899999999"></td>
                <td><input type="text" style="width:2cm" value="某某某"></td>
                <td><input type="file" accept="image/*"></td>
                <td><input type="button" class="btn btn-primary" value="編輯"></td>
            </tr>
        </table>
        <input type="button" class="btn" style="background-color:#00BBFF;color:white;margin-left:10px;width:5cm" value="新增系隊">
        <input type="submit" class="btn btn-warning" style="color:white;margin-left:10px;width:5cm" value="儲存更改">
    </form>
</body>
</html>