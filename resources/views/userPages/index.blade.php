@extends('userPages.inc.navbar')
@section('navbar')
<li class="nav-item active">
    <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
        <i class="material-icons">home</i>HOME
    </a>
</li>
<li class="dropdown nav-item">
<a  class="nav-link" href="javascript:void(0)" onclick="scrollToDownload1()">
    <i class="material-icons"> wifi_tethering</i>ANNOUNCENMENTS</a>                  
</li>
<li class="dropdown nav-item">
    <a  class="nav-link" href="javascript:void(0)" onclick="scrollToDownload2()">
    <i class="material-icons">school</i>SCHOLARSHIPS</a>                  
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
      <a href="/user/me/{user}" class="dropdown-item">
        <i class="material-icons">person</i>PROFILE
       </a>
      <a href="/logout" class="dropdown-item">
       <i class="material-icons">report</i> Log Out
      </a>
    </div>
  </li>
</ul>
@endsection
<div class="section-download"></div>
@extends('template.usermaster')
@section('content')


@include('inc.errors')
        <div class="card card-nav-tabs card-plain">
            <div class="card-header card-header-primary">
            <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
            <div class="text-center icon icon-info"><i class="material-icons"  style="text-shadow:black 2px 4px 2px;font-size:40px ">favorite</i></div>
            <h2 class="text-center" style="text-shadow:black 2px 4px 2px">Welcome, {{ Auth::user()->name }}</h2>
            </div>
         </div>
         <div style="position:sticky">
    <div class="alert alert-dismissible alert-warning">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <b style="font-size:18px"> <i class="material-icons">add_alert</i> NEED HELP?</b> Take a time to read tutorials to guide you in using OSMS click <a href="/user/tutorials" class="link"><u>ME</u></a> to proceed.
    </div></div>
