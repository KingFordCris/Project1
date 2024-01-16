@include('inc.script.notable')
@extends('template.master')
@section('content')
@include('inc.errors')
<div class="card card-nav-tabs">
    <div class="card-header card-header-primary">
            <div class="text-center icon icon-info"><i class="material-icons"  style="text-shadow:black 2px 4px 2px;font-size:40px ">wifi_tethering</i></div>
        <h3 class="text-center" style="text-shadow:black 2px 4px 2px">{{$post->title}}</h3>
        <small style="color:white;padding-left:6in"> ({{$post->user->name}})</small>
    </div>
</div>
    <div class="container"><br>
        <div class="text-center"> <a href={{"http://127.0.0.1:8000/images/".$post->filename}}>
            <img src="{{ url('/images/'.$post->filename) }}" alt="{{$post->filename}}"  style="width:50%;object-fit: contain"/></a>
          </div>
      <hr>
            <div class="text-left"><pre><p style="font-size:20px;font-family:Arial, Helvetica, sans-serif">{{$post->body}}</p></pre></div>
        <hr>
        <small>Comments Section</small>
            <div class="container"> 
                <ul class="list-group">
                @foreach ($post->comments as $comment)
                    <li class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                    <b class="mb-1" style=""><strong>{{$comment->user->name}}</strong></b>
                            <small >{{$comment->created_at->diffForHumans()}}</small>
                            </div>
                            <div class="d-flex w-100 justify-content-between">
                                <p style="font-size:15px">  {{$comment->body}} <br> </p>
                                <form  method="post" action="{{ route('OSMS.destroy',$comment->id) }}" class="delete_form">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    @if (Auth::user() && (Auth::user()->id == $comment->user_id))
                                    <button type="submit" class="btn btn-danger btn-fab  btn-round btn-sm" title="Delete" onclick="return confirm('Are you sure you want to delete your comment?');"><i class="material-icons">delete_outline</i></button>
                                    <a href="{{ route('OSMS.edit',$comment->id) }}" class="btn btn-sm btn-primary btn-round btn-fab" title="Edit"> <i class="material-icons">build</i></a>
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
                <button type="submit" class="btn btn-primary btn-round" style="float:right"> <i class="material-icons">done</i>Add Comment</button>
                <a href="/posts/index" class="btn btn-danger btn-round" style="float:right"> <i class="material-icons">clear</i>Back</a>
            </div><br> &nbsp;
        </form>
        
    </div>
@endsection