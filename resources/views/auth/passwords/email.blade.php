@extends('template.master')

@section('content')


<div class="section section-post">
        <div class="card card-nav-tabs">
            <div class="card-header card-header-primary">
                <h3 class="text-center" style="text-shadow:black 2px 4px 2px">Reset Password</h3>
                <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field() }}
    
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label" style="color:white">E-Mail Address</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="please enter your active email address" required>
    
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" style="color:white" class="btn btn-link btn-wd btn-lg ">
                                        Send Password Reset Link
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        <div  style="padding-right:1in">
        <div class="btn btn-sm btn-round btn-primary" style="float:right"> <a href="/login" style="color:white">Back</a></div>
    </div>
{{-- <div class="container" style="padding-left:4.3in">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h3 class="title">Reset Password</h3>


            </div>
        </div>
    </div>
</div> --}}
@endsection