<div class="col-md-auto">
    <div class="section section-post">
        <div class="card card-nav-tabs card-plain ">
            <div class="card-header card-header-info">
                <div class="text-center icon icon-info"><i class="material-icons"  style="text-shadow:black 2px 4px 2px;font-size:40px ">wifi_tethering</i></div>
                <h3 class="text-center" style="text-shadow:black 2px 4px 2px">LATEST ANNOUNCEMENTS</h3>
            </div>
            
            {{-- announcement --}}

            <div class="card-body ">
                    <div id="carousel">
                            <div class="container">
                              <div class="row">
                                <div class="col-md-12 mr-auto ml-auto" style="width:auto">
                                  <!-- Carousel Card -->
                                  <div class="card card-raised card-carousel ">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="8000">
                                      <ol class="carousel-indicators">
                                           
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        @foreach ($posts as $post)
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        @endforeach
                                      </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="header-filter"><img class="d-block w-100" src="../../material-kit/assets/img/admin1.jpg" alt="First slide" style="height:3in"></div>
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h2 class="title" style="color:aqua;text-shadow:black 2px 4px 2px">HERE ARE THE LATEST ANNOUNCEMENTS</h2>
                                                </div>
                                            </div>
                                            @foreach ($posts as $post)
                                            <div class="carousel-item">  
                                                <div class="header-filter"><img class="d-block w-100" src="{{ url('/images/'.$post->filename) }}" alt="Second slide" style="height:3in"></div>
                                                                                     
                                                <div class="carousel-caption d-none d-md-block">
                                                    
                                                <small class="pull-right" style="color:white">Posted {{$post->created_at->diffForHumans()}}</small>
                                                        <a href="/user/index/{{$post->id}}"> <h2 class="title"  style="color:aqua;text-shadow:black 2px 4px 2px">{{$post->title}}</h2> </a>
                                                    <p>
                                                        {{$post->body}}
                                                    </p>
                                                </div>
                                            </div>
                                            @endforeach
                                      </div>
                                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <i class="material-icons">keyboard_arrow_left</i>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <i class="material-icons">keyboard_arrow_right</i>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>
                                  </div>
                                  <!-- End Carousel Card -->
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
        </div>
        <table id="example">
        <div class="card-body ">
            @foreach ($posts as $post)
            <div class="list-group container" >
              {{-- <a href="/posts/{{$post->id}}" class="list-group-item list-group-item-action flex-column align-items-start"> --}}
                <div class="d-flex w-100 justify-content-between">
                    <a href="/user/index/{{$post->id}}"><h3 class="title">{{$post->title}}</h3></a>
                  <small style="">{{$post->created_at->toFormattedDateString()}} ~ {{$post->created_at->diffForHumans()}}</small>
                </div> <hr>
                <div class="text-center"> <a href={{"http://127.0.0.1:8000/images/".$post->filename}}>
                    <img src="{{ url('/images/'.$post->filename) }}" alt="{{$post->filename}}"  style="width:50%;height:3in;object-fit: contain"/></a>
                  </div><hr>
            <p ><pre class="mb-1" style="font-size:17px;font-family:Arial, Helvetica, sans-serif;">{{Str_limit($post->body, 100)}} <a href="/user/index/{{$post->id}}"> read more...</a></pre> </p><br><br>
            <div class="d-flex w-100 justify-content-between">
                <small>Posted by:&nbsp; <span style="color:dodgerblue">{{$post->user->name}}</span></small> 
                <a href="/user/index/{{$post->id}}">
                <small style="color:dodgerblue">{{$post->comments->count()}} &nbsp;Comments..</small>
              </a>
              </div>
            </div><hr><hr>
          @endforeach
        </div>
    </table>
    </div>
    </div>
    {{-- SCHOLARSHIP SECTIOM --}}
        <div class="col-md-auto">
    <div class="section section-scholarships">
        <div class="card card-nav-tabs card-plain">
            <div class="card-header card-header-success">
                <div class="text-center icon icon-info"><i class="material-icons"  style="text-shadow:black 2px 4px 2px;font-size:40px ">school</i></div>
                <h3 class="text-center " style="text-shadow:black 2px 4px 2px">AVAILABLE SCHOLARSHIP'S</h3>
            </div>
        </div>
        <div class="card-body ">
            @foreach ($scholarships as $scholarship)
            @if (($scholarship->slot - count($profile->where("scholarship_id", $scholarship->id)) ) > 0)
            
           
                <div class="list-group container" >
                        <div class="d-flex w-100 justify-content-between">
                          <h3 class="title"><a href="/user/{{ $scholarship->id }}/apply">{{$scholarship->name}}&nbsp;({{$scholarship->year}})</a></h3>
                          <small style="">Date Created: &nbsp;{{$scholarship->created_at->toFormattedDateString()}} ~ {{$scholarship->created_at->diffForHumans()}}</small>
                        </div>
                    <p>
                        <div class="form-row" id="name">
                            <div class="form-group col-md-4">
                                <label for="fname">Scholarship Sponsor:</label>
                                <input type="text" class="form-control text-center" id="fname" name="fname" disabled value="{{$scholarship->sponsor}}" placeholder=""  required>
                                
                            </div>
                            <div class="form-group col-md-3">
                                <label for="lname">School Year:</label>
                                <input type="text" class="form-control text-center" id="lname" name="lname" disabled value="{{$scholarship->year}} - {{$scholarship->year + 1}}" placeholder="" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="mname">Total Slots:</label>
                                <input type="text" class="form-control text-center" id="mname" name="mname" disabled value="{{$scholarship->slot}} Students" placeholder="" required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="mname">Available Slots:</label>
                                {{-- @if ($profile->scholarship_id == $scholarship->id) --}}
                                <input type="text" class="form-control text-center" id="mname" name="mname" disabled value="{{$scholarship->slot - count($profile->where("scholarship_id", $scholarship->id))}} Students" placeholder="" required>    
                                {{-- @endif --}}
                            </div>
                        </div>
                        <div class="form-row" id="name">
                            <div class="form-group col-md-4">
                                <label for="fname">Type of Scholarship:</label>
                                <input type="text" class="form-control text-center" id="fname" name="fname" disabled value="{{$scholarship->scholarship_type}}" placeholder=""  required>
                                
                            </div>
                            <div class="form-group col-md-4">
                                <label for="lname">Type of Higher Education Institutions(HEI): </label>
                                <input type="text" class="form-control text-center" id="lname" name="lname" disabled value="{{$scholarship->hei_type}}" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="mname">Frequency of Renewal:</label>
                                <input type="text" class="form-control text-center" id="mname" name="mname" disabled value="{{$scholarship->renewal}}" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-row" id="name">
                            <div class="form-group col-md-4">
                                Incentive:<p style="font-family:Arial, Helvetica, sans-serif;font-size:20px">{{$scholarship->benefits}} every semeter</p>
                            </div>
                            <div class="form-group col-md-4">
                                Requirements:<pre style="font-family:Arial, Helvetica, sans-serif;font-size:20px">{{$scholarship->requirements}}</pre> 
                            </div>
                        </div>
                        Notes:<pre style="font-family:Arial, Helvetica, sans-serif;font-size:20px">{{$scholarship->notes}}</pre> <br>
                    </p>
                    <div style="padding-right:1in">
                        <a href="/user/{{ $scholarship->id }}/apply"><button class="btn btn-success btn-lg pull-right">Apply Now?</button></a>
                    </div>
                </div>
                @endif
                <hr><hr>
            @endforeach 
            {{-- {{ $scholarships->links() }} --}}
        </div>
    </div>
        </div>
      @endsection