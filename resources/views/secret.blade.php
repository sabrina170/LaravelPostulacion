
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
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="py-5 md:py-0">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="../resources/images/logo.svg">
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
                    <img alt="Midone - HTML Admin Template" class="logo__image w-6" src="../resources/images/logo.svg">
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
                        <img alt="Midone - HTML Admin Template" src="../resources/images/profile-13.jpg">
                    </div>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                            <li class="p-2">
                                <div class="font-medium">Kevin Spacey</div>
                                <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">DevOps Engineer</div>
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
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-dashboard-overview-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dashboard-overview-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dashboard-overview-3.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 3 </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 4 </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <div class="flex items-center mt-8">
                    <h2 class="intro-y text-lg font-medium mr-auto">
                       Imformación
                    </h2>
                </div>
                <!-- BEGIN: Wizard Layout -->
                <div class="intro-y box py-10 sm:py-20 mt-5">
                    <div class="flex justify-center">
                        <button class="intro-y w-10 h-10 rounded-full btn btn-primary mx-2">1</button>
                        {{-- <button class="intro-y w-10 h-10 rounded-full btn bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400 text-slate-500 mx-2">2</button>
                        <button class="intro-y w-10 h-10 rounded-full btn bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400 text-slate-500 mx-2">3</button> --}}
                    </div>
                    <div class="px-5 mt-10">
                        <div class="font-medium text-center text-lg">Setup Your Account</div>
                        <div class="text-slate-500 text-center mt-2">To start off, please enter your username, email address and password.</div>
                    </div>
                    <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">
                        <div class="font-medium text-base">Profile Settings</div>
                        <div>
                        <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-1" class="form-label">Nombre</label>
                                <input id="input-wizard-1" type="text" class="form-control" placeholder="nombres">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-2" class="form-label">Apellido</label>
                                <input id="input-wizard-2" type="text" class="form-control" placeholder="apellidos">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-2" class="form-label">Tipo Documento</label>
                                <select id="input-wizard-6" class="form-select">
                                    <option value="dni">DNI</option>
                                    <option value="carnet_extranjeria">Carnet de extrangeria</option>
                                </select> </div>
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-3" class="form-label">Numero</label>
                                <input id="input-wizard-4" type="text" class="form-control" placeholder="">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-6" class="form-label">Fecha Nacimiento</label>
                                <input id="input-wizard-5" type="date" class="form-control" placeholder="Job, Work, Documentation">

                            </div>
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-4" class="form-label">Pais</label>
                                <select id="input-wizard-6" class="form-select">
                                    <option value="Perú">Perú</option>
                                    <option value="España">España</option>
                                </select> </div>
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-5" class="form-label">Departamento</label>
                                <select id="input-wizard-6" class="form-select">
                                    <option value="Lima">Lima</option>
                                    <option value="Piura">Piura</option>
                                    <option value="Chiclayo">Chiclayo</option>
                                    <option value="Loreto">Loreto</option>
                                </select>
                             </div>
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-6" class="form-label">Provincia</label>
                                <select id="input-wizard-6" class="form-select">
                                    <option value="Lima 1">Lima 1</option>
                                    <option value="Lima 2">Lima 2</option>
                                    <option value="Lima 3">Lima 3</option>
                                </select>
                            </div>
                            
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-1" class="form-label">Sexo</label>
                                <select id="input-wizard-6" class="form-select">
                                    <option value="Femenino">Femenino</option>
                                    <option value="Masculino">Masculino</option>
                                </select>
                             </div>
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-2" class="form-label">Email</label>
                                <input id="input-wizard-2" type="email" class="form-control" placeholder="apellidos">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-2" class="form-label">Distrito</label>
                                <select id="input-wizard-6" class="form-select">
                                    <option value="Distrito 1">Distrito 1</option>
                                    <option value="Distrito 2">Distrito 2</option>
                                </select>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-3" class="form-label">Numero</label>
                                <input id="input-wizard-4" type="text" class="form-control" placeholder="">
                            </div>
                            <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                                {{-- <button class="btn btn-secondary w-24">Previous</button> --}}
                                <button type="submit" class="btn btn-primary w-24 ml-2">Enviar</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- END: Wizard Layout -->
            </div>
            <!-- END: Content -->
        </div>

 @extends('layouts.footer')
