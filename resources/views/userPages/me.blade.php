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
@include('inc.errors')
<div class="card card-nav-tabs">
  <div class="card-header card-header-primary">
      <div class="text-center icon icon-info"><i class="material-icons"  style="text-shadow:black 2px 4px 2px;font-size:40px ">person</i></div>
      <h3 class="text-center" style="text-shadow:black 2px 4px 2px">MY PROFILE</h3>
  </div>
</div>
<div class="pull-right">
              <!-- Button trigger modal -->
              <DIV style="padding-right:1in">
              <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
                  <i class="material-icons">edit</i> EDIT PROFILE
                </button></DIV>
</div> <br> <br>
<div class="container">
        <div class="row pull-center text-center" >
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="name">
                <br> <i class="material-icons">credit_card</i> <h6>ID Number</h6>
                <h3 class="title">{{$user->id_num}}</h3>
               <br> <i class="material-icons">perm_identity</i> <h6> User Name</h6>
                <h3 class="title">{{$user->name}}</h3>
                <br> <i class="material-icons">mail</i> <h6>Email</h6>
                <h3 class="title">{{$user->email}}</h3>
                @if ($scholar)
                <i class="material-icons">person</i><h6>Full Name</h6>
                <h3 class="title">{{$scholar->fname}} {{$scholar->mname}} {{$scholar->lname}}</h3>
                <i class="material-icons">school</i><h6>Submitted Profiles</h6>
                  @foreach ($scholar12 as $scholar1)
                    {{-- @if ($scholar1->user_id = Auth::user()->id) --}}
                      <h3 class="title">{{$scholar1->created_at->toFormattedDateString()}} ({{$scholar1->scholarship->name }} {{$scholar1->scholarship->year}})</h3>
                    {{-- @endif --}}
                  @endforeach
              @else <h4>You have not yet submitted a profile</h4>
              @endif
              </div>
            </div>
          </div>
        </div>      
</div>
@endsection
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <form method="post" action="{{route('Accounts.update', $user)}}">
            <div class="modal-body">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <label for="id_num">ID Number</label>
            <input name="id_num" type="text" class="form-control" value="{{$user->id_num}}" required><br>  
            <label for="name">Username</label> 
            <input name="name" type="text" class="form-control" value="{{$user->name}}" required><br>
            <label for="email">Email Address</label>
            <input name="email" type="email" class="form-control" value="{{$user->email}}" required><br>                 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="material-icons">close</i>Close</button>
              <button type="submit" class="btn btn-primary"><i class="material-icons">done</i>Save changes</button>
            </div>
        </form>
          </div>
        </div>
      </div>