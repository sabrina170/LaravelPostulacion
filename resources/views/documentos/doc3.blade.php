
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
                    DECLARACIÓN JURADA
                </h2>
                <h5 class="intro-y mr-auto">
                    <strong> {{  $item->tipo_documento}}</strong> - {{  $item->numero_documento}}  <br>
                    <strong>Dirección : </strong> {{  $item->direccion}} <br>
                    <strong>Telefono : </strong> {{  $item->telefono}}

                    {{-- Ingresar Tipo de Documento y Número (Carnet de Extranjería / DNI) --}}
                </h5>
                <form action="{{ route('pdf.getGenerar3') }}" method="post"  enctype="multipart/form-data" >
                        @csrf
                        <input type="hidden" value="descargar" name="accion">
                        <input type="hidden" value="{{Auth::user()->id}}" name="id_user">



                        <div class="col-lg-12 mt-24">
                            El que suscribe <b> {{ $item->apellido_pa}} {{ $item->apellido_ma}}  {{ $item->nombres}}</b> con {{  $item->tipo_documento}} :  {{  $item->numero_documento}} declara lo siguiente:
                            Haber recibido del área de RRHH la información pertinente respecto a los sistemas de pensiones, así mismo certifica la recepción del Boletín Informativo acerca de las características del Sistema Privado de Pensiones (SPP) y del Sistema Nacional de Pensiones (SNP).

                        </div>



                        <div class="col-lg-12 mt-24">


                            <h3>Firma</h3>
                            <input type="file" id="firma" name="firma"
                            class="btn btn-outline-primary mb-1 waves-effect dz-clickable" required>
                            <hr>


                             <div class="col-lg-4 mt-24">
                                <h3>Firma</h3>
                                <input type="file" id="select-files" name="firma" class="btn btn-outline-primary mb-1 waves-effect dz-clickable" required>
                                <hr>

                                <p><b>{{ $item->nombres}} {{ $item->apellido_pa}} {{ $item->apellido_ma}} </b> </p>
                                <p><b>DNI:</b> {{ $item->numero_documento}}</p>

                            </div>

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

 @endsection


