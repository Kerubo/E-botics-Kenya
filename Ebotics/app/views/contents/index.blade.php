@extends('master')
@section('content')
  <div class="page-header">
    
    <div class="pull-right btn-group">
      
      <a href="/signup" class="btn btn-primary">Signup</a>
    </div>
    
    <div class="pull-right btn-group">
      <a href="/login" class="btn btn-primary">Login</a>
    </div>



    
  
    <h1>E-botics  Kenya</h1>
  </div>
  <p>
  {{Form::open(['route' => 'contents.search', 'method' => 'GET', 'class' => 'form-inline'])}}
    {{Form::text('search', null, ['class' => 'form-control'])}}
    {{Form::submit('Search', ['class' => 'btn btn-default'])}}
  {{Form::close()}}
  <br>
  <h2>CREATING A GENERATION THAT THINKS NOT THAT FOLLOWS</h2>
  Website application that teaches kids from
the ages of 6-14 years on entrepreneurship
and robotics.
Focusing on primary school students from the age of 6 to 14 who have a passion in technology
but have no means of accessing the tutorials or means to learn the subjects by themselves, We
have therefore taken the initiative of finding out from the students and parents how much they
would like to have access of this vital information.<br>

    <img src="public/assets/images/watoto.jpg">
  </p>
 

  @foreach ($contents as $content)
    <li>
      <h2>
        <a href="{{route('contents.show', [$content->slug])}}">
          {{$content->title}}
        </a>
      </h2>
    </li>
  @endforeach

  {{$contents->links()}}
@stop
