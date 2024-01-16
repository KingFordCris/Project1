@include('inc.script.notable')
@extends('template.master')
@section('content')
@include('inc.errors')
<div class="card card-nav-tabs">
    <div class="card-header card-header-primary">
        <h2 class="text-center" style="text-shadow:black 2px 4px 2px">Welcome, {{ Auth::user()->name }}</h2>
    </div> <br>
    <div class="col-lg-auto col-md-auto mr-auto ml-auto" >
        <p style="text-center">     
            <button class="btn btn-rose" data-toggle="collapse" data-target="#ANNOUNCEMENTS" aria-expanded="false" aria-controls="collapseExample" style="height:1in;width:1.8in ">
                <P><i class="material-icons" style="font-size:30px">wifi_tethering</i> <br></P> ANNOUNCEMENTS <br>
                <p style="font-size:25px"><b>{{$posts->count()}}</b></p>
            </button>    
            <button class="btn btn-rose" data-toggle="collapse" data-target="#ANNOUNCEMENTS" aria-expanded="false" aria-controls="collapseExample" style="height:1in;width:1.8in ">
                <P><i class="material-icons" style="font-size:30px">chat_bubble_outline</i> <br></P> COMMENTS <br>
                <p style="font-size:25px"><b>{{$comments->count()}}</b></p>
            </button>
            <button class="btn btn-rose" data-toggle="collapse" data-target="#ANNOUNCEMENTS" aria-expanded="false" aria-controls="collapseExample" style="height:1in;width:1.8in ">
                <P><i class="material-icons" style="font-size:30px">person_add</i> <br></P> SCHOLARS REQUEST
                <p style="font-size:25px"><b>{{$request->count()}}</b></p>
            </button>
            <button class="btn btn-rose" data-toggle="collapse" data-target="#ANNOUNCEMENTS" aria-expanded="false" aria-controls="collapseExample" style="height:1in;width:1.8in ">
                <P><i class="material-icons" style="font-size:30px">person</i> <br></P> SCHOLARS
                <p style="font-size:25px"><b>{{$profile->count()}}</b></p>
            </button>
            <button class="btn btn-rose" data-toggle="collapse" data-target="#ANNOUNCEMENTS" aria-expanded="false" aria-controls="collapseExample" style="height:1in;width:1.8in ">
                <P><i class="material-icons" style="font-size:30px">school</i> <br></P> SCHOLARSHIPS
                <p style="font-size:25px"><b>{{$scholarships->count()}}</b></p>
            </button>
            <button class="btn btn-rose" data-toggle="collapse" data-target="#ANNOUNCEMENTS" aria-expanded="false" aria-controls="collapseExample" style="height:1in;width:1.8in ">
                <P><i class="material-icons" style="font-size:30px">account_box</i> <br></P> REQUEST ACCOUNTS
                <p style="font-size:25px"><b>{{$accountsUnapproved->count()}}</b></p>
            </button>
            <button class="btn btn-rose" data-toggle="collapse" data-target="#ANNOUNCEMENTS" aria-expanded="false" aria-controls="collapseExample" style="height:1in;width:1.8in ">
                <P><i class="material-icons" style="font-size:30px">contacts</i> <br></P> ACTIVE ACCOUNTS
                <p style="font-size:25px"><b>{{$accountsApproved->count()}}</b></p>
            </button>
            </p>
        </p>
    </div>

    <!--         carousel  -->
    <div class="section section-download" id="carousel">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mr-auto ml-auto" style="width:auto">
                    <!-- Carousel Card -->
                    <div class="card card-raised card-carousel ">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <div class="header-filter">
                                        <img class="d-block w-100" src="../../material-kit/assets/img/admin1.jpg" alt="First slide"></div>
                                        <div class="carousel-caption d-none d-md-block">
                                            <div class="icon" style="color:aqua;">
                                                <i class="material-icons" style="font-size:50px">chat</i>
                                            </div>
                                            <h2 class="title" style="color:aqua">Announcements and Comments</h2>
                                            <p> A portal to give announcement's or information directly accessable to scholars for updates in their scholarship as well as scholars can give feedback by commenting in an announcement.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="header-filter">
                                            <img class="d-block w-100" src="../../material-kit/assets/img/admin3.jpg" alt="Second slide"></div>
                                            <div class="carousel-caption d-none d-md-block">
                                                <div class="icon" style="color:chartreuse">
                                                    <i class="material-icons" style="font-size:50px">verified_user</i>
                                                </div>
                                                <h2 class="title" style="color:chartreuse">Scholarships and Scholars Management</h2>
                                                <p> 
                                    Looking or applying to a scholarship is just now a piece of a cake all just what it needs is an account in the system and all the processes can be done easily, every registered student can view all available scholarships and the requirements needed because it stores the data of scholars and scholarships.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="header-filter">
                                                <img class="d-block w-100" src="../../material-kit/assets/img/admin.jpg" alt="Third slide"></div>
                                                <div class="carousel-caption d-none d-md-block">
                                                    <div class="icon icon-danger">
                                                        <i class="material-icons" style="font-size:50px">print</i>
                                                    </div>
                                                    <h2 class="title" style="color:red">Export, Generate and Prints Report </h2>
                                                    <p> 
                                    Scholars report consumes a lot of time but this problem will make just make this process a glitch of the eyes because it will generate a downloadable report (PDF and Excel File) ready at any time.
                                                    </p>
                                                </div>
                                            </div>
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
            <!--         end carousel -->
            <div class="section section-post">
                <div class="card card-nav-tabs">
                    <div class="card-header card-header-primary">
                        <div class="text-center icon icon-info">
                            <i class="material-icons" style="text-shadow:black 2px 4px 2px;font-size:40px ">wifi_tethering</i>
                        </div>
                        <h3 class="text-center" style="text-shadow:black 2px 4px 2px">LATEST ANNOUNCEMENTS</h3>
                    </div>
                </div>
                <br/>
                <br/>
            @foreach ($posts as $post)
                <div class="list-group container">
              {{--                    <a href="/posts/{{$post->id}}" class="list-group-item list-group-item-action flex-column align-items-start"> --}}
                        <div class="d-flex w-100 justify-content-between">
                            <a href="/posts/{{$post->id}}">
                                <h3 class="title">{{$post->title}}</h3>
                            </a>
                            <small style="">{{$post->created_at->toFormattedDateString()}} ~ {{$post->created_at->diffForHumans()}}</small>
                        </div>
                        <div class="text-center">
                            <a href={{"http://127.0.0.1:8000/images/".$post->filename}}>
