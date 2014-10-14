@extends('master')
@section('content')
  <div class="page-header">
    <div class="pull-right">
      <a href="/signup" class="btn btn-default">Sign Up</a>
    </div>
    <h2>Login to your Account</h2>
  </div>
  {{Form::open(['action' => 'AuthController@login'])}}
  <div class="form-group">
   {{ Form::label('Username') }}
    {{Form::text('username')}}
  </div>
  <div class="form-group">
   {{ Form::label('Password') }}
    {{Form::password('password')}}
  </div>
  <div class="form-group">
    <a href="contents.create" class="btn btn-default">{{Form::submit('Login', ['class' => 'btn btn-success'])}}</a>
  </div>
  {{Form::close()}}
@stop
