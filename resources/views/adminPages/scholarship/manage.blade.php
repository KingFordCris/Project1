@include('inc.script.table')
@extends('template.master')
@section('content')
<div class="card card-nav-tabs">
  <div class="card-header card-header-primary">
      <div class="text-center icon icon-info"><i class="material-icons"  style="text-shadow:black 2px 4px 2px;font-size:40px ">print</i></div>
      <h3 class="text-center" style="text-shadow:black 2px 4px 2px">GENERATE REPORT</h3>
  </div>
</div>
<div class="col-md-auto">
  <table class="display" id="table" style="width:100%">
    <thead>
      <tr>
            <th>#</th>
        <th>SCHOLARSHIP NAME</th>
        <th>SPONSOR</th>
        <th>TYPE</th>
        <th>SCHOOL YEAR</th>
        <th>TOTAL SLOTS</th>
        <th># OF SCHOLARS<br><small>(inludes request's)</small></th>
        <th>GENERATE REPORT</th>
      </tr>
    </thead>
    <tbody >
        @foreach ($scholarships as $scholarship)      
        <tr>
            <td>{{ $loop->index+1 }}.)</td>
            <td>{{$scholarship->name}}</td>
            <td>{{$scholarship->sponsor}}</td>
            <td>{{$scholarship->scholarship_type}}</td>
            <td>{{$scholarship->year}} - {{$scholarship->year + 1}}</td>
            <td>{{$scholarship->slot}}</td>
            <td>{{count($profile->where("scholarship_id", $scholarship->id))}}</td>
            <td>
            <a href="/scholarship/{{ $scholarship->id }}/generate" class="btn btn-danger btn-fab btn-round" rel="tooltip" data-original-title="Generate Report"><i class="material-icons" style="font-size:25px">print</i></a>
            </td>

          
          </tr>
      @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>#</th>
        <th>SCHOLARSHIP NAME</th>
        <th>SPONSOR</th>
        <th>TYPE</th>
        <th>SCHOOL YEAR</th>
        <th>TOTAL SLOTS</th>
        <th># OF SCHOLARS<br><small>(inludes request's)</small></th>
        <th>GENERATE REPORT</th>
      </tr>
    </tfoot>
</table></div><br><br>
@endsection