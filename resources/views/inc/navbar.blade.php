@if(Auth::check())
<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/admin/index" style="font-size:30px"><img src="{{ asset('material-kit/assets/img/logo/LOGO2.png') }}" alt="OSMS Logo" style="position:sticky; height:12mm;">
         OSMS </a>
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
                        <a class="nav-link" href="/admin/index">
                            <i class="material-icons">home</i>HOME
                        </a>
                    </li>
              <li class="dropdown nav-item">
                <a href="/posts/index" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
                    <i class="material-icons">wifi_tethering</i>Announcements<div class="ripple-container"></div></a>
                <div class="dropdown-menu">
                  <h6 class="dropdown-header">ANNOUNCENMENTS TAB</h6>
                  <div class="dropdown-divider"></div>
                  <a href="/posts/create" class="dropdown-item"><i class="material-icons">
                      control_point
                      </i>Add Announcement</a>
                  <a href="/posts/index" class="dropdown-item"><i class="material-icons">
                      launch
                      </i>View Announcements</a>
                  <a href="/posts/manage" class="dropdown-item"><i class="material-icons">
                      build
                      </i>Manage Announcements</a>
                  
                </div>
              </li>
              <li class="dropdown nav-item">
                  <a href="#pablo" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">how_to_reg </i>Scholars<div class="ripple-container"></div></a>
                  <div class="dropdown-menu">
                      <h6 class="dropdown-header">SCHOLARS TAB</h6>
                      <div class="dropdown-divider"></div>
                      <a href="/user/request" class="dropdown-item"><i class="material-icons">
                          person_add
                          </i>Requests</a>
                      <a href="/all/scholars" class="dropdown-item"><i class="material-icons">person</i>Manage Scholars</a>
                      {{-- <a href="#" class="dropdown-item"><i class="material-icons">
                          person_outline
                          </i>Manage Scholars</a> --}}
                  </div>
                </li>
                <li class="dropdown nav-item">
                    <a href="#pablo" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">school</i>Scholarships<div class="ripple-container"></div></a>
                    <div class="dropdown-menu">
                        <h6 class="dropdown-header">SCHOLARSHIPS TAB</h6>
                        <div class="dropdown-divider"></div>
                        <a href="/scholarship/add" class="dropdown-item"><i class="material-icons">
                            control_point
                            </i>Add Scholarship</a>
                        <a href="/scholarship/show" class="dropdown-item"><i class="material-icons">launch</i>View Scholarships</a>
                        <a href="/scholarship/manage" class="dropdown-item"><i class="material-icons">print</i>Generate Report</a>
                    </div>
                  </li>
                  <li class="dropdown nav-item">
                    <a href="#pablo" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">
                        account_circle
                        </i>ACCOUNTS<div class="ripple-container"></div></a>
                    
                        <div class="dropdown-menu">
                            <h6 class="dropdown-header">ACCOUNTS TAB</h6>
                            <div class="dropdown-divider"></div>
                            <a href="/users/request" class="dropdown-item"><i class="material-icons">
                                account_box
                                </i>Accounts Request</a>
                            <a href="/users/all" class="dropdown-item"><i class="material-icons">
                                contacts
                                </i>Manage Accounts</a>
                        </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/tutorials/index">
                        <i class="material-icons">info</i>HELP
                    </a>
                </li>
        
            </ul>

        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">

            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                 <i class="material-icons">face</i>
                  {{Auth::user()->name}}
            </a>
            <div class="dropdown-menu dropdown-with-icons">
                    <h6 class="dropdown-header">{{Auth::user()->email}}({{Auth::user()->id_num}})</h6>
                    <div class="dropdown-divider"></div>
              <a href="/logout" class="dropdown-item">
                <i class="material-icons">report</i> Log Out
              </a>
            </div>
          </li>

        </ul> 

      </div>
    </div>
  </nav>
  @endif 
