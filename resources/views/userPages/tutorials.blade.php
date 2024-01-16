@extends('userPages.inc.navbar')
@section('navbar')
<li class="nav-item">
        <a class="nav-link" href="/user/index">
            <i class="material-icons">home</i>HOME
        </a>
</li>
<li class="dropdown nav-item active">
        <a  class="nav-link" href="/user/tutorials">
        <i class="material-icons">info</i>HELP</a>                  
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
            <a href="/user/addprofile/add" class="dropdown-item">
             <i class="material-icons">school</i>SCHOLARSHIP
            </a>
            <a href="/user/me/{{Auth::user()->name}}" class="dropdown-item">
              <i class="material-icons">person</i>PROFILE
             </a>
            <a href="/logout" class="dropdown-item">
             <i class="material-icons">report</i> Log Out
            </a>
          </div>
        </li>
      </ul>
@endsection

@extends('template.usermaster')
@section('content')
@include('inc.errors')
<div class="card card-nav-tabs">
  <div class="card-header card-header-primary">
      <div class="text-center icon icon-info"><i class="material-icons"  style="text-shadow:black 2px 4px 2px;font-size:40px ">wifi_tethering</i></div>
      <h3 class="text-center" style="text-shadow:black 2px 4px 2px">TUTORIALS</h3>
  </div>
