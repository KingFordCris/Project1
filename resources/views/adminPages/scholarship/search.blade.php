@extends('template.master')
@section('content')
<br><br>
    <div class="col-sm-5" >
        <input type="text" class="form-control" name="search" id="search"
            placeholder="Search name/scholar " >
    </div>
<br>
{{-- {{$countNum = count($scholars)}}
<h5>Result found</h5>{{$countNum}} --}}
<table class="table table-hover">
        <thead>
          <tr class="table-active ">
            <th scope="col" >NAME</th>
            <th scope="col" >SCHOLASHIP</th>
            <th scope="col" >SY</th>
            <th scope="col" >COURSE</th>
            <th scope="col" >YEAR LEVEL</th>
            <th scope="col" >PROFILES</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
</table> 
<br><br><br>
<a href="/all/scholars" style="float:right;padding-right:0.5in"><button class="btn btn-sm btn-round btn-primary">Back</button></a>
@endsection