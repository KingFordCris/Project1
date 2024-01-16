@include('inc.script.table')
@extends('template.master')
@section('content')
@include('inc.errors')
<div class="card card-nav-tabs">
        <div class="card-header card-header-primary">
            <div class="text-center icon icon-info"><i class="material-icons"  style="text-shadow:black 2px 4px 2px;font-size:40px ">account_circle</i></div>
            <h3 class="text-center" style="text-shadow:black 2px 4px 2px">Manage Accounts</h3>
        </div>
      </div>
<div class="col-md-auto">
<table class="display" id="table" style="width:100%;">
    <thead>
      <tr>
        <th >#</th>
        <th  >ID-NUM</th>
        <th  >USERNAME</th>
        <th  >EMAIL</th>
        <th  >PRIVELEDGE</th>
        <th  >STATUS</th>
        <th  >ACTION</th>
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
        {{-- ACTION --}}
        <form  method="post" action="{{ route('users.destroy', $user->id) }}" class="delete_form">
            {{ csrf_field() }}
            {{ method_field('DELETE') }} 
                <td>
                     {{-- <a href="/user/edit/{{$user->id}}" class="btn btn-rose btn-fab btn-round" disabled title="Change Password" ><b><i class="material-icons">border_color</i></b></a> --}}
                     <a href="/user/close/{{$user->id}}" class="btn btn-warning btn-fab btn-round" rel="tooltip" data-original-title="Deactivate Account" onclick="return confirm('DEACTIVATE ACCOUNT will stop the user to enter the page and will be added to accounts request, Are you sure you want to continue?'); "><b><i class="material-icons">block</i></b></a>
                     <button class="btn btn-danger btn-fab btn-round" onclick="return confirm('DELETE ACCOUNT will remove account permanently, Are you sure you want to continue?'); " type="submit" rel="tooltip" data-original-title="Delete Account Permanently" ><i class="material-icons">delete_outline</i></button>
                </td>
              
        </form>

        </tr>   
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th >#</th>
            <th  >ID-NUM</th>
            <th  >USERNAME</th>
            <th  >EMAIL</th>
            <th  >PRIVELEDGE</th>
            <th  >STATUS</th>
            <th  >ACTION</th>
        </tr>
    </tfoot>
</table>  
</div>
@endsection