
 @extends('layouts.head')


 @section('content')


 <div class="card br-16 p-36">
    <div class="card-body">
        @foreach ($infos as $item)
        @if (isset($documento))
            @foreach ($documento as $doc)
            Se convirtio exitosamente
            {{$doc->ruta}}
            @endforeach
        @else

        <h2 class="intro-y text-lg font-medium mr-auto font-weight-bold">
            DOCUMENTO 4
        </h2>
        <h5 class="intro-y mr-auto">
            Ingresar Tipo de Documento y Número (Carnet de Extranjería / DNI)
        </h5>
        <div class="row m-0">
            <form action="{{ route('pdf.getGenerar4') }}" method="post"  enctype="multipart/form-data" >
                @csrf
                <input type="hidden" value="descargar" name="accion">
                            <input type="hidden" value="{{Auth::user()->id}}" name="id_user">

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Lugar</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text" id="first-name-icon" name="lugar" class="form-control" name="fname-icon" placeholder="Lugar">
                                                                </div>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Fecha</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="date" id="first-name-icon" name="fecha" class="form-control" name="fname-icon" placeholder="Lugar">
                                                                </div>
            </div>

            <div class="col-lg-12 mt-24">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet bibendum tortor. Donec viverra dapibus libero, lobortis consectetur mi sodales ut. Proin venenatis ullamcorper
                malesuada. Proin dignissim elit justo, ut faucibus velit mattis vitae. Duis eu interdum velit. Phasellus vitae posuere orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus. Fusce at elit orci. Morbi sit amet lacinia nunc, vel eleifend enim.

                <h3 class="font-weight-bold mt-24">Opciones</h3>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Si estoy afiliado a AFP" name="check_list[]" checked="">
                    <label class="form-check-label" for="inlineCheckbox1">Si estoy afiliado a AFP</label>
                </div>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="basicSelect">Nombre AFP</label>
                                                                <select class="form-select" id="basicSelect" name="nombre_afp">
                                                                    <option value="Rimac">Rimac</option>
                                                                    <option value="AFP Habitad">AFP Habitad</option>
                                                                </select>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="basicSelect">Código único AFP</label>
                <div class="input-group input-group-merge">
                    <input type="text" id="first-name-icon" class="form-control" name="codigo_afp" placeholder="Ingrese su número de documento">
                </div>
            </div>

            <div class="col-lg-12 mt-8">
                <div class="form-check mt-8">
                    <input class="form-check-input" name="check_list[]"  type="checkbox" id="inlineCheckbox1" value="No estoy afiliado a ninguna AFP y deseo afiliarme a Integra" checked="">
                    <label class="form-check-label" for="inlineCheckbox1">No estoy afiliado a ninguna AFP y deseo afiliarme a Integra</label>
                </div>
                <div class="form-check mt-8">
                    <input class="form-check-input" name="check_list[]" type="checkbox" id="inlineCheckbox1" value="No estoy afiliado a ninguna AFP y deseo afiliarme al Sistema Nacional de Pensiones (ONP)" checked="">
                    <label class="form-check-label" for="inlineCheckbox1">No estoy afiliado a ninguna AFP y deseo afiliarme al Sistema Nacional de Pensiones (ONP)</label>
                </div>
                <div class="form-check mt-8">
                    <input class="form-check-input" name="check_list[]" type="checkbox" id="inlineCheckbox1" value="Estoy afiliado al SNP y deseo continuar" checked="">
                    <label class="form-check-label" for="inlineCheckbox1">Estoy afiliado al SNP y deseo continuar</label>
                </div>
                <div class="form-check mt-8">
                    <input class="form-check-input" name="check_list[]" type="checkbox" id="inlineCheckbox1" value="Estoy afiliado al SNP pero deseo cambiar a AFP" checked="">
                    <label class="form-check-label"  for="inlineCheckbox1">Estoy afiliado al SNP pero deseo cambiar a AFP</label>
                </div>
            </div>



            <div class="col-lg-12 mt-24">


                <p><b>Apellidos y Nombres completos:</b> {{ $item->apellido_pa}} {{ $item->apellido_ma}}  {{ $item->nombres}} </p>
                <p><b>DNI:</b> {{ $item->numero_documento}}</p>
                <div class="col-lg-4 mt-24">
                    <h3>Firma</h3>
                    <input type="file" id="select-files" name="firma" class="btn btn-outline-primary mb-1 waves-effect dz-clickable" required>
                </div>

                <hr>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">
                        ENVIAR DOCUMENTO
                    </button>
                </div>

            </div>
            </form>


        </div>
        @endif
        @endforeach
    </div>
</div>

 @endsection


