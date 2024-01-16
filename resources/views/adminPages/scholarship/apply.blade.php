@include('inc.script.notable')
@extends('template.master')
@section('content')
<h2 class="title text-center">{{$scholarship->name}}</h2>
<div class="col-sm-8">
    <b> Step 1:</b> Fill-up your <a href=""> profile </a> then fill the information needed <br>
    <b>Step 2:</b> Prepare the given Requirements <br> Requirements:<pre><b>{{$scholarship->requirements}}</b></pre>
    <b>Step 3:</b> Bring the Requirements and Proceed to Office of the Student Development and Welfare <br>
   
</div>
<div style="padding-right:1in">
        <a href="/scholarship/show"><button class="btn btn-rose btn-round pull-right" >Back</button></a>
        </div>

@endsection