</div>
<div class="container">
<h3 class="title"> <i>SCHOLARSHIP</i> </h3>
        <p>     
            <button class="btn btn-block" type="button" style="background-color:red" data-toggle="collapse" data-target="#FIRSTTIME" aria-expanded="false" aria-controls="collapseExample">
                APPLY SCHOLARSHIP FOR THE FIRST TIME
            </button>
           
        </p>
        <div class="collapse" id="FIRSTTIME">
            <div class="card card-body">
                <ol>
                <li><b>FIRST THING FIRST</b></li>
                   You must choose a scholarship from the available scholarships in the index that matches your credibility from the given requirements.<br>
                <li><b>CLICK APPLY NOW</b></li>
                Click the button <strong> Apply Now</strong> to enter in the instruction on how to apply for a particular scholarship.
                <li><b>FOLLOW THE INSTRUCTIONS</b></li>
                There are several instructions in the scholarship for you to apply so you must follow it strictly.
                </ol>
            </div>
        </div>
        <p>
            <button class="btn btn-primary btn-block" type="button"  style="background-color:orange" data-toggle="collapse" data-target="#PROFILE" aria-expanded="false" aria-controls="collapseExample">
                    ADD PROFILE
            </button>
        </p>
        <div class="collapse" id="PROFILE">
                <div class="card card-body">
                    <ol>
                    <li><b>FIRST THING TO KNOW</b></li>
                    One direction of every scholarship is to fill up a profile form to collect needed data from you, this serves as your application as well as your information in the scholarship if ever you will be approved.
                    <li><b>FILL-UP YOUR PROFILE</b></li>
                    To fill up the profile application make sure to:
                        <ul>
                            <li>Fill up all the fields</li>
                            <li>Don't fake or make fun on data being inputted</li>
                            <li>Put correct data only or be Honest</li>
                            <li>and most importantly, submit before it was filled-up</li>
                        </ul>
                    <li><b>SUBMISSION</b></li>
                       Upon submission of your profile application it will be pending for the approval by the administrator. You will be notified through your email that you used to register in the system if your application will be approved 
                    </ol>
                </div>
            </div>  
            <p>
                <button class="btn btn-primary btn-block" type="button"  style="background-color:gold" data-toggle="collapse" data-target="#RENEW" aria-expanded="false" aria-controls="collapseExample">
                        RENEW SCHOLARSHIP
                </button>
            </p>  
            <div class="collapse" id="RENEW">
                    <div class="card card-body">
                        <ol>
                        <li><b>FIRST THING TO KNOW</b></li>
                            It's important to know that in the renewal of scholarship you must be aware that whatever the name of the scholarship you are renewing is matched on your current scholarship.
                        <li><b>RENEWING</b></li>
                            The process of application is the same with renewal you must Fist pick your scholarship in the index and click <strong>apply now</strong> or click on the right side tab and choose scholarship to enter to the profile form.
                        <li><b>FILL-UP PROFILE FORM</b></li>
                          To fill up the profile form for the renewal, you must choose the scholarship that <strong> MUST have the same name </strong> of your current scholarship but <strong>a different year</strong> (year must be the current year) 
                          <li><b>SUBMISSION</b></li>
                          Upon submission, the administrator will filter and validate your application if you are qualified. Notification will be sent to your email if it will be approved. 
                        </ol>
                    </div>
                </div>  
    <h3 class="title"> <i>ANNOUNCEMENTS</i> </h3>
    <p>
        <button class="btn btn-primary btn-block" type="button"  style="background-color:green" data-toggle="collapse" data-target="#ANNOUNCEMENTS" aria-expanded="false" aria-controls="collapseExample">
                ABOUT ANNOUNCEMENTS
        </button>
    </p>  
    <div class="collapse" id="ANNOUNCEMENTS">
        <div class="card card-body">
            <ol>
            <li><b>FIRST THING TO KNOW</b></li>
            The old system of disseminating or echoing announcements to the scholars is by posting on bulletin of every college or by tackling after flag ceremony
             but the system integrates an innovation of it through internet means, the administrator has the privilege to post an announcement inside the system 
             directly to the phones or computer of all scholars.
            </ol>
        </div>
    </div> 
    <p>
        <button class="btn btn-primary btn-block" type="button"  style="background-color:blue" data-toggle="collapse" data-target="#INFORMED" aria-expanded="false" aria-controls="collapseExample">
                HOW WILL I BE INFORMED? 
        </button>
    </p>  
    <div class="collapse" id="INFORMED">
        <div class="card card-body">
            <ol>
            <li><b>ACCESSING THE ANNOUNCEMENTS</b></li>
            Once registered and the account is approved you can log in through your credentials (ID-Number and Password).
            <li><b>ONCE LOGIN</b></li>
            If you've successfully logged in, in your home page you will see all the announcements posted by the administrator of the system.
            <li><b>NEW ANNOUNCEMENT POSTED</b></li>
            If there is a new announcement posted you will be notified through the mail, that's why it very to always open in your email.
            </ol>
        </div>
    </div> 
    <p>
            <button class="btn btn-primary btn-block" type="button"  style="background-color:indigo" data-toggle="collapse" data-target="#COMMENTS" aria-expanded="false" aria-controls="collapseExample">
                    COMMENTS OR FEEDBACK 
            </button>
        </p>  
        <div class="collapse" id="COMMENTS">
            <div class="card card-body">
                <ol>
                <li><b>THINGS TO KNOW FIRST</b></li>
                Announcements are for information dissemination but another feature of the system is enabling scholars to give comment to an announcement. 
                <li><b>VIEW COMMENTS SECTION</b></li>
                  Click on the title of the post or click see more button or comments button to enter to post comments section.
                 <li><b>COMMENT TO AN ANNOUNCEMENT</b></li>
                    In comments you are allowed to give feedback, asked question or clarify something but never ever do any of the following;
                    <ul>
                        <li>comment unrelated or unnessary</li>
                        <li>Use bad language or word</li>
                        <li>Fight to another user</li>
                        <li>Criticize or humiliate</li>    
                    </ul> 
                </ol>
            </div>
        </div> 
        <h3 class="title"> <i>OTHERS</i> </h3>
        <p>
                <button class="btn btn-primary btn-block" type="button"  style="background-color:violet" data-toggle="collapse" data-target="#NOTIFICATION" aria-expanded="false" aria-controls="collapseExample">
                        NOTIFICATION 
                </button>
            </p>  
            <div class="collapse" id="NOTIFICATION">
                <div class="card card-body">
                    <ol>
                    <li><b>ABOUT NOTIFICATION</b></li>
                      All Notifications in the system is done through mailing particularly with google mailing or Gmail.
                      <li><b>WHEN WILL I BE NOTIFIED?</b></li>
                      You will be notified from the following:
                      <ul>
                          <li>New Announcement posted</li>
                          <li>User Commented to an announcement</li>
                          <li>Upon confirmation of your account</li>
                          <li>Upon approval of your profile application</li>
                      </ul>
                    </ol>
                </div>
            </div> 
                
</div>

@endsection