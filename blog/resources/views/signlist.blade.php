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
<caption><span class="glyphicon glyphicon-list-alt"></span><font color="#FFAA33" size="4px"><strong>報名列表</strong></font>
        <table rules="all" cellpadding='5'>
            <tr>
                <td>編號</td>
                <td>報名學號</td>
                <td>姓名</td>
                <td>系級</td>
            </tr>
            @foreach ($signlistdata as $key => $data)
            <tr>
                <td>{{$data->signlist_id}}</td>
                <td>{{$data->mem_id}}</td>
                <td>{{$data->mem_name}}</td>
                <td>{{$data->mem_class}}</td>
            </tr>
            @endforeach
        </table>
        <a href="{{route('edact.view')}}"><input style="margin-left:15px"type="button" class="btn btn-primary" value="返回活動管理頁"></a>
</body>
</html>