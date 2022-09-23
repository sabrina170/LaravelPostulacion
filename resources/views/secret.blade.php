
 @extends('layouts.head')

 @section('content')

 
                <div class="flex items-center mt-8">
                    <h2 class="intro-y text-lg font-medium mr-auto">
                       Imformación
                    </h2>
                </div>
                <!-- BEGIN: Wizard Layout -->
                <div class="intro-y box py-10 sm:py-10 mt-5">
                    <div id="boxed-tab" class="p-5">
                        <div class="preview">
                            <ul class="nav nav-boxed-tabs" role="tablist">
                                <li id="example-3-tab" class="nav-item flex-1" role="presentation">
                                    <button
                                        class="nav-link w-full py-2 active"
                                        data-tw-toggle="pill"
                                        data-tw-target="#example-tab-3"
                                        type="button"
                                        role="tab"
                                        aria-controls="example-tab-3"
                                        aria-selected="true"
                                    >
                                    Datos personales
                                    </button>
                                </li>
                                <li id="example-4-tab" class="nav-item flex-1" role="presentation">
                                    <button
                                        class="nav-link w-full py-2"
                                        data-tw-toggle="pill"
                                        data-tw-target="#example-tab-4"
                                        type="button"
                                        role="tab"
                                        aria-controls="example-tab-4"
                                        aria-selected="false"
                                    >
                                    Test de velocidad
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content mt-5">
                                <div id="example-tab-3" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="example-3-tab">
                                    <div class="px-5 sm:px-10  pt-10 border-t border-slate-200/60 dark:border-darkmode-400">
                                        <div class="font-medium text-base">Profile Settings</div>
                                        <div>
                                            <form action="{{route('info-store')}}" method="post">
                                                @csrf
                                        <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                                            <div class="intro-y col-span-12 sm:col-span-3">
                                                <label for="input-wizard-1" class="form-label">Nombres</label>
                                                <input id="input-wizard-1" type="text" class="form-control"  placeholder="nombres" name="nombre" value="{{ old('nombre')}}">
                                            </div>
                                            <div class="intro-y col-span-12 sm:col-span-3">
                                                <label for="input-wizard-2" class="form-label">Apellidos</label>
                                                <input id="input-wizard-2" type="text" class="form-control" placeholder="apellidos" name="apellido" value="{{ old('apellido')}}">
                                            </div>
                                            <div class="intro-y col-span-12 sm:col-span-3">
                                                <label for="input-wizard-2" class="form-label">Tipo Documento</label>
                                                <select id="input-wizard-6" class="form-select" name="tipo_documento">
                                                    <option value="DNI">DNI</option>
                                                    <option value="CE">Carnet de extrangeria</option>
                                                </select> </div>
                                            <div class="intro-y col-span-12 sm:col-span-3">
                                                <label for="input-wizard-3" class="form-label">Numero</label>
                                                <input id="input-wizard-4" type="text" class="form-control" placeholder="" name="numero_documento" value="{{ old('numero_documento')}}">
                                            </div>
                                            <div class="intro-y col-span-12 sm:col-span-3">
                                                <label for="input-wizard-6" class="form-label">Fecha Nacimiento</label>
                                                <input id="input-wizard-5" type="date" class="form-control" name="fecha_nacimiento" value="{{ old('fecha_nacimiento')}}">
                
                                            </div>
                                            <div class="intro-y col-span-12 sm:col-span-3">
                                                <label for="input-wizard-4" class="form-label">Pais</label>
                                                <select id="selectUrgencia" class="form-select" name="pais" @selected(old('pais'))>
                                                    <option value="Perú">Perú</option>
                                                    <option value="España">España</option>
                                                </select>
                                            </div>
                                            <div class="intro-y col-span-12 sm:col-span-3">
                                                <label for="input-wizard-5" class="form-label">Departamento</label>
                                                <select id="input-wizard-6" class="form-select" name="departamento" @selected(old('departamento'))>
                                                    <option value="Lima">Lima</option>
                                                    <option value="Piura">Piura</option>
                                                    <option value="Chiclayo">Chiclayo</option>
                                                    <option value="Loreto">Loreto</option>
                                                </select>
                                             </div>
                                            <div class="intro-y col-span-12 sm:col-span-3">
                                                <label for="input-wizard-6" class="form-label">Provincia</label>
                                                <select id="input-wizard-6" class="form-select" name="provincia" @selected(old('provincia'))>
                                                    <option value="Lima 1">Lima 1</option>
                                                    <option value="Lima 2">Lima 2</option>
                                                    <option value="Lima 3">Lima 3</option>
                                                </select>
                                            </div>
                
                                            <div class="intro-y col-span-12 sm:col-span-3">
                                                <label for="input-wizard-1" class="form-label">Sexo</label>
                                                <select id="input-wizard-6" class="form-select" name="sexo" @selected(old('sexo'))>
                                                    <option value="Femenino">Femenino</option>
                                                    <option value="Masculino">Masculino</option>
                                                </select>
                                             </div>
                                            <div class="intro-y col-span-12 sm:col-span-3">
                                                <label for="input-wizard-2" class="form-label">Email</label>
                                                <input id="input-wizard-2" type="email" class="form-control" placeholder="ejemplo@gmail.com" name="email" value="{{ old('email')}}">
                                            </div>
                                            <div class="intro-y col-span-12 sm:col-span-3">
                                                <label for="input-wizard-2" class="form-label">Distrito</label>
                                                <select id="input-wizard-6" class="form-select" name="distrito" @selected(old('distrito'))>
                                                    <option value="Distrito 1">Distrito 1</option>
                                                    <option value="Distrito 2">Distrito 2</option>
                                                </select>
                                            </div>
                                            <div class="intro-y col-span-12 sm:col-span-3">
                                                <label for="input-wizard-3" class="form-label">Dirección</label>
                                                <input id="input-wizard-4" type="text" class="form-control" placeholder="" name="direccion" value="{{ old('direccion')}}">
                                            </div>
                                            <div class="intro-y col-span-12 sm:col-span-3">
                                                <label for="input-wizard-2" class="form-label">Telefono</label>
                                                <input id="input-wizard-2" type="number" class="form-control"  name="telefono">
                                            </div>
                                            <div class="intro-y col-span-12 sm:col-span-3">
                                            {{-- input que vendran por defecto --}}
                                            <label for="input-wizard-2" class="form-label">ku</label>
                                            <input id="input-wizard-2" type="text" class="form-control"  name="ku" value="{{ Auth::user()->ku }}" readonly>
                                            </div>
                                            {{-- fin de los inputs ocultos --}}
                                            <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                                                {{-- <button class="btn btn-secondary w-24">Previous</button> --}}
                                                <button type="submit" class="btn btn-primary w-24 ml-2">Enviar</button>
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
                                <div id="example-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="example-4-tab">
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        </div>
                    </div>
                </div>
               
 @endsection
