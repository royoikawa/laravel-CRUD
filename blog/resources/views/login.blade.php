<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}
body{
    background-size:cover;
}


.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}
.card-title{
    margin-bottom: 2rem;
    font-weight:900;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}



.btn-red {
  color: white;
  background-color: #ea4335;
}

.btn-blue {
  color: white;
  background-color: #3b5998;
}
    </style>
    <script>
        function turnad(){
            window.location.href="{{route('isadmin')}}";
        }
        function turnus(){
            window.location.href="{{route('ismember')}}";
        }
    </script>

    
</head>

<body style="background-image:url('../kimino.jpg');width:100%">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
      <br><br>
        <div class="card card-signin my-5" style="height:12cm;width:60%;margin:0px auto;">
          <div class="card-body">

      
            @if(isset($isadmin))
            @if(isset($accwrong))
              <script>
                alert("查無帳號");
              </script>
            @elseif(isset($passwrong))
              <script>
                alert("查無密碼");
              </script>
            @endif
            <h3 id="adtit" class="card-title text-center">管理者登錄</h3>
            <form class="form-signin" action="{{route('admin')}}" method="post">
              {{ csrf_field() }}
              <div class="form-label-group">
                <input type="text" name="man_acc" class="form-control" placeholder="帳號">
              </div>
              <div class="form-label-group">
                <input type="password" name="man_password" class="form-control" placeholder="密碼">
              </div>
              <input class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="adminlogin" value="管理者登入">
              <hr class="my-4">
              <button onclick="turnus()" id="turnuser" class="btn btn-lg btn-red btn-block text-uppercase" type="button"> 切換為會員登錄</button>
              <br>
              <a href="index"><button class="btn btn-lg btn-blue btn-block text-uppercase" type="button"> 回到首頁</button></a>
            </form>


            @else
            @if(isset($accwrong))
              <script>
                alert("查無帳號");
              </script>
            @elseif(isset($passwrong))
              <script>
                alert("查無密碼");
              </script>
            @elseif(isset($idwrong))
              <script>
                alert("查無學號");
              </script>
            @endif
            <h3 id="usertit" class="card-title text-center">學會會員登錄</h3>
            <form class="form-signin" action="{{route('member')}}" method="post">
              {{ csrf_field() }}
              <div class="form-label-group">
                <input type="text" name="mem_id" class="form-control" placeholder="學號">
              </div>
              <div class="form-label-group">
                <input type="text" name="mem_acc" class="form-control" placeholder="帳號">
              </div>
              <div class="form-label-group">
                <input type="password" name="mem_password" class="form-control" placeholder="密碼">
              </div>
              <input class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="memlogin" value="會員登入">
              <hr class="my-4">
              <button onclick="turnad()" id="turnadmin" class="btn btn-lg btn-red btn-block text-uppercase" type="button"> 切換為管理者登錄</button>
              <br>
              <a href="index"><button class="btn btn-lg btn-blue btn-block text-uppercase" type="button"> 回到首頁</button></a>
            </form>
            @endif


          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>