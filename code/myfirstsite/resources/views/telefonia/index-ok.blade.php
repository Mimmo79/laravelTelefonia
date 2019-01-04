
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.13.0/bootstrap-table.css" />

  </head>
  <body>

      <h1>Assegnazioni terminali</h1>



    <table data-toggle="table"  data-sort-name="stargazers_count" data-sort-order="desc"
            class="table  table-bordered table-striped table-hover" >
    <thead>
      <tr>
        @php $keys=array_keys($assegnazioni[0]); @endphp
        @foreach($keys as $value)
          <th data-field="{{$value}}" data-sortable="true">{{$value}}</th>
        @endforeach
      </tr>
    </thead>

    <tbody>
      @foreach($assegnazioni as $index)
        <tr>
          @foreach($index as $value)
            <td>{{$value}}</td>
          @endforeach
        </tr>
      @endforeach
    </tbody>

    </table>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.js"></script>

  </body>
</html>
