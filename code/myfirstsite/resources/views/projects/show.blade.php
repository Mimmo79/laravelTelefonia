@extends('layout')

@section('content')
  <h1 class="title" style="margin-top: 2em">{{$project->title}}</h1>

  <div class="content">
    {{$project->description}}
  </div>

  <p>
    <a href="/projects/{{ $project->id }}/edit">edit</a>
  </p>

@endsection('content')
