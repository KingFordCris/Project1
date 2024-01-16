@include('inc.script.notable')
@extends('template.master')
@section('content')
@include('inc.errors')
<div class="card card-nav-tabs">
  <div class="card-header card-header-primary">
        <div class="text-center icon icon-info"><i class="material-icons"  style="text-shadow:black 2px 4px 2px;font-size:40px ">school</i></div>
      <h3 class="text-center" style="text-shadow:black 2px 4px 2px">EDIT SCHOLARSHIP</h3>
  </div>
</div>
    <form method="POST" action="{{ route('OSMS_scho.update', $scholarships->id) }}" style="padding:4%" >
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="form-row pull-center ">
            <div class="col-lg-8 col-md-3 ml-auto mr-auto ">
                <div class="form-group bmd-form-group is-filled">
                    <label for="name" class="bmd-label-floating">Name of Scholarship</label>
                    <input type="text" class="form-control " id="name" name="name" value="{{ $scholarships->name }}" required>
                    <span class="bmd-help">Name of the scholarship</span>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-lg-4 col-md-3 ml-auto mr-auto">
                <div class="form-group bmd-form-group is-filled">
                    <label for="sponsor" class="bmd-label-floating">Sponsor</label>
                    <input type="text" class="form-control " id="sponsor" name="sponsor" value="{{ $scholarships->sponsor }}" required>
                    <span class="bmd-help">Name of the sponsor of the scholarship</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 ml-auto mr-auto">
                    <div class="form-group bmd-form-group is-filled">
                        <label for="slot" class="bmd-label-floating">Slots</label>
                        <input type="number" class="form-control" id="slot" name="slot" value="{{ $scholarships->slot }}" required>
                        <span class="bmd-help">Maximum slots of the scholarship</span>
                    </div>
            </div>
            <div class="col-lg-4 col-md-3 ml-auto mr-auto ">
                    <div class="form-group bmd-form-group is-filled">
                        <label for="year" class="bmd-label-floating">School Year</label>
                        <input type="text" class="form-control" id="year" name="year" value="{{ $scholarships->year }}" required>
                        <span class="bmd-help">Start of the school year (e.g 2018)</span>
                    </div>
            </div>
        </div>
        
        <div class="form-row">
            <div class="col-lg-4 col-md-2 col-sm-3 mr-auto pull-center">
                <label for="scholarship_type" class="bmd-label-floating">Type of Scholarship</label> <br>
                <select id="scholarship_type" name="scholarship_type" class="form-control">
                        <option>{{ $scholarships->scholarship_type }}</option>
                        <option value=""></option>
                        <option value="University">University</option>
                        <option value="Government">Government</option>
                        <option value="Private">Private</option>
                </select>
            </div>
            <div class="col-lg-4 col-md-2 col-sm-3 mr-auto pull-center">
                <label for="hei_type" class="bmd-label-floating">Type of HEI</label> <br>
                <select id="hei_type" name="hei_type" class="form-control">
                        <option>{{ $scholarships->hei_type }}</option>
                        <option value=""></option>
                        <option value="Public">Public</option>
                        <option value="Private">Private</option>
                </select>
            </div>
            <div class="col-lg-4 col-md-2 col-sm-3 mr-auto pull-center ">
                    <label for="renewal" class="bmd-label-floating">Frequency of Renewal</label> <br>
                    <select id="renewal" name="renewal" class="form-control">
                            <option>{{ $scholarships->renewal }}</option>
                            <option value=""></option>
                            <option value="Every Semester">Every Semester</option>
                            <option value="Every School Year">Every School Year</option>
                    </select>
            </div>
            <div class="form-row col-md-12 ml-auto mr-auto" style="padding-left:2.8in">
            <div>
                <h4>Requirements</h4>
                <textarea id="txt" rows="10" cols="40" name="requirements">{{ $scholarships->requirements }}</textarea>
               
            </div> &nbsp;
            <div>
              <h4>Benefits</h4>
              <textarea id="txt" rows="10" cols="40" name="benefits">{{ $scholarships->benefits }}</textarea>
            </div>
            </div>
            <div class="form-row col-md-12 ml-auto mr-auto" style="padding-left:1.8in">
                    <div>
                            <h4>Notes</h4>
                            <textarea id="txt" rows="10" cols="100" name="notes" placeholder="optional...">{{ $scholarships->notes }}</textarea>
                    </div>
                    </div>
        </div><br><br>
        <button class="btn btn-primary btn-round pull-right"  type="submit" onclick="return confirm('UPDATE SCHOLARSHIP will modify the information about the scholarship, Are you sure you want to continue.'); ">
            <i class="material-icons">done</i> Update
              <div class="ripple-container"></div></button><a href="/scholarship/manage" class="btn btn-default btn-round pull-right"><i class="material-icons">clear</i>Cancel</a>
        </form>
         @endsection



