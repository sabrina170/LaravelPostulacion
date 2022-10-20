<!-- BEGIN: Body-->
@extends('layouts.header-link')

@section('menu')
<body class="bg-body vertical-layout vertical-menu-modern  navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="" >

<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar  align-items-center navbar-shadow navbar-brand-center bgs-nav border-0 sticky-top" id="header-superior" data-nav="brand-center">
    <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav">
            <li class="nav-item pl-24">
                <a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template/index.html">
                <img class="img-fluid" src="{{asset('app-assets/images/logo/logo.png')}}" alt="avatar" height="60%" width="60%">
                </a>
            </li>
        </ul>
    </div>
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
            </ul>
            <!--
            <ul class="nav navbar-nav bookmark-icons">
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email"><i class="ficon" data-feather="mail"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Calendar"><i class="ficon" data-feather="calendar"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Todo"><i class="ficon" data-feather="check-square"></i></a></li>
            </ul>-->
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">


            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder text-white">{{ Auth::user()->name }}</span><span class="user-status">Postulante</span></div><span class="avatar"><img class="round" src="{{asset('app-assets//images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item" href="page-profile.html"><i class="me-50" data-feather="user"></i> Profile</a><a class="dropdown-item" href="app-email.html"><i class="me-50" data-feather="mail"></i> Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="me-50" data-feather="check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="me-50" data-feather="message-square"></i> Chats</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="page-account-settings-account.html"><i class="me-50" data-feather="settings"></i> Settings</a><a class="dropdown-item" href="page-pricing.html"><i class="me-50" data-feather="credit-card"></i> Pricing</a><a class="dropdown-item" href="page-faq.html"><i class="me-50" data-feather="help-circle"></i> FAQ</a><a class="dropdown-item" href="auth-login-cover.html"><i class="me-50" data-feather="power"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<!-- END HEADER -->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow mt-20 ml-8 br-16 cnt-shw" data-scroll-to-active="true">
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class=" navigation-header"><h1 class="text-pri"><strong>ETAPAS</strong></h1><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="{{route('privada')}}">
                        <div class="d-flex flex-row">
                            <div class="font-36 pr-8 font-weight-bold">
                                1
                            </div>
                            <div class="my-auto">
                                <h5 class="fw-bolder mb-0 texts-prim">Datos personales</h5>
                                <p class="card-text font-small-3 mb-0 texts-prim">y Test de velocidad</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="{{route('entrevista.index')}}">
                        <div class="d-flex flex-row">
                            <div class="font-36 pr-8 font-weight-bold">
                                2
                            </div>
                            <div class="my-auto">
                                <h5 class="fw-bolder mb-0">Entrevista</h5>
                                <p class="card-text font-small-3 mb-0">Personal</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="{{route('documentos.index')}}">
                        <div class="d-flex flex-row">
                            <div class="font-36 pr-8 font-weight-bold">
                                3
                            </div>
                            <div class="my-auto">
                                <h5 class="fw-bolder mb-0">Llenado de </h5>
                                <p class="card-text font-small-3 mb-0">documentos</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="{{route('finalizado')}}">
                        <div class="d-flex flex-row">
                            <div class="font-36 pr-8 font-weight-bold">
                                4
                            </div>
                            <div class="my-auto">
                                <h5 class="fw-bolder mb-0">Proceso</h5>
                                <p class="card-text font-small-3 mb-0">Finalizado</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="app-kanban.html">
                        <i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="Kanban">Mis documentos</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content pt-20">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">

                @yield('content')
            </div>
        </div>
    </div>
    <!-- END: Content-->

    @endsection

