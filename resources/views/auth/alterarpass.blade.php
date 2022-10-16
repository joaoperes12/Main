
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge, chrome=1, ">
  <title>Login</title>
  <link href="{{asset('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/login.css')}}">
  <script src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}"></script>
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div>
            <a href="{{route('admin')}}"><img src="{{asset('img/logo.png')}}" height="80px" width="80px" alt="logo" class="logo"></a>
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Alterar Password</h1>
            <form method="POST" action="{{route('users.updatepass')}}">
              @csrf

              <div class="form-group mb-4">
                <label for="apassword">password antiga:</label>
                <input type="password" name="password_ant" id="apassword" class="form-control" placeholder="escreve a tua password antiga">
                 @error('password_ant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="escreve a tua nova password">

                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
               <div class="form-group mb-4">
                <label for="cpassword">Confirme a password:</label>
                <input type="password" name="password_confirmation" id="cpassword" class="form-control" placeholder="confirma a tua password">
              </div>
              <input name="login" id="login" class="btn btn-block btn-danger" type="submit" value="Guardar">
            </form>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="{{asset('img/14.jpg')}}" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main>

</body>
</html>
