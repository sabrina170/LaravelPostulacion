
 @extends('layouts.head')


 @section('content')

 <div class="card br-16">
    <div class="meetup-img-wrapper rounded-top text-center">
        <img class="card-img-top br-16" src="{{asset('app-assets/images/portada2.jpg')}}" alt="Card image cap" style="object-fit:cover;" height="270">
    </div>
</div>

<div class="card br-16 p-36">
    <div class="card-body">
        <h2 class="intro-y text-lg font-medium mr-auto font-weight-bold">
            MIS DOCUMENTOS
        </h2>
        <h5 class="intro-y mr-auto">
            Por favor, llene todos los documentos a continuación, luego darle click a enviar para proceder con la postulación:
        </h5>
        <div class="table-responsive">
            <table class="table  table-bordered mt-24">
                <thead>
                    <tr>
                        <th>DOCUMENTO</th>
                        <th>SUBIR ARCHIVO</th>
                        <th>ARCHIVOS SUBIDOS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-pri font-weight-bold">CERTIFICADO DE ESTUDIOS</td>
                        <td>
                            @if (count($certificado) > 0)
                            <span class="badge bg-success">Listo</span>
                            @else

                                <form action="{{route('subirarchivos')}}" method="post" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <label for="formFile" class="form-label">Selecciona varios archivos</label>
                                    <input class="form-control"  type="file" name="images[]" multiple  required>
                                    <input type="hidden" value="1" name="tipo">
                                    <input type="hidden" value="Certificado" name="nombre">

                                </div>

                                <div class="col-lg-6 col-md-12 mt-12">
                                    <button type="submit" class="btn btn-dark waves-effect waves-float waves-light">Subir documentos</button>
                                </div>
                            </div>
                                </form>

                            @endif

                        </td>
                        <td>
                            @if (count($certificado) > 0)
                                @foreach ($certificado as $cer)
                                {{-- {{$cer->id}} --}}
                                <ul class="list-group list-group-numbered">
                                    @foreach ($docs as $d)
                                        @if ($cer->id==$d->docpos_id)
                                            <li class="list-group-item">
                                                <span>{{$d->image}}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                                @endforeach
                            @else
                                Ningun documento
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td class="text-pri font-weight-bold">CONSTANCIAS DE TRABAJOS</td>
                        <td>
                            @if (count($constancia) > 0)
                            <span class="badge bg-success">Listo</span>
                            @else
                            <form action="{{route('subirarchivos')}}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <label for="formFile" class="form-label">Selecciona varios archivos</label>
                                        <input class="form-control"  type="file" name="images[]" multiple  required>
                                        <input type="hidden" value="2" name="tipo">
                                        <input type="hidden" value="Constancia" name="nombre">
                                    </div>
                                    <div class="col-lg-6 col-md-12 mt-12">
                                        <button type="submit" class="btn btn-dark waves-effect waves-float waves-light">Subir documentos</button>
                                    </div>
                                </div>
                            </form>
                            @endif

                        </td>
                        <td>
                            @if (count($constancia) > 0)
                                @foreach ($constancia as $cer)
                                {{-- {{$cer->id}} --}}
                                <ul class="list-group list-group-numbered">
                                    @foreach ($docs as $d)
                                        @if ($cer->id==$d->docpos_id)
                                            <li class="list-group-item">
                                                <span>{{$d->image}}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                                @endforeach
                            @else
                                Ningun documento
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td class="text-pri font-weight-bold">ANTECEDENTES</td>
                        <td>
                            @if (count($antecedente) > 0)
                            <span class="badge bg-success">Listo</span>
                            @else
                            <form action="{{route('subirarchivos')}}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <label for="formFile" class="form-label">Selecciona varios archivos</label>
                                        <input class="form-control"  type="file" name="images[]" multiple  required>
                                        <input type="hidden" value="3" name="tipo">
                                        <input type="hidden" value="Antecedentes" name="nombre">
                                    </div>
                                    <div class="col-lg-6 col-md-12 mt-12">
                                        <button type="submit" class="btn btn-dark waves-effect waves-float waves-light">Subir documentos</button>
                                    </div>
                                </div>
                            </form>
                            @endif

                        </td>
                        <td>
                            @if (count($antecedente) > 0)
                                @foreach ($antecedente as $cer)
                                {{-- {{$cer->id}} --}}
                                <ul class="list-group list-group-numbered">
                                    @foreach ($docs as $d)
                                        @if ($cer->id==$d->docpos_id)
                                            <li class="list-group-item">
                                                <span>{{$d->image}}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                                @endforeach
                            @else
                                Ningun documento
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td class="text-pri font-weight-bold">DNI</td>
                        <td>
                            @if (count($dni) > 0)
                            <span class="badge bg-success">Listo</span>
                            @else
                            <form action="{{route('subirarchivos')}}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <label for="formFile" class="form-label">Selecciona varios archivos</label>
                                        <input class="form-control"  type="file" name="images[]" multiple  required>
                                        <input type="hidden" value="4" name="tipo">
                                        <input type="hidden" value="Dni" name="nombre">
                                    </div>
                                    <div class="col-lg-6 col-md-12 mt-12">
                                        <button type="submit" class="btn btn-dark waves-effect waves-float waves-light">Subir documentos</button>
                                    </div>
                                </div>
                            </form>
                            @endif

                        </td>
                        <td>
                            @if (count($dni) > 0)
                                @foreach ($dni as $cer)
                                {{-- {{$cer->id}} --}}
                                <ul class="list-group list-group-numbered">
                                    @foreach ($docs as $d)
                                        @if ($cer->id==$d->docpos_id)
                                            <li class="list-group-item">
                                                <span>{{$d->image}}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                                @endforeach
                            @else
                                Ningun documento
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td class="text-pri font-weight-bold">CERTIFICACIÓN DE RENTA 5TA CATEGORÍA</td>
                        <td>
                            @if (count($renta) > 0)
                            <span class="badge bg-success">Listo</span>
                            @else
                            <form action="{{route('subirarchivos')}}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <label for="formFile" class="form-label">Selecciona varios archivos</label>
                                        <input class="form-control"  type="file" name="images[]" multiple  required>
                                        <input type="hidden" value="5" name="tipo">
                                        <input type="hidden" value="Renta" name="nombre">
                                    </div>
                                    <div class="col-lg-6 col-md-12 mt-12">
                                        <button type="submit" class="btn btn-dark waves-effect waves-float waves-light">Subir documentos</button>
                                    </div>
                                </div>
                            </form>
                            @endif

                        </td>
                        <td>
                            @if (count($renta) > 0)
                                @foreach ($renta as $cer)
                                {{-- {{$cer->id}} --}}
                                <ul class="list-group list-group-numbered">
                                    @foreach ($docs as $d)
                                        @if ($cer->id==$d->docpos_id)
                                            <li class="list-group-item">
                                                <span>{{$d->image}}</span>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                                @endforeach
                            @else
                                Ningun documento
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="text-center">
            <div id="alerta">

            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="confirmo" value="checked">
                <label class="form-check-label" for="inlineCheckbox1">Confirmo haber completado todos los documentos para la respectiva postulación</label>
            </div>
            <br>
            <input type="hidden" id="user_id" value="{{Auth::user()->id}}">
            <button id="boton1" onclick="boton2"  class="col-lg-4 mt-4 btn btn-primary waves-effect waves-float waves-light">Enviar documentos</button>
        </div>

    </div>
                </div>

 @endsection
 @section('js')

 <script>


      document.getElementById('boton1').onclick = function(){

         var query = $('#user_id').val();
         if ($('#confirmo').prop('checked') ) {
                 $.ajax({
                     url:'{{ route('cambiarestadopos2') }}',
                     type:'GET',
                     data:{'id_user':query},
                     dataType:'json',
                     success:function (data) {
                         location.href="{{ route('finalizado') }}";
                     }
                 })
         }else{

             $('#alerta').html('<div class="alert alert-warning" role="alert"><div class="alert-body"><strong>Selecciona el check de confirmacíon</strong></div></div>')
         }


 }



 </script>
 @endsection
