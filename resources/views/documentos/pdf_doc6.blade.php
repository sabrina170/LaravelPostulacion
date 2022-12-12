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
            AUTORIZACIÓN DE ACCESO A EQUIPOS PROPIOS
        </h2>
        <p>
            Lugar: {{$lugar}} <br>
            Fecha: {{$fecha}}
        </p>

        <div class="col-lg-12 mt-24">
            Yo,	<b>{{ $item->nombres}} {{ $item->apellido_pa}} {{ $item->apellido_ma}}</b>  identificado con DNI N°  <b>{{ $item->numero_documento}}</b> con domicilio <b>{{ $item->direccion}}</b> .Distrito <b>{{ $item->distrito}}</b>,
            Provincia de <b>{{ $item->provincia}}</b> y departamento de <b>{{ $item->departamento}}</b>; mediante el presente documento declaro lo siguiente:<br><br>

            Que autorizo a Konecta Perú1 para que acceda a los equipos de mi propiedad, con la finalidad de realizar acciones tendientes al inicio de mis labores y durante la prestación de servicios; en base a las cuales se realizarán:<br><br>
            <ol>
                <li>Las configuraciones para la activación de usuarios, permisos y restricciones para la seguridad de la información.</li>
                <li>Las configuraciones para el remoteo del equipo.</li>
                <li>Las revisiones para verificar el cumplimiento normativo a través de auditorías.</li>
            </ol>

            Asimismo, declaro que el consentimiento brindado es libre, expreso e informado previamente; por lo que no ha existido ningún tipo de coacción para el ejercicio del mismo.<br><br>


            Firmo al pie del presente documento en señal de conformidad.

        </div>
        <br><br>

        <img src="/images-firma/{{$firma}}" alt="">
        <p>
            <b>{{ $item->nombres}} {{ $item->apellido_pa}} {{ $item->apellido_ma}}</b><br>
            <b>{{ $item->tipo_documento}} : {{ $item->numero_documento}}</b>
        </p>

       @endforeach


       {{-- <form action="{{ route('pdf.getGenerar') }}" method="POST">
        @csrf
        <input type="hidden" value="descargar" name="accion">
        <input type="hidden" value="digital" name="tipo">

        <button type="submit">Generate PDF</button>
    </form> --}}
 </div>

 {{-- <a href="{{ route('pdf.generate') }}" class="btn btn-primary">Generate PDF</a> --}}
</body>
</html>
