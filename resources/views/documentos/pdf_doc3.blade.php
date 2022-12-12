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

    <div class="row m-0">
        @foreach ($infos as $item)

        <h2 class="intro-y text-lg font-medium mr-auto font-weight-bold">
            DECLARACIÓN JURADA
        </h2>

        <p>Lugar: {{$lugar}}</p>
        <p>Fecha: {{$fecha}}</p>

        <h5 class="intro-y mr-auto">
            <strong> {{  $item->tipo_documento}}</strong> - {{  $item->numero_documento}}  <br>
            <strong>Dirección : </strong> {{  $item->direccion}} <br>
            <strong>Telefono : </strong> {{  $item->telefono}}

       </h5>

       <div class="col-lg-12 mt-24">
        El que suscribe <b> {{ $item->apellido_pa}} {{ $item->apellido_ma}}  {{ $item->nombres}}</b> con {{  $item->tipo_documento}} :  {{  $item->numero_documento}} declara lo siguiente:
        Haber recibido del área de RRHH la información pertinente respecto a los sistemas de pensiones, así mismo certifica la recepción del Boletín Informativo acerca de las características del Sistema Privado de Pensiones (SPP) y del Sistema Nacional de Pensiones (SNP).

    </div>

       @endforeach
       <br><br>
       <img src="/images-firma/{{$firma}}" alt="">
       <p>
        <b>{{ $item->nombres}} {{ $item->apellido_pa}} {{ $item->apellido_ma}}</b><br>
        <b>{{ $item->tipo_documento}} : {{ $item->numero_documento}}</b>
    </p>
 </div>
</body>
</html>
