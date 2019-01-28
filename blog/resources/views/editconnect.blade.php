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
    @if(isset($update))
    <form method="post" action="{{route('edcon.update')}}">
        {{ csrf_field() }}
        <caption><span class="glyphicon glyphicon-list-alt"></span><font color="#FFAA33" size="4px"><strong>編輯聯絡資訊</strong></font></caption>
        <table rules="all" cellpadding='5'>
            <tr>
                <td>編號</td>
                <td>聯絡人</td>
                <td>連絡電話</td>
                <td>聯絡信箱</td>
            </tr>
            <tr>
                <td><input type="text" name="cont_id" value="{{$updatedata->cont_id}}" readonly></td>
                <td><input type="text" name="cont_per" value="{{$updatedata->cont_per}}"></td>
                <td><input type="text" name="cont_phone" value="{{$updatedata->cont_phone}}"></td>
                <td><input type="text" name="cont_email" value="{{$updatedata->cont_email}}"></td>
                
            </tr>
        </table>
        <input type="submit" class="btn btn-warning" style="color:white;margin-left:10px;width:5cm" value="確認修改">
        <a href="{{route('edcon.view')}}"><input type="button" class="btn" style="background-color:#00BBFF;color:white;margin-left:10px;width:5cm" value="返回聯絡資訊"></a>
    </form>
    @else
        <caption><span class="glyphicon glyphicon-list-alt"></span><font color="#FFAA33" size="4px"><strong>編輯聯絡資訊</strong></font></caption>
        <table rules="all" cellpadding='5'>
            <tr>
                <td>編號</td>
                <td>聯絡人</td>
                <td>連絡電話</td>
                <td>聯絡信箱</td>
                <td>&nbsp</td>
            </tr>
            @foreach($condata as $key => $data)
            <tr>
                <td>{{$data->cont_id}}</td>
                <td>{{$data->cont_per}}</td>
                <td>{{$data->cont_phone}}</td>
                <td>{{$data->cont_email}}</td>
                <td><a href="/editconnect/updatepage?cont_id={{$data->cont_id}}"><input type="button" class="btn btn-primary" value="編輯"></td>
                
            </tr>
            @endforeach
        </table>
    @endif
</body>
</html>