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
            <h3 class="title">{{$post->title}}</h3>
            <small style="color:dodgerblue"> ({{$post->user->name}})</small>
        </div>
        
        <a href={{"http://127.0.0.1:8000/images/".$post->filename}}><img class="d-block w-100" src="{{ url('/images/'.$post->filename) }}" style="height:4in"></a><hr>
            <div class="text-left"><pre><p style="font-size:20px;font-family:Arial, Helvetica, sans-serif">{{$post->body}}</p></pre></div>
        <hr>
        <small>Comments Section</small>
            <div class="container"> 
                <ul class="list-group">
                @foreach ($post->comments as $comment)
                    <li class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                    <b class="mb-1" style=""><strong>{{$comment->user->name}}</strong></b>
                                    <small >{{$comment->updated_at->diffForHumans()}}</small>
                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <p style="font-size:15px">  {{$comment->body}} <br> </p>
                                <form  method="post" action="{{ route('OSMS.destroy',$comment->id) }}" class="delete_form">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    @if (Auth::user() && (Auth::user()->id == $comment->user_id))
                                    <button type="submit" class="btn btn-danger btn-fab  btn-round btn-sm" title="Delete" onclick="return confirm('Are you sure you want to delete your comment?');"><i class="material-icons">delete_outline</i></button>
                                    <a href="{{ route('USER.edit',$comment->id) }}" class="btn btn-sm btn-primary btn-round btn-fab" title="Edit"> <i class="material-icons">build</i></a>
                                    @endif
                                </form>
                            </div>

                       
                    </li>    
                @endforeach
                </ul>
            </div>
        <hr>
            {{-- ADD COMMENT FORM--}}
        <form method="POST" action="/posts/{{ $post->id }}/comments">
            {{ csrf_field() }}
            {{-- {{method_field('PATCH')}} --}}
            <div class="form-group">
                <input class="form-control" name="body" placeholder="Leave a comment.." required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-round" style="float:right" onclick="return confirm('Are you sure you want to add comment?'); "> <i class="material-icons">check</i>Add Comment</button>
                <a href="/user/index" class="btn btn-default btn-round pull-right"><i class="material-icons">keyboard_return</i>Back</a>
                
            </div><br> &nbsp;
        </form>
    </div>
@endsection
