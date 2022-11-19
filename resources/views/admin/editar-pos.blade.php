@extends('layouts.adm-head')
<!-- MENU -->
@section('content')
<div class="container-fluid">
<div class="row">

        <h2 class="text-pri font-weight-bold">Editar postulante <strong>Sabrina</strong></h2>
        <div class="row">
            @foreach ($info_postulante as $item)
            <!-- left profile info section -->
            <div class="col-lg-4 col-12 order-2 order-lg-1">
                <!-- about -->

                <div class="card">
                    <div class="card-body">



                        <h5 class="mb-75 font-weight-bold">INFORMACIÓN PERSONAL</h5>
                        <div class="mt-2">
                            <h5 class="mb-75 font-weight-bold">Nombres y Apellidos                                :</h5>
                            <p class="card-text">{{ $item->nombres }}</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-75 font-weight-bold">Dni:</h5>
                            <p class="card-text">{{ $item->numero_documento }}</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-75 font-weight-bold">Email:</h5>
                            <p class="card-text">{{ $item->correo }}</p>
                        </div>

                        <div class="mt-2">
                            <form method="POST" action="{{route('admin.actualizar',$item->id)}}">
                                @method('put')
                                @csrf
                                <h5 class="mb-50 font-weight-bold">Estado:</h5>
                                <select class="form-select" id="basicSelect" name="estado">
                                    <option value="1" @if ($item->estado == 1) selected @endif>Registrado</option>
                                    <option value="2" @if ($item->estado == 2) selected @endif>Lleno sus datos</option>
                                    <option value="3" @if ($item->estado == 3) selected @endif>Aceptado</option>
                                    <option value="4" @if ($item->estado == 4) selected @endif>Completado</option>
                                    <option value="5" @if ($item->estado == 5) selected @endif>Rechazado</option>
                                </select>
                                <input type="submit" class="btn btn-success" value="Actualizar estado">
                            </form>


                        </div>
                    </div>
                </div>
                <!--/ about -->

            </div>
            <!--/ left profile info section -->

            <!-- center profile info section -->
            <div class="col-lg-4 col-12 order-1 order-lg-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-75">ESTUDIOS</h5>
                        <div class="mt-2">
                            <h5 class="mb-75 font-weight-bold">Grado de formación:</h5>
                            <p class="card-text">{{ $item->grado }}</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-75 font-weight-bold">Nombre de institución educativa:</h5>
                            <p class="card-text">{{ $item->nombre_ie }}</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-75 font-weight-bold">Estudia actualmente?:</h5>
                            <p class="card-text">{{ $item->estudia }}</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-50 font-weight-bold">Horario de estudios:</h5>
                            <p class="card-text mb-0">{{ $item->horario }}</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-75 font-weight-bold">Disponibilidad</h5>
                            <p class="card-text">{{ $item->disponibilidad }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ center profile info section -->

            <!-- right profile info section -->
            <div class="col-lg-4 col-12 order-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-75">EXPERIENCIA LABORAL</h5>
                        <div class="mt-2">
                            <h5 class="mb-75 font-weight-bold">¿Has laborado en call center?:</h5>
                            <p class="card-text">{{ $item->callcenter }}</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-75 font-weight-bold">Nombre de empresa:</h5>
                            <p class="card-text">{{ $item->empresa }}</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-75 font-weight-bold">Puesto experiencia:</h5>
                            <p class="card-text">{{ $item->puesto }}</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-50 font-weight-bold">Tiempo (meses):</h5>
                            <p class="card-text mb-0">{{ $item->tiempo }}</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-50 font-weight-bold">Tipo experiencia:</h5>
                            <p class="card-text mb-0">{{ $item->tipo_expe }}</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-50 font-weight-bold">Trabajó en Konecta:</h5>
                            <p class="card-text mb-0">{{ $item->konecta }}</p>
                        </div>
                    </div>
                </div>
             </div>
        @endforeach
</div>
</div>

<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/charts/chart-chartjs.js')}}"></script>
<!-- END: Page JS-->

@endsection


