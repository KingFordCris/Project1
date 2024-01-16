<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/user/index" style="font-size:30px"><img src="{{ asset('material-kit/assets/img/logo/LOGO2.png') }}" alt="OSMS Logo" style="position:sticky; height:12mm;">
         OSMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
          <ul class="navbar-nav"> 
            @yield('navbar')            
          </ul> 

      </div>
    </div>
  </nav>