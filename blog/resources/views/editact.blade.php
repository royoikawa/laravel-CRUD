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
    @if(isset($insert))
    <form method="post" action="{{route('edact.insert')}}">
        {{ csrf_field() }}
        <caption><span class="glyphicon glyphicon-list-alt"></span><font color="#FFAA33" size="4px"><strong>新增活動</strong></font></caption>
        <table rules="all" cellpadding='5'>
            <tr>
                <td>活動內容</td>
                <td>活動網址</td>
            </tr>
            <tr>
                <td><input type="text" name="act_text"></td>
                <td><input type="text" name="act_url"></td>
            </tr>
        </table>
        <input type="submit" class="btn btn-warning" style="color:white;margin-left:10px;width:5cm" value="確認新增">
        <a href="{{route('edact.view')}}"><input type="button" class="btn" style="background-color:#00BBFF;color:white;margin-left:10px;width:5cm" value="返回活動列表"></a>
    </form>
    @elseif(isset($update))
    <form method="post" action="{{route('edact.update')}}">
        {{ csrf_field() }}
        <caption><span class="glyphicon glyphicon-list-alt"></span><font color="#FFAA33" size="4px"><strong>編輯活動</strong></font></caption>
        <table rules="all" cellpadding='5'>
            <tr>
                <td>活動編號</td>
                <td>活動內容</td>
                <td>活動網址</td>
            </tr>
            <tr>
                <td><input type="text" name="act_id" value="{{$updatedata->act_id}}"></td>
                <td><input type="text" name="act_text" value="{{$updatedata->act_text}}"></td>
                <td><input type="text" name="act_url" value="{{$updatedata->act_url}}"></td>
            </tr>
        </table>
        <input type="submit" class="btn btn-warning" style="color:white;margin-left:10px;width:5cm" value="確認修改">
        <a href="{{route('edact.view')}}"><input type="button" class="btn" style="background-color:#00BBFF;color:white;margin-left:10px;width:5cm" value="返回活動列表"></a>
    </form>
    @else
    <form method="post" action="{{route('edact.search')}}">
        {{ csrf_field() }}
        <caption><span class="glyphicon glyphicon-list-alt"></span><font color="#FFAA33" size="4px"><strong>活動報名列表</strong></font></font><span style="margin-left:15cm"class="glyphicon glyphicon glyphicon-search"></span>&nbsp
        <input type="text" name="search" placeholder="在此輸入任一欄位資訊">&nbsp<input type="submit" class="btn" value="搜尋"></caption>
    </form>
        <table rules="all" cellpadding='5'>
            <tr>
                <td>活動編號</td>
                <td>活動內容</td>
                <td>活動網址</td>
                <td>&nbsp</td>
                <td>&nbsp</td>
                <td>&nbsp</td>
            </tr>
            @foreach ($actdata as $key => $data)
            <tr>
                <td>{{$data->act_id}}</td>
                <td>{{$data->act_text}}</td>
                <td>{{$data->act_url}}</td>
                <td><a href="/editact/delete?act_id={{$data->act_id}}"><input type="button" class="btn btn-danger" value="刪除"></a></td>
                <td><a href="/editact/updatepage?act_id={{$data->act_id}}"><input type="button" class="btn btn-primary" value="編輯"></a></td>
                <td><a href="/editact/edactsign?act_id={{$data->act_id}}"><input type="button" class="btn btn-warning" value="下載報名名單"></td>
            </tr>
            @endforeach
        </table>
        <a href="{{route('edact.insertpage')}}"><input type="button" class="btn" style="background-color:#00BBFF;color:white;margin-left:10px;width:5cm" value="新增活動">
    @endif
</body>
</html>