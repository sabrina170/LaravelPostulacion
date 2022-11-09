
 @extends('layouts.head')


 @section('content')


 <div class="card br-16 p-36">


        <div class="card-body">

            @if (isset($documento))
            @foreach ($documento as $doc)
            Se convirtio exitosamente
            {{$doc->ruta}}
            @endforeach
            @else
            <div class="row m-0">
                @foreach ($infos as $item)

                    <h2 class="intro-y text-lg font-medium mr-auto font-weight-bold">
                        DOCUMENTO 2
                    </h2>
                    <h5 class="intro-y mr-auto">
                        <strong> {{  $item->tipo_documento}}</strong> - {{  $item->numero_documento}}  <br>
                        <strong>Dirección : </strong> {{  $item->direccion}} <br>
                        <strong>Telefono : </strong> {{  $item->telefono}}

                        {{-- Ingresar Tipo de Documento y Número (Carnet de Extranjería / DNI) --}}
                </h5>
                <form action="{{ route('pdf.getGenerar') }}" method="post"  enctype="multipart/form-data" >
                            @csrf
                            <input type="hidden" value="descargar" name="accion">
                            <input type="hidden" value="{{Auth::user()->id}}" name="id_user">

                            <div class="col-lg-4 mt-8">
                                <label class="form-label" for="first-name-icon">Lugar</label>
                                                                                <div class="input-group input-group-merge">
                                                                                    <input type="text" id="first-name-icon" class="form-control" name="lugar" placeholder="Lugar" required>
                                                                                </div>
                            </div>

                            <div class="col-lg-4 mt-8">
                                <label class="form-label" for="first-name-icon">Fecha</label>
                                                                                <div class="input-group input-group-merge">
                                                                                    <input type="date" id="first-name-icon" class="form-control" name="fecha"required >
                                                                                </div>
                            </div>

                            <div class="col-lg-12 mt-24">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet bibendum tortor. Donec viverra dapibus libero, lobortis consectetur mi sodales ut. Proin venenatis ullamcorper
                                malesuada. Proin dignissim elit justo, ut faucibus velit mattis vitae. Duis eu interdum velit. Phasellus vitae posuere orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                                ridiculus mus. Fusce at elit orci. Morbi sit amet lacinia nunc, vel eleifend enim.
                            </div>

                            <div class="col-lg-4 mt-24">
                                <h3>Adjuntar croquis</h3>
                                <input type="file" id="select-files" name="croquis" class="btn btn-outline-primary mb-1 waves-effect dz-clickable" required>
                            </div>

                            <div class="col-lg-12 mt-24">
                                <h3>Firma</h3>

                                <p><b>Apellidos y Nombres completos:</b> {{ $item->apellido_pa}} {{ $item->apellido_ma}}  {{ $item->nombres}} </p>
                                <p><b>DNI:</b> {{ $item->numero_documento}}</p>


                                <hr>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">
                                        ENVIAR DOCUMENTO
                                    </button>
                                </div>

                            </div>
                    </form>
                @endforeach
            </div>
            @endif



        </div>
{{-- @if (isset($fecha))
{{$fecha}}{{$lugar}}
@endif --}}

</div>


 @endsection


