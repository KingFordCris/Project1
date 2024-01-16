<!DOCTYPE html>
<html lang="en">
        @include('inc.head')
        @include('inc.script.notable')
<body class="login-page sidebar-collapse">
<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
            <a class="navbar-brand" href="/">
                OSMS </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
            <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                    <a href="/register" style="color:white" class="btn btn-link btn-wd btn-lg "> <i class="material-icons">input</i>
                            Register</a>
            </ul>
            </div>
        </div>
        </nav>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

  <div class="page-header header-filter" style="background-image: url('material-kit/assets/img/admin2.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
      {{-- <div class="row"> --}}
        <div class="ml-auto mr-auto" style="max-width:5in" >
          <div class="card card-login">
            <form class="form" method="post" action="{{ route('login.custom') }}"">
               {{ csrf_field() }}
              <div class="card-header card-header-primary text-center">
                <h3 class="card-title">Login</h3>
              </div>
              <div class="card-body">

                  @if ($flash = session('error'))
                  <div class="alert alert-dismissible alert-danger">
                    <div class="alert-icons"><i class="material-icons">error_outline</i>
                    <button type="button" class="close" data-dismiss="alert"> &times;</button>
                      {{$flash}}
                  </div>
                </div>
                  @endif

                 <div class="input-group{{ $errors->has('id_num') ? ' has-error' : '' }}">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">tab</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" name="id_num" placeholder="ID-Number..." value="{{ old('id_num') }}" required autofocus>
                </div><small class="text-danger">{{ $errors->first('id_num') }}</small>
                <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons ">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" name="password" placeholder="Password..." required autofocus>
                </div><small class="text-danger">{{ $errors->first('password') }}</small>
                <br>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="d-flex w-100 justify-content-between">

                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    <small>Forgot Your Password?</small>
                                </a>
                          </div>
                    </div>
                </div>
                <div style="padding-left:1in" class="text-right">
                    <button type="submit" class="btn btn-primary btn-sm" >Login</button><br>
                    <small>Dont have an account?&nbsp;<a href="/register" class="link">click here</a></small>
                  </div>
            </div>
            </form>
          </div>
        </div>
      {{-- </div> --}}
    </div>
    <footer class="footer" data-background-color="black">
    <div class="container">

        <div class="copyright float-right">
        &copy;
        <script>
            document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        Team OSMS Capstone Project.
        </div>
    </div>
    </footer>
  </div>
</body>

</html>