@include('inc.script.table')
@extends('template.master')
@section('content')
<div class="card card-nav-tabs">
    <div class="card-header card-header-primary">
        <div class="text-center icon icon-info"><i class="material-icons"  style="text-shadow:black 2px 4px 2px;font-size:40px ">person</i></div>
        <h3 class="text-center" style="text-shadow:black 2px 4px 2px">LIST OF SCHOLARS</h3>
    </div>
</div>
<div class="col-md-auto">
<table class="display" id="table" >
        <thead >
            <div class="pull-right" style="padding-right:0.5in; padding:1%">
                <a href="/add/new/scholar" class="pull-right">    
                <button class="btn btn-success"><i class="material-icons">control_point</i>
                    Add New Scholar</button>
                </a>
            </div>
          <tr>
              <th>#</th>
            <th style="width:1cm">ID-NUM</th>
            <th >FULLNAME</th>
            <th >SCHOLASHIP</th>
            <th >S.Y</th>
            <th >COURSE</th>
            <th >YEAR LEVEL</th>
            <th >RECORDS</th>
            <th >ACTION</th>
          </tr>
        </thead>
        <tbody >
           
            @foreach ($pendings as $pending)
            @if ($pending->is_confirmed == 1)
            <tr>
                    <td>{{ $no++ }}.</td>
                    <td>{{ $pending->user->id_num }}</td>
                    <td>{{$pending->lname}},&nbsp;{{$pending->fname}}&nbsp;{{$pending->mname}}</td>
                    <td>{{$pending->scholarship->name }}</td>
                    <td>{{$pending->scholarship->year}}-{{$pending->scholarship->year + 1}}</td>
                    <td>{{$pending->course }}</td>
                    <td>{{$pending->yrLevel }} Year</td>
                                   
                        @if (App\Profile::where('user_id', $pending->user_id)->count() >= 2)
                                @if ($pending->user->admin == 1) 
                                    <td style="color:green" class="title">Good</td>
                                @else
                                    <td style="color:red" class="title">{{App\Profile::where('user_id', $pending->user_id)->count()}} Record&apos;s<br><small>{{App\Profile::where('user_id', $pending->user_id)->count()}} records found in the <br> user id {{ $pending->user->id_num }} </small></td>
                                @endif
                        @else
                            <td style="color:green" class="title">Good <br><small>Has only <b>1</b> record </small></td>
                        @endif
                    <form  method="post" action="{{ route('OSMS_scholars.destroy',$pending->id) }}" class="delete_form">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <td><a href="/user/profile/{{$pending->id}}" class="btn btn-primary btn-fab btn-round" rel="tooltip" data-original-title="View Profile"> <i class="material-icons">visibility</i></a>
                        <a href="/edit/{{$pending->id}}" class="btn btn-warning btn-fab  btn-round" rel="tooltip" data-original-title="Edit Profile"><i class="material-icons">edit</i></a>
                        <button class="btn btn-danger btn-fab  btn-round" rel="tooltip" data-original-title="Delete Scholar" type="submit" onclick="return confirm('DELETING SCHOLAR will delete scholar data permanently, Are you sure you want to continue?'); "><i class="material-icons">delete_outline</i></a></td>
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
                      <th >SCHOLASHIP</th>
                      <th >S.Y</th>
                      <th >COURSE</th>
                      <th >YEAR LEVEL</th>
                      <th >RECORDS</th>
                      <th >ACTION</th>
            </tr>
            </tfoot>
    </table>
</div>

@endsection