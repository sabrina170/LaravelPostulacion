<!DOCTYPE html>
<html>
<head>
 <title>BOLETA DE VENTA</title>
 <style type="text/css">
 body{
 font-size: 16px;
 font-family: "Arial";
 }
 table{
 border-collapse: collapse;
 }
 td{
 padding: 6px 5px;
 font-size: 15px;
 }
 .h1{
 font-size: 21px;
 font-weight: bold;
 }
 .h2{
 font-size: 18px;
 font-weight: bold;
 }
</style>


</head>
<body>
 <div >

    <div>

    </div>
 <div class="card br-16 p-36">


    <div class="card-body">

        <label class="form-label" for="first-name-icon">Lugar</label>
        {{$lugar}}
        <br>
        <label class="form-label" for="first-name-icon">Fecha</label>
{{$fecha}}

    <div class="row m-0">
        @foreach ($infos as $item)

        <h2 class="intro-y text-lg font-medium mr-auto font-weight-bold">
            DOCUMENTO 4
        </h2>
        <h5 class="intro-y mr-auto">
            <strong> {{  $item->tipo_documento}}</strong> - {{  $item->numero_documento}}  <br>
            <strong>Dirección : </strong> {{  $item->direccion}} <br>
            <strong>Telefono : </strong> {{  $item->telefono}}

       </h5>


<h3 class="font-weight-bold mt-24">Opciones</h3>

        @foreach ($list as $l)
       <li> {{$l}}</li>
        @endforeach
        <label class="form-label" for="first-name-icon">Nombre AFP</label>
        {{$nombre_afp}}
        <br>
        <label class="form-label" for="first-name-icon">Codigo AFP</label>
         {{$codigo_afp}}
       <p><b>Apellidos y Nombres completos:</b> {{ $item->apellido_pa}} {{ $item->apellido_ma}}  {{ $item->nombres}} </p>
       <p><b>DNI:</b> {{ $item->numero_documento}}</p>
       @endforeach
       <h1>Firma</h1>
       <img src="/images-fima/{{$firma}}" alt="">
 </div>
</body>
</html>
