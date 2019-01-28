<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<script>
        function iflogin(){
            var session = '{{Session::get('mem_id')}}';
            if(session==''){
                alert("請先登入會員");
            }
            else{
                var sure = document.getElementById("act_text").innerHTML;
                var sign = confirm("確認報名"+sure+"?");
                if(sign == true){
                    var act_id = document.getElementById("act_id").innerHTML;
                    location.href = "/index/sign?act_id="+act_id;
                }
            }
        }
    </script>-->
    <style>
        caption{
            background-color: #66FFFF;
            width:15cm;
            text-align: center;
        }
        .newhr{
            margin: 8px;
            width: 4px; 
            height: 40px; 
            border: none; 
            background-color:#00BBFF;
        }
        .acthr{
            margin: 8px;
            width: 4px; 
            height: 40px; 
            border: none; 
            background-color:red;
        }
        .tithr{
            width: 12cm; 
            height: 1px; 
            border: none; 
            background-color:red;
        }
        .tdhr{
            width: 8px;
        }
        img{
            width:100%;
        }
    </style>
</head>
<body>
    @if(isset($logout))
        <script>
            alert("已登出");
        </script>
    @elseif(isset($adlogout))
        <script>
            alert("已登出管理者系統");
        </script>
    @elseif(Session::has('mem_id') && $signok=='')
        <script>
            alert("登入成功");
        </script>
    @endif
    @if(isset($signok))
        @if(Session::has('mem_id'))
            <script>
                alert("報名成功");
            </script>
        @else
            <script>
                alert("請先登入會員");
            </script>
        @endif
    @endif
    <nav class="navbar navbar-default navbar-fixed-top" >
        <div class="container-fluid" style="background-color:white">
            <a class="navbar-brand" href="#"><strong><font color="#0066FF">輔仁大學資管系學會</font></strong></a>
            <div>
                <ul class="nav navbar-nav navbar-left">
                    @if(Session::has('mem_id'))
                        <li><a>會員:{{Session::get('mem_id')}} </a></li>
                        <li><a href="{{route('memlogout')}}">會員登出</a></li>
                    @endif
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a  href="#news">最新消息</a></li>
                    <li><a  href="#picture">活動花絮</a></li>
                    <li><a  href="#member">系會成員</a></li>
                    <li><a  href="#team">系隊簡介</a></li>
                    <li><a  href="#footer">聯絡資訊</a></li>
                    <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">進入系統<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('regis.view')}}"><span class="glyphicon glyphicon-user"></span> 會員註冊</a></li>
                            <li><a href="{{route('ismember')}}"><span class="glyphicon glyphicon-log-in"></span> 管理者/會員登錄</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container-fluid" style="padding-right:0px;margin-top:45px">
        <div class="row text-center" style="background-image:url('../dragon.jpeg');width:100%;height:400px">
            <h1 style="text-align:left;margin:30px"><span style="color:#E63F00;font-family:cursive;">輔大資訊管理學系</span></h1>
            <h1 style="text-align:left;margin:10px 220px"><span style="color:#E63F00;font-family:cursive;">系學會網站</span></h1>
        </div>
        <div class="row text-center">
            <p id="news"></p>
            <br>
            <h1 style="text-align: center">消息列表</h1>
            <hr class="tithr">
            <div class="col-md-6">
                <table style="width:90%"> 
                    <caption><span class="glyphicon glyphicon-list-alt"></span> <font color="black"><strong>活動報名列表</strong></font></caption>
                    @foreach($actdata as $key => $data)
                    <tr onMouseOver="this.style.backgroundColor='#EEFFBB';" onMouseOut="this.style.backgroundColor='';">
                        <td class="tdhr"><hr class="acthr"></td>
                        <!--<td style="display:none"><input type="text" name="act_id" value="{{$data->act_id}}"></td>-->
                        <td style="text-align:left">{{$data->act_text}}</p></td>
                        <td><a href="/index/sign?act_id={{$data->act_id}}"><input type="button" class="btn btn-warning"value="我要報名"></a>
                            <a href="{{$data->act_url}}"><input type="button" class="btn btn-info"value="點擊連結"></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-md-6">
                <table style="width:90%"> 
                    <caption><span class="glyphicon glyphicon-list-alt"></span> <font color="black"><strong>最新消息列表</strong></font></caption>
                    @foreach ($newsdata as $key => $data)
                    <tr onMouseOver="this.style.backgroundColor='#EEFFBB';" onMouseOut="this.style.backgroundColor='';">
                        <td class="tdhr"><hr class="newhr"></td>
                        <td style="text-align:left">{{$data->news_text}}</td>
                        <td><a href="{{$data->news_url}}"><input type="button" value="點擊連結" class="btn btn-primary"></a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="row text-center">
            <p id="picture"></p>
            <br>
            <h1 style="text-align: center">活動花絮</h1>
            <hr class="tithr">

            <div class="col-md-3">
                <div class="row text-center">
                    <a href="#" >
                    <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
                    <h4>及川連續發球得分!</h4></a>
                </div>
                <div class="row text-center">
                    <a href="#" >
                    <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/AvhMzHwiE_0/400x300" alt="">
                    <h4>宿營兩天三夜</h4></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row text-center">
                    <a href="#" >
                    <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
                    <h4>杰哥在天上飛</h4></a>
                </div>
                <div class="row text-center">
                    <a href="#" >
                    <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EUfxH-pze7s/400x300" alt="">
                    <h4>小李飛刀</h4></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row text-center">
                    <a href="#" >
                    <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EUfxH-pze7s/400x300" alt="">
                    <h4>太宰治</h4></a>
                </div>
                <div class="row text-center">
                    <a href="#" >
                    <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/M185_qYH8vg/400x300" alt="">
                    <h4>人間失格</h4></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row text-center">
                    <a href="#" >
                    <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/M185_qYH8vg/400x300" alt="">
                    <h4>萬花筒寫輪眼</h4></a>
                </div>
                <div class="row text-center">
                    <a href="#" >
                    <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EUfxH-pze7s/400x300" alt="">
                    <h4>100% smash</h4></a>
                </div>
            </div>    
        </div>
        <p id="member"></p>
        <br>
        <div class="row text-center">
            <h1 style="text-align: center">系會成員</h1>
            <hr class="tithr">
            <div id="myCarousel" class="carousel slide  col-md-6 col-md-offset-3" data-ride="carousel">
            <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

            <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <h3>指導老師: 廖建翔</h3>
                        <img src="https://source.unsplash.com/M185_qYH8vg/400x300" alt="Los Angeles" style="width:100%;">
                    </div>

                    <div class="item">
                        <h3>會長: 廖建翔</h3>
                        <img src="https://source.unsplash.com/M185_qYH8vg/400x300" alt="Chicago" style="width:100%;">
                    </div>
    
                    <div class="item">
                        <h3>副會長: 廖建翔</h3>
                        <img src="https://source.unsplash.com/M185_qYH8vg/400x300" alt="New york" style="width:100%;">
                    </div>
                </div>

            <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <p id="team"></p>
        <br>
        <div class="row text-center">
            <h1 style="text-align: center">系隊簡介</h1>
            <hr class="tithr">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">資管男籃</h4>
                            <div class="card-text">
                                <table style="width:80%;margin:auto 4cm">
                                    <tr>
                                        <td style="text-align:left">隊長: 簡孟獲</td>
                                        <td style="text-align:left">球經: 不知道</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left">副隊長: 傑哥飛</td>
                                        <td style="text-align:left">連絡電話: 0999999999</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">資管男排</h4>
                            <div class="card-text">
                                <table style="width:80%;margin:auto 4cm">
                                    <tr>
                                        <td style="text-align:left">隊長: 陳灝</td>
                                        <td style="text-align:left">球經: 村民</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left">副隊長: 及川</td>
                                        <td style="text-align:left">連絡電話: 0999999999</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">資管女排</h4>
                            <div class="card-text">
                                <table style="width:80%;margin:auto 4cm">
                                    <tr>
                                        <td style="text-align:left">隊長: 甲蟲王者</td>
                                        <td style="text-align:left">球經: 不知道</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left">副隊長: 荒垣渚</td>
                                        <td style="text-align:left">連絡電話: 0999999999</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">資管系羽</h4>
                            <div class="card-text">
                                <table style="width:80%;margin:auto 4cm">
                                    <tr>
                                        <td style="text-align:left">隊長: 羽咲</td>
                                        <td style="text-align:left">球經: 不知道</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left">副隊長: 荒垣渚</td>
                                        <td style="text-align:left">連絡電話: 0999999999</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p id="footer"></p>
        <br>
        <div class="row text-center" style="background-image:url('../star.jpg');width:100%;">
            <h1 style="text-align: center;color:white">聯絡資訊</h1>
            <hr class="tithr">
            
                <table style="width:50%;margin:auto 10cm;color:white;font-size:20px">
                @foreach($condata as $key => $data)
                    <tr>
                        <td>聯絡人: </td>
                        <td>{{$data->cont_per}}</td>
                    </tr>
                    <tr>
                        <td>聯絡電話: </td>
                        <td>{{$data->cont_phone}}</td>
                    </tr>
                    <tr>
                        <td>聯絡信箱: </td>
                        <td>{{$data->cont_email}}</td>
                    </tr>
                @endforeach
                </table>
            <br><br><br>
        </div>
    </div>
</body>
</html>