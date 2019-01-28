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
    </head>

<body style="background-image:url('../sakura.jpg');width:100%">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
      <br><br>
        <div class="card card-signin my-5" style="height:18cm;width:60%;margin:0px auto;">
          <div class="card-body">
            <h3 id="usertit" class="card-title text-center">會員註冊</h3>
            <form class="form-signin" action="{{route('regis.post')}}" method="post">
            {{ csrf_field() }}
              <div class="form-label-group">
                <input type="text" style="margin:8px 0" class="form-control" placeholder="姓名" name="regname" required>
                <input type="text" style="margin:8px 0" class="form-control" placeholder="學號" name="regid" required>
                <input type="text" style="margin:8px 0" class="form-control" placeholder="系級" name="regclass" required>
                <input type="text" style="margin:8px 0" class="form-control" placeholder="手機號碼" name="regphone" required>
                <input type="text" style="margin:8px 0" class="form-control" placeholder="電子信箱" name="regemail" required>
                <input type="text" style="margin:8px 0" class="form-control" placeholder="帳號" name="regacc" required>
                <input type="text" style="margin:8px 0" class="form-control" placeholder="密碼" name="regpassword" required>
              </div>
              
              <hr class="my-4">
              <button class="btn btn-lg btn-red btn-block text-uppercase" type="submit">註冊</button>
              
              <br>
              <a href="{{route('index')}}"><button class="btn btn-lg btn-blue btn-block text-uppercase" type="button"> 回到首頁</button></a>
            </form>
         
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>