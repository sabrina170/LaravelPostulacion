
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
                <a href="{{route('doc1',Auth::user()->id)}}"><i data-feather='arrow-right'></i></a></p>
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
            <p class="col-lg-2 mb-0 text-center"><a href="{{route('doc3')}}"><i data-feather='arrow-right'></i></a></p>
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
            <p class="col-lg-2 mb-0 text-center"><a href="{{route('doc4')}}"><i data-feather='arrow-right'></i></a></p>
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
            <p class="col-lg-2 mb-0 text-center"><a href="{{route('doc5')}}"><i data-feather='arrow-right'></i></a></p>
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
            <p class="col-lg-2 mb-0 text-center"><a href="{{route('doc6')}}"><i data-feather='arrow-right'></i></a></p>
        </div>
    </div>
</div>

 @endsection


