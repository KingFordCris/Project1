@include('inc.script.table')
@extends('template.master')
@section('content')
@include('inc.errors')
<div class="card card-nav-tabs">
        <div class="card-header card-header-primary">
            <div class="text-center icon icon-info"><i class="material-icons"  style="text-shadow:black 2px 4px 2px;font-size:40px ">account_circle</i></div>
            <h3 class="text-center" style="text-shadow:black 2px 4px 2px">Accounts Request</h3>
        </div>
      </div>
<div class="col-md-auto">
<table class="display" id="table" style="width:100%;">
    <thead>
      <tr>
        <th>#</th>
        <th >ID-NUM</th>
        <th >USERNAME</th>
        <th >EMAIL</th>
        <th >PRIVELEDGE</th>
        <th >STATUS</th>
        <th >ACTION</th>
      </tr>
    </thead>
    <tbody >
        @foreach ($users as $user)
        <tr>
            <td>{{ $no++ }}.</td>
            <td>{{$user->id_num}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
        {{-- PREVELEDGE --}}
            @if ($user->admin == 1)
                <td style="color:orange"><b>Superuser(admin)</b></td>
            @else 
                <td style="color:purple"><b>User</b></td>
            @endif
        {{-- STATUS --}}
            @if ($user->is_confirmed == 1)
                <td style="color:green"><b>Active</b></td>  
            @else 
                <td style="color:red"><b>Inactive</b></td>
            @endif
                <td> <a href="/user/activate/{{$user->id}}" class="btn btn-success btn-fab btn-round" rel="tooltip" data-original-title="Activate Account" onclick="return confirm('APPROVING ACCOUNT will allow the user to access the page, are you sure you want to continue?'); "><b><i class="material-icons">done</i></b></a>
                     <a href="/user/deactivate/{{$user->id}}" class="btn btn-danger btn-fab btn-round" rel="tooltip" data-original-title="Delete Account" onclick="return confirm('DISAPPROVING ACCOUNT will disallow the user to enter the page and deletes the request, are you sure you want to continue?'); "><b><i class="material-icons">cancel</i></b></a></td>
        </tr>  
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>#</th>
            <th >ID-NUM</th>
            <th >USERNAME</th>
            <th >EMAIL</th>
            <th >PRIVELEDGE</th>
            <th >STATUS</th>
            <th >ACTION</th>
        </tr>
    </tfoot>
</table>  
</div>
@endsection