@include('inc.script.notable')
@extends('template.master')
@section('content')
  <div class="card card-nav-tabs">
    <div class="card-header card-header-primary">
        <div class="text-center icon icon-info"><i class="material-icons"  style="text-shadow:black 2px 4px 2px;font-size:40px ">wifi_tethering</i></div>
        <h3 class="text-center" style="text-shadow:black 2px 4px 2px">ANNOUNCEMENTS</h3>
    </div>
  </div>
  @foreach ($posts as $post)
    <div class="list-group container" >
      <div class="d-flex w-100 justify-content-between">
        <a href="/posts/{{$post->id}}"><h3 class="title">{{$post->title}}</h3></a>
        <small style="">{{$post->created_at->toFormattedDateString()}} ~ {{$post->created_at->diffForHumans()}}</small>
      </div><br>
      <div class="text-center"> <a href={{"http://127.0.0.1:8000/images/".$post->filename}}>
          <img src="{{ url('/images/'.$post->filename) }}" alt="{{$post->filename}}"  style="width:50%;height:3in;object-fit: contain"/></a>
      </div><hr>
      <p><pre class="mb-1" style="font-size:17px;font-family:Arial, Helvetica, sans-serif;">{{$post->body}}</pre> </p><br><br>
      <div class="d-flex w-100 justify-content-between">
        <small>Posted by:&nbsp; <span style="color:dodgerblue">{{$post->user->name}}</span></small> 
        <a href="/posts/{{$post->id}}">
        <small style="color:dodgerblue">{{$post->comments->count()}} &nbsp;Comments..</small>
        </a>
      </div><br>
    </div><hr>
  @endforeach
@endsection