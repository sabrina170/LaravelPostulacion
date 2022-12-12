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
            COMPROMISO DE NO SUPLANTACIÓN DE IDENTIDAD
        </h2>
        <p>
            Lugar: {{$lugar}} <br>
            Fecha: {{$fecha}}
        </p>

        <div class="col-lg-12 mt-24">
            <p>
             Yo, <b>{{ $item->nombres}}	{{ $item->apellido_pa}} {{ $item->apellido_ma}}</b>  ,	identificado con	DNI N° <b>{{ $item->numero_documento}}</b> ,con domicilio <b>{{ $item->dirección}}</b> ubicado en
            , distrito <b>{{ $item->distrito}}</b> provincia de <b>{{ $item->provincia}}</b> y departamento de <b>{{ $item->departamento}}</b>; mediante el presente documento tomo conocimiento de lo siguiente:<br>
            <ol>
            <li>Que, la suplantación de identidad consiste en hacerse pasar por otra persona por diversos motivos y para diversos fines, hecho que puede darse por medios distintos, entre ellos, como los tecnológicos.</li>
            <li>Que, Konecta Perú1, rechaza tajantemente la comisión de cualquier conducta delictiva; por lo que, ante este tipo de conductas, toma las acciones legales pertinentes de conformidad con el Código Penal Peruano y la Ley de Delitos Informáticos.</li>
            <li>Qué, Konecta Perú en aras de la prevención de la existencia de esta conducta delictiva, realizará la comprobación de la identidad de el/la colaborador/a durante la capacitación y en cualquier momento de la relación laboral (si la hubiere).</li>
            </ol>
            <br>
            En consecuencia, con pleno conocimiento del contenido del presente documento, autorizo la comprobación de mi identidad y declaro bajo responsabilidad que no ha existido ningún tipo de coacción para la firma al pie del presente documento en señal de conformidad.

                        </p>
                    </div>
       @endforeach
       <br><br>
       <img src="/images-firma/{{$firma}}" alt="">
        <p>
            <b>{{ $item->nombres}} {{ $item->apellido_pa}} {{ $item->apellido_ma}}</b><br>
            <b>{{ $item->tipo_documento}} : {{ $item->numero_documento}}</b>
        </p>

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
