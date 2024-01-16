@include('inc.script.notable')
@extends('template.master')
@section('content')
<br>
<h3 class="title text-center">Confrim Detail's</h3>
<form class="container" method="POST" action="/add">
        <div class="form-row">
            <div class="form-group col-md-4">
                    <label for="fname">FIRST NAME</label>
                    <input type="text" class="form-control" id="fname" name="fname" value="{{$pending   ->fname }}" placeholder=""  required>  
                </div>
                <div class="form-group col-md-4">
                    <label for="lname">LAST NAME</label>
                    <input type="text" class="form-control " id="lname" name="lname" value="{{$pending->lname }}" placeholder="" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="mname">MIDDLE NAME</label>
                    <input type="text" class="form-control" id="mname" name="mname" value="{{$pending->mname}}" placeholder="" required>
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-2">
            <label for="contactNum">SEX</label>
            <input type="text" class="form-control" id="contactNum" name="contactNum" value="{{ $pending->sex }}" placeholder="" required>
        </div>
        <div class="form-group col-md-4">
            <label for="bPlace">PERMANENT HOME ADDRESS</label>
            <input type="text" class="form-control required" id="bPlace" name="bPlace" value="{{ $pending->homeAdd}}" placeholder="" required>
        </div>
        <div class="form-group col-md-2">
            <label for="bPlace">DISTRICT</label>
            <input type="text" class="form-control required" id="bPlace" name="bPlace" value="1st" placeholder="" required>
        </div>
        <div class="form-group col-md-2">
            <label for="bPlace">HEI</label>
            <input type="text" class="form-control required" id="bPlace" name="bPlace" value="CSU-Gonzaga" placeholder="" required>
        </div>
        <div class="form-group col-md-2">
            <label for="bPlace">TYPE OF HEI</label>
            <input type="text" class="form-control required" id="bPlace" name="bPlace" value="" placeholder="" required>
        </div>
        <div class="form-group col-md-3">
            <label for="status">STATUS</label>
            <input type="text" class="form-control required" id="status" name="status" value="{{ $pending->status }}" placeholder="" required>
        </div>
        <div class="form-group col-md-3">
            <label for="religion">RELIGION</label>
            <input type="text" class="form-control required" id="religion" name="religion" value="{{ $pending->religion }}" placeholder="" required>
        </div>

    </div>
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="citizen">CITIZENSHIP</label>
            <input type="text" class="form-control" id="citizen" name="citizen" value="{{ $pending->citizen }}" placeholder="" required>
        </div>
        <div class="form-group col-md-7">
            <label for="homeAdd">HOME ADDRESS</label>
            <input type="text" class="form-control" id="homeAdd" name="homeAdd" value="{{ $pending->homeAdd }}" placeholder="St/Brgy, Town/Municipality, Provice" required>
        </div>
    </div>

    <p style="float: right;" >
            <button class="btn btn-primary btn-round" type="submit" disabled onclick="return confirm('You are about to edit your profile, Are you sure you want to continue?'); "> <i class="material-icons">done</i>Add</button>
            <a href="/user/request" class="btn btn-default btn-round pull-right" onclick="return confirm('Discard Changes?'); "><i class="material-icons">clear</i>Cancel</a>           
        </p>
</form>

@endsection