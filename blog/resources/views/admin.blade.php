<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function mgm(){ 
            var mgm = document.getElementById("changepage"); 
            mgm.src = "{{route('manmem.view')}}"; 
        }
        function edn(){
            var edn = document.getElementById("changepage"); 
            edn.src = "{{route('ednews.view')}}";
        } 
        function eda(){
            var eda = document.getElementById("changepage"); 
            eda.src = "{{route('edact.view')}}";
        } 
        function edc(){
            var edc = document.getElementById("changepage"); 
            edc.src = "{{route('edcon.view')}}";
        } 
        function edt(){
            var edt = document.getElementById("changepage"); 
            edt.src = "{{route('edteam.view')}}";
        } 
        function edm(){
            var edm = document.getElementById("changepage"); 
            edm.src = "{{route('edmem.view')}}";
        } 
        function edp(){
            var edp = document.getElementById("changepage"); 
            edp.src = "{{route('edpho.view')}}";
        } 
    </script>
    <style>
        #sidebar{
            position: fixed;
            width:15em;height:auto;
            top:10%;right:auto;bottom:120px;left:0;
            background-color:#DDDDDD;
        }
        #main{
            position:fixed;
            width:auto;height:auto;
            top:10%;right:0;bottom:120px;left:15em;
        }
        #footer{
            position:fixed;
            width:100%;height:120px;
            top:auto;right:0;bottom:0;left:0;
        }
        #iframe{
            width:90%;
            margin: 1cm 1cm;
            height:80%;
        }
        iframe{
            width:100%;
            height:100%;
        }
    </style>
<head>
<body>
    @if(Session::has('man_acc'))
        <script>
            alert("管理者成功登入"):
        </script>
    @endif
    <nav class="navbar navbar-default navbar-fixed-top" >
        <div  style="background-color:white">
            <a class="navbar-brand"><strong><font color="#0066FF">系學會管理者頁面</font></strong></a
            >
            <div>
                <ul class="nav navbar-nav navbar-left">
                    <li><a  href="{{route('adminout')}}">系統登出</a></li>
                </ul>
            </div>
            <p class="navbar-brand navbar-right" style="margin-right:5px"><font color="black">管理者: {{Session::get('man_acc')}}</font></p>
        </div>
    </nav>

    <div id="sidebar">
        <div>
            <button type="button" class="btn btn-info" style="width:100%;margin-bottom:2px" onclick="mgm()">管理會員資訊&nbsp<span class="glyphicon glyphicon-circle-arrow-right"></span></button>
            <button type="button" class="btn btn-info" style="width:100%;margin-bottom:2px" onclick="edn()">編輯最新消息&nbsp<span class="glyphicon glyphicon-circle-arrow-right"></span></button>
            <button type="button" class="btn btn-info" style="width:100%;margin-bottom:2px" onclick="eda()">編輯活動報名&nbsp<span class="glyphicon glyphicon-circle-arrow-right"></span></button>
            <button type="button" class="btn btn-info" style="width:100%;margin-bottom:2px" onclick="edp()">編輯活動相簿&nbsp<span class="glyphicon glyphicon-circle-arrow-right"></span></button>
            <button type="button" class="btn btn-info" style="width:100%;margin-bottom:2px" onclick="edm()">編輯系會成員&nbsp<span class="glyphicon glyphicon-circle-arrow-right"></span></button>
            <button type="button" class="btn btn-info" style="width:100%;margin-bottom:2px" onclick="edt()">編輯系隊簡介&nbsp<span class="glyphicon glyphicon-circle-arrow-right"></span></button>
            <button type="button" class="btn btn-info" style="width:100%;margin-bottom:2px" onclick="edc()">編輯聯絡資訊&nbsp<span class="glyphicon glyphicon-circle-arrow-right"></span></button>
        </div>
    </div>
    <div id="footer" style="background-image:url('../snow.jpg');width:100%;height:120px">
    </div>
    <div id="main" style="background-image:url('../cloud.jpg')">
        <div id="iframe">
            <iframe id="changepage" src="{{route('manmem.view')}}">
        </div>
    </div>
</body>
</html>