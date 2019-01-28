<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
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
<body>
<caption><span class="glyphicon glyphicon-list-alt"></span><font color="#FFAA33" size="4px"><strong>審核註冊列表</strong></font>
    
    <table rules="all" cellpadding='5';>

        <tr>

            <td>學號</td>

            <td>姓名</td>

            <td>系級</td>

            <td>註冊帳號</td>

            <td>註冊密碼</td>

            <td>信箱</td>

            <td>電話</td>

            <td></td>
            
            <td></td>
        </tr>
        @foreach ($regisdata as $key => $data)
            <tr>
                <td> {{ $data->regis_id }} </td>
                <td> {{ $data->regis_name }} </td>
                <td> {{ $data->regis_class }} </td>
                <td> {{ $data->regis_acc }} </td>
                <td> {{ $data->regis_password }} </td>
                <td> {{ $data->regis_email }} </td>
                <td> {{ $data->regis_phone }} </td>
                <td><a href="/registered/delete?regis_id={{$data->regis_id}}"><input type="button" class="btn btn-danger" value="刪除"></a></td>
                <td><a href="/managemember/get?regis_id={{$data->regis_id}}"><input type="button" class="btn btn-primary" value="核准"></a></td>
            </tr>
        @endforeach
    </table>
    <a href="{{route('manmem.view')}}"><input style="margin-left:15px"type="button" class="btn btn-primary" value="返回管理會員資訊"></a>
</body>