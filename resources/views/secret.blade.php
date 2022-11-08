
 @extends('layouts.head')
<style type="text/css">

	#startStopBtn{
		display:inline-block;
		margin:0 auto;
		color:#6060AA;
		background-color:rgba(0,0,0,0);
		border:0.15em solid #6060FF;
		border-radius:0.3em;
		transition:all 0.3s;
		box-sizing:border-box;
		width:8em; height:3em;
		line-height:2.7em;
		cursor:pointer;
		box-shadow: 0 0 0 rgba(0,0,0,0.1), inset 0 0 0 rgba(0,0,0,0.1);
	}
	#startStopBtn:hover{
		box-shadow: 0 0 2em rgba(0,0,0,0.1), inset 0 0 1em rgba(0,0,0,0.1);
	}
	#startStopBtn.running{
		background-color:#FF3030;
		border-color:#FF6060;
		color:#FFFFFF;
	}
	#startStopBtn:before{
		content:"Start";
	}
	#startStopBtn.running:before{
		content:"Abort";
	}
	#test{
		margin-top:2em;
		margin-bottom:12em;
	}
	div.testArea{
		display:inline-block;
		width:14em;
		height:9em;
		position:relative;
		box-sizing:border-box;
	}
	div.testName{
		position:absolute;
		top:0.1em; left:0;
		width:100%;
		font-size:1.4em;
		z-index:9;
	}
	div.meterText{
		position:absolute;
		bottom:1.5em; left:0;
		width:100%;
		font-size:2.5em;
		z-index:9;
	}
	#dlText{
		color:#6060AA;
	}
	#ulText{
		color:#309030;
	}
	#pingText,#jitText{
		color:#AA6060;
	}
	div.meterText:empty:before{
		color:#505050 !important;
		content:"0.00";
	}
	div.unit{
		position:absolute;
		bottom:2em; left:0;
		width:100%;
		z-index:9;
	}
	div.testGroup{
		display:inline-block;
	}
	@media all and (max-width:65em){
		body{
			font-size:1.5vw;
		}
	}
	@media all and (max-width:40em){
		body{
			font-size:0.8em;
		}
		div.testGroup{
			display:block;
			margin: 0 auto;
		}
	}
	#progressBar{
		width:90%;
		height:0.3em;
		background-color:#EEEEEE;
		position:relative;
		display:block;
		margin:0 auto;
		margin-bottom:2em;
	}
	#progress{
		position:absolute;
		top:0; left:0;
		height:100%;
		width:0%;
		transition: width 2s;
		background-color:#90BBFF;
	}

    </style>

 @section('content')

 <div class="card br-16">
    <div class="meetup-img-wrapper rounded-top text-center">
        <img class="card-img-top br-16" src="{{asset('app-assets/images/portada2.jpg')}}" alt="Card image cap" style="object-fit:cover;" height="270">
    </div>
