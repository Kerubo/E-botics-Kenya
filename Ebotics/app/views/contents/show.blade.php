@extends('master')
@section('content')
  <div class="page-header">
    <a href="{{route('contents.index')}}" class="btn btn-default">
      &larr; Back to Content
    </a>
  </div>
  <p class="lead">{{$content->title}}</p>
  <p>
    {{$content->text}}
  </p>
  <blockquote>
    <small>Author</small>
    {{$content->author->username}}
  </blockquote>
@stop
