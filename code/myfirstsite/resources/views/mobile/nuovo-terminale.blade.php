@extends('base.layout')

@section('content-sx')
<p class="form-text text-muted" style="font-size:1rem">Il numero IMEI lo si trova nel retro del telefono, solitamente sotto la batteria.</p>
@endsection('content')

@section('content')
<p id="demo"></p>
<span id="value"></span>

<h2 class="title py-2">Registrazione del nuovo terminale</h1>

<form  method="post" action="/mobile/nuovo-terminale/create" style="margin-bottom: 1em">
  @csrf


    <div class="form-group">
      <label for="exampleInputEmail1">IMEI</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="es. 153578952546125">
      <small id="emailHelp" class="form-text text-muted">Verifica che il numero sia di 15 cifre</small>
    </div>

    <div class="form-group">
      <label for="exampleFormControlSelect1">Seleziona Marca</label>
      <select class="form-control" id="marca" name="marca" onchange="myFunction()">
        <option value="">Seleziona la marca del terminale</option>
        @foreach ($Marche as $marca)
          <option value="{{$marca->Marca}}">{{$marca->Marca}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="exampleFormControlSelect1">Seleziona Modello</label>
      <select class="form-control dynamic" data-dependent="modello" id="modello" name="modello">
        <option value="">Seleziona il modello</option>

        <option value=""></option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Note</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>



    <button type="submit" class="btn btn-primary">Inserisci</button>
  </form>

{{--dd($arrayTermList)--}}

  <script>
    function myFunction() {
      var x = document.getElementById("marca").value;
      var jsonList = <?php echo $jsonTermList ?>;
      var obj = jsonList[0];
      //alert( obj.Marca );
      var arrSize = 0;
      for (key in jsonList) {
        //   if (jsonList.hasOwnProperty(x)) {
        //   arrSize++;
        // }
        arrSize++;
        // var objectSize = 0;
        if (jsonList[key].Marca == x ){
          document.getElementById("value").innerHTML += jsonList[key].Modello + "<br>"  ;
        }
      }
      // document.getElementById("demo").innerHTML = arrSize;


    }
  </script>




{{--<script>
  $(document).ready(function(){

   $('.dynamic').change(function(){
    if($(this).val() != '')
    {
     var select = $(this).attr("id");
     var value = $(this).val();
     var dependent = $(this).data('dependent');
     var _token = $('input[name="_token"]').val();
     $(this).attr("id");
     $.ajax({
      url:"{{ route('ControllerTerminali.fetch') }}",
      method:"POST",
      data:{select:select, value:value, _token:_token, dependent:dependent},
      success:function(result)
      {
       $('#'+dependent).html(result);
      }

     })
    }
   });

   $('#marca').change(function(){
    $('#modello').val('');
  });


  });
  </script>--}}



  @endsection('content')
