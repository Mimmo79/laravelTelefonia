
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.css" rel="stylesheet"/>

  </head>
  <body>


    <table data-toggle="table"  data-sort-name="stargazers_count" data-sort-order="desc">
    <thead>
      <tr>
        <th data-field="1" data-sortable="true"> Name </th>
        <th data-field="2" data-sortable="true"> Stars </th>
        <th data-field="3" data-sortable="true"> Forks </th>
        <th data-field="4" data-sortable="true"> Description </th>
        <th data-field="5" data-sortable="true"> Description </th>
        <th data-field="6" data-sortable="true"> Description </th>
        <th data-field="7" data-sortable="true"> Description </th>
        <th data-field="8" data-sortable="true"> Description </th>
        <th data-field="9" data-sortable="true"> Description </th>
        <th data-field="10" data-sortable="true"> Description </th>
        <th data-field="11" data-sortable="true"> Description </th>
        <th data-field="12" data-sortable="true"> 9 </th>
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
