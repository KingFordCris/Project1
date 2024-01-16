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
            <li class="nav-item">
                    <a class="nav-link" href="/user/index">
                        <i class="material-icons">event_note</i>HOME
                    </a>
            </li>
            </ul>
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <div class="dropdown-menu dropdown-with-icons">
                <h6 class="dropdown-header">{{Auth::user()->email}}({{Auth::user()->id_num}})</h6>
              <a href="/user/addprofile/add" class="dropdown-item">
                <i class="material-icons">layers</i> View/Edit Profile
              </a>
              <a href="/logout" class="dropdown-item">
                <i class="material-icons">content_paste</i> Log Out
              </a>
            </div>
          </li>

        </ul> 

      </div>
    </div>
  </nav>
