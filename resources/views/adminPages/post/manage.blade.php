@include('inc.script.table')
@extends('template.master')
@section('content')
<div class="card card-nav-tabs">
  <div class="card-header card-header-primary">
    <div class="text-center icon icon-info">
      <i class="material-icons" style="text-shadow:black 2px 4px 2px;font-size:40px ">wifi_tethering</i>
    </div>
    <h3 class="text-center" style="text-shadow:black 2px 4px 2px">MANAGE ANNOUNCEMENTS</h3>
  </div>
</div>
<div class="col-md-auto">
  <table class="display" id="table" style="width:100%;">
    <thead >
      <tr>
        <th style="width:1cm">NO.</th>
        <th  >TITLE</th>
        <th style="width:3in">BODY</th>
        <th  >CREATED_AT</th>
        <th  >COMMENTS</th>
        <th  >ACTION</th>

      </tr>
    </thead>
    <tbody >
            @foreach($posts as $post)
      <tr >
        <td>{{ $loop->index+1 }}.</td>
        <td style="width:20%; max-width:20%">{{$post->title}}</td>
        <td>{{$post->body}}</td>
        <td>{{$post->created_at->toFormattedDateString()}}</td>
        <td>{{$post->comments->count()}}</td>
        <td>

          <form method="post" action="{{ route('OSMS_post.destroy',$post->id) }}" class="delete_form">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <a href="{{ route('OSMS_post.edit',$post->id) }}" class="btn btn-primary btn-fab btn-round" rel="tooltip" data-original-title="Edit">
              <i class="material-icons">build</i>
            </a>
            <button class="btn btn-danger btn-fab btn-round" rel="tooltip" data-original-title="Delete" type="submit" onclick="return confirm('DELETING announcement will also delete all the related comments, Are you sure you want to continue.'); ">
              <i class="material-icons">delete_outline</i>
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
    <tfoot>
      <tr>
        <th style="width:1cm">NO.</th>
        <th  >TITLE</th>
        <th style="width:3in">BODY</th>
        <th  >CREATED_AT</th>
        <th  >COMMENTS</th>
        <th  >ACTION</th>
      </tr>
    </tfoot>
  </table>
</div>
@endsection