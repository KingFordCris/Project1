@include('inc.script.notable')
@extends('template.master')
@section('content')
@include('inc.errors')
<div class="card card-nav-tabs">
  <div class="card-header card-header-primary">
        <div class="text-center icon icon-info"><i class="material-icons"  style="text-shadow:black 2px 4px 2px;font-size:40px ">school</i></div>
      <h3 class="text-center" style="text-shadow:black 2px 4px 2px">ADD SCHOLARSHIP</h3>
  </div>
</div>
    <form method="POST" action="/scholarship" style="padding:4%" >
      {{ csrf_field() }}
        <div class="form-row pull-center ">
            <div class="col-lg-8 col-md-3 ml-auto mr-auto ">
                <div class="form-group bmd-form-group is-filled">
                    <label for="name" class="bmd-label-floating">Name of Scholarship</label>
                    <input type="text" class="form-control " id="name" name="name" value="{{ old('name') }}" style='text-transform:uppercase' onkeydown="upperCaseF(this)" required>
                    <span class="bmd-help">Name of the scholarship</span>
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-lg-4 col-md-3 ml-auto mr-auto">
                <div class="form-group bmd-form-group is-filled">
                    <label for="sponsor" class="bmd-label-floating">Sponsor</label>
                    <input type="text" class="form-control" onkeyup="javascript:capitalize(this);" id="sponsor" name="sponsor" value="{{ old('sponsor') }}" required>
                    <span class="bmd-help">Name of the sponsor of the scholarship</span>
                    <small class="text-danger">{{ $errors->first('sponsor') }}</small>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 ml-auto mr-auto">
                    <div class="form-group bmd-form-group is-filled">
                        <label for="slot" class="bmd-label-floating">Slots</label>
                        <input type="number" class="form-control" id="slot" name="slot" value="{{ old('slot') }}" required>
                        <span class="bmd-help">Maximum slots of the scholarship</span>
                        <small class="text-danger">{{ $errors->first('slot') }}</small>
                    </div>
            </div>
            <div class="col-lg-4 col-md-3 ml-auto mr-auto ">
                    <div class="form-group bmd-form-group is-filled">
                        <label for="year" class="bmd-label-floating">School Year</label>
                        <input type="number" class="form-control" id="year" name="year" value="{{ old('year') }}" required>
                        <span class="bmd-help">Start of the school year (e.g 2010) </span>
                        <small class="text-danger">{{ $errors->first('year') }}</small>
                    </div>
            </div>
        </div>
        
        <div class="form-row">
            <div class="col-lg-4 col-md-2 col-sm-3 mr-auto pull-center">
                <label for="scholarship_type" class="bmd-label-floating">Type of Scholarship</label> <br>
                <select id="scholarship_type" name="scholarship_type" class="form-control" required>
                        <option>...</option>
                        <option value="University">University</option>
                        <option value="Government">Government</option>
                        <option value="Private">Private</option>
                </select>
                <small class="text-danger">{{ $errors->first('scholarship_type') }}</small>
            </div>
            <div class="col-lg-4 col-md-2 col-sm-3 mr-auto pull-center">
                <label for="hei_type" class="bmd-label-floating">Type of HEI</label> <br>
                <select id="hei_type" name="hei_type" class="form-control" required>
                        <option>...</option>
                        <option value="Public">Public</option>
                        <option value="Private">Private</option>
                </select>
                <small class="text-danger">{{ $errors->first('hei_type') }}</small>
            </div>
            <div class="col-lg-4 col-md-2 col-sm-3 mr-auto pull-center">
                    <label for="renewal" class="bmd-label-floating">Frequency of Renewal</label> <br>
                    <select id="renewal" name="renewal" class="form-control" value="{{ old('renewal') }}" required>
                            <option>...</option>
                            <option value="Every Semester">Every Semester</option>
                            <option value="Every School Year">Every School Year</option>
                    </select>
                    <small class="text-danger">{{ $errors->first('renewal') }}</small>
            </div>
            <div class="col-lg-4 col-md-3 ml-auto mr-auto ">
                    <div class="form-group bmd-form-group is-filled">
                        <label for="year" class="bmd-label-floating">Financial Benefit (every semester)</label>
                        <input type="number" class="form-control" id="year" name="benefits" value="{{ old('benefits') }}" required>
                        <span class="bmd-help">How much can a scholar gets every semester</span>
                        <small class="text-danger">{{ $errors->first('benefits') }}</small>
                    </div>
                    
            </div>
            <div class="form-row col-md-12" style="padding-left:1.8in">
                <div>
                    <h4>Requirements</h4>
                    <textarea id="txt" rows="10" cols="40
                    " name="requirements" value="{{ old('requirements') }}" required></textarea>
                    <small class="text-danger">{{ $errors->first('requirements') }}</small>
                
                </div> &nbsp;
                <div>
                        <h4>Notes</h4>
                        <textarea id="txt" rows="10" cols="60" name="notes" value="{{ old('notes') }}" placeholder="optional..."></textarea>
                        <small class="text-danger">{{ $errors->first('notes') }}</small>
                </div>
            </div>

        </div><br><br>
        <button class="btn btn-primary btn-round pull-right"  type="submit" onclick="return confirm('CREATING SCHOLARSHIP add new scholarship, Are you sure you want to continue.'); ">
            <i class="material-icons">done</i> Create
              <div class="ripple-container"></div></button><a href="/scholarship/show" class="btn btn-round pull-right"><i class="material-icons">keyboard_return</i>Back</a>
        </form>
         @endsection



