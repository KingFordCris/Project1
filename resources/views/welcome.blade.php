<!DOCTYPE html>
<html lang="en">
@include('inc.head')
@include('inc.script.notable')
<body class="landing-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse ">
          <ul class="navbar-nav ml-auto">
          </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('material-kit/assets/img/admin.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class=" text-center" style="text-shadow:black 2px 4px;"> <b> Online Scholarship Management System</b></h1>
          
        <div class="text-center logo"><img src="{{ asset('material-kit/assets/img/logo/LOGO2.png') }}" alt="OSMS Logo" style="width:20%;height:auto"/></div>
          <p class="text-center" style="text-shadow:black 2px 4px 3px;color:#ffcc00; font-size:30px">Cagayan State University - Gonzaga Campus</p>
        
          <div class="text-center" style="text-shadow:black 2px 4px 2px">
          <a href="/login" target="_self"  class="btn btn-primary btn-raised btn-round">
            <i class="material-icons">input</i> Login
          </a>
          <a href="/register" target="_self" class="btn btn-rose btn-raised btn-round">
            <i class="material-icons">perm_identity</i>Register
          </a>
        </div>
        </div> 
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">ABOUT CAGAYAN STATE UNIVERSITY</h2>
            <H3>VISION</H3>
            <h5 class="description">Transforming lives by educating for the best.</h5>
            <H3>MISSION</H3>
            <h5 class="description">Cagayan State University is committed to transform the lives of people and communities through high quality instruction and innovative research development, production and extension.</h5>
            <H3>CORE VALUES</H3>
            <h5 class="description">
              Competence <br> Social Responsibility <br> Unifying Presence
            </h5>
            <h2 class="title">ABOUT THE SYSTEM</h2>
            <h5 class="description">Scholarship management is never been this easy before. This system is intended to all scholars at Cagayan State University – Gonzaga in the information management, report generating tool, innovative way for announcements and most especially it&apos;s user-friendly and a ease of work.</h5>

          </div>
        </div>
        <div class="features">
            <h2 class="title">FEATURES</h2>
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">chat</i>
                </div>
                <h4 class="info-title">Announcement's and Comment's</h4>
                <p>A portal to give announcement's or information directly accessible to scholars for updates in their scholarship, as well as scholars, can give feedback by commenting on an announcement.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title">Scholarship's and Scholar's Management</h4>
                <p>
                    Looking or applying to a scholarship is just now a piece of a cake all just what it needs is an account in the system and all the processes can be done easily, every registered student can view all available scholarships and the requirements needed because it stores the data of scholars and scholarships.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">print</i>
                </div>
                <h4 class="info-title">Printing and Report Generator</h4>
                <p>
                    Scholars report consumes a lot of time but this problem will make this process a glitch of the eyes because it will generate a downloadable report (PDF and Excel File) ready at any time.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section text-center">
        <h2 class="title">HERE IS OUR TEAM</h2>
        <div class="team">
          <div class="row">
    <div class="col-md-3">
            <div class="team-player">
                <div class="card card-plain">
                <div class="col-md-6 ml-auto mr-auto">
                   
                    <img src="material-kit/assets/img/developer/Lovely.png" alt="Resource Manager" class="img-raised rounded-circle img-fluid">
                </div>
                <h4 class="card-title">Lovely Joy Costales
                    <br>
                    <small class="card-description text-muted">Resources Manager</small>
                </h4>
                <div class="card-body">
                    <p class="card-description">
                        I'm Lovely Joy a hard-working student to pursue my dreams so that I can help my parents in the future and I dedicate this capstone project to them because everything that I have and who am I today and in the future is nothing without them and above all to Almighty God who makes this project possible.
                    </p>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="https://web.facebook.com/lovelyjoy.costales" target="_blank" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-3">
              <div class="team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                      <img src="material-kit/assets/img/developer/Edmarie.png" alt="Resource Manager" class="img-raised rounded-circle img-fluid">
                  </div>
                  <h4 class="card-title">Edmarie Ibera
                    <br>
                    <small class="card-description text-muted">Librarian</small>
                  </h4>
                  <div class="card-body">
                    <p class="card-description">
                        I’m Edmarie a strong and independent woman who continue to fight of all the trials and difficulties in life, I dedicate this project to God who makes me strong at all times and of course to my beloved parents who supported me throughout my journey.
                    </p>
                  </div>
                  <div class="card-footer justify-content-center">
                    <a href="https://www.instagram.com/edmarie_i/" target="_blank" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                    <a href="https://web.facebook.com/eiramed.ibera.1?ref=br_rs" target="_blank" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                      <img src="material-kit/assets/img/developer/twin.png" alt="Resource Manager" class="img-raised rounded-circle img-fluid">
                  </div>
                  <h4 class="card-title">Twinford Cris Compa
                    <br>
                    <small class="card-description text-muted">Programmer</small>
                  </h4>
                  <div class="card-body">
                    <p class="card-description">
                        I’m Twinford a man of my word who makes academic seriously many misunderstand my side but I’m just a person who wants to give the best on my academic because I have a dream to finish my study so that I can help my parents who sacrifice everything just for me to pursue my education. I dedicate this piece of hard-work to God who guided me and to my family especially my parents.
                    </p>
                  </div>
                  <div class="card-footer justify-content-center">
                    <a href="https://twitter.com/mykingford" target="_blank" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/hariford/" target="_blank" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                    <a href="https://web.facebook.com/kingford.compa" target="_blank" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                    <img src="material-kit/assets/img/developer/janine.png" alt="Resource Manager" class="img-raised rounded-circle img-fluid">
                  </div>
                  <h4 class="card-title">Janine Villa 
                    <br>
                    <small class="card-description text-muted">Asst. Front-end Programmer</small>
                  </h4>
                  <div class="card-body">
                    <p class="card-description">
                        I’m Janine a reliable and trustworthy person with a big dream for my family to pay back all their sacrifices to me, that's why I dedicate this capstone project to them and to all the people who were part of my journey.
                    </p>
                  </div>
                  <div class="card-footer justify-content-center">
                    <a href="https://web.facebook.com/jhanine.serrano.09" target="_blank" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  @include('inc.scripts')
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> --}}
</body>
<footer class="footer" data-background-color="black">
  <div class="container">
    <nav class="float-left">
      <ul>
        <li>
          <a href="http://csu.edu.ph/campus-gonzaga.php" target="_blank">
            Cagayan State University - Gonzaga Campus
          </a>
        </li>


      </ul>
    </nav>
    <div class="copyright float-right">
      &copy;
      <script>
        document.write(new Date().getFullYear())
      </script>, made with <i class="material-icons">favorite</i> in <a href="http://www.laravel.com" target="_blank" class="link">Laravel</a> Framework  by
      Team OSMS Capstone Project.
    </div>
  </div>
</footer>

</html>