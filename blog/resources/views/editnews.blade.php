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
    <form method="post" action="{{route('ednews.insert')}}">
        {{ csrf_field() }}
        <caption><span class="glyphicon glyphicon-list-alt"></span><font color="#FFAA33" size="4px"><strong>新增最新消息</strong></font></caption>
        <table rules="all" cellpadding='5'>
            <tr>
                <td>消息內文</td>
                <td>消息網址</td>
            </tr>
            <tr>
                <td><input type="text" name="news_text"></td>
                <td><input type="text" name="news_url"></td>
            </tr>
        </table>
        <input type="submit" class="btn btn-warning" style="color:white;margin-left:10px;width:5cm" value="確認新增">
        <a href="{{route('ednews.view')}}"><input type="button" class="btn" style="background-color:#00BBFF;color:white;margin-left:10px;width:5cm" value="返回最新消息列表"></a>
    </form>
    @elseif(isset($update))
    <form method="post" action="{{route('ednews.update')}}">
        {{ csrf_field() }}
        <caption><span class="glyphicon glyphicon-list-alt"></span><font color="#FFAA33" size="4px"><strong>編輯最新消息</strong></font></caption>
        <table rules="all" cellpadding='5'>
            <tr>
                <td>消息編號</td>
                <td>消息內文</td>
                <td>消息網址</td>
            </tr>
            <tr>
                <td><input type="text" name="news_id" value="{{$updatedata->news_id}}" readonly></td>
                <td><input type="text" name="news_text" value={{$updatedata->news_text}}></td>
                <td><input type="text" name="news_url" value={{$updatedata->news_url}}></td>
            </tr>
        </table>
        <input type="submit" class="btn btn-warning" style="color:white;margin-left:10px;width:5cm" value="確認修改">
        <a href="{{route('ednews.view')}}"><input type="button" class="btn" style="background-color:#00BBFF;color:white;margin-left:10px;width:5cm" value="返回最新消息列表"></a>
    </form>
    @else
    <form method="post" action="{{route('ednews.search')}}">
        {{ csrf_field() }}
        <caption><span class="glyphicon glyphicon-list-alt"></span><font color="#FFAA33" size="4px"><strong>最新消息列表</strong></font></font><span style="margin-left:15cm"class="glyphicon glyphicon glyphicon-search"></span>&nbsp
        <input type="text" name="search" placeholder="在此輸入任一欄位資訊">&nbsp<input type="submit" class="btn" value="搜尋"></caption>
    </form>
        <table rules="all" cellpadding='5'>
            <tr>
                <td>消息編號</td>
                <td>消息內文</td>
                <td>消息網址</td>
                <td>&nbsp</td>
                <td>&nbsp</td>
            </tr>
            @foreach ($newsdata as $key => $data)
            <tr>
            
                <td>{{$data->news_id}}</td>
                <td>{{$data->news_text}}</td>
                <td>{{$data->news_url}}</td>
                <td><a href="/editnews/delete?news_id={{$data->news_id}}"><input type="button" class="btn btn-danger" value="刪除"></a></td>
                <td><a href="/editnews/updatepage?news_id={{$data->news_id}}"><input type="button" class="btn btn-primary" value="編輯"></a></td>
           
            </tr>
            @endforeach
        </table>
        <a href="{{route('ednews.insertpage')}}"><input type="button" class="btn" style="background-color:#00BBFF;color:white;margin-left:10px;width:5cm" value="新增最新消息"></a>
    @endif
</body>
</html>