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
 color: blue;
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

        <h1 class="h1">
            DOCUMENTO 6
        </h1>
        <h5 class="intro-y mr-auto">
            {{-- <strong> {{  $item->tipo_documento}}</strong> - {{  $item->numero_documento}}  <br>
            <strong>Dirección : </strong> {{  $item->direccion}} <br>
            <strong>Telefono : </strong> {{  $item->telefono}} --}}

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
