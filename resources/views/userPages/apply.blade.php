@extends('userPages.inc.navbar')
@section('navbar')
<li class="nav-item">
        <a class="nav-link" href="/user/index">
            <i class="material-icons">home</i>HOME
        </a>
</li>
<li class="dropdown nav-item">
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

<div class="col-md-auto section-download">
<div class="card card-nav-tabs card-plain">
    <div class="card-header card-header-primary">
    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
        <h2 class="text-center" style="text-shadow:black 2px 4px 2px">{{$scholarship->name}}&nbsp;({{$scholarship->year}})</h2>
    </div>
<div class="card-body ">
        <div class="alert alert-dismissible alert-warning">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <b> NOTE:</b> Make sure that the scholarship you are applying is matched to any eligibility of the scholarship<br>
                For more information and queries please see Maam Florina P. Gonzales (OSDW Coordinator) at the Office of Student Development and Welfare located at Administration Building.
            </div>
<div class="col-sm-12">

    <i><h2 class="title">STEP 1</h2></i>
    <h4>
        <ul>
            <li>Click on this <a href="/user/addprofile/add">LINK</a> or click on the right side tab and select Scholarship to add your profile </li>
            <li>Submit your Profile Information</li>
            <li>For renewal of scholarship, submit another profile in the same name of scholarsip but different year</li>
        </ul>
    </h4>
    <i><h2 class="title">STEP 2</h2></i>
    <h4>
        <ul>
            <li>Prepare the following requirements of the scholarship</li>
            <pre style="font-family:Arial, Helvetica, sans-serif;">{{$scholarship->requirements}}x</pre>
        </ul>
    </h4>
    <i><h2 class="title">STEP 3</h2></i>
    <h4>
        <ul>
            <li>Bring the requirements and proceed to the Office of the Student Development and Welfare and submit to the person-in-charge</li>
        </ul>
    </h4>
    <i><h2 class="title">STEP 4</h2></i>
    <h4>
        <ul>
            <li>Wait for a confirmation email if your application is successfully approved</li>
        </ul>
    </h4>
   </div> 
   <div style="padding-right:1in">
        <a href="/user/index"><button class="btn btn-primary btn-round pull-right" >Back</button></a>
        </div>
    </div>
</div>
</div>


@endsection
      
