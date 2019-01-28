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
    @if(isset($edit))
        <caption><span class="glyphicon glyphicon-list-alt"></span><font color="#FFAA33" size="4px"><strong>修改會員資訊</strong></font></caption>
        <form method="post" action="{{route('manmem.update')}}">
        {{ csrf_field() }}
        <br>
        <table rules="all" cellpadding='5';>
            <tr>
                <td>學號</td>
                <td>姓名</td>
                <td>系級</td>
                <td>帳號</td>
                <td>密碼</td>
                <td>信箱</td>
                <td>手機號碼</td>
            </tr>
            <tr>
                <td><input type="text" name="mem_id" value={{$updatedata->mem_id}} readonly></td>
                <td><input type="text" name="mem_name" value={{$updatedata->mem_name}}></td>
                <td><input type="text" name="mem_class" value={{$updatedata->mem_class}}></td>
                <td><input type="text" name="mem_acc" value={{$updatedata->mem_acc}}></td>
                <td><input type="text" name="mem_password" value={{$updatedata->mem_password}}></td>
                <td><input type="text" name="mem_email" value={{$updatedata->mem_email}}></td>
                <td><input type="text" name="mem_phone" value={{$updatedata->mem_phone}}></td>
            </tr>
        </table>
        <a href="{{route('manmem.view')}}"><input type="button" class="btn" style="background-color:#00BBFF;color:white;margin-left:10px;width:5cm" value="返回會員資訊列表"></a>
        <input type="submit" class="btn btn-danger" style="margin-left:10px;width:5cm" value="確認修改">
        </form>
    @else
        <form method="post" action="{{route('manmem.search')}}">
        {{ csrf_field() }}
        <caption><span class="glyphicon glyphicon-list-alt"></span><font color="#FFAA33" size="4px"><strong>會員資訊列表</strong></font><span style="margin-left:15cm"class="glyphicon glyphicon glyphicon-search"></span>&nbsp
        <input type="text" name="searchdata" placeholder="在此輸入任一欄位資訊">&nbsp<input type="submit" class="btn" value="搜尋"></form></caption>
        <table rules="all" cellpadding='5';>
            <tr>
                <td>學號</td>
                <td>姓名</td>
                <td>系級</td>
                <td>帳號</td>
                <td>密碼</td>
                <td>信箱</td>
                <td>手機號碼</td>
                <td>&nbsp</td>
                <td>&nbsp</td>
            </tr>
            @foreach ($memdata as $key => $data)
            <tr>
                <td>{{ $data->mem_id }}</td>
                <td>{{ $data->mem_name }}</td>
                <td>{{ $data->mem_class }}</td>
                <td>{{ $data->mem_acc }}</td>
                <td>{{ $data->mem_password }}</td>
                <td>{{ $data->mem_email }}</td>
                <td>{{ $data->mem_phone }}</td>
                <td><a href="/managemember/delete?mem_id={{$data->mem_id}}"><input type="button" class="btn btn-danger" value="刪除"></a></td>
                <td><a href="/managemember/updatepage?mem_id={{$data->mem_id}}"><input type="button" class="btn btn-primary" value="編輯"></a></td>
            </tr>
            @endforeach
        </table>
    
    <a href="{{route('regis.check')}}"><input type="button" class="btn" style="background-color:#00BBFF;color:white;margin-left:10px;width:5cm" value="新增申請註冊會員"></a>
    @endif
</body>
</html>