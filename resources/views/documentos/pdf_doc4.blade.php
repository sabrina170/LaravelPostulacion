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
            DECLARACIÓN JURADA PARA EL SISTEMA PREVISIONAL DE PENSIÓN
        </h2>

        <h5 class="intro-y mr-auto">
            Ingresar Tipo de Documento y Número (Carnet de Extranjería / DNI)
        </h5>

        <p>Con esta Declaración libero al Departamento de Recursos Humanos de toda responsabilidad </p>

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
       <p><b>Apellidos y Nombres completos:</b> {{ $item->apellido_pa}} {{ $item->apellido_ma}}  {{ $item->nombres}} </p>
       <p><b>DNI:</b> {{ $item->numero_documento}}</p>


 </div>
</body>
</html>
