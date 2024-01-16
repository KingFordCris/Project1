@include('inc.script.notable')
@extends('template.master')
@section('content')
@include('inc.errors')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="card card-nav-tabs">
    <div class="card-header card-header-primary">
            <div class="text-center icon icon-info"><i class="material-icons"  style="text-shadow:black 2px 4px 2px;font-size:40px ">wifi_tethering</i></div>
        <h3 class="text-center" style="text-shadow:black 2px 4px 2px">EDIT ANNOUNCEMENT</h3>
    </div>
  </div>
    <form action="{{ route('OSMS_post.update', $posts->id) }}" method="post" style="padding:4%" >
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="tab-content text-center">
              <div class="col-lg-6 col-md-3 ml-auto mr-auto ">
                <div class="form-group bmd-form-group is-filled">
                    <label for="title" class="bmd-label-floating">Title</label>
                    <input type="text" class="form-control text-center  " id="title" name="title" style="text-transform:uppercase" value="{{ $posts->title }}" required>
                    <span class="bmd-help">Edit Title</span>
                </div>
              </div>
              <div class="col-lg-8 col-md-3 ml-auto mr-auto ">
                  <div class="form-group bmd-form-group is-filled">
                      <label for="body" class="bmd-label-floating">Body</label>
                      <textarea  id="txtEditor" id="body" name="body"  cols="85" rows="10" required>{{ $posts->body }}</textarea>
                      <span class="bmd-help">Edit Body</span>
                  </div>
                </div>
                <br><br>
                <div style="padding-right:15%">
               
                <button class="btn btn-primary btn-round pull-right"  type="submit">
                    <i class="material-icons">done</i>Update
                  <div class="ripple-container"></div></button>
                  <a href="/posts/manage" class="btn btn-default btn-round pull-right"><i class="material-icons">clear</i>Cancel</a>
                </div>
        </div>

  
  </form>


@endsection



