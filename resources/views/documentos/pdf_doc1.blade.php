
 
 <!doctype html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Bootstrap demo</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   </head>
   <body>
     
     
     <div class="container">
        <h4 class="text-center mt-4">FICHA DEL TRABAJADOR</h4>

        
    
        @foreach ($infos as $item)
         
        
        <div class="row">
            <div class="col-3">
                <p class="form-label" for="basicSelect"><strong>N° de documento:</strong> 
                @if ($item->tipo_documento=="DNI")
               DNI</p>
                @else
              CE</p>
                @endif
            </div>
            <div class="col-3">
                <p class="form-label" for="first-name-icon"><strong>N° de documento:</strong> {{$item->numero_documento}}</p>
            </div>
            <div class="col-3">
                <p class="form-label" for="first-name-icon"><strong>Número de teléfono:</strong> {{$item->telefono}}</p>
            </div>
            <div class="col-3">
                <p class="form-label" for="first-name-icon"><strong>Edad:</strong> {{$edad}}</p>
            </div>
          </div>
          <div class="row">
            <div class="col-3">
                <p class="form-label" for="first-name-icon"><strong>Nombres:</strong>{{$item->nombres}}</p>
            </div>
            <div class="col-3">
                <p class="form-label" for="first-name-icon"><strong>Direccion:</strong>{{$item->direccion}}</p>

            </div>
            <div class="col-3">
                <p class="form-label" for="first-name-icon"><strong>Fecha de nacimiento:</strong>
                    {{$item->fecha_nacimiento}}</p>
            </div>
            <div class="col-3">
                <p class="form-label" for="first-name-icon"><strong>Genero:</strong>{{$item->sexo}}</p>
            </div>
          </div>
          <div class="row">
            <div class="col-3">
                <p class="form-label" for="first-name-icon"><strong>N° de hijos:</strong>{{$n_hijos}}</p>
            </div>
            <div class="col-3">
                <p class="form-label" for="first-name-icon"><strong>Teléfono familiar contacto:
                    </strong>{{$telefono_familiar}}</p>
            </div>
          </div>
        @endforeach

        <img src="/images-croquis/{{$croquis}}" class="img-fluid mt-4" alt="...">
        <table class="table table-bordered">
            <thead>
              <tr class="table-active">
                            <th>Nombres y Apellidos Completos</th>
                              <th>Parentesco</th>
                              <th>Edad</th>
                              <th>Sexo</th>
                              <th>Tipo doc</th>
                              <th>Nro doc</th>
                              <th>Estudia</th>
              </tr>
            </thead>
            <tbody>
              
                @for($i=0; $i<count($datos_nombres); $i++)
                    {{-- {{$i}} --}}
              <tr>
                <td>{{$datos_nombres[$i]}}</td>
                <td>{{$datos_parentesco[$i]}}</td>
                <td>{{$datos_edad[$i]}}</td>
                <td>{{$datos_sexo[$i]}}</td>
                <td>{{$datos_tipo_dni[$i]}}</td>
                <td>{{$datos_numero_dni[$i]}}</td>
                <td>{{$datos_estudia[$i]}}</td>
              </tr>
              @endfor
            </tbody>
          </table>
          <div class="row mt-4">
            <div class="col-12">
                <p class="form-label" for="first-name-icon">
                    <strong>Ha trabajado anteriormente este año?:
                        </strong>{{$trabajo}}</p>
            </div>
            <div class="col-12">
                <p class="form-label" for="first-name-icon">
                    <strong>Nombre del empleador:</strong>
                    {{$nombre_empleador}}</p>

            </div>
            <div class="col-12">
                <p class="form-label" for="first-name-icon">
                    <strong>Domiciliado:</strong>
                    {{$domiciliado}}</p>
            </div>
            <div class="col-12">
                <p class="form-label" for="first-name-icon">
                    <strong>Fecha de cese de su último empleo:
                        </strong>{{$fecha_cese}}</p>
            </div>
            <div class="col-12">
                <p class="form-label" for="first-name-icon">
                    <strong>Indicar si está afiliado a Essalud Vida:
                        </strong>{{$afiliado}}</p>
            </div>
            <div class="col-12">
                <p class="form-label" for="first-name-icon">
                    <strong>Si es extranjero indicar días de permanencia en el país
                        </strong>{{$dias_per}}</p>
            </div>
          </div>

        <img src="/images-firma/{{$firma}}" class="img-thumbnail mt-4" alt="...">


     </div>
     
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   </body>
 </html>
 
