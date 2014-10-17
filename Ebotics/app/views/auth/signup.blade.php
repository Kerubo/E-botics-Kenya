@extends('master')
@section('content')
<div style="  height:600px; background:#016DA0;:margin:40px auto">
  <div class="page-header">
   <div class="pull-right">
      <a href="/login" class="btn btn-default">Login</a>
    </div>
    <h2 style="color:#F05A28;">Create Your Own Account</h2>
  </div>
  {{Form::open(['action' => 'AuthController@signup'])}}
  <div class="form-group">
   {{ Form::label('Username') }}
    {{Form::text('username')}}
  </div>
  <div class="form-group">
   {{ Form::label('Elect-mail') }}
    {{Form::text('email')}}
  </div>
  <div class="form-group">
   {{ Form::label('Password') }}
    {{Form::password('password')}}
  </div>
  <div class="form-group">
    {{Form::submit('Create Account', ['class' => 'btn btn-success'])}}
  </div>
  {{Form::close()}}
  <div class="pull-left btn-group">
      <a href="{{route('contents.create')}}" class="btn btn-default">
      Create Account</a></div>
      </div>
@stop
