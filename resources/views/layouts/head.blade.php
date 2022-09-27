<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{asset('images/logo.svg')}}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Enigma admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Enigma Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <link href="{{ asset('fontawesome/css/all.css')}}" rel="stylesheet">
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="py-5 md:py-0">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="{{asset('images/logo.svg')}}">
                </a>
                <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>

        </div>
        <!-- END: Mobile Menu -->
        <!-- BEGIN: Top Bar -->
        <div class="top-bar-boxed h-[70px] md:h-[65px] z-[51] border-b border-white/[0.08] mt-12 md:mt-0 -mx-3 sm:-mx-8 md:-mx-0 px-3 md:border-b-0 relative md:fixed md:inset-x-0 md:top-0 sm:px-8 md:px-10 md:pt-10 md:bg-gradient-to-b md:from-slate-100 md:to-transparent dark:md:from-darkmode-700">
            <div class="h-full flex items-center">
                <!-- BEGIN: Logo -->
                <a href="" class="logo -intro-x hidden md:flex xl:w-[180px] block">
                    <img alt="Midone - HTML Admin Template" class="logo__image w-6" src="{{asset('images/logo.svg')}}">
                    <span class="logo__text text-white text-lg ml-3"> Enigma </span>
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="-intro-x h-[45px] mr-auto">
                    <ol class="breadcrumb breadcrumb-light">
                        {{-- <li class="breadcrumb-item"><a href="#">Application</a></li> --}}
                        <li class="breadcrumb-item active" aria-current="page">Proceso de postulación</li>
                    </ol>
                </nav>
                <!-- END: Breadcrumb -->


                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                        <img alt="Midone - HTML Admin Template" src="{{asset('images/profile-13.jpg')}}">
                    </div>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                            <li class="p-2">
                                <div class="font-medium">{{ Auth::user()->name }} </div>
                                <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">{{ Auth::user()->email }}</div>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                            </li>
                            {{-- <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                            </li> --}}
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="{{route('logout')}}" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
        </div>

        <!-- END: Top Bar -->
        <div class="flex overflow-hidden">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <ul>
                    <li>
                        <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                            <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                <img alt="Midone - HTML Admin Template" src="{{asset('images/profile-13.jpg')}}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <div class="text-slate-500 text-xs mt-0.5">Bienvenido(a)</div>
                                <div class="font-medium">{{ Auth::user()->name }}</div>
                             
                            </div> 
                        </div>
                    </li>
                    <li> <h1 class="text-lg font-medium truncate mr-5">
                        ETAPAS
                    </h1>
                </li>
                    <li>
                        <a href="side-menu-light-inbox.html" class="side-menu">
                            <div class="side-menu__icon"> <i class="fa-solid fa-1 fa-2x"></i></div>
                            {{-- <div class="side-menu__title"> Inbox </div> --}}
                            <div class="ml-4 mr-auto">
                                <div class="font-medium"> <strong> Datos personales </strong></div>
                                <div class="font-medium"><strong>y Test de velocidad </strong></div>
                            </div> 
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-file-manager.html" class="side-menu">
                            <div class="side-menu__icon"> <i class="fa-solid fa-2 fa-2x"></i> </div>
                            <div class="ml-4 mr-auto"> 
                                <div class="font-medium"> <strong> Entrevista </strong></div>
                                <div class="font-medium"><strong>Personal</strong></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-point-of-sale.html" class="side-menu">
                            <div class="side-menu__icon">  <i class="fa-solid fa-3 fa-2x"></i> </div>
                            <div class="ml-4 mr-auto">
                                <div class="font-medium"> <strong>Llenado de  </strong></div>
                                <div class="font-medium"><strong>documentos </strong></div>    
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-chat.html" class="side-menu">
                            <div class="side-menu__icon">  <i class="fa-solid fa-4 fa-2x"></i> </div>
                            <div class="ml-4 mr-auto"> 
                                <div class="font-medium"> <strong>Proceso </strong></div>
                                <div class="font-medium"><strong>Finalizado </strong></div>    
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                @yield('content')
            </div>
            <!-- END: Content -->
        </div>

        {{-- dddddddddddddddddddddddddddd --}}
    </div>
    <!-- BEGIN: JS Assets-->
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    {{-- <script  src="{{asset('js/speedtest.js')}}"></script> --}}
    {{-- <script  src="{{asset('js/speedtest_worker.js')}}"></script> --}}

   
   </body>
   </html>