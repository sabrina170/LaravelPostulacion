
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
                       Ver Información de {{$info->nombre}} {{$info->apellido}}
                    </h2>
                </div>
                <!-- BEGIN: Wizard Layout -->
                <div class="intro-y box sm:py-20 mt-5">
                    <div class="px-5 sm:px-10  pt-10 border-t border-slate-200/60 dark:border-darkmode-400">
                        <div class="font-medium text-base">Editar registro {{$info->id}}</div>
                        <div>
                            <form action="{{route('info.update',$info)}}" method="post">
                                @method('put')
                                @csrf
                        <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-1" class="form-label">Nombres</label>
                                <input id="input-wizard-1" type="text" class="form-control"  placeholder="nombres" name="nombre" value="{{ $info->nombre}}" disabled>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-2" class="form-label">Apellidos</label>
                                <input id="input-wizard-2" type="text" class="form-control" placeholder="apellidos" name="apellido" value="{{ $info->apellido}}" disabled>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-2" class="form-label">Tipo Documento</label>
                                <select id="input-wizard-6" class="form-select" name="tipo_documento" disabled>
                                    <option value="DNI">DNI</option>
                                    <option value="CE">Carnet de extrangeria</option>
                                </select> </div>
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-3" class="form-label">Numero</label>
                                <input id="input-wizard-4" type="text" class="form-control" placeholder="" name="numero_documento" value="{{ $info->numero_documento}}" disabled>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-6" class="form-label">Fecha Nacimiento</label>
                                <input id="input-wizard-5" type="date" class="form-control" name="fecha_nacimiento" value="{{ $info->fecha_nacimiento}}" disabled>

                            </div>
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-4" class="form-label">Pais</label>
                                <select id="selectUrgencia" class="form-select" name="pais"disabled >
                                    <option value="Perú">Perú</option>
                                    <option value="España">España</option>
                                </select>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-5" class="form-label">Departamento</label>
                                <select id="input-wizard-6" class="form-select" name="departamento"  disabled>
                                    <option value="Lima">Lima</option>
                                    <option value="Piura">Piura</option>
                                    <option value="Chiclayo">Chiclayo</option>
                                    <option value="Loreto">Loreto</option>
                                </select>
                             </div>
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-6" class="form-label">Provincia</label>
                                <select id="input-wizard-6" class="form-select" name="provincia" disabled>
                                    <option value="Lima 1">Lima 1</option>
                                    <option value="Lima 2">Lima 2</option>
                                    <option value="Lima 3">Lima 3</option>
                                </select>
                            </div>

                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-1" class="form-label">Sexo</label>
                                <select id="input-wizard-6" class="form-select" name="sexo" disabled>
                                    <option value="Femenino">Femenino</option>
                                    <option value="Masculino">Masculino</option>
                                </select>
                             </div>
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-2" class="form-label">Email</label>
                                <input id="input-wizard-2" type="email" class="form-control" placeholder="ejemplo@gmail.com" name="email" value="{{ $info->email}}" disabled>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-2" class="form-label">Distrito</label>
                                <select id="input-wizard-6" class="form-select" name="distrito" disabled>
                                    <option value="Distrito 1">Distrito 1</option>
                                    <option value="Distrito 2">Distrito 2</option>
                                </select>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-3" class="form-label">Dirección</label>
                                <input id="input-wizard-4" type="text" class="form-control" placeholder="" name="direccion" value="{{ $info->direccion}}" disabled>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-3">
                                <label for="input-wizard-2" class="form-label">Telefono</label>
                                <input id="input-wizard-2" type="number" class="form-control"  name="telefono" value="{{$info->telefono}}" disabled>
                            </div>
                            {{-- input que vendran por defecto --}}
                            <input id="input-wizard-2" type="hidden" class="form-control"  name="ku" value="123">
                            {{-- fin de los inputs ocultos --}}
                            <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                                {{-- <button class="btn btn-secondary w-24">Previous</button> --}}
                                <button type="submit" class="btn btn-secondary  w-24 ml-2">Actualizar</button>
                            </div>
                        </div>
                    </form>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        </div>
                    </div>
                </div>
                <!-- END: Wizard Layout -->
            </div>
            <!-- END: Content -->
        </div>


 @extends('layouts.footer')
