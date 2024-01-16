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
                   <a href="/login" style="color:white" class="btn btn-link btn-wd btn-lg "> <i class="material-icons">perm_identity</i>Login</a>

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
          <div class="col-md-6 ml-auto mr-auto" >
              @if ($flash = session('message'))
              <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                  {{$flash}}
              </div> <br>
              @endif
          </div>
          <div class="col-md-6 ml-auto mr-auto" >

            <div class="card card-login" style="height:5.5in">
              <form class="form" method="POST" action="/register">
                  {{-- {{ route('register') }} --}}
                  {{ csrf_field() }}
                <div class="card-header card-header-primary text-center">
                  <h3 class="card-title">Register</h3>
                
                </div>

                
                  <div class="card-body" style="height:auto">

                    <div class="input-group{{ $errors->has('id_num') ? ' has-error' : '' }}">
                      <span class="input-group-text">
                        <i class="material-icons">tab</i>
                      </span>
                    <input id="id_num" type="text" class="form-control" name="id_num" value="{{ old('id_num') }}" required placeholder="ID Number..">
                  </div>
                  <small class="text-danger">{{ $errors->first('id_num') }}</small>

                    
                  <div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      <span class="input-group-text">
                        <i class="material-icons">face</i>
                      </span>
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="username..">
                  </div>
                  <small class="text-danger">{{ $errors->first('name') }}</small>

                  <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">            
                      <span class="input-group-text"><i class="material-icons">mail</i></span>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="email..">
                  </div><small class="text-danger">{{ $errors->first('email') }}</small>

                  <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <span class="input-group-text">
                        <i class="material-icons ">lock_outline</i>
                      </span>
                    <input type="password" class="form-control" id="password" name="password" required placeholder="password...">
                  </div><small class="text-danger">{{ $errors->first('password') }}</small>
                  
                  <div class="input-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                      <span class="input-group-text">
                      <i class="material-icons ">lock_outline</i>
                      </span>
                  <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="confirm password...">
                  </div><small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                  <div class="footer text-center">
                    <button type="submit" class="btn btn-primary">Register</button><br>
                  </div>
                  
                </div>
                
                  <p class="text-center"><small >By registering you agree to the <a href="/terms/conditions">Terms and Policy of OSMS</a> </small></p>
                
 
              
              </form>
            </div>
          </div>
       
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