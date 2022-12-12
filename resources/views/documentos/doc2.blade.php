
 @extends('layouts.head')


 @section('content')


 <div class="card br-16 p-36">


        <div class="card-body">


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
                    <h2 class="intro-y text-lg font-medium mr-auto font-weight-bold">
                        DECLARACIÓN JURADA DE DATOS Y DOMICILIO LEGAL
                    </h2>
                    <p>Fecha: @php echo date("d-m-y");@endphp</p>



                    <p>El que suscribe <b>{{ $item->apellido_pa}} {{ $item->apellido_ma}}  {{ $item->nombres}}</b> N° DNI  <b>{{ $item->numero_documento}}</b> con domicilio actual en (Av./Clle./Mz./Lt. – Int/Dpto) <b>{{  $item->direccion}}</b> Distrito: <b>{{  $item->distrito}}</b> Provincia: <b>{{  $item->provincia}}</b> <br> Teléfono: <b>{{  $item->telefono}}</b> </p>

                    <p>Referencias adicionales: </p>

                    <p>Declaro dicho domicilio como actual y legal ante cualquier notificación o control de la Empresa, comprometiéndome  a comunicar fehacientemente dentro de las cuarenta y ocho horas, su cambio o modificación.</p>

                    <form action="{{ route('pdf.getGenerar2') }}" method="post"  enctype="multipart/form-data" >
                            @csrf
                            <input type="hidden" value="descargar" name="accion">
                            <input type="hidden" value="{{Auth::user()->id}}" name="id_user">

                            <div class="col-lg-4 mt-8">
                                <!--<label class="form-label" for="first-name-icon">Lugar</label>-->
                                                                                <div class="input-group input-group-merge">
                                                                                    <input type="hidden" id="first-name-icon" class="form-control" name="lugar" placeholder="Lugar" required>
                                                                                </div>
                            </div>

                            <div class="col-lg-4 mt-8">
                                <!--<label class="form-label" for="first-name-icon">Fecha</label>-->
                                                                                <div class="input-group input-group-merge">
                                                                                    <input type="hidden" id="first-name-icon" class="form-control" name="fecha"required >
                                                                                </div>
                            </div>



                            <div class="col-lg-4 mt-24">
                                <!--<h3>Adjuntar croquis</h3>-->
                                <input type="hidden" id="select-files" name="croquis" class="btn btn-outline-primary mb-1 waves-effect dz-clickable" required>
                            </div>

                            <div class="col-lg-12 mt-24">
                                <h3>Firma</h3>
                <input type="file" id="firma" name="firma"
                class="btn btn-outline-primary mb-1 waves-effect dz-clickable" required>
                <hr>

                                <p><b>{{ $item->nombres}} {{ $item->apellido_pa}} {{ $item->apellido_ma}}</b></p>
                                <p><b>DNI:</b> {{ $item->numero_documento}}</p>


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

           {{-- @if ()

           @else

           @endif

           @if ()

           @endif --}}


        </div>
{{-- @if (isset($fecha))
{{$fecha}}{{$lugar}}
@endif --}}

</div>


 @endsection


