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
    <div>
        @foreach ($infos as $item)
        <h2 class="intro-y text-lg font-medium mr-auto font-weight-bold">
            DECLARACIÓN JURADA DE DATOS Y DOMICILIO LEGAL
        </h2>
        <p>Fecha:{{$fecha}}</p>


        <p>El que suscribe <b>{{ $item->apellido_pa}} {{ $item->apellido_ma}}  {{ $item->nombres}}</b> N° DNI  <b>{{ $item->numero_documento}}</b> con domicilio actual en (Av./Clle./Mz./Lt. – Int/Dpto) <b>{{  $item->direccion}}</b> Distrito: <b>{{  $item->distrito}}</b> Provincia: <b>{{  $item->provincia}}</b> <br> Teléfono: <b>{{  $item->telefono}}</b> </p>

         <p>Referencias adicionales: </p>

        <p>Declaro dicho domicilio como actual y legal ante cualquier notificación o control de la Empresa, comprometiéndome  a comunicar fehacientemente dentro de las cuarenta y ocho horas, su cambio o modificación.</p>

        <table>
            <tr>
                <td>
                    <p><b>{{ $item->nombres}} {{ $item->apellido_pa}} {{ $item->apellido_ma}}</b></p><br>
                    <p>Nombres y apellidos</p>
                </td>

                <td>
                    <img src="/images-firma/{{$firma}}" class="img-thumbnail mt-24" alt="..."><br>
                    <p>Firma</p>
                </td>
            </tr>
        </table>
        @endforeach
    </div>
</body>
</html>
