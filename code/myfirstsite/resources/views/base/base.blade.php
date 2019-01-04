@extends('base.layout')

@section('content-sx')
  <div class="container p-2">
    <a type="button" href="/fissa" class="btn btn-secondary btn-block">Fissa</a>
  </div>
  <div class="container p-2">
    <a type="button" href="/mobile" class="btn btn-secondary btn-block">Mobile</a>
  </div>
  <div class="container p-2">
    <button type="button" href="../toner" class="btn btn-secondary btn-block">Gestione toner</button>
  </div>


@endsection('content')

@section('content')
 <h1>Home Page</h1>
@endsection('content')
