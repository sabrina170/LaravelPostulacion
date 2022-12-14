<!doctype html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Bootstrap demo</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

     <style>
      body{
        font-family: arial;
      }
     </style>

    </head>
   <body style="font-family: arial">


     <div style="margin-top: 10px;">
        <img src="{{asset('app-assets/images/logo.jpg')}}" width="15%">
    </div>
    <div>
        <h4 class="text-center mt-4" style="font-size:14px"><strong>FICHA DE DATOS DEL TRABAJADOR <br>
            <span>{{$fecha}}</span></strong></h4>
    </div>

        <h4 style="font-size:16px; font-weight:bold; font-family:arial;">1.	DATOS DEL TRABAJADOR</h4>


        @foreach ($infos as $item)
        <div class="row">
          <div class="col-lg-12">
            <table class="table table-bordered">
              <tr>
                <td>Nombres:</td>
                <td>{{$item->nombres}}</td>
              </tr>
              <tr>
                <td>Apellidos:</td>
                <td>{{$item->apellido_pa}} {{$item->apellido_ma}}</td>
              </tr>
              <tr>
                <td>Fecha de nacimiento:</td>
                <td>{{$item->fecha_nacimiento}}</td>
              </tr>
              <tr>
                <td>Lugar de nacimiento:</td>
                <td>{{$lugar_nacimiento}}</td>
              </tr>
              <tr>
                <td>Edad:</td>
                <td>{{$edad}}</td>
              </tr>
              <tr>
                <td>Estado Civil:</td>
                <td>{{$estado_civil}}</td>
              </tr>
              <tr>
                <td>Nacionalidad:</td>
                <td>{{$nacionalidad}}</td>
              </tr>
              <tr>
                <td>DNI:</td>
                <td>{{$item->numero_documento}}</td>
              </tr>
              <tr>
                <td>Domicilio:</td>
                <td>{{$item->direccion}}</td>
              </tr>
              <tr>
                <td>Distrito:</td>
                <td>{{$item->distrito}}</td>
              </tr>
              <tr>
                <td>Provincia:</td>
                <td>{{$item->provincia}}</td>
              </tr>
              <tr>
                <td>Departamento:</td>
                <td>{{$item->departamento}}</td>
              </tr>
              <tr>
                <td colspan="2"><img src="/images-croquis/{{$croquis}}" class="img-fluid mt-4" alt="..."></td>
              </tr>
            </table>

            <table>
              <tr>
                <td>Tel??fono Fijo:</td>
                <td>{{$telefono_fijo}}</td>
                <td>Tel??fono M??vil:</td>
                <td>{{$telefono}}</td>
              </tr>
              <tr>
                <td>Tel??fono de Contacto:</td>
                <td>{{$telefono_familiar}}</td>
                <td>Referencia:</td>
                <td>{{$referencia}}</td>
              </tr>
            </table>

          <h4>Nivel Educativo</h4>
          <p>{{$nivel_educativo}}</p>
          </div>
        @endforeach

        <h4 class="mt-36">2.	DATOS DE FAMILIARES DIRECTOS (padre, madre, c??nyuge o conviviente e hijos):</h4>

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

        <p class="font-11 mt-12">(En caso de hijos mayores de 18 a??os, indicar si ??stos cursan estudios superiores o universitarios. La empresa se reserva el derecho de exigir al trabajador que acredite la existencia de los hijos.)</p>

        <h4 class="mt-36">DATOS LABORALES</h4>
        <h5>3.1.	Renta Quinta  </h5>

            <div>
                <p class="form-label" for="first-name-icon">
                    <strong>Ha trabajado anteriormente este a??o?:
                        </strong>{{$trabajo}}</p>
            </div>
            <div>
                <p class="form-label" for="first-name-icon">
                    <strong>Nombre del empleador:</strong>
                    {{$nombre_empleador}}</p>

            </div>
            <div>
                <p class="form-label" for="first-name-icon">
                    <strong>Domiciliado:</strong>
                    {{$domiciliado}}</p>
            </div>
            <div>
                <p class="form-label" for="first-name-icon">
                    <strong>Fecha de cese de su ??ltimo empleo:
                        </strong>{{$fecha_cese}}</p>
            </div>
          <h5>3.2.	Essalud Vida </h5>

            <div>
                <p class="form-label" for="first-name-icon">
                    <strong>Indicar si est?? afiliado a Essalud Vida:
                        </strong>{{$afiliado}}</p>
            </div>
            <div>
                <p class="form-label" for="first-name-icon">
                    <strong>Si es extranjero indicar d??as de permanencia en el pa??s
                        </strong>{{$dias_per}}</p>
            </div>
            <h4 class="font-weight-bold">Consideraciones para presentar Descanso M??dico</h4>
            <p class="mt-24">
              Seg??n nuestro Reglamento de Seguridad y Salud en el Trabajo (RISS Art. 109 Ind. C), todo Descanso M??dico Particular debe contener:
              <ul>
                  <li>Pago de la consulta m??dica</li>
                  <li>Certificado M??dico, indicando datos del personal y d??as de Descanso M??dic</li>
                  <li>Receta</li>
                  <li>Compra de la Receta</li>
              </ul>
          </p>

          <p>
              El Descanso M??dico debe ser presentado m??ximo a las 72 hrs de haberse producido el hecho, de presentarse fuera de fecha y/o incompletos, la empresa no asumir?? compensaci??n salarial por los d??as no trabajados, ya que es responsabilidad ??nica y exclusiva del colaborador.<br>
              Ante caso de SUBSIDIOS (m??s de 20 d??as de Descanso M??dico) se podr?? requerir documentos adicionales que sustenten el diagn??stico, en caso de no presentarlos e impidan cualquier tipo de tr??mite posterior de subsidios en las fechas correspondientes, la empresa no asumir?? compensaci??n salarial por los d??as subsidiados.<br>
              Adicionalmente, se consigna como Falta Grave s?? el Descanso M??dico presentado sea Fraudulento o se haya comprobado su comercializaci??n.

          </p>

          <h4 class="font-weight-bold">Compensaci??n por Tiempo de Servicios (CTS)</h4>
                <p>Moneda: SOLES</p>

                <h4 class="font-weight-bold">Pago de haberes</h4>
                <p>Modalidad de pago: MENSUAL</p>

                <h4 class="font-weight-bold">Exclusividad</h4>
                <p>{{ $exclusividad }}</p>

        <img src="/images-firma/{{$firma}}" class="img-thumbnail mt-24" alt="...">


     </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   </body>
 </html>



