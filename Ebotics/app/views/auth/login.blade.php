@extends('master')
@section('content')
<div style="  height:600px; background:#016DA0;:margin:40px auto">
  <div class="page-header">
    <div class="pull-right">
      <a href="/signup" class="btn btn-primary">Sign Up</a>
    </div>
    <h2 style="color:#F05A28;">Login to your Account</h2>
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
  
  {{Form::close()}}
 {{Form::close()}}
  <div class="pull-left btn-group">
      <a href="{{route('contents.create')}}" class="btn btn-primary">
      Access Account</a></div>
      </div>
      
@stop
