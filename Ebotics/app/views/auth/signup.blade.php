@extends('master')
@section('content')
  <div class="page-header">
   <div class="pull-right">
      <a href="/login" class="btn btn-default">Login</a>
    </div>
    <h2>Create Account</h2>
  </div>
  {{Form::open(['action' => 'AuthController@signup'])}}
  <div class="form-group">
   {{ Form::label('Username') }}
    {{Form::text('username')}}
  </div>
  <div class="form-group">
   {{ Form::label('Password') }}
    {{Form::password('password')}}
  </div>
  <div class="form-group">
    {{Form::submit('Create Account', ['class' => 'btn btn-success'])}}
  </div>
  {{Form::close()}}
@stop