</div>
                {{-- veificar estados --}}
                {{-- Fin de verificar estados --}}
                <!-- BEGIN: Wizard Layout -->



                <div class="card-body p-0">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item mt-8">
                            <button type="button"
                            class="btn btn-lg btn-outline-info waves-effect"
                            id="homeIcon-tab"
                            data-bs-toggle="tab" href="#homeIcon"
                            aria-controls="home"
                            role="tab"
                            {{$estado=Auth::user()->estado}}
                            @if ($estado==1)
                            class="btn btn-lg btn-outline-info waves-effect active"
                            @else
                            class="btn btn-lg btn-outline-info waves-effect"
                            disabled
                            @endif
                            >
                                <span>Datos personales {{Auth::user()->estado}}</span>
                            </button>
                        </li>
                        <li class="nav-item pl-16 pl-sm-0 mt-8">
                            <button type="button"
                            id="homeIcon-tab"
                            id="profileIcon-tab"
                            data-bs-toggle="tab"
                            href="#profileIcon"
                             aria-controls="profile" role="tab"
                              {{$estado=Auth::user()->estado}}
                            @if ($estado==2)
                            class="btn btn-lg btn-outline-info waves-effect active"
                            @else
                            class="btn btn-lg btn-outline-info waves-effect"
                            disabled
                            @endif>
                                <span>Test de velocidad</span>
                            </button>
                     </li>

                    </ul>
                    <div class="tab-content">
                        @if ($estado==1)
                        <div class="tab-pane active" id="homeIcon" aria-labelledby="homeIcon-tab" role="tabpanel">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title font-weight-bold text-pri font-20">INFORMACIÓN PERSONAL</h4>
                                    <form action="{{route('info-store')}}" method="post">
                                        @csrf
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="input-wizard-1" class="form-label">Nombres</label>
                                        <input id="input-wizard-1" type="text" class="form-control" name="nombres" value="{{ Auth::user()->name}}" readonly>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="input-wizard-2" class="form-label">Apellido Paterno</label>
                                        <input id="input-wizard-2" type="text" class="form-control" name="apellido_ma" value="{{ Auth::user()->apellido_pa}}" readonly>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="input-wizard-2" class="form-label">Apellido Materno</label>
                                        <input id="input-wizard-2" type="text" class="form-control" name="apellido_pa" value="{{ Auth::user()->apellido_ma}}" readonly>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="input-wizard-2" class="form-label">Tipo Documento</label>
                                        <select id="input-wizard-6" class="form-select" name="tipo_documento">
                                            <option value="DNI">DNI</option>
                                            <option value="CE">Carnet de extrangeria</option>
                                        </select> </div>
                                    <div class="col-lg-4">
                                        <label for="input-wizard-3" class="form-label">Numero</label>
                                        <input id="input-wizard-4" type="number" class="form-control" name="numero_documento" value="{{ Auth::user()->dni}}" readonly>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="input-wizard-2" class="form-label">Email</label>
                                        <input id="input-wizard-2" type="email" class="form-control" name="correo" value="{{ Auth::user()->email}}" readonly>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="input-wizard-2" class="form-label">Telefono</label>
                                        <input id="input-wizard-2" type="number" class="form-control"  name="telefono" value="{{ Auth::user()->celular }}" readonly>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="input-wizard-6" class="form-label">Fecha Nacimiento</label>
                                        <input id="input-wizard-5" type="date" class="form-control" name="fecha_nacimiento" value="{{ old('fecha_nacimiento')}}">
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="input-wizard-4" class="form-label">Pais</label>
                                        <select id="selectUrgencia" class="form-select" name="pais" @selected(old('pais'))>
                                            <option value="Perú">Perú</option>
                                            <option value="España">España</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="input-wizard-5" class="form-label">Departamento</label>
                                        <select id="input-wizard-6" class="form-select" name="departamento" @selected(old('departamento'))>
                                            <option value="Lima">Lima</option>
                                            <option value="Piura">Piura</option>
                                            <option value="Chiclayo">Chiclayo</option>
                                            <option value="Loreto">Loreto</option>
                                        </select>
                                     </div>
                                    <div class="col-lg-4">
                                        <label for="input-wizard-6" class="form-label">Provincia</label>
                                        <select id="input-wizard-6" class="form-select" name="provincia" @selected(old('provincia'))>
                                            <option value="Lima 1">Lima 1</option>
                                            <option value="Lima 2">Lima 2</option>
                                            <option value="Lima 3">Lima 3</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="input-wizard-1" class="form-label">Sexo</label>
                                        <select id="input-wizard-6" class="form-select" name="sexo" @selected(old('sexo'))>
                                            <option value="Femenino">Femenino</option>
                                            <option value="Masculino">Masculino</option>
                                        </select>
                                     </div>

                                    <div class="col-lg-4">
                                        <label for="input-wizard-2" class="form-label">Distrito</label>
                                        <select id="input-wizard-6" class="form-select" name="distrito" @selected(old('distrito'))>
                                            <option value="Distrito 1">Distrito 1</option>
                                            <option value="Distrito 2">Distrito 2</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="input-wizard-3" class="form-label">Dirección</label>
                                        <input id="input-wizard-4" type="text" class="form-control" placeholder="" name="direccion" value="{{ old('direccion')}}">
                                    </div>

                                    <div class="col-lg-4">
                                    {{-- input que vendran por defecto --}}
                                    <label for="input-wizard-2" class="form-label">id</label>
                                    <input id="input-wizard-2" type="number" class="form-control"  name="user_id" value="{{ Auth::user()->id }}" readonly>
                                    </div>

                                    {{-- DATOS DE ESTUDIOS --}}
                                    <div class="col-lg-12 mt-24 mb-24 font-weight-bold text-pri font-20"><strong>ESTUDIOS</strong></div>

                                    <div class="col-lg-4">
                                        <label for="input-wizard-2" class="form-label">Grado de Instrucción</label>
                                        <select id="input-wizard-6" class="form-select" name="grado">
                                            <option value="Titulado">Titulado</option>
                                            <option value="Egresado">Egresado</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="input-wizard-1" class="form-label">Nombre de Institución Educativa</label>
                                        <input id="input-wizard-1" type="text" class="form-control"  placeholder="nombreie" name="nombre_ie" value="{{ old('nombre_ie')}}">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="input-wizard-2" class="form-label">¿Estudia actualmente?</label>
                                        <input id="input-wizard-2" type="text" class="form-control" placeholder="estudia" name="estudia" value="{{ old('estudia')}}">
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="input-wizard-3" class="form-label">Horario de estudios</label>
                                        <input id="input-wizard-4" type="text" class="form-control" placeholder="" name="horario" value="{{ old('horario')}}">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="input-wizard-6" class="form-label">Disponibilidad</label>
                                        <input id="input-wizard-5" type="text" class="form-control" name="disponibilidad" value="{{ old('disponibilidad')}}">

                                    </div>
                                 {{-- DATOS DE ESTUDIOS --}}

                                 <div class="col-lg-12 mt-24 mb-24 font-weight-bold text-pri font-20"><strong>EXPERIENCIA LABORAL</strong></div>

                                 <div class="col-lg-4">
                                     <label for="input-wizard-2" class="form-label">¿Has laborado en call center?</label>
                                     <select id="input-wizard-6" class="form-select" name="callcenter">
                                         <option value="Si">Si</option>
                                         <option value="No">No</option>
                                     </select>
                                 </div>
                                 <div class="col-lg-4">
                                     <label for="input-wizard-1" class="form-label">Nombre de empresa</label>
                                     <input id="input-wizard-1" type="text" class="form-control"  placeholder="empresa" name="empresa" value="{{ old('empresa')}}">
                                 </div>
                                 <div class="col-lg-4">
                                     <label for="input-wizard-2" class="form-label">Puesto experiencia</label>
                                     <input id="input-wizard-2" type="text" class="form-control" placeholder="puesto" name="puesto" value="{{ old('puesto')}}">
                                 </div>

                                 <div class="col-lg-4">
                                     <label for="input-wizard-3" class="form-label">Tiempo (meses)</label>
                                     <input id="input-wizard-4" type="text" class="form-control" placeholder="" name="tiempo" value="{{ old('tiempo')}}">
                                 </div>
                                 <div class="col-lg-4">
                                    <label for="input-wizard-2" class="form-label">Tipo experiencia</label>
                                    <select id="input-wizard-6" class="form-select" name="tipo_expe">
                                        <option value="Ventas call center" selected>Ventas call center</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                 <div class="col-lg-4">
                                     <label for="input-wizard-6" class="form-label">Trabajó en Konecta</label>
                                     <select id="input-wizard-6" class="form-select" name="konecta">
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>
                                    </select>
                                 </div>

                                    {{-- fin de los inputs ocultos --}}
                                    <div class="col-lg-12 d-flex justify-content-center pt-24">
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
                            </div>

                        </div>
                        @endif
                        @if ($estado==2)
                        <div class="tab-pane active" id="profileIcon" aria-labelledby="profileIcon-tab" role="tabpanel">
                            <div style="min-height:360px;">
                                <div style="width:100%;height:0;padding-bottom:50%;position:relative;">
                                    <iframe style="border:none;position:absolute;top:0;left:0;width:100
                                    %;height:100%;min-height:360px;border:none;overflow:hidden !important;"
                                     src="//openspeedtest.com/Get-widget.php"></iframe>
                                    </div>
                                </div>
                        </div>
                        @endif
                    </div>
                </div>



 @endsection


