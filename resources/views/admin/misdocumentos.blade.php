@extends('layouts.adm-head')
<!-- MENU -->
@section('content')
<div class="container-fluid">
<div class="row">

        <h2 class="text-pri font-weight-bold">Mis Documentos</h2>
        <div class="file-manager-application">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-area-wrapper container-xxl p-0">
                <div class="sidebar-left">
                    <div class="sidebar">
                        <div class="sidebar-file-manager">
                            <div class="sidebar-inner">
                                <!-- sidebar menu links starts -->
                                <!-- add file button -->
                                <div class="dropdown dropdown-actions">
                                    <button class="btn btn-secondary add-file-btn text-center w-100" type="button" id="addNewFile" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span class="align-middle">Documentos</span>
                                    </button>

                                </div>
                                <!-- add file button ends -->


                                <!-- sidebar menu links ends -->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="content-right">
                    <div class="content-wrapper container-xl p-0">
                        <div class="content-header row">
                        </div>
                        <div class="content-body">
                            <!-- overlay container -->
                            <div class="body-content-overlay"></div>

                            <!-- file manager app content starts -->
                            <div class="file-manager-main-content">
                                <!-- search area start -->
                                <div class="file-manager-content-header d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="sidebar-toggle d-block d-xl-none float-start align-middle ms-1">
                                            <i data-feather="menu" class="font-medium-5"></i>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center">

                                        <div class="btn-group view-toggle ms-50" role="group">
                                            <input type="radio" class="btn-check" name="view-btn-radio" data-view="grid" id="gridView" checked autocomplete="off" />
                                            <label class="btn btn-outline-primary p-50 btn-sm" for="gridView">
                                                <i data-feather="grid"></i>
                                            </label>
                                            <input type="radio" class="btn-check" name="view-btn-radio" data-view="list" id="listView" autocomplete="off" />
                                            <label class="btn btn-outline-primary p-50 btn-sm" for="listView">
                                                <i data-feather="list"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- search area ends here -->

                                <div class="file-manager-content-body">

                                    <!-- Files Container Starts -->
                                    <div class="view-container">
                                        <h6 class="files-section-title mt-2 mb-75">Documentos llenados</h6>
                                        @foreach ($info_documentos as $item)
                                            <div class="card file-manager-item file">
                                                
                                                <div class="card-img-top file-logo-wrapper">
                                                    
                                                    @if ($item->estado ==2)
                                                    <a type="button" 
                                                        class="btn btn-secundary round waves-effect btn-sm">
                                                        <i data-feather="eye" class="align-middle me-50"></i>
                                                        <span class="align-middle">Editando...</span>
                                                    </a> 
                                                    @else
                                                    <a href="{{route('cambiardoc',[$item->id,$item->id_user])}}" type="button" 
                                                        class="btn btn-primary round waves-effect btn-sm">
                                                        <i data-feather="eye" class="align-middle me-50"></i>
                                                        <span class="align-middle">Editar</span>
                                                    </a> 
                                                    @endif

                                                    <a href="{{asset('images-cer/'.$item->ruta)}}" target="_blank">
                                                    <div class="d-flex align-items-center justify-content-center w-100">
                                                        <img src="{{asset('app-assets/images/icons/pdf.png')}}" alt="file-icon" height="35" />
                                                    </div>
                                                </a>
                                                </div>
                                                <div class="card-body">
                                                    <a href="{{asset('images-cer/'.$item->ruta)}}" target="_blank">
                                                    <div class="content-wrapper">

                                                        <p class="card-text file-name mb-0">
                                                            @if ($item->tipo == 1)
                                                                Ficha de datos del trabajador
                                                            @endif
                                                            @if ($item->tipo == 2)
                                                                Declaración jurada de datos y domicilio fiscal
                                                            @endif
                                                            @if ($item->tipo == 3)
                                                                Declaración jurada
                                                            @endif
                                                            @if ($item->tipo == 4)
                                                                Declaración jurada para el sistema previsional de pensión
                                                            @endif
                                                            @if ($item->tipo == 5)
                                                                Compromiso de no suplantación de identidad
                                                            @endif
                                                            @if ($item->tipo == 6)
                                                                Autorización de acceso a equipos propios
                                                            @endif
                                                        </p>
                                                        <p class="card-text file-date">{{$item->created_at}}</p>
                                                    </div>
                                                </a>
                                                    <small class="file-accessed text-muted">Creado el {{$item->created_at}}</small>
                                                </div>

                                            </div>
                                        @endforeach

                                        <div class="d-none flex-grow-1 align-items-center no-result mb-3">
                                            <i data-feather="alert-circle" class="me-50"></i>
                                            No Results
                                        </div>
                                    </div>
                                    <!-- /Files Container Ends -->
                                </div>
                            </div>
                            <!-- file manager app content ends -->



                            

                            <!-- Create New Folder Modal Starts-->
                            <div class="modal fade" id="new-folder-modal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">New Folder</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="text" class="form-control" value="New folder" placeholder="Untitled folder" />
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary me-1" data-bs-dismiss="modal">Create</button>
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Create New Folder Modal Ends -->

                        </div>
                    </div>
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


