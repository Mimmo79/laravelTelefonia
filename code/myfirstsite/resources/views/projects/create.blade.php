@extends('layout')

@section('content')
  <h1 class="title">Create new Project</h1>

<form  method="post" action="/projects" style="margin-bottom: 1em">
  @csrf

<div class="field">
  <label class="label">Title</label>
  <div class="control">
    <input class="input" type="text" name="title" placeholder="Title" required>
  </div>
</div>

<div class="field">
  <label class="label">Description</label>
  <div class="control">
    <textarea class="textarea" name="description" placeholder="Description" required>description</textarea>
  </div>
</div>

<div class="field is-grouped">
  <div class="control">
    <button class="button is-link">Submit</button>
  </div>
</div>

  </form>

@endsection
