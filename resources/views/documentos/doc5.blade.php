
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
                        COMPROMISO DE NO SUPLANTACIÓN DE IDENTIDAD
                    </h2>

                    <form action="{{ route('pdf.getGenerar5') }}" method="post"  enctype="multipart/form-data" >
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
                               <p>
                                Yo, {{ $item->nombres}}	{{ $item->apellido_pa}} {{ $item->apellido_ma}}  ,	identificado con	DNI N° {{ $item->numero_documento}} ,con domicilio {{ $item->dirección}} ubicado en
, distrito {{ $item->distrito}}provincia de {{ $item->provincia}} y departamento de {{ $item->departamento}}; mediante el presente documento tomo conocimiento de lo siguiente:<br>
<ol>
    <li>Que, la suplantación de identidad consiste en hacerse pasar por otra persona por diversos motivos y para diversos fines, hecho que puede darse por medios distintos, entre ellos, como los tecnológicos.</li>
    <li>Que, Konecta Perú1, rechaza tajantemente la comisión de cualquier conducta delictiva; por lo que, ante este tipo de conductas, toma las acciones legales pertinentes de conformidad con el Código Penal Peruano y la Ley de Delitos Informáticos.</li>
    <li>Qué, Konecta Perú en aras de la prevención de la existencia de esta conducta delictiva, realizará la comprobación de la identidad de el/la colaborador/a durante la capacitación y en cualquier momento de la relación laboral (si la hubiere).</li>
</ol>
<br>
En consecuencia, con pleno conocimiento del contenido del presente documento, autorizo la comprobación de mi identidad y declaro bajo responsabilidad que no ha existido ningún tipo de coacción para la firma al pie del presente documento en señal de conformidad.

                               </p>
                            </div>



                            <div class="col-lg-12 mt-24">

                                <div class="col-lg-4 mt-24">
                                    <h3>Firma</h3>
                                    <input type="file" id="select-files" name="firma" class="btn btn-outline-primary mb-1 waves-effect dz-clickable" required>
                                </div>
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