<img src="{{ url('/images/'.$post->filename) }}" alt="{{$post->filename}}" style="width:50%;height:3in;object-fit: contain"/>
                        </a>
                    </div>
                    <hr>
                        <p >
                            <pre class="mb-1" style="font-size:17px;font-family:Arial, Helvetica, sans-serif;">{{$post->body}}</pre>
                        </p>
                        <br>
                            <br>
                                <div class="d-flex w-100 justify-content-between">
                                    <small>Posted by:&nbsp; <span style="color:dodgerblue">{{$post->user->name}}</span>
                                </small>
                                <a href="/posts/{{$post->id}}">
                                    <small style="color:dodgerblue">{{$post->comments->count()}} &nbsp;Comments..</small>
                                </a>
                            </div>
                        </div>
                        <hr>
          @endforeach
        
                        </div>
    {{-- SCHOLARSHIP SECTIOM --}}
                        <div class="section section-scholarships">
                            <div class="card card-nav-tabs">
                                <div class="card-header card-header-primary">
                                    <div class="text-center icon icon-info">
                                        <i class="material-icons" style="text-shadow:black 2px 4px 2px;font-size:40px ">school</i>
                                    </div>
                                    <h3 class="text-center " style="text-shadow:black 2px 4px 2px">AVAILABLE SCHOLARSHIP'S</h3>
                                </div>
                            </div>
                            <br/>
                            <br/>
          @foreach ($scholarships as $scholarship)
                            <div class="list-group container">
                                <div class="d-flex w-100 justify-content-between">
                                    <h3 class="title">
                                        <a href="/user/{{ $scholarship->id }}/apply">{{$scholarship->name}}</a>
                                    </h3>
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
                                                <input type="text" class="form-control text-center" id="lname" name="lname" disabled value="{{$scholarship->year}}" placeholder="" required>
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
                                                                         Notes:<pre style="font-family:Arial, Helvetica, sans-serif;font-size:20px">{{$scholarship->notes}}</pre>
                                                            <br>
                                                            </p>
                  {{--                                                            <div style="padding-right:1in">
                                                                <a href="/user/{{ $scholarship->id }}/apply">
                                                                    <button class="btn btn-primary btn-round pull-right">How to apply?</button>
                                                                </a>
                                                            </div> --}}
                                                        </div>
                                                        <hr>
          @endforeach
                                                        </div>
      @endsection
      
