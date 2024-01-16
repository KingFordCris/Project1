@include('inc.script.notable')
@extends('template.master')
@section('content')
@include('inc.errors')
    <div class="container"><br>
        <div class="text-center">
             <h3 class="title">Edit Comment</h3>
         </div><hr>
         <form method="post" action="{{ route('OSMS.update', $comments->id) }}" style="padding:4%" >
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <input name="body" type="text" class="form-control" value="{{$comments->body}}" required> <br>
                <button class="btn btn-primary btn-round pull-right"  type="submit" onclick="return confirm('Are you sure you want to edit your comment?'); ">
                    <i class="material-icons">done</i> Update
                <div class="ripple-container"></div></button><a href="/posts/index/" class="btn btn-danger btn-round pull-right"><i class="material-icons">clear</i>Back</a>
         </form>
    </div>

@endsection



