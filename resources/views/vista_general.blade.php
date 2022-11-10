<!DOCTYPE html>
<html>
<head>
    <title>PDF</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3>GENERAR PDF CON LARAVEL</h3>
        <ul>
            <li>
            <form action="{{ route('pdf.getGenerar') }}" method="POST">
                @csrf
                <input type="hidden" value="ver" name="accion">
                <input type="hidden" value="digital" name="tipo">

                <button type="submit">Ver PDF digital</button>
            </form>
            </li>
            {{-- <li>
                <a target="_blank" href="{{ route('pdf.getGenerar',['accion'=>'ver','tipo'=>'fisico']) }}">Ver PDF físico</a>
            </li>
            <li>
                <a target="_blank" href="{{ route('pdf.getGenerar',['accion'=>'descargar','tipo'=>'digital']) }}">Descargar PDF digital</a>
            </li>
            <li>
                <a target="_blank" href="{{ route('pdf.getGenerar',['accion'=>'descargar','tipo'=>'fisico']) }}">Descargar PDF físico</a>
            </li> --}}
        </ul>
    </div>
</body>
</html>
