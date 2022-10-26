@extends('layouts.adm-head')
<!-- MENU -->
@section('content')
<div class="container-fluid">
<div class="row">

        <h2 class="text-pri font-weight-bold">Buscar por</h2>
        <div class="demo-inline-spacing pb-8">
            <button type="button" class="btn btn-success round waves-effect">Registrados</button>
            <button type="button" class="btn btn-primary round waves-effect">En entrevista</button>
            <button type="button" class="btn btn-info round waves-effect">Aceptados</button>
            <button type="button" class="btn btn-danger round waves-effect">Rechazados</button>
        </div>
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                        <button type="button" class="btn btn-info round waves-effect btn-sm">EXCEL</button>
                        <button type="button" class="btn btn-info round waves-effect btn-sm">PDF</button>
                        <button type="button" class="btn btn-info round waves-effect btn-sm">IMPRIMIR</button>

                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Dni</th>
                                <th>Genero</th>
                                <th>Fecha de Registro</th>
                                <th>Mis documentod</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="fw-bold">Peter </span>
                                </td>
                                <td>Charls</td>
                                <td>76232414</td>
                                <td>Femenino</td>
                                <td>28/10/2022</td>
                                <td>  <a href="{{route('mis-documentos')}}" type="button" class="btn btn-info round waves-effect btn-sm">Mis documentos</a></td>
                                <td><span class="badge rounded-pill badge-light-primary me-1">En entrevista</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">

                                                <a class="dropdown-item" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash me-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                    <span>Delete</span>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="{{route('editarpos')}}"><i data-feather='arrow-right'></i></a> </div>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-bold">Peter </span>
                                </td>
                                <td>Charls</td>
                                <td>76232414</td>
                                <td>Femenino</td>
                                <td>28/10/2022</td>
                                <td>  <a href="{{route('mis-documentos')}}" type="button" class="btn btn-info round waves-effect btn-sm">Mis documentos</a></td>

                                <td><span class="badge rounded-pill badge-light-success me-1">Registrado</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">

                                                <a class="dropdown-item" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash me-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                    <span>Delete</span>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="{{route('editarpos')}}"><i data-feather='arrow-right'></i></a> </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-bold">Peter </span>
                                </td>
                                <td>Charls</td>
                                <td>76232414</td>
                                <td>Femenino</td>
                                <td>28/10/2022</td>
                                <td>  <a href="{{route('mis-documentos')}}" type="button" class="btn btn-info round waves-effect btn-sm">Mis documentos</a></td>

                                <td><span class="badge rounded-pill badge-light-info me-1">Aceptado</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">

                                                <a class="dropdown-item" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash me-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                    <span>Delete</span>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="{{route('editarpos')}}"><i data-feather='arrow-right'></i></a> </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-bold">Peter </span>
                                </td>
                                <td>Charls</td>
                                <td>76232414</td>
                                <td>Femenino</td>
                                <td>28/10/2022</td>
                                <td>  <a href="{{route('mis-documentos')}}" type="button" class="btn btn-info round waves-effect btn-sm">Mis documentos</a></td>

                                <td><span class="badge rounded-pill badge-light-danger me-1">Rechazado</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">

                                                <a class="dropdown-item" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash me-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                    <span>Delete</span>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="{{route('editarpos')}}"><i data-feather='arrow-right'></i></a> </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-bold">Peter </span>
                                </td>
                                <td>Charls</td>
                                <td>76232414</td>
                                <td>Femenino</td>
                                <td>28/10/2022</td>
                                <td>  <a href="{{route('mis-documentos')}}" type="button" class="btn btn-info round waves-effect btn-sm">Mis documentos</a></td>
                                <td><span class="badge rounded-pill badge-light-primary me-1">En entrevista</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">

                                                <a class="dropdown-item" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash me-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                    <span>Delete</span>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="{{route('editarpos')}}"><i data-feather='arrow-right'></i></a> </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-bold">Peter </span>
                                </td>
                                <td>Charls</td>
                                <td>76232414</td>
                                <td>Femenino</td>
                                <td>28/10/2022</td>
                                <td>  <a href="{{route('mis-documentos')}}" type="button" class="btn btn-info round waves-effect btn-sm">Mis documentos</a></td>

                                <td><span class="badge rounded-pill badge-light-success me-1">Registrado</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">

                                                <a class="dropdown-item" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash me-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                    <span>Delete</span>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="{{route('editarpos')}}"><i data-feather='arrow-right'></i></a> </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-bold">Peter </span>
                                </td>
                                <td>Charls</td>
                                <td>76232414</td>
                                <td>Femenino</td>
                                <td>28/10/2022</td>
                                <td>  <a href="{{route('mis-documentos')}}" type="button" class="btn btn-info round waves-effect btn-sm">Mis documentos</a></td>

                                <td><span class="badge rounded-pill badge-light-info me-1">Aceptado</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">

                                                <a class="dropdown-item" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash me-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                    <span>Delete</span>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="{{route('editarpos')}}"><i data-feather='arrow-right'></i></a> </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-bold">Peter </span>
                                </td>
                                <td>Charls</td>
                                <td>76232414</td>
                                <td>Femenino</td>
                                <td>28/10/2022</td>
                                <td>  <a href="{{route('mis-documentos')}}" type="button" class="btn btn-info round waves-effect btn-sm">Mis documentos</a></td>

                                <td><span class="badge rounded-pill badge-light-danger me-1">Rechazado</span></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0 waves-effect waves-float waves-light" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">

                                                <a class="dropdown-item" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash me-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                    <span>Delete</span>
                                                </a>
                                            </div>
                                        </div>
                                        <a href="{{route('editarpos')}}"><i data-feather='arrow-right'></i></a> </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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


