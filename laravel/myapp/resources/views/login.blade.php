<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>



    <style>
        :root{
  --main-bg:#e91e63;
}

.main-bg {
  background: var(--main-bg) !important;
}

input:focus, button:focus {
  border: 1px solid var(--main-bg) !important;
  box-shadow: none !important;
}

.form-check-input:checked {
  background-color: var(--main-bg) !important;
  border-color: var(--main-bg) !important;
}

.card, .btn, input{
  border-radius:0 !important;
}

.has-error {

border: 1px solid red;

}

    </style>
</head>
<body class="main-bg">
    <!-- Login Form -->
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card shadow">
            <div class="card-title text-center border-bottom">
              <h2 class="p-3">Login</h2>
            </div>
            <div class="card-body">
              <form id='form-data' name='form-data'>
                @csrf
                <div class="mb-4">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" name="username" />
                  @if ($errors->has('username'))
                    <span class="text-danger">{{ $errors->first('username')}}</span>
                  @endif
                </div>
                <div class="mb-4">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password" />
                  @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password')}}</span>
                  @endif
                </div>
                {{-- <div class="mb-4">
                  <input type="checkbox" class="form-check-input" id="remember" />
                  <label for="remember" class="form-label">Remember Me</label>
                </div> --}}
                <div class="d-grid">
                  <button type="submit" name="submit" id="submit" class="btn text-light main-bg" onclick=login()>Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="
        https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js
">
</script>
<script>
function login()
{
// if ($('#username').val()== "") {

//     $('#username').addclass('has-error')

// }
// else if($('#password').val()== "")
// {
//     $('#password').addclass('has-error')
// }
// else{
//     alert('sucess');
// }
var data = $('#form-data').serialize();
$.ajaxsetup({
    headers:{
'x-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    }
});

alert(data);

$.ajax({
url:'/check',
type:'POST',
data:data,
success:function(response){
    console.log(response);
}
});
}
</script>
  </body>
</html>
