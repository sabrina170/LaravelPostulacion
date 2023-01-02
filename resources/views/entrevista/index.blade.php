
 @extends('layouts.head')

  @section('content')

  <div class="card br-16 pt-56 pb-56">
    <div class="card-body">


      @if (Auth::user()->estado==22)
      <div class="box p-8 relative overflow-hidden m-auto   w-100 w-lg-50 text-center">

        <div class="text-pri font-16 text-center mt-24">
            <img src="{{asset('images/calificacion.png')}}" style="width: 300px;">
            <h1>Te estamos calificando</h1>
          <p>Estas en proceso de calificación, te informaremos sobre los resultados una vez finalizado este proceso.</p>
      </div>
    </div>
    @endif
      @if (Auth::user()->estado==3)
      <div class="box p-8 relative overflow-hidden m-auto   w-100 w-lg-50 text-center">
        <img src="{{asset('app-assets/images/konecta/icono-entrevista.png')}}" width="220">
        <div class="text-pri font-16 text-center mt-24">
                        Actualmente se encuentra en la <b>etapa
                        de Entrevista</b>, despues de finalizar regrese para<br>
                        continuar el proceso de postulación.
        </div>
        <div class="text-slate-500 mt-2 text-center">
                        Si desea obtener más información acerca de su proceso de postulación,<br>
                        puede comunicarse a los números <b>XXX XXX XXX</b> , o escribirnos al<br>
                        correo <b>informacion@konecta.com</b>.
        </div>
    </div>
      @endif

    </div>
</div>

  @endsection


