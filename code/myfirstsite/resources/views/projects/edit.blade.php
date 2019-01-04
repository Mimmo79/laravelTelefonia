@extends('layout')

@section('content')
  <h1 class="title">Edit Project</h1>

<form  method="post" action="/projects/{{ $project->id }}" style="margin-bottom: 1em">
  <!--{{ method_field('PATCH')}}
  {{ csrf_field() }} -->
  @method('PATCH')
  @csrf

<div class="field">
  <label class="label">Title</label>
  <div class="control">
    <input class="input" type="text" name="title" placeholder="Title" value="{{ $project->title }}">
  </div>
</div>

<div class="field">
  <label class="label">Description</label>
  <div class="control">
    <textarea class="textarea" name="description" placeholder="Description">{{ $project->description }}</textarea>
  </div>
</div>

<div class="field is-grouped">
  <div class="control">
    <button class="button is-link">Submit</button>
  </div>
</div>

  </form>

<form method="post" action="/projects/{{ $project->id }}" >
  @method('DELETE')
  @csrf

  <div class="field is-grouped">
    <div class="control">
      <button class="button is-link">Delete</button>
    </div>
  </div>

</form>

@endsection
