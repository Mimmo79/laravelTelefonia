<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Home Page</h1>
    <ul>
      @foreach ($projects as $project)
      <li> <a href="/projects/{{ $project->id }}">{{$project->title}}</a> </li>
      @endforeach
    </ul>
    <p style="margin-top:2em"><a href="/projects/create">Crea un nuovo progetto</a></p>
  </body>
</html>
