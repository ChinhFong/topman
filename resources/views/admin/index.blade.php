<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/admin-style.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  </head>
  <body>
    <div class="container-fluid bg-login">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 login-logo">
            <img src="../img/icon-flag/topuse.png" alt="logo">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-4 login-form">
          <div class="login-header">
              <h3>Login</h3>
          </div>
          <form role="form" method="post"  action="{{url('/admin/home')}}" >
            {{ csrf_field() }}
            <div class="input-group login-input">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control" placeholder="Username">
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
            <br/>
            <div class="input-group login-input">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="text" class="form-control" placeholder="Password">
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
            <br/>
            <div class="checkbox-inline">
              <input type="checkbox" class="checkbox" id="remember_me" placeholder="">
              <label for="remember_me">Remember Me</label>
            </div>
            <button type="button" class="btn btn-primary pull-right" name="btn_login">Login</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
