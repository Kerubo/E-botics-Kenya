@extends('master')
@section('content')
  <div class="page-header">
   
    <div class="pull-right btn-group">
      <a href="{{route('contents.index')}}" class="btn btn-default">Entreprenuership</a>
      <a href="{{route('contents.index')}}" class="btn btn-default">Robotics</a>
      <a href="/logout" class="btn btn-primary">Logout</a>
    </div>
    
    <h2>Help us help you</h2>
  </div>
  {{Form::open(['route' => 'contents.store'])}}
  <div class="form-group">
    {{Form::text('title', null,['class' => 'form-control', 'placeholder' =>'Subject'])}}
  </div>

  <div class="form-group">
    {{Form::textarea('text', null,['class' => 'form-control', 'placeholder' =>'Question/Comment/sugestions'])}}
  </div>
  <div class="form-group">
    {{Form::submit('Post comment', ['class' => 'btn btn-success'])}}
  </div>
  {{Form::close()}}
@stop
