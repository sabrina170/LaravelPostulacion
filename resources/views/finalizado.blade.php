
 @extends('layouts.head')


 @section('content')

 <div class="card br-16">
    <div class="meetup-img-wrapper rounded-top text-center">
        <img class="card-img-top br-16" src="{{asset('app-assets/images/portada2.jpg')}}" alt="Card image cap" style="object-fit:cover;" height="270">
    </div>
</div>

<div class="card br-16 pt-56 pb-56">
    <div class="card-body">

         <div class="box p-8 relative overflow-hidden intro-y container w-50 text-center">
            <img src="{{asset('app-assets/images/konecta/icono-entrevista.png')}}" width="140">
            <div class="text-pri font-16 text-center mt-24">
                            Actualmente se encuentra en la <b>etapa
                            de Entrevista</b>, despues de finalizar regrese para
                            continuar el proceso de postulación.
            </div>
            <div class="text-slate-500 mt-2 text-center">
                            Si desea obtener más información acerca de su proceso de postulación,
                            puede comunicarse a los números <b>XXX XXX XXX</b> , o escribirnos al
                            correo <b>informacion@yosoyb12.com</b>.
            </div>
        </div>
    </div>
</div>
<div class="col-span-12  mt-6 text-center ">

</div>

 @endsection


