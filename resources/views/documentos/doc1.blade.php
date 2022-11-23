
 @extends('layouts.head')
 @section('content')


 <div class="card br-16 p-36">
    {{-- <a class="btn btn-primary w-24 mr-1 mb-2" href="{{route('myPDF')}}">Primary</a>  --}}
    <div class="card-body">
        <h2 class="intro-y text-lg font-medium mr-auto font-weight-bold">
            FICHA DEL TRABAJADOR
        </h2>
        <h5 class="intro-y mr-auto">
            Ingresar Tipo de Documento y Número (Carnet de Extranjería / DNI)
        </h5>
    </div>

    <div>
        <form action="{{ route('pdf.getGenerar1') }}" method="post"  enctype="multipart/form-data" >
            @csrf
        <div class="row m-0">
            @foreach ($infos as $item)
            @if (isset($documento))
                @foreach ($documento as $doc)
                Se convirtio exitosamente
                {{$doc->ruta}}
                @endforeach
            @else



            <div class="col-lg-4 mt-8">
                <label class="form-label" for="basicSelect">Tipo de documento</label>
                                                                <select class="form-select" name="tipo_documento" disabled>
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
                 name="numero_documento" value="{{$item->numero_documento}}" readonly>
                </div>
            </div>

            <div class="col-lg-12">
                <hr>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Nombres</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text" id="first-name-icon"
                                                                     class="form-control" name="nombres"
                                                                     value="{{$item->nombres}}" readonly>
                                                                </div>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Dirección</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text"
                                                                    id="first-name-icon"
                                                                    class="form-control"
                                                                     name="direccion"
                                                                     value="{{$item->direccion}}" readonly>
                                                                </div>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Número de teléfono</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text"
                                                                    id="first-name-icon"
                                                                     class="form-control"
                                                                      name="telefono"
                                                                      value="{{$item->telefono}}" readonly>
                                                                </div>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Fecha de nacimiento</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="date"
                                                                     id="first-name-icon"
                                                                     class="form-control"
                                                                      name="fecha_nac"
                                                                      value="{{$item->fecha_nacimiento}}" readonly>
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
                <label class="form-label" for="first-name-icon">Género</label>
                <select class="form-select" id="basicSelect" name="genero" disabled>
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
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Teléfono familiar contacto</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text"
                                                                     id="first-name-icon"
                                                                      class="form-control"
                                                                       name="telefono_familiar"
                                                                        placeholder="Ingrese
                                                                         un teléfono de contacto">
                                                                </div>
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
                              <td><input class="form-control" ng-model="row.nombres" name="datos_nombres[]" placeholder="Nombres Completos..."></td>
                              <td><input class="form-control" ng-model="row.parentesco" name="datos_parentesco[]" placeholder="Parentesco..."></td>
                              <td><input type="number" class="form-control" ng-model="row.edad" name="datos_edad[]"></td>
                              <td>
                                <select class="form-control" ng-model="row.sexo" name="datos_sexo[]">
                                    <option value="Femenino" selected>Femenino</option>
                                    <option value="Masculino">Masculino</option>
                                </select>
                                {{-- <input class="form-control" ng-model="row.sexo" name="datos_sexo[]" placeholder="Nombres ..."> --}}
                            </td>
                              <td>
                                <select class="form-control" ng-model="row.tipodni" name="datos_tipo_dni[]">
                                    <option value="dni" selected>DNI</option>
                                    <option value="ce">Carnet Extrangeria</option>
                                </select>
                                {{-- <input class="form-control" ng-model="row.tipodni" name="datos_tipo_dni[]" placeholder="Apellidos ..."> --}}
                            </td>
                              <td><input class="form-control" ng-model="row.numerodni" name="datos_numero_dni[]" placeholder="76232132 ..."></td>
                              <td>
                                <select class="form-control" ng-model="row.estudia" name="datos_estudia[]">
                                    <option value="si" selected>SI</option>
                                    <option value="no">NO</option>
                                </select>
                                {{-- <input class="form-control" ng-model="row.a_names" name="datos_estudia[]" placeholder="Apellidos ..."> --}}

                            </td>
                            </tr>
                          </tbody>
                        </table>
                        <button type="button" class="btn btn-primary" ng-click="AddRow()">Agregar</button>
                        <button type="button" class="btn btn-danger" ng-click="RemoveRow()" ng-class="">Eliminar Filas</button>
                    </div>
                </div>
            </div>

            {{-- fin de la nueva tabla --}}


                <p>En caso tenga hijos mayores de 18 años, indicar si cursan estudios superiores o universitarios.</p>

                <h3 class="font-weight-bold mt-24">DATOS LABORALES - RENTA 5ta / ESSALUD VIDA</h3>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Ha trabajado anteriormente este año?</label>
                <select class="form-select" id="basicSelect">
                    <option>Si</option>
                    <option>No</option>
                </select>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Nombre del empleador</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Nombre del empleador">
                                                                </div>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Documento de Renta de 4ta categoría</label>
                <button id="select-files" class="btn btn-outline-primary mb-1 waves-effect dz-clickable">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg> Subir documento
                </button>
            </div>

            <div class="col-lg-12">
            <p>*Si la respuesta es afirmativa, presentar Certificado de Retenciones de Rentas, de no adjuntarlo, no se le considerará para sus Retenciones de Impuesto a la Renta</p>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Domiciliado</label>
                <select class="form-select" id="basicSelect">
                    <option>Si</option>
                    <option>No</option>
                </select>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Si es extranjero indicar días de permanencia en el país</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Días de permanencia">
                                                                </div>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Fecha de cese de su último empleo</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="date" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Ingrese su teléfono">
                                                                </div>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Indicar si está afiliado a Essalud Vida</label>
                <select class="form-select" id="basicSelect">
                    <option>Si</option>
                    <option>No</option>
                </select>
            </div>

            <div class="col-lg-12 mt-24">
                <h3 class="font-weight-bold">Texto infomativo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet bibendum tortor. Donec viverra dapibus libero, lobortis consectetur mi sodales ut. Proin venenatis ullamcorper
                    malesuada. Proin dignissim elit justo, ut faucibus velit mattis vitae. Duis eu interdum velit. Phasellus vitae posuere orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                    ridiculus mus. Fusce at elit orci. Morbi sit amet lacinia nunc, vel eleifend enim.
                </p>


                <h3 class="font-weight-bold mt-24">Texto declaración</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet bibendum tortor. Donec viverra dapibus libero, lobortis consectetur mi sodales ut. Proin venenatis ullamcorper
                    malesuada. Proin dignissim elit justo, ut faucibus velit mattis vitae. Duis eu interdum velit. Phasellus vitae posuere orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                    ridiculus mus. Fusce at elit orci. Morbi sit amet lacinia nunc, vel eleifend enim.
                </p>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Lugar</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Lugar">
                                                                </div>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Fecha</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="date" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Lugar">
                                                                </div>
            </div>

            <div class="col-lg-12 mt-24">
                <h3>Firma</h3>

                <hr>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">
                        ENVIAR DOCUMENTOS
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


