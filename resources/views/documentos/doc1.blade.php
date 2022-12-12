
 @extends('layouts.head')
 @section('content')


 <div class="card br-16 p-36">

    {{-- <a class="btn btn-primary w-24 mr-1 mb-2" href="{{route('myPDF')}}">Primary</a>  --}}


    <div>
        <form action="{{ route('pdf.getGenerar1') }}" method="post"  enctype="multipart/form-data" >
            @csrf
            <input type="hidden" value="descargar" name="accion">
            <input type="hidden" value="{{Auth::user()->id}}" name="id_user">

        <div class="row m-0">
            @foreach ($infos as $item)
            @if (isset($documento))
                @foreach ($documento as $doc)
                <div class="col-4">
                    <a type="button" href="{{ route('documentos.index',$doc->id_user) }}"
                    class="btn btn-outline-primary round waves-effect">Atras</a>
                </div>
                Se convirtio exitosamente
                {{$doc->ruta}}
                @endforeach
            @else

            <div class="card-body">
                <h2 class="intro-y text-lg font-medium mr-auto font-weight-bold">
                    FICHA DEL TRABAJADOR
                </h2>
            </div>



            <div class="col-lg-12">
                <h3><b>DATOS DEL TRABAJADOR</b></h3>
                <hr>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Nombres y apellidos</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text" id="first-name-icon"
                                                                     class="form-control" name="nombres"
                                                                     value="{{$item->nombres}}">
                                                                </div>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Fecha de nacimiento</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="date"
                                                                     id="first-name-icon"
                                                                     class="form-control"
                                                                      name="fecha_nac"
                                                                      value="{{$item->fecha_nacimiento}}">
                                                                </div>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Lugar de nacimiento</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text"
                                                                    id="first-name-icon"
                                                                    class="form-control"
                                                                     name="lugar_nacimiento"
                                                                     value="">
                                                                </div>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Edad</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="number"
                                                                     id="first-name-icon"
                                                                      class="form-control"
                                                                       name="edad" required>
                                                                </div>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Estado Civil</label>
                <select class="form-select" id="basicSelect" name="esatdo_civil">
                    <option value="Soltero">Soltero</option>
                    <option value="Casado">Casado</option>
                    <option value="Viudo">Viudo</option>
                    <option value="Separado">Separado</option>
                </select>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Nacionalidad</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text"
                                                                    id="first-name-icon"
                                                                    class="form-control"
                                                                     name="nacionalidad"
                                                                     value="">
                                                                </div>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="basicSelect">Tipo de documento</label>
                                                                <select class="form-select" name="tipo_documento">
                                                                    @if ($item->tipo_documento=="DNI")
                                                                    <option value="DNI" selected >DNI</option>
                                                                    @else
                                                                    <option value="CE">CE</option>
                                                                    @endif
                                                                </select>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Número de documento</label>
                <div class="input-group input-group-merge">
                <input type="text" id="first-name-icon" class="form-control"
                 name="numero_documento" value="{{$item->numero_documento}}">
                </div>
            </div>


            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Domicilio (Av. / Calle / Mz. – N°./ Lt. – Int. / Dpto.)</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text"
                                                                    id="first-name-icon"
                                                                    class="form-control"
                                                                     name="direccion"
                                                                     value="{{$item->direccion}}">
                                                                </div>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label">
                    Adjuntar croquis</label>
                <input type="file" id="croquis" name="croquis" class="btn btn-outline-primary mb-1 waves-effect dz-clickable" required>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Teléfono Fijo</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text"
                                                                    id="first-name-icon"
                                                                     class="form-control"
                                                                      name="telefono_fijo"
                                                                      value="{{$item->telefono}}">
                                                                </div>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Teléfono Móvil</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text"
                                                                    id="first-name-icon"
                                                                     class="form-control"
                                                                      name="telefono"
                                                                      value="{{$item->telefono}}">
                                                                </div>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Teléfono de contacto</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text"
                                                                    id="first-name-icon"
                                                                     class="form-control"
                                                                      name="telefono_familiar"
                                                                      value="{{$item->telefono}}">
                                                                </div>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Referencia</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text"
                                                                    id="first-name-icon"
                                                                     class="form-control"
                                                                      name="referencia"
                                                                      value="{{$item->telefono}}">
                                                                </div>
            </div>





            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Género</label>
                <select class="form-select" id="basicSelect" name="genero">
                    @if ($item->sexo=="Masculino")
                    <option value="Masculino" selected>Masculino</option>
                    @else
                    <option value="Femenino" selected>Femenino</option>
                    @endif
                </select>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">N° de hijos</label>
                <select class="form-select" id="basicSelect" name="n_hijos">
                    <option value="0">No tengo hijos</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Nivel Educativo</label>
                <select class="form-select" id="basicSelect" name="nivel_educativo">
                    <option>Primaria Completa</option>
                    <option>Secundaria Incompleta</option>
                    <option>Secundaria Completa</option>
                    <option>Técnica Incompleta</option>
                    <option>Técnica Completa</option>
                    <option>Superior I.S.T. Incompleto</option>
                    <option>Superior I.S.T. Completo</option>
                    <option>Universitario Incompleto</option>
                    <option>Universitaria Completa</option>
                    <option>Grado de Bachiller</option>
                    <option>Titulado</option>
                    <option>Maestría Incompleta</option>
                    <option>Maestría Completa</option>
                    <option>Grado de Maestría</option>
                    <option>Doctorado Incompleto</option>
                    <option>Doctorado Completo</option>
                    <option>Grado de Doctorado</option>
                    <option>Sin Educación Formal</option>
                </select>
            </div>

            <div class="col-lg-12 mt-36">
                <h3><b>2.	DATOS DE FAMILIARES DIRECTOS</b> (padre, madre, cónyuge o conviviente e hijos)</h3>
                <hr>
            </div>
            <div class="col-lg-12 mt-24">
            {{-- nueva tabla --}}

            <div ng-app="NewRows">
                <div ng-controller="Table">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th></th>
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
                            <tr ng-repeat="row in rows">
                              <td align="center"><input type="checkbox" ng-model="row.delete"></td>
                              <td><input class="form-control" ng-model="row.nombres" name="datos_nombres[]" placeholder="Nombres Completos..." required></td>
                              <td><input class="form-control" ng-model="row.parentesco" name="datos_parentesco[]" placeholder="Parentesco..." required></td>
                              <td><input type="number" class="form-control" ng-model="row.edad" name="datos_edad[]" required></td>
                              <td>
                                <select class="form-control" ng-model="row.sexo" name="datos_sexo[]" required>
                                    <option value="Femenino" selected>Femenino</option>
                                    <option value="Masculino">Masculino</option>
                                </select>
                                {{-- <input class="form-control" ng-model="row.sexo" name="datos_sexo[]" placeholder="Nombres ..."> --}}
                            </td>
                              <td>
                                <select class="form-control" ng-model="row.tipodni" name="datos_tipo_dni[]" required>
                                    <option value="dni" selected>DNI</option>
                                    <option value="ce">Carnet Extrangeria</option>
                                </select>
                                {{-- <input class="form-control" ng-model="row.tipodni" name="datos_tipo_dni[]" placeholder="Apellidos ..."> --}}
                            </td>
                              <td><input class="form-control" ng-model="row.numerodni" name="datos_numero_dni[]" placeholder="76232132 ..." required></td>
                              <td>
                                <select class="form-control" ng-model="row.estudia" name="datos_estudia[]" required>
                                    <option value="si" selected>SI</option>
                                    <option value="no">NO</option>
                                </select>
                                {{-- <input class="form-control" ng-model="row.a_names" name="datos_estudia[]" placeholder="Apellidos ..."> --}}

                            </td>
                            </tr>
                          </tbody>
                        </table>

                        <button type="button" class="btn btn-primary mt-12" ng-click="AddRow()">Agregar</button>
                        <button type="button" class="btn btn-danger mt-12" ng-click="RemoveRow()" ng-class="">Eliminar Filas</button>
                    </div>
                </div>
            </div>
            {{-- fin de la nueva tabla --}}
            <p class="font-11 mt-12">(En caso de hijos mayores de 18 años, indicar si éstos cursan estudios superiores o universitarios. La empresa se reserva el derecho de exigir al trabajador que acredite la existencia de los hijos.)</p>
            </div>

            <div class="col-lg-12 mt-36">
                <h3><b>3. DATOS LABORALES</b></h3>
                <hr>
                <h4>Renta Quinta</h4>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Ha trabajado anteriormente este año?</label>
                <select class="form-select" id="basicSelect" name="trabajo">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Nombre del empleador</label>
                 <div class="input-group input-group-merge">

                 <input type="text" id="first-name-icon"
                 class="form-control" name="nombre_empleador" placeholder="Nombre del empleador">
                </div>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">
                    Documento de Renta de 4ta categoría</label>
                    <input type="file" id="renta" name="renta"
                    class="btn btn-outline-primary mb-1 waves-effect dz-clickable" required>

            </div>

            <div class="col-lg-12">
            <p>*Si la respuesta es afirmativa, presentar Certificado de Retenciones de Rentas, de no adjuntarlo, no se le considerará para sus Retenciones de Impuesto a la Renta</p>
            </div>

            <div class="col-lg-12 mt-36">
                <h4>Régimen de condición para efectos del Impuesto a la Renta</h4>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Domiciliado</label>
                <select class="form-select" id="basicSelect" name="domiciliado">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Si es extranjero indicar días de permanencia en el país</label>
                 <div class="input-group input-group-merge">
                <input type="text" id="first-name-icon"
                 class="form-control" name="dias_per" placeholder="Días de permanencia">
                </div>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Fecha de cese de su último empleo</label>
                 <div class="input-group input-group-merge">
                <input type="date" id="first-name-icon" class="form-control"
                 name="fecha_cese" placeholder="Ingrese su teléfono">
                </div>
            </div>

            <div class="col-lg-12 mt-36">
                <h4>Essalud Vida</h4>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Indicar si está afiliado a Essalud Vida</label>
                <select class="form-select" id="basicSelect" name="afiliado">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="col-lg-12 mt-36">
                <h4 class="font-weight-bold">Consideraciones para presentar Descanso Médico</h4>
            </div>

            <div class="col-lg-12 mt-24">
                <p>
                    Según nuestro Reglamento de Seguridad y Salud en el Trabajo (RISS Art. 109 Ind. C), todo Descanso Médico Particular debe contener:
                    <ul>
                        <li>Pago de la consulta médica</li>
                        <li>Certificado Médico, indicando datos del personal y días de Descanso Médic</li>
                        <li>Receta</li>
                        <li>Compra de la Receta</li>
                    </ul>
                </p>

                <p>
                    El Descanso Médico debe ser presentado máximo a las 72 hrs de haberse producido el hecho, de presentarse fuera de fecha y/o incompletos, la empresa no asumirá compensación salarial por los días no trabajados, ya que es responsabilidad única y exclusiva del colaborador.<br>
                    Ante caso de SUBSIDIOS (más de 20 días de Descanso Médico) se podrá requerir documentos adicionales que sustenten el diagnóstico, en caso de no presentarlos e impidan cualquier tipo de trámite posterior de subsidios en las fechas correspondientes, la empresa no asumirá compensación salarial por los días subsidiados.<br>
                    Adicionalmente, se consigna como Falta Grave sí el Descanso Médico presentado sea Fraudulento o se haya comprobado su comercialización.

                </p>
            </div>

            <div class="col-lg-12 mt-36">
                <h4 class="font-weight-bold">Compensación por Tiempo de Servicios (CTS)</h4>
                <p>Moneda: SOLES</p>
            </div>

            <div class="col-lg-12 mt-36">
                <h4 class="font-weight-bold">Pago de haberes</h4>
                <p>Modalidad de pago: MENSUAL</p>
            </div>

            <div class="col-lg-12 mt-36">
                <h4 class="font-weight-bold">Exclusividad</h4>
                <label>Prestó servicios simultáneos en empresas de la competencia (Call center), clientes y proveedores del grupo Konecta.</label>
                <select class="form-select" id="basicSelect" name="exclusividad">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>

                <p class="font-weight-bold mt-24">
                    Declaro bajo juramento que la información consignada en esta ficha corresponde a la verdad y asumo la responsabilidad por cualquier problema que pudiera surgir a consecuencia de los datos que he proporcionado.
                </p>
            </div>

            <div class="col-lg-6 mt-8">
                <label class="form-label" for="first-name-icon">Lugar</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text"
                                                                    id="first-name-icon"
                                                                     class="form-control"
                                                                     name="lugar" placeholder="Lugar">
                                                                </div>
            </div>

            <div class="col-lg-6 mt-8">
                <label class="form-label" for="first-name-icon">Fecha</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="date"
                                                                     id="first-name-icon"
                                                                      class="form-control"
                                                                      name="fecha"
                                                                       placeholder="fecha">
                                                                </div>
            </div>

            <div class="col-lg-12 mt-24">
                <h3>Firma</h3>
                <input type="file" id="firma" name="firma"
                class="btn btn-outline-primary mb-1 waves-effect dz-clickable" required>
                <hr>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">
                        ENVIAR DOCUMENTO
                    </button>
                </div>

            </div>
            </form>
            @endif
            @endforeach

        </div>
    </div>
</div>

                </div>

 @endsection
 @section('js')
 {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js'> --}}
{{-- </script> --}}
<script>

var app = angular.module("NewRows",[]);
app.controller("Table",['$scope',function($scope){
  //
  $scope.rows = [
     {
     delete:false,
     names:'',
     last_names:'',
       a_names:''
     }
   ];
  /**
  * Add table row
  **/
  $scope.AddRow = function(){
    $scope.rows.push({
      delete:false,
      names:'',
      last_names:'',
      a_names:''
    })
  };
  /**
  * Remove table row
  **/
  $scope.RemoveRow = function(){
    for(var i = $scope.rows.length - 1; i >= 0; i--){
      if($scope.rows[i].delete){
        $scope.rows.splice(i,1);
      }
    }
  };
  /**
  * Send BD
  **/
  $scope.SaveRowsBD = function(){
    angular.forEach($scope.rows,function(value,key){

    });
  };
}]);
    </script>
 @endsection


