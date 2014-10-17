@extends('master')
@section('content')
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<div style="  height:1000px; background-image: url('https://graphicpolicy.files.wordpress.com/2014/10/transformers-robots-in-disguise-warriors-optimus-prime-1-copy.jpg' );:margin:40px auto">
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

<div style="margin-left: 10px">
<!-- start margin -->


<div style="float: left; width: 500px; margin: 0px 3px 3px 5px;">
<div>Introduction to Robotics

This robotics introduction teaches the basics of the robot world, offering robot information covering everything from artificial intelligence to robot mechanics and robots in industries such as car manufacturing and the military.

Learn about robots with the concepts provided in this great technology lesson plan.
      

Definitions:

    What does the word ‘robotics’ mean? - The science or study of the technology associated with the design, fabrication, theory, and application of robots.

    What about ‘robot’? - Robots are any machine that does work on its own, automatically.

 </div>

<div style="clear: "></div>
</div>
<!-- end margin -->

<div style="margin-left: 10px">

<div style="float: left; width: 300px; margin: 4px 3px 3px 5px;">
<!-- start float -->


<div>
<div style="clear: all"></div>
</div><!-- end float -->
<div style="float: left; width: 300px; height:300px; margin: 0px 3px 3px 5px;">
<!-- start float2 -->


<div>You are not following anybody.</div>

<div style="clear: clear all"></div>
</div><!-- end float 2-->

<div style="float: left; width: 300px; height:300px; color:#FO5A28; margin: 0px 3px 3px 5px;">
<!-- start float2 -->


<div></div>

<div style="clear: clear all"></div>
</div><!-- end float 2-->




 
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
