
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
            <p class="col-lg-4 mb-0">Pendiente</p>
            <p class="col-lg-2 mb-0 text-center"><a href="#"><i data-feather='arrow-right'></i></a></p>
        </div>

        <div class="border br-16 row pt-12 pb-12 pl-0 pr-0 m-0 mt-8">
            <p class="col-lg-2 mb-0 text-center"><i data-feather='file'></i></p>
            <p class="col-lg-4 mb-0">Ficha del trabajador</p>
            <p class="col-lg-4 mb-0">Pendiente</p>
            <p class="col-lg-2 mb-0 text-center"><a href="#"><i data-feather='arrow-right'></i></a></p>
        </div>

        <div class="border br-16 row pt-12 pb-12 pl-0 pr-0 m-0 mt-8">
            <p class="col-lg-2 mb-0 text-center"><i data-feather='file'></i></p>
            <p class="col-lg-4 mb-0">Ficha del trabajador</p>
            <p class="col-lg-4 mb-0">Pendiente</p>
            <p class="col-lg-2 mb-0 text-center"><a href="#"><i data-feather='arrow-right'></i></a></p>
        </div>

        <div class="border br-16 row pt-12 pb-12 pl-0 pr-0 m-0 mt-8">
            <p class="col-lg-2 mb-0 text-center"><i data-feather='file'></i></p>
            <p class="col-lg-4 mb-0">Ficha del trabajador</p>
            <p class="col-lg-4 mb-0">Pendiente</p>
            <p class="col-lg-2 mb-0 text-center"><a href="#"><i data-feather='arrow-right'></i></a></p>
        </div>

        <div class="border br-16 row pt-12 pb-12 pl-0 pr-0 m-0 mt-8">
            <p class="col-lg-2 mb-0 text-center"><i data-feather='file'></i></p>
            <p class="col-lg-4 mb-0">Ficha del trabajador</p>
            <p class="col-lg-4 mb-0">Pendiente</p>
            <p class="col-lg-2 mb-0 text-center"><a href="#"><i data-feather='arrow-right'></i></a></p>
        </div>
    </div>
</div>

 @endsection


