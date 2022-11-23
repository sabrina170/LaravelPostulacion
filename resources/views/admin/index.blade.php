@extends('layouts.adm-head')
<!-- MENU -->
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-lg-7">
        <div class="card card-congratulations bg-sec pt-20 pb-0 pl-28 pr-28" id="tarjeta-bienvenida">
            <div class="card-body text-left p-0">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="mb-1 text-white font-20">Hola {{ Auth::user()->name }}</h1>
                        <p class="card-text m-auto mb-0">
                            Bienvenido(a) al panel principal , las postulaciones de hoy son:
                        </p>
                        <p class="text-pri font-28 font-weight-bold mt-20 mb-20">{{$count}} <span class="font-20">Postulantes</span></p>
                    </div>
                    <div class="col-lg-4 text-right d-flex align-items-end justify-content-center">
                        <img src="{{asset('app-assets/images/konecta/avatar.png')}}" width="80">
                    </div>

                </div>
            </div>
        </div>
        <h2 class="text-pri font-weight-bold">Actividades recientes</h2>

        <div class="row">
            <div class="col-lg-6">
                <div class="card pt-20 pb-20 pl-28 pr-28">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-3 d-flex align-items-center"><p class="mb-0 font-24 font-weight-bold">{{$postulantes_llenaron_registro}}</p></div>
                            <div class="col-lg-9">
                                <p class="font-16 font-weight-bold text-pri mb-0">Completaron sus registros</p>
                                <p class="font-12 text-gray mb-0">Esta semana</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card pt-20 pb-20 pl-28 pr-28">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-3 d-flex align-items-center"><p class="mb-0 font-24 font-weight-bold">{{$postulantes_rechazados}}</p></div>
                            <div class="col-lg-9">
                                <p class="font-16 font-weight-bold text-pri mb-0">Postulantes Rechazados</p>
                                <p class="font-12 text-gray mb-0">Esta semana</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card pt-20 pb-20 pl-28 pr-28">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-3 d-flex align-items-center"><p class="mb-0 font-24 font-weight-bold">{{$postulantes_registrados}}</p></div>
                            <div class="col-lg-9">
                                <p class="font-16 font-weight-bold text-pri mb-0">Postulantes Registrados</p>
                                <p class="font-12 text-gray mb-0">Esta semana</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card pt-20 pb-20 pl-28 pr-28">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-3 d-flex align-items-center"><p class="mb-0 font-24 font-weight-bold">{{$postulantes_aceptados}}</p></div>
                            <div class="col-lg-9">
                                <p class="font-16 font-weight-bold text-pri mb-0">Postulantes Aceptados</p>
                                <p class="font-12 text-gray mb-0">Esta semana</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-sm-center align-items-start flex-sm-row flex-column">
                        <div class="header-left">
                            <h4 class="card-title">Ingresos a la plataforma</h4>
                        </div>
                        <div class="header-right d-flex align-items-center mt-sm-0 mt-1">
                            <i data-feather="calendar"></i>
                            <input type="text" class="form-control flat-picker border-0 shadow-none bg-transparent pe-0" placeholder="YYYY-MM-DD" />
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas class="bar-chart-ex chartjs" data-height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card card-employee-task">
            <div class="card-header">
                <h4 class="card-title text-pri font-weight-bold">Nuevos Postulantes</h4>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-medium-3 cursor-pointer"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
            </div>
            <div class="card-body">
                @foreach ($usuarios as $item)
                <div class="employee-task d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row">
                        <div class="avatar me-75">
                            <img src="{{asset('app-assets/images/portrait/small/avatar-s-20.jpg')}}" class="rounded" width="42" height="42" alt="Avatar">
                        </div>
                        <div class="my-auto">
                            <h6 class="mb-0">{{$item->name}}</h6>
                            <small>{{$item->email}}</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center" style="position: relative;">
                        <button type="button" class="btn btn-icon rounded-circle btn-outline-primary waves-effect">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>
                </div>


                @endforeach
            </div>
        </div>
        <div class="card card-employee-task">
            <div class="card-header">
                <h4 class="card-title text-pri font-weight-bold">No completaron
                    su registro</h4>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-medium-3 cursor-pointer"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
            </div>
            <div class="card-body">
                @foreach ($usuarios_no_completaron as $postulante)
                    <div class="employee-task d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-row">
                            <div class="avatar me-75">
                                <img src="{{asset('app-assets/images/portrait/small/avatar-s-20.jpg')}}" class="rounded" width="42" height="42" alt="Avatar">
                            </div>
                            <div class="my-auto">
                                <h6 class="mb-0">{{$postulante->name}}</h6>
                                <small>{{$postulante->email}}</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center" style="position: relative;">
                            <button type="button" class="btn btn-icon rounded-circle btn-outline-primary waves-effect">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>



@endsection


