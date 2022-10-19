@extends('layouts.header-link')
<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/authentication.css')}}">
<!-- END: Page CSS-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">

                {{-- <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                    Vertically Centered
                </button> --}}
                <div class="modal fade show" id="exampleModalCenter" style="display: block;" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">

                            <div class="modal-body p-0">

                                <div class="">
                                    <div class="row ">
                                        <div class="col-6 align-items-center">
                                            <div class="w-100 h-100 d-lg-flex align-items-center justify-content-center px-0" >
                                                <img class="img-fluid"  src="{{asset('app-assets/images/fotologin2.jpg')}}" alt="Login V2"/>
                                            </div>
                                            </div>

                                        <div class="col-lg-6 align-items-center p-3">
                                                <div class="d-lg-flex align-items-center justify-content-center">
                                                    <img class="img-fluid"  src="{{asset('app-assets/images/logo.jpg')}}" width="60%" alt="Profile Picture">
                                                </div>

                                            <form class="form form-vertical" method="POST" action="{{route('inicia-sesion')}}">
                                                @csrf
                                                <div class="row">

                                                    <div class="col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="first-name-icon">Correo electrónico*</label>
                                                            <div class="input-group input-group-merge">
                                                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                                                                <input type="email" id="first-name-icon" class="form-control" name="email" placeholder="Ingrese su correo electrónico">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="first-name-icon">Contraseña</label>
                                                            <div class="input-group input-group-merge">
                                                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                                                                <input type="text" id="first-name-icon" class="form-control" name="password" placeholder="Ingrese su contraseña">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-grid col-lg-12 col-md-12 mb-1">
                                                        <button type="submit" class="buts-prim btn waves-effect waves-float waves-light">Ingresar</button>
                                                    </div>
                                                    <div class="d-grid col-lg-12 col-md-12 mb-1">
                                                        <a href="{{ route('registro')}}" type="button" class="buts-sec btn waves-effect waves-float waves-light">Registrarse</a>
                                                    </div>
                                                </div>
                                            </form>
                                          </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @extends('layouts.footer')
