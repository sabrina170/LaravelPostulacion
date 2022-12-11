
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
                        AUTORIZACIÓN DE ACCESO A EQUIPOS PROPIOS
                    </h2>

                    <form action="{{ route('pdf.getGenerar6') }}" method="post"  enctype="multipart/form-data" >
                            @csrf
                            <input type="hidden" value="descargar" name="accion">
                            <input type="hidden" value="{{Auth::user()->id}}" name="id_user">

                            <div class="col-lg-4 mt-8">
                                <label class="form-label" for="first-name-icon">Lugar</label>
                                                                                <div class="input-group input-group-merge">
                                                                                    <input type="text" id="lugar" class="form-control" name="lugar" placeholder="Lugar" required>
                                                                                </div>
                            </div>

                            <div class="col-lg-4 mt-8">
                                <label class="form-label" for="first-name-icon">Fecha</label>
                                                                                <div class="input-group input-group-merge">
                                                                                    <input type="date" id="fecha" class="form-control" name="fecha"required >
                                                                                </div>
                            </div>

                            <div class="col-lg-12 mt-24">
                                Yo,	<b>{{ $item->nombres}} {{ $item->apellido_pa}} {{ $item->apellido_ma}}</b>  identificado con DNI N°  <b>{{ $item->numero_documento}}</b> con domicilio <b>{{ $item->direccion}}</b> .Distrito <b>{{ $item->distrito}}</b>,
                                Provincia de <b>{{ $item->provincia}}</b> y departamento de <b>{{ $item->departamento}}</b>; mediante el presente documento declaro lo siguiente:<br><br>

                                Que autorizo a Konecta Perú1 para que acceda a los equipos de mi propiedad, con la finalidad de realizar acciones tendientes al inicio de mis labores y durante la prestación de servicios; en base a las cuales se realizarán:<br><br>
                                <ol>
                                    <li>Las configuraciones para la activación de usuarios, permisos y restricciones para la seguridad de la información.</li>
                                    <li>Las configuraciones para el remoteo del equipo.</li>
                                    <li>Las revisiones para verificar el cumplimiento normativo a través de auditorías.</li>
                                </ol>

                                Asimismo, declaro que el consentimiento brindado es libre, expreso e informado previamente; por lo que no ha existido ningún tipo de coacción para el ejercicio del mismo.<br><br>


                                Firmo al pie del presente documento en señal de conformidad.

                            </div>



                            <div class="col-lg-12 mt-24">


                                <div class="col-lg-4 mt-24">
                                    <h3>Firma</h3>
                                    <input type="file" id="select-files" name="firma" class="btn btn-outline-primary mb-1 waves-effect dz-clickable" required>
                                </div>
                                <p><b>{{ $item->nombres}} {{ $item->apellido_pa}} {{ $item->apellido_ma}} </b>  </p>
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


