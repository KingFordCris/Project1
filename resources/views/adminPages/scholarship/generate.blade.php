@include('inc.script.table')
@extends('template.master')  
@section('content')

<div class="card card-nav-tabs">
        <div class="card-header card-header-primary">
            <div class="text-center icon icon-info"><i class="material-icons"  style="text-shadow:black 2px 4px 2px;font-size:40px ">print</i></div>
            <h3 class="text-center" style="text-shadow:black 2px 4px 2px">{{$scholarship->name}}&nbsp; LIST OF SCHOLARS</h3>
        </div>
    </div>
<div class="col-md-auto" id="printableArea">
<table id="example" class="display" style="width:100%">
        <thead >
        {{-- <tr class="text-center table-active display" style="border-style:border-width: 2px;"> 
            <th colspan="11"> Republic of the Philippines <br> <b>CAGAYAN STATE UNIVERSITY-GONZAGA CAMPUS</b> <br> <b>{{$scholarship->name}} SCHOLAR REPORT</b></th>
        </tr> --}}
          <tr>
            <th>#</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th >Middle Name</th>
            <th>Sex</th>
            <th>Permanent Home Address</th>
            <th>District</th>
            <th>HEI</th>
            <th>Type of HEI</th>
            <th>Course</th>
            <th>Year Level</th>
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
        <tfoot>
                <tr>
                        <th>#</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th >Middle Name</th>
                        <th>Sex</th>
                        <th>Permanent Home Address</th>
                        <th>District</th>
                        <th>HEI</th>
                        <th>Type of HEI</th>
                        <th>Course</th>
                        <th>Year Level</th>
                </tr>
            </tfoot>
    </table>
</div>
<br><br>
<div style="padding-right:0.5in">
<a href="/scholarship/manage"><button class="btn btn-primary btn-sm pull-right" >Back</button></a>
{{-- <input type="button" class="btn btn-success btn-sm pull-right" onclick="printDiv('printableArea')" value="PRINT" /><br> --}}
</div>
@endsection
