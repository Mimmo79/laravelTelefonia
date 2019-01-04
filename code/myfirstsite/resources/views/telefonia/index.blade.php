
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1> <!-- , shrink-to-fit=no" -->

    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.13.0/bootstrap-table.css" />

    <style>
      td,th   {
        font-size: 10px;
      }
    </style>

  </head>
  <body>

    <div class="container text-center p-3">
      <h1>Assegnazioni terminali</h1>
    </div>


    <div class="container">

      <table  id="table"
              data-toggle="table"
              data-sort-name="stargazers_count"
              data-sort-order="desc"
              striped="true"
              data-pagination="true"
              class="table table-responsive table-bordered table-striped table-hover" >

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

    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.js"></script>

    <script>
    // "h1"
    // ".classe"
    // "#id"
    $(document).ready(function(){
      // jQuery methods go here...
      // $("#table").bootstrapTable('togglePagination');
    });
    </script>

  </body>
</html>
