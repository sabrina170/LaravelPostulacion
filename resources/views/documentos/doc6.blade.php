
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
                        DOCUMENTO 5
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet bibendum tortor. Donec viverra dapibus libero, lobortis consectetur mi sodales ut. Proin venenatis ullamcorper
                                malesuada. Proin dignissim elit justo, ut faucibus velit mattis vitae. Duis eu interdum velit. Phasellus vitae posuere orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                                ridiculus mus. Fusce at elit orci. Morbi sit amet lacinia nunc, vel eleifend enim.
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


