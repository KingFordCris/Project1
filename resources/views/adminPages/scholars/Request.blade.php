@include('inc.script.table')
@extends('template.master')
@section('content')
<div class="card card-nav-tabs">
    <div class="card-header card-header-primary">
        <div class="text-center icon icon-info"><i class="material-icons"  style="text-shadow:black 2px 4px 2px;font-size:40px ">person_add</i></div>
        <h3 class="text-center" style="text-shadow:black 2px 4px 2px">LIST OF SCHOLAR APPLICANT'S</h3>
    </div>
</div>
<div class="col-md-auto">
<table class="display" id="table"  style="width:100%;">
        <thead>
          <tr>
            <th>#</th>
            <th style="width:1cm">ID-NUM</th>
            <th >FULLNAME</th>
            <th style="width:0.7cm">REQUESTED SCHOLASHIP</th>
            <th >COURSE</th>
            <th >YEAR LEVEL</th>
            <th >DATE OF REQUEST</th>
            <th >RECORDS</th>
            <th >ACTION</th>
          </tr>
        </thead>
        <tbody >
            @foreach ($pendings as $pending)
            @if ($pending->is_confirmed == 0)
            <tr>
                <td>{{ $no++ }}.</td>
                <td>{{ $pending->user->id_num }}</td>
                <td>{{$pending->lname}},&nbsp;{{$pending->fname}}&nbsp;{{$pending->mname}} </td>
                <td>{{$pending->scholarship->name }} ({{$pending->scholarship->year}})</td>
                <td>{{$pending->course }}</td>
                <td>{{$pending->yrLevel }} Year</td>
                <td>{{$pending->created_at->toFormattedDateString()}}</td>
                @if (App\Profile::where('user_id', $pending->user_id)->count() >= 2)
                     <td style="color:red" class="title"  rel="tooltip" data-original-title="Already a scholar"> {{App\Profile::where('user_id', $pending->user_id)->count()}} Record&apos;s <br><small>{{$pending->user->name}} ({{$pending->user->id_num}}) is <br> already a scholar and <br> has {{App\Profile::where('user_id', $pending->user_id)->count() }} records</small> </td>
                @else
                    <td style="color:green" class="title" rel="tooltip" data-original-title="New Scholar">Good <br><small>{{$pending->user->name}} ({{$pending->user->id_num}})  <br>has no records found yet</small></td>
                @endif
                    <form  method="post" action="{{ route('OSMS_scholars.destroy',$pending->id) }}" class="delete_form">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <td><a href="/user/profile/{{$pending->id}}" class="btn btn-primary btn-fab btn-round" rel="tooltip" data-original-title="View Profile"> <i class="material-icons">visibility</i></a>
                        <a href="/add/{{$pending->id}}" class="btn btn-success btn-fab  btn-round" rel="tooltip" data-original-title="Confirm Application" onclick="return confirm('CONFIRMING APPLICATION will add the applicant to scholars, Please make sure that requirements are already passed before confirming. Are you sure you want to continue?'); "><i class="material-icons">done</i></a>
                        <button class="btn btn-danger btn-fab  btn-round" rel="tooltip" data-original-title="Delete Application" type="submit" onclick="return confirm('DELETING Application will cancell scholar request and deletes application permanently, Are you sure you want to continue.'); "><i class="material-icons">delete_outline</i></a></td>
                    </form>
            </tr>                
            @endif   
            @endforeach
        </tbody>
        <tfoot>
            <tr>
            <th>#</th>
            <th style="width:1cm">ID-NUM</th>
            <th >FULLNAME</th>
            <th style="width:0.7cm">REQUESTED SCHOLASHIP</th>
            <th >COURSE</th>
            <th >YEAR LEVEL</th>
            <th >DATE OF REQUEST</th>
            <th >RECORDS</th>
            <th >ACTION</th>
          </tr>
        </tfoot>
    </table>       
</div>
@endsection

