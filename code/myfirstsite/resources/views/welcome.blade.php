@extends('layout')

@section('title')
  Home
@endsection




@section('content')

<h1>My first website</h1>
<h1>Domanda, chi è pippo? {{$pippo}}</h1>
<h1>Query string</h1>
<p>-- es. 127.0.0.1:8000/?titolo=cazzo --> {{$queryname}}</p>


<ul>
  @foreach($tasks as $task)
  <li>{{$task}}</li>
  @endforeach
</ul>

<ul>
  <?php foreach ($tasks as $task) : ?>
    <li><?= $task; ?></li>
  <?php endforeach; ?>
</ul>

@endsection
