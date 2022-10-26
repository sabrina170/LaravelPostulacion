@extends('layouts.adm-head')
<!-- MENU -->
@section('content')
<div class="container-fluid">
<div class="row">

        <h2 class="text-pri font-weight-bold">Editar postulante <strong>Sabrina</strong></h2>
        <div class="row">
            <!-- left profile info section -->
            <div class="col-lg-4 col-12 order-2 order-lg-1">
                <!-- about -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-75">INFORMACIÓN PERSONAL</h5>
                        <div class="mt-2">
                            <h5 class="mb-75">Nombres y Apellidos                                :</h5>
                            <p class="card-text">Demo Demo</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-75">Dni:</h5>
                            <p class="card-text">76343435</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-75">Email:</h5>
                            <p class="card-text">bucketful@fiendhead.org</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-50">Website:</h5>
                            <p class="card-text mb-0">www.pixinvent.com</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-50">Estado:</h5>
                            <select class="form-select" id="basicSelect">
                                <option>Registrado</option>
                                <option>Rechazado</option>
                                <option>En espera</option>
                            </select>
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
                            <h5 class="mb-75">Grado de formación:</h5>
                            <p class="card-text">Titulado</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-75">Nombre de institución educativa:</h5>
                            <p class="card-text">intitución educativa</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-75">Estudia actualmente?:</h5>
                            <p class="card-text">si</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-50">Horario de estudios:</h5>
                            <p class="card-text mb-0">3p.m - 7p.m</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-75">Disponibilidad</h5>
                            <p class="card-text">Inmediata</p>
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
                            <h5 class="mb-75">¿Has laborado en call center?:</h5>
                            <p class="card-text">Si</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-75">Nombre de empresa:</h5>
                            <p class="card-text">Empresa</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-75">Puesto experiencia:</h5>
                            <p class="card-text">Bitel</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-50">Tiempo (meses):</h5>
                            <p class="card-text mb-0">12</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-50">Tipo experiencia:</h5>
                            <p class="card-text mb-0">Ventas call center</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="mb-50">Trabajó en Konecta:</h5>
                            <p class="card-text mb-0">Si</p>
                        </div>
                    </div>
                </div>
             </div>
</div>
</div>

<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/charts/chart-chartjs.js')}}"></script>
<!-- END: Page JS-->

@endsection


