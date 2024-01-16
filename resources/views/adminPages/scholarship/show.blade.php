@include('inc.script.table')
@extends('template.master')
@section('content')
<div class="card card-nav-tabs">
  <div class="card-header card-header-primary">
      <div class="text-center icon icon-info"><i class="material-icons"  style="text-shadow:black 2px 4px 2px;font-size:40px ">school</i></div>
      <h3 class="text-center" style="text-shadow:black 2px 4px 2px">SCHOLARSHIPS</h3>
  </div>
</div>
<div class="col-md-auto">
  <table class="display" id="table" style="width:100%">
    <thead>
            <div class="pull-right" style="padding-right:0.5in;padding:1%">
                    <a href="/scholarship/add" class="pull-right">    
                    <button class="btn btn-success"><i class="material-icons">control_point</i>
                        Add New Scholarship</button>
                    </a>
                </div>
      <tr>
            <th  style="width:1cm">#</th>
        <th  >SCHOLARSHIP NAME</th>
        <th  >SPONSOR</th>
        <th  >TYPE</th>
        <th  >SCHOOL YEAR</th>
        <th  >TOTAL SLOT'S</th>
        <th  ># OF SCHOLAR'S</th>
        <th  >ACTION</th>
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
            <td> <b> {{$scholars = count($profile->where("scholarship_id", $scholarship->id))}}</b> &nbsp;scholar/s</td>
            
                <form  method="post" action="{{ route('OSMS_scho.destroy',$scholarship->id) }}" class="delete_form">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <td>
                    <a href="/scholarship/{{ $scholarship->id }}/view" class="btn btn-primary btn-fab btn-round" rel="tooltip" data-original-title="View"  ><i class="material-icons">visibility</i></a>
                    <a href="{{ route('OSMS_scho.edit',$scholarship->id) }}" class="btn btn-warning btn-fab btn-round "rel="tooltip" data-original-title="Edit"  > <i class="material-icons">edit</i></a>
                    <button class="btn btn-danger btn-fab btn-round " rel="tooltip" data-original-title="Delete"  type="submit" onclick="return confirm('WARNING!, DELETING SCHOLARSHIP will delete scholarship permanently to all scholars who belengs to it (approved and request/s), Are you sure you want to continue?');"> <i class="material-icons">delete_outline</i></button>  </td>
                </form>
          
          </tr>
      @endforeach
    </tbody>
    <tfoot>
            <tr>
                    <th  style="width:1cm">#</th>
                <th  >SCHOLARSHIP NAME</th>
                <th  >SPONSOR</th>
                <th  >TYPE</th>
                <th  >SCHOOL YEAR</th>
                <th  >TOTAL SLOT'S</th>
                <th  ># OF SCHOLAR'S</th>
                <th  >ACTION</th>
              </tr>
        </tfoot>
</table></div><br><br>
@endsection