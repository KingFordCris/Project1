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
    <div class="container"><br>
        <div class="text-center">
             <h3 class="title">Edit Comment</h3>
         </div><hr>
         <form method="post" action="{{ route('USER.update', $comments->id) }}" style="padding:4%" >
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <input name="body" type="text" class="form-control" value="{{$comments->body}}" required> <br>
                <button class="btn btn-primary btn-round pull-right"  type="submit" onclick="return confirm('Are you sure you want to edit your comment?'); ">
                    <i class="material-icons">done</i> Update
                <div class="ripple-container"></div></button><a href="/user/index/" class="btn btn-round pull-right"><i class="material-icons">keyboard_return</i>Back</a>
         </form>
    </div>
@endsection