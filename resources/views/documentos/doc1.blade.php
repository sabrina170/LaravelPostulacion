
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
                    <option selected>Masculino</option>
                    @else
                    <option selected>Femenino</option>
                    @endif
                </select>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">N° de hijos</label>
                <select class="form-select" id="basicSelect" name="n_hijos">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
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
                <form action="#" class="invoice-repeater">
                    
                    <div data-repeater-list="invoice">
                        
                        <div data-repeater-item="" style="">
                            <div class="row d-flex align-items-end">
                                <div class="col-md-3 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="itemname">NOMBRES Y APELLIDOS COMPLETOS</label>
                                        <input type="text" class="form-control" id="item_nombres" name="item_nombres" aria-describedby="item_nombres"
                                         placeholder="NOMBRES Y APELLIDOS COMPLETOS">
                                    </div>
                                </div>
                                <div class="col-md-2 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="sdsad">PARENTESCO</label>
                                        <input type="text" class="form-control" id="item_parentesco" name="item_parentesco" aria-describedby="item_parentesco" placeholder="PARENTESCO">
                                    </div>
                                </div>
                                <div class="col-md-1 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="itemcost">EDAD</label>
                                        <input type="number" class="form-control" id="item_edad" name="item_edad" aria-describedby="item_edad" placeholder="EDAD">
                                    </div>
                                </div>

                                <div class="col-md-1 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="itemquantity">SEXO</label>
                                        <input type="text" class="form-control" id="item_sexo" name="item_sexo" aria-describedby="item_sexo" placeholder="SEXO">
                                    </div>
                                </div>

                                <div class="col-md-1 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="itemquantity">SEXO</label>
                                        <input type="text" class="form-control" id="item_sexo" name="item_sexo" aria-describedby="item_sexo" placeholder="SEXO">
                                    </div>
                                </div>
                                <div class="col-md-1 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="itemquantity">SEXO</label>
                                        <input type="text" class="form-control" id="item_sexo" name="item_sexo" aria-describedby="item_sexo" placeholder="SEXO">
                                    </div>
                                </div>
                                <div class="col-md-1 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="itemquantity">SEXO</label>
                                        <input type="text" class="form-control" id="item_sexo" name="item_sexo" aria-describedby="item_sexo" placeholder="SEXO">
                                    </div>
                                </div>

                                <div class="col-md-2 col-12 mb-50">
                                    <div class="mb-1">
                                        <button class="btn btn-outline-danger text-nowrap px-1 waves-effect" data-repeater-delete="" type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x me-25"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            {{-- <span>Delete</span> --}}
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-icon btn-primary waves-effect waves-float waves-light" type="button" data-repeater-create="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus me-25"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                <span>Add New</span>
                            </button>
                        </div>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table  table-bordered">
                        <thead>
                            <tr>
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
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

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
                    <a href="#" class="btn btn-primary waves-effect waves-float waves-light">
                        ENVIAR DOCUMENTOS
                    </a>
                </div>

            </div>

            @endif
            @endforeach

        </div>
    </div>
</div>

                </div>

 @endsection


