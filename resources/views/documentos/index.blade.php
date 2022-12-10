
 @extends('layouts.head')


 @section('content')

 <div class="card br-16">
    <div class="meetup-img-wrapper rounded-top text-center">
        <img class="card-img-top br-16" src="{{asset('app-assets/images/portada2.jpg')}}" alt="Card image cap" style="object-fit:cover;" height="270">
    </div>
</div>

<div class="card br-16 p-36">
    <div class="card-body">
        <h2 class="intro-y text-lg font-medium mr-auto">
            LLENADO DE DOCUMENTOS
        </h2>
        <h5 class="intro-y mr-auto">
            Por favor, llene todos los documentos a continuación, luego darle click a enviar para proceder con la postulación:
        </h5>

        <div class="border br-16 row pt-12 pb-12 pl-0 pr-0 m-0 mt-24 item-documento">
            <p class="col-lg-2 mb-0 text-center"><i data-feather='file'></i></p>
            <p class="col-lg-4 mb-0">Ficha del trabajador</p>
            @if (isset($docs))
                @foreach ($docs as $d)
                    @if ($d->tipo==1)
                        @if ($d->estado==1)
                        <p class="col-lg-4 mb-0"><span class="badge bg-info">Completado</span></p>
                        @else
                        <p class="col-lg-4 mb-0">Pendiente</p>
                        @endif
                    @endif
                @endforeach
            @else
            <p class="col-lg-4 mb-0">Pendiente</p>
            @endif

            <p class="col-lg-2 mb-0 text-center">
                <a href="{{route('doc1',[Auth::user()->id,1])}}"><i data-feather='arrow-right'></i></a></p>
        </div>


        <div class="border br-16 row pt-12 pb-12 pl-0 pr-0 m-0 mt-8">
            <p class="col-lg-2 mb-0 text-center"><i data-feather='file'></i></p>
            <p class="col-lg-4 mb-0">Documento 2</p>
            @if (isset($docs))
                @foreach ($docs as $d)
                    @if ($d->tipo==2)
                        @if ($d->estado==1)
                        <p class="col-lg-4 mb-0"><span class="badge bg-info">Completado</span></p>
                        @else
                        <p class="col-lg-4 mb-0">Pendiente</p>
                        @endif
                    @endif
                @endforeach
            @else
            <p class="col-lg-4 mb-0">Pendiente</p>
            @endif
             <p class="col-lg-2 mb-0 text-center"><a href="{{route('doc2',[Auth::user()->id,2])}}"><i data-feather='arrow-right'></i></a></p>

        </div>

        <div class="border br-16 row pt-12 pb-12 pl-0 pr-0 m-0 mt-8">
            <p class="col-lg-2 mb-0 text-center"><i data-feather='file'></i></p>
            <p class="col-lg-4 mb-0">Documento 3</p>
            @if (isset($docs))
                @foreach ($docs as $d)
                    @if ($d->tipo==3)
                        @if ($d->estado==1)
                        <p class="col-lg-4 mb-0"><span class="badge bg-info">Completado</span></p>
                        @else
                        <p class="col-lg-4 mb-0">Pendiente</p>
                        @endif
                    @endif
                @endforeach
            @else
            <p class="col-lg-4 mb-0">Pendiente</p>
            @endif
            <p class="col-lg-2 mb-0 text-center"><a href="{{route('doc3',[Auth::user()->id,3])}}"><i data-feather='arrow-right'></i></a></p>
        </div>

        <div class="border br-16 row pt-12 pb-12 pl-0 pr-0 m-0 mt-8">
            <p class="col-lg-2 mb-0 text-center"><i data-feather='file'></i></p>
            <p class="col-lg-4 mb-0">Documento 4</p>
            @if (isset($docs))
                @foreach ($docs as $d)
                    @if ($d->tipo==4)
                        @if ($d->estado==1)
                        <p class="col-lg-4 mb-0"><span class="badge bg-info">Completado</span></p>
                        @else
                        <p class="col-lg-4 mb-0">Pendiente</p>
                        @endif
                    @endif
                @endforeach
            @else
            <p class="col-lg-4 mb-0">Pendiente</p>
            @endif
            <p class="col-lg-2 mb-0 text-center"><a href="{{route('doc4',[Auth::user()->id,4])}}"><i data-feather='arrow-right'></i></a></p>
        </div>

        <div class="border br-16 row pt-12 pb-12 pl-0 pr-0 m-0 mt-8">
            <p class="col-lg-2 mb-0 text-center"><i data-feather='file'></i></p>
            <p class="col-lg-4 mb-0">Docuemento 5</p>
            @if (isset($docs))
            @foreach ($docs as $d)
                @if ($d->tipo==5)
                    @if ($d->estado==1)
                    <p class="col-lg-4 mb-0"><span class="badge bg-info">Completado</span></p>
                    @else
                    <p class="col-lg-4 mb-0">Pendiente</p>
                    @endif
                @endif
            @endforeach
        @else
        <p class="col-lg-4 mb-0">Pendiente</p>
        @endif
            <p class="col-lg-2 mb-0 text-center"><a href="{{route('doc5',[Auth::user()->id,5])}}"><i data-feather='arrow-right'></i></a></p>
        </div>
        <div class="border br-16 row pt-12 pb-12 pl-0 pr-0 m-0 mt-8">
            <p class="col-lg-2 mb-0 text-center"><i data-feather='file'></i></p>
            <p class="col-lg-4 mb-0">Documento 6</p>
            @if (isset($docs))
                @foreach ($docs as $d)
                    @if ($d->tipo==6)
                        @if ($d->estado==1)
                        <p class="col-lg-4 mb-0"><span class="badge bg-info">Completado</span></p>
                        @else
                        <p class="col-lg-4 mb-0">Pendiente</p>
                        @endif
                    @endif
                @endforeach
            @else
            <p class="col-lg-4 mb-0">Pendiente</p>
            @endif
            <p class="col-lg-2 mb-0 text-center"><a href="{{route('doc6',[Auth::user()->id,6])}}"><i data-feather='arrow-right'></i></a></p>
        </div>
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
        <button  onclick="boton1" id="boton1" class="col-lg-4 mt-4 btn btn-primary waves-effect waves-float waves-light">Enviar documentos</button>
    </div>
</div>

 @endsection
@section('js')

<script>


     document.getElementById('boton1').onclick = function(){


        var query = $('#user_id').val();

        if ($('#confirmo').prop('checked') ) {
// alert(query);
                $.ajax({
                    url:'{{ route('cambiarestadopos') }}',
                    type:'GET',
                    data:{'id_user':query},
                    dataType:'json',
                    success:function (data) {
                        // $('#total_dni').html(data.total_dni);
                        // $('#alerta').html(data);
                        location.href="{{ route('documentos.docs') }}";
                    }
                })
        }else{

            $('#alerta').html('<div class="alert alert-warning" role="alert"><div class="alert-body"><strong>Selecciona el check de confirmacíon</strong></div></div>')
        }


}



</script>
@endsection

