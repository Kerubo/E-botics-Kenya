@extends('master')
@section('content')
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<div style="  height:1000px;
;:margin:40px auto">
  <div class="page-header">
    
    <div class="pull-right btn-group">
      
      <a href="/signup" class="btn btn-primary" style="color:orange;">Signup</a>
    </div>
    
    <div class="pull-right btn-group">
      <a href="/login" class="btn btn-primary" style="color:orange;">Login</a>
    </div>



    
  
    <h1 style="color:#F05A28;">E-botics  Kenya</h1>
  </div>
  <p>
  {{Form::open(['route' => 'contents.search', 'method' => 'GET', 'class' => 'form-inline'])}}
    {{Form::text('search', null, ['class' => 'form-control'])}}
    {{Form::submit('Search', ['class' => 'btn btn-default'])}}
  {{Form::close()}}
  </p>
<h2>Creating a generation that thinks not that follows</h2>


 
<div class="pull-right btn-group">
      <a href="/logout" class="btn btn-primary" style="color:#FO5A28;">
      Next Step</a>
    </div>
    </div>
  <!---@foreach ($contents as $content)
    <li>
      <h2>
        <a href="{{route('contents.show', [$content->slug])}}">
          {{$content->title}}
        </a>
      </h2>
    </li>
  @endforeach

  {{$contents->links()}}-->
@stop
