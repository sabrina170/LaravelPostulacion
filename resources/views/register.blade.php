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
                                        <div class="col-lg-6 align-items-center p-3">
                                            <h1 class="text-center texts-prim"><strong>Deseas registrarte?</strong></h1>
                                            <h5 class="text-center">Ingrese sus datos a continuación para completar
                                                el registro :</h5>
                                            <form class="form form-vertical" method="POST" action="{{route('validar-registro')}}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="basicSelect">Tipo de doc.</label>
                                                            <select class="form-select" id="basicSelect">
                                                                <option>Dni</option>
                                                                <option>CE</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="basicSelect">Nº de documento</label>
                                                            <div class="input-group input-group-merge">
                                                            <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                                                            <input type="number" id="first-name-icon" class="form-control" name="fname-icon" placeholder="85214528">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="first-name-icon">Apellido Materno</label>
                                                            <div class="input-group input-group-merge">
                                                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                                                                <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Apellido Materno">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="first-name-icon">Nombres completos</label>
                                                            <div class="input-group input-group-merge">
                                                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                                                                <input type="text" id="first-name-icon" class="form-control" name="name" placeholder="Ingrese su nombre">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="email-id-icon">Email</label>
                                                            <div class="input-group input-group-merge">
                                                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></span>
                                                                <input type="email" id="email-id-icon" class="form-control" name="email" placeholder="Email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="contact-info-icon">Número Teléfono</label>
                                                            <div class="input-group input-group-merge">
                                                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smartphone"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg></span>
                                                                <input type="number" id="contact-info-icon" class="form-control" name="contact-icon" placeholder="Número Teléfono">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="password-icon">Password</label>
                                                            <div class="input-group input-group-merge"> --}}
                                                                {{-- <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></span> --}}
                                                                <input type="hidden" id="password-icon" value="{{ date("Ymd-His")}}" class="form-control" name="password" placeholder="Password">
                                                            {{-- </div>
                                                        </div>
                                                    </div> --}}
                                                    <div class="col-12">
                                                        <div class="mb-1">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck4">
                                                                <label class="form-check-label" for="customCheck4">Remember me</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-grid col-lg-12 col-md-12 mb-1">
                                                        <button type="submit" class="buts-prim btn waves-effect waves-float waves-light">Registrarse</button>
                                                    </div>
                                                    <div class="d-grid col-lg-12 col-md-12 mb-1">
                                                        <a href="{{ route('login')}}" type="button" class="buts-sec btn waves-effect waves-float waves-light">Ingresar</a>
                                                    </div>
                                                </div>
                                            </form>
                                          </div>
                                        {{-- <div class="d-flex col-lg-6 align-items-center auth-bg px-2 p-lg-5">
                                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                                <h2 class="card-title fw-bold mb-1">Welcome to Vuexy! 👋</h2>
                                                <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>
                                                <form class="auth-login-form mt-2" action="{{route('inicia-sesion')}}" method="POST">
                                                        @csrf
                                                    <div class="mb-1">
                                                        <label class="form-label" for="login-email">Email</label>
                                                        <input class="form-control" id="login-email" type="text"  name="email" placeholder="john@example.com" aria-describedby="login-email" autofocus="" tabindex="1" />
                                                    </div>
                                                    <div class="mb-1">
                                                        <div class="d-flex justify-content-between">
                                                            <label class="form-label" for="login-password">Password</label><a href="auth-forgot-password-cover.html"><small>Forgot Password?</small></a>
                                                        </div>
                                                        <div class="input-group input-group-merge form-password-toggle">
                                                            <input class="form-control form-control-merge" id="login-password" type="password" name="password" placeholder="············" aria-describedby="login-password" tabindex="2" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="mb-1">
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="remember-me" type="checkbox" tabindex="3" />
                                                            <label class="form-check-label" for="remember-me"> Remember Me</label>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary w-100" tabindex="4">Sign in</button>
                                                </form>
                                                <p class="text-center mt-2"><span>New on our platform?</span><a href="{{route('registro')}}"><span>&nbsp;Create an account</span></a></p>
                                                <div class="divider my-2">
                                                    <div class="divider-text">or</div>
                                                </div>
                                                <div class="auth-footer-btn d-flex justify-content-center"><a class="btn btn-facebook" href="#"><i data-feather="facebook"></i></a><a class="btn btn-twitter white" href="#"><i data-feather="twitter"></i></a><a class="btn btn-google" href="#"><i data-feather="mail"></i></a><a class="btn btn-github" href="#"><i data-feather="github"></i></a></div>
                                            </div>
                                        </div> --}}
                                        <div class="col-6 align-items-center">
                                            <div class="w-100 h-100 d-lg-flex align-items-center justify-content-center px-0" >
                                                <img class="img-fluid"  src="{{asset('app-assets/images/fotologin.jpg')}}" alt="Login V2"/>
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
    </div>
    @extends('layouts.footer')
