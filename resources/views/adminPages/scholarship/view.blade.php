@include('inc.script.notable')
@extends('template.master')  
@section('content')
<div class="card card-nav-tabs">
        <div class="card-header card-header-primary">
            <div class="text-center icon icon-info"><i class="material-icons"  style="text-shadow:black 2px 4px 2px;font-size:40px ">school</i></div>
            <h3 class="text-center" style="text-shadow:black 2px 4px 2px">{{$scholarship->name}}</h3>
        </div>
    </div>
<div class="col-md-auto">
<p>
    <div class="form-row" id="name">
        <div class="form-group col-md-4">
            <label for="fname">Scholarship Sponsor:</label>
            <input type="text" class="form-control" id="fname" name="fname" disabled value="{{$scholarship->sponsor}}" placeholder=""  required>
            
        </div>
        <div class="form-group col-md-3">
            <label for="lname">School Year:</label>
            <input type="text" class="form-control " id="lname" name="lname" disabled value="{{$scholarship->year}}" placeholder="" required>
        </div>
        <div class="form-group col-md-3">
            <label for="mname">Total Slots:</label>
            <input type="text" class="form-control" id="mname" name="mname" disabled value="{{$scholarship->slot}} Students" placeholder="" required>
        </div>
    </div>
    <div class="form-row" id="name">
        <div class="form-group col-md-4">
            <label for="fname">Type of Scholarship:</label>
            <input type="text" class="form-control" id="fname" name="fname" disabled value="{{$scholarship->scholarship_type}}" placeholder=""  required>
            
        </div>
        <div class="form-group col-md-3 ">
            <label for="lname">Type of Higher Education Institutions(HEI): </label>
            <input type="text" class="form-control " id="lname" name="lname" disabled value="{{$scholarship->hei_type}}" placeholder="" required>
        </div>
        <div class="form-group col-md-3">
            <label for="mname">Frequency of Renewal:</label>
            <input type="text" class="form-control" id="mname" name="mname" disabled value="{{$scholarship->renewal}}" placeholder="" required>
        </div>
    </div>
    <div class="form-row" id="name">
        <div class="form-group col-md-6">
            Incentive:<p style="font-family:Arial, Helvetica, sans-serif;font-size:20px">{{$scholarship->benefits}} every semeter</p>
        </div><br>
        <div class="form-group col-md-6">
            Requirements:<pre style="font-family:Arial, Helvetica, sans-serif;font-size:20px">{{$scholarship->requirements}}</pre> 
        </div>
    </div>
    Notes:<pre style="font-family:Arial, Helvetica, sans-serif;font-size:20px">{{$scholarship->notes}}</pre> <br>
</p>
</div>
<hr>
<div class="col-md-auto">
    <h2 class="title text-center">LIST OF SCHOLARS</h2>
<table class="table table-hover" id="table">
        <thead >
          <tr class="table-active">
            <th scope="col" style="width:0.5cm">NO.</th>
            <th scope="col" >LASTNAME</th>
            <th scope="col" >FIRSTNAME</th>
            <th scope="col" >MIDDLENAME</th>
            <th scope="col" >SEX</th>
            <th scope="col" >PERMANENT HOME ADDRESS</th>
            <th scope="col" >DISTRICT</th>
            <th scope="col" >HEI</th>
            <th scope="col" >TYPE OF HEI</th>
            <th scope="col" >BACCALAUREAT</th>
            <th scope="col" >YEAR LEVEL</th>
          </tr>
        </thead>
        <tbody >
            @foreach ($profiles as $profile)
            @if  ($profile->scholarship_id == $scholarship->id)
                @if ($profile->is_confirmed == 1)
                    {{-- @if ($profile->cout() >= 1) --}}
                        <tr>
                            <td>{{ $no++ }}.</td>
                            <td>{{$profile->lname}} </td>
                            <td>{{$profile->fname}}</td>
                            <td>{{$profile->mname}}</td>
                            <td>{{$profile->sex}}</td>
                            <td>{{$profile->homeAdd}}</td>
                            <td>1st</td>
                            <td>CSU-Gonzaga</td>
                            <td>{{$profile->scholarship->hei_type}}</td>
                            <td>{{$profile->course}}</td>
                            <td>{{$profile->yrLevel }} Year</td>
                            {{-- <td><a href="" class="btn btn-primary btn-sm btn-round">Profile</a></td> --}}
                        </tr>                    
                @endif
{{--  @else
                    <tr><h4>No Scholar/s yet please see <a class="link" href="/user/request">pending</a> to confirm scholars</h4></tr>  --}}
            @endif  
            @endforeach
        </tbody>
    </table>
</div>
<br><br>
<div style="padding-right:0.5in">
<a href="/scholarship/show"><button class="btn btn-primary btn-sm pull-right" >Back</button></a>
</div>
@endsection
