@include('inc.script.notable')
@extends('template.master')
@section('content')
@include('inc.errors')
<div class="card card-nav-tabs">
  <div class="card-header card-header-primary">
      <div class="text-center icon icon-info"><i class="material-icons"  style="text-shadow:black 2px 4px 2px;font-size:40px ">wifi_tethering</i></div>
      <h3 class="text-center" style="text-shadow:black 2px 4px 2px">CREATE ANNOUNCEMENT</h3>
  </div>
</div>
    <form method="POST" action="/posts" style="padding:4%" enctype="multipart/form-data">
      {{ csrf_field() }}

        <div class="tab-content text-center">
              <div class="col-lg-6 col-md-3 ml-auto mr-auto ">
                <div class="form-group bmd-form-group is-filled">
                    <label for="title" class="bmd-label-floating">Title</label>
                    <input type="text" class="form-control" id="title" value="{{ old('title') }}" name="title" required style='text-transform:uppercase' onkeydown="upperCaseF(this)">
                    <span class="bmd-help">Title of the Post</span>
                </div>
              </div>
              <div class="col-lg-8 col-md-3 ml-auto mr-auto ">
                  <div class="form-group bmd-form-group is-filled">
                      <label for="body" class="bmd-label-floating">Body</label>
                      <textarea  id="txtEditor" id="body" name="body" value="{{ old('body') }}" cols="85" rows="10" required></textarea>
                      {{-- <textarea type="text" class="form-control" id="body" name="body" required></textarea> --}}
                      <span class="bmd-help">Let them know the information</span>
                  </div>
                  <div class="col-md-auto pull-left">
                    <label for="photo"> Choose photo</label>
                     <input type="file" name="filename[]" class="form-control">
                     <label for="photo">the image must not be grater than 2 mb</label>
                  </div>
                </div>
                <br><br>
                <div style="padding-right:15%">
                <button class="btn btn-primary btn-round pull-right" onclick="return confirm('Your are about to create new announcement, Are you sure you want to continue.'); "  type="submit">
                  <i class="material-icons">done</i> Create
                  <div class="ripple-container"></div></button>
                </div>
               
        </div>

  
  </form>


@endsection