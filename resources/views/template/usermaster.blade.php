<!DOCTYPE html>
  <html lang="en">
    {{-- THIS IS THE HEAD(META,LINKS) --}}
    @include('inc.head')
    {{-- LOADING SPINNER --}}
    @include('inc.script.notable')
  </div>
    {{-- START OF BODY --}}
    <body class="index-page sidebar-collapse">
      {{-- NAVIGATION BAR INCLUDED HERE --}}
      @include('userPages.inc.navbar')
      {{-- HEADER PICTURE  --}}
        @include('inc.header')
        
          <div class="main main-raised">
              @if ($flash = session('message'))
              <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{$flash}}
              </div>
              @endif           
            @yield('content')
            @include('inc.support')
          </div>
          {{-- FOOTER SECTION --}}
          @include('inc.footer')
        {{-- SCRIPTS AND BEHAVIORS --}}
        
    </body>
  </html>