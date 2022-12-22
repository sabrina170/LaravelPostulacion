@extends('layouts.header-link')
<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/authentication.css')}}">


    <link rel="shortcut icon" href="{{asset('landing/img/icons/favicon.ico')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('landing/plugins/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('landing/plugins/owl-carousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('landing/plugins/toastr/toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('landing/plugins/wow/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('landing/fonts/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('landing/fonts/fontawesome/css/brands.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('landing/fonts/fontawesome/css/solid.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('landing/fonts/opensans.css?v=1')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('landing/css/style.css?v=1')}}">

    <style>
        .nav-link{font-size: 12px !important;}
    </style>

<!-- END: Page CSS-->
<!-- BEGIN: Body-->



    @section('login')
    <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">


        <!-- BEGIN: Content-->
        <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">


<!-- LANDING -->

<div class="m-sticky">
    <header class="m-header">
        <p>MARCA EMPLEADORA</p>
    </header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand"><img src="{{asset('landing/img/icons/logo-b12.png')}}" alt="logo-b12"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarB12" aria-controls="navbarB12" aria-expanded="false" aria-label="Toggle navigation">
                <div class="c-button--menu">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarB12">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link link" href="#day">UN D&Iacute;A EN B12</a></li>
                    <li class="nav-item"><a class="nav-link link" href="#choose">¿POR QU&Eacute; ELEGIRNOS?</a></li>
                    <li class="nav-item"><a class="nav-link link" href="#about">CRECE CON NOSOTROS</a></li>
                    <li class="nav-item"><a class="nav-link link" href="#plus">B12 PLUS</a></li>
                    <li class="nav-item"><a class="nav-link link" href="#contact">CONTACTO</a></li>
                    <li class="nav-item"><a class="nav-link link" href="#"  data-bs-toggle="modal" data-bs-target="#modal-login">INGRESAR / REGISTRARSE</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<section id="home" class="m-section m-section--link">
    <div class="m-home--carousel">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img class="web" src="{{asset('landing/img/fondo/fondo1.jpg')}}" />
                <img class="mobile" src="{{asset('landing/img/fondo/fondo1-mobile.jpg')}}" />
            </div>
            <div class="item">
                <img class="web" src="{{asset('landing/img/fondo/fondo2.jpg')}}" />
                <img class="mobile" src="{{asset('landing/img/fondo/fondo2-mobile.jpg')}}" />
            </div>
            <div class="item">
                <img class="web" src="{{asset('landing/img/fondo/fondo3.jpg')}}" />
                <img class="mobile" src="{{asset('landing/img/fondo/fondo3-mobile.jpg')}}" />
            </div>
        </div>
        <div class="m-carouse__actions wow fadeInUp">
            <a href="https://prospectos.bedigital.pe/" target="_blank" class="m-button m-button--default">Trabaja con nosotros</a>
        </div>
    </div>
</section>
<section id="day" class="m-section m-section--link">
    <div class="m-container">
        <div class="m-title wow fadeInUp">
            <h2 class="blue">UN D&Iacute;A EN B12</h2>
            <p><strong>TESTIMONIOS.</strong> Nuestros colaboradores te cuentan lo que significa ser parte de la familia B12.</p>
        </div>
        <div class="m-videos--grid">
            <div class="m-video__item wow fadeInUp">
                <div class="m-item__image">
                    <video width="100%" poster="{{asset('landing/img/fondo/video-testimonio1.jpg')}}" controls>
                        <source src="{{asset('landing/videos/video-testimonio1.mp4')}}" type="video/mp4">
                    </video>
                </div>
                <div class="m-item__text">
                    <h2>"SOMOS UNA CULTURA &Aacute;GIL"</h2>
                    <p>Isabel Castillo</p>
                    <span>Jefa de reclutamiento y Selecci&oacute;n</span>
                </div>
            </div>
            <div class="m-video__item wow fadeInUp">
                <div class="m-item__image">
                    <video width="100%" poster="{{asset('landing/img/fondo/video-testimonio2.jpg')}}" controls>
                        <source src="{{asset('landing/videos/video-testimonio2.mp4')}}" type="video/mp4">
                    </video>
                </div>
                <div class="m-item__text">
                    <h2>"AQU&Iacute; ME VOLV&Iacute; 100% DIGITAL"</h2>
                    <p>Erika Panduro</p>
                    <span>Jefa de Calidad Movistar</span>
                </div>
            </div>
            <div class="m-video__item wow fadeInUp">
                <div class="m-item__image">
                    <video width="100%" poster="{{asset('landing/img/fondo/video-testimonio3.jpg')}}" controls>
                        <source src="{{asset('landing/videos/video-testimonio3.mp4')}}" type="video/mp4">
                    </video>
                </div>
                <div class="m-item__text">
                    <h2>"DESCUBR&Iacute; QUE SOY MULTISKILL"</h2>
                    <p>Ignacio Valderrama</p>
                    <span>Analista de Endomarketing</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="choose" class="m-section m-section--link m-bg--blue">
    <div class="m-container">
        <div class="m-choose">
            <div class="m-choose__content">
                <div class="m-choose__title wow fadeInLeft">
                    <h2>¿Por qu&eacute; <br> elegirnos?</h2>
                </div>
                <div class="m-choose__skills wow fadeInRight">
                    <div class="m-range">
                        <p>Digitales</p>
                        <input type="range" class="form-control-range" data-value="100" value="0">
                        <span><small class="number">100</small>%</span>
                    </div>
                    <div class="m-range">
                        <p>Mujeres</p>
                        <input type="range" class="form-control-range" data-value="40" value="0">
                        <span><small class="number">40</small>%</span>
                    </div>
                    <div class="m-range">
                        <p>Hombres</p>
                        <input type="range" class="form-control-range" data-value="50" value="0">
                        <span><small class="number">50</small>%</span>
                    </div>
                    <div class="m-range">
                        <p>LGTBI</p>
                        <input type="range" class="form-control-range" data-value="5" value="0">
                        <span><small class="number">5</small>%</span>
                    </div>
                    <div class="m-range">
                        <p>Lima</p>
                        <input type="range" class="form-control-range" data-value="50" value="0">
                        <span><small class="number">50</small>%</span>
                    </div>
                    <div class="m-range">
                        <p>Trujillo</p>
                        <input type="range" class="form-control-range" data-value="40" value="0">
                        <span><small class="number">40</small>%</span>
                    </div>
                    <div class="m-range">
                        <p>Extranjeros</p>
                        <input type="range" class="form-control-range" data-value="10" value="0">
                        <span><small class="number">10</small>%</span>
                    </div>
                    <div class="m-range">
                        <p>Trabajo Presencial</p>
                        <input type="range" class="form-control-range" data-value="70" value="0">
                        <span><small class="number">70</small>%</span>
                    </div>
                    <div class="m-range">
                        <p>Teletrabajo</p>
                        <input type="range" class="form-control-range" data-value="30" value="0">
                        <span><small class="number">30</small>%</span>
                    </div>
                </div>
            </div>
            <div class="m-choose__videos">
                <div class="m-video__item wow fadeInUp">
                    <video width="100%" poster="{{asset('landing/img/fondo/video-elegirnos1.jpg')}}" controls>
                        <source src="{{asset('landing/videos/video-elegirnos1.mp4')}}" type="video/mp4">
                    </video>
                    <h2>Be Digital</h2>
                    <p>Activismo social digital.</p>
                </div>
                <div class="m-video__item wow fadeInUp">
                    <video width="100%" poster="{{asset('landing/img/fondo/video-elegirnos2.jpg')}}" controls>
                        <source src="{{asset('landing/videos/video-elegirnos2.mp4')}}" type="video/mp4">
                    </video>
                    <h2>Happy Life </h2>
                    <p>Activismo social digital.</p>
                </div>
                <div class="m-video__item wow fadeInUp">
                    <video width="100%" poster="{{asset('landing/img/fondo/video-elegirnos3.jpg')}}" controls>
                        <source src="{{asset('landing/videos/video-elegirnos3.mp4')}}" type="video/mp4">
                    </video>
                    <h2>Match</h2>
                    <p>Clima 100% digital.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about" class="m-section m-section--link">
    <div class="m-container">
        <div class="m-title wow fadeInUp">
            <h2 class="blue">CRECE CON NOSOTROS</h2>
            <p><strong>QU&Eacute; TE OFRECEMOS.</strong> Te presentamos nuestros programas dise&ntilde;ados para hacer de tu experiencia en B12 la m&aacute;s enriquecedora.</p>
        </div>
        <div class="m-about--carousel wow fadeInUp">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="m-about__item">
                        <div class="m-about--grid">
                            <img src="{{asset('landing/img/fondo/instalaciones1.jpg')}}" />
                            <img src="{{asset('landing/img/fondo/instalaciones2.jpg')}}" />
                            <img src="{{asset('landing/img/fondo/instalaciones3.jpg')}}" />
                        </div>
                        <div class="m-about__content">
                            <div class="m-icon">
                                <img src="{{asset('landing/img/icons/icon-instalaciones.svg')}}" />
                            </div>
                            <div class="m-content">
                                <h2>Instalaciones</h2>
                                <p>Tanto en Trujillo como en Lima, contamos con espacios de trabajo modernos y seguros para que nuestros equipos se sientan cómodos y en familia. Nuestras oficinas cuentan con protocolos de prevención y manejo del Covid-19.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="m-about__item">
                        <div class="m-about--grid">
                            <img src="{{asset('landing/img/fondo/cambio1.jpg')}}" />
                            <img src="{{asset('landing/img/fondo/cambio2.jpg')}}" />
                            <img src="{{asset('landing/img/fondo/cambio3.jpg')}}" />
                        </div>
                        <div class="m-about__content">
                            <div class="m-icon">
                                <img src="{{asset('landing/img/icons/icon-cambio.svg')}}" />
                            </div>
                            <div class="m-content">
                                <h2>Cambio de Chip</h2>
                                <p>Compartimos herramientas y habilidades digitales durante todo el proceso de permanencia dentro de nuestra empresa para potenciar tu efectividad en el trabajo.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="m-about__item">
                        <div class="m-about--grid">
                            <img src="{{asset('landing/img/fondo/voluntariado1.jpg')}}" />
                            <img src="{{asset('landing/img/fondo/voluntariado2.jpg')}}" />
                            <img src="{{asset('landing/img/fondo/voluntariado3.jpg')}}" />
                        </div>
                        <div class="m-about__content">
                            <div class="m-icon">
                                <img src="{{asset('landing/img/icons/icon-voluntariado.svg')}}" />
                            </div>
                            <div class="m-content">
                                <h2>Voluntariado</h2>
                                <p>Somos agentes del cambio social que anhelan una sociedad con m&aacute;s igualdad y un país responsable con su medio ambiente.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="m-about__item">
                        <div class="m-about--grid">
                            <img src="{{asset('landing/img/fondo/reconocimiento1.jpg')}}" />
                            <img src="{{asset('landing/img/fondo/reconocimiento2.jpg')}}" />
                            <img src="{{asset('landing/img/fondo/reconocimiento3.jpg')}}" />
                        </div>
                        <div class="m-about__content">
                            <div class="m-icon">
                                <img src="{{asset('landing/img/icons/icon-reconocimiento.svg')}}" />
                            </div>
                            <div class="m-content">
                                <h2>Reconocimiento</h2>
                                <p>"El Balconazo": Un espacio donde reconocemos los mejores logros comerciales de nuestras colaboradoras y colaboradores.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="m-about__item">
                        <div class="m-about--grid">
                            <img src="{{asset('landing/img/fondo/enfoque1.jpg')}}" />
                            <img src="{{asset('landing/img/fondo/enfoque2.jpg')}}" />
                            <img src="{{asset('landing/img/fondo/enfoque3.jpg')}}" />
                        </div>
                        <div class="m-about__content">
                            <div class="m-icon">
                                <img src="{{asset('landing/img/icons/icon-enfoque.svg')}}" />
                            </div>
                            <div class="m-content">
                                <h2>Enfoque mujer</h2>
                                <p>Somos una empresa comprometida con construir una sociedad igualitaria y libre de violencia contra la mujer. Debido a eso, estamos certificados por el Ministerio de la Mujer como una 'Empresa Segura'.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="m-about__item">
                        <div class="m-about--grid">
                            <img src="{{asset('landing/img/fondo/smart1.jpg')}}" />
                            <img src="{{asset('landing/img/fondo/smart2.jpg')}}" />
                            <img src="{{asset('landing/img/fondo/smart3.jpg')}}" />
                        </div>
                        <div class="m-about__content">
                            <div class="m-icon">
                                <img src="{{asset('landing/img/icons/icon-smart.svg')}}" />
                            </div>
                            <div class="m-content">
                                <h2>Smart University</h2>
                                <p>Plataforma digital para desarrollar y fortalecer habilidades y competencias digitales y comerciales en un entorno virtual de entrenamiento constante.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="m-about__item">
                        <div class="m-about--grid">
                            <img src="{{asset('landing/img/fondo/pet1.jpg')}}" />
                            <img src="{{asset('landing/img/fondo/pet2.jpg')}}" />
                            <img src="{{asset('landing/img/fondo/pet3.jpg')}}" />
                        </div>
                        <div class="m-about__content">
                            <div class="m-icon">
                                <img src="{{asset('landing/img/icons/icon-pet.svg')}}" />
                            </div>
                            <div class="m-content">
                                <h2>Pet Friendly </h2>
                                <p>Todas las mascotas de nuestros colaboradores y colaboradoras tienen un espacio importante en esta compañía. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-about__actions wow fadeInUp">
            <p>Requerimos de tu talento.</p>
            <a href="https://prospectos.bedigital.pe/" target="_blank" class="m-button m-button--raised">Postula aqu&iacute;</a>
        </div>
    </div>
</section>
<section id="plus" class="m-section m-section--link">
    <div class="m-container">
        <div class="m-title m-t-0 wow fadeInUp">
            <h2>B12 PLUS</h2>
            <p><strong>ESTILO DE VIDA.</strong> Alternativas para disfrutar con tu equipo cerca de nuestras oficinas.</p>
        </div>
        <div class="m-plus--grid">
            <div class="m-plus__item wow fadeInUp">
                <div class="m-plus__title">
                    <div class="m-plus__name">
                        <img src="{{asset('landing/img/icons/icon-restaurante.svg')}}" />
                        <h2>Restaurantes</h2>
                    </div>
                    <div class="m-plus__text">
                        <p>Los dos mejores lugares para ir <br> a comer en fechas especiales. </p>
                    </div>
                </div>
                <div class="m-plus__content">
                    <div class="m-item">
                        <div class="m-image">
                            <img src="{{asset('landing/img/fondo/ohashi.jpg')}}" />
                        </div>
                        <div class="m-content">
                            <h2>Ohashi</h2>
                            <p>Calle Berlin 519,</p>
                            <strong>Miraflores-Lima</strong>
                        </div>
                    </div>
                    <div class="m-item">
                        <div class="m-image">
                            <img src="{{asset('landing/img/fondo/mcdonals.jpg')}}" />
                        </div>
                        <div class="m-content">
                            <h2>McDonald's</h2>
                            <p>Calle Francisco <br> Pizarro 486</p>
                            <strong>Trujillo</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-plus__item wow fadeInUp">
                <div class="m-plus__title">
                    <div class="m-plus__name">
                        <img src="{{asset('landing/img/icons/icon-bar.svg')}}" />
                        <h2>Bares</h2>
                    </div>
                    <div class="m-plus__text">
                        <p>Los points donde nuestros equipos <br> festejan los triunfos.</p>
                    </div>
                </div>
                <div class="m-plus__content">
                    <div class="m-item">
                        <div class="m-image">
                            <img src="{{asset('landing/img/fondo/wahios.jpg')}}" />
                        </div>
                        <div class="m-content">
                            <h2>Wahios</h2>
                            <p>Calle Berlin 192</p>
                            <strong>Miraflores-Lima </strong>
                        </div>
                    </div>
                    <div class="m-item">
                        <div class="m-image">
                            <img src="{{asset('landing/img/fondo/bar.jpg')}}" />
                        </div>
                        <div class="m-content">
                            <h2>Nuestro Bar</h2>
                            <p>Jir&oacute;n Bolognesi 502</p>
                            <strong>Trujillo</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-plus__item wow fadeInUp">
                <div class="m-plus__title">
                    <div class="m-plus__name">
                        <img src="{{asset('landing/img/icons/icon-gimnasio.svg')}}" />
                        <h2>Gimnasios</h2>
                    </div>
                    <div class="m-plus__text">
                        <p>Mantente fit cerca del trabajo.</p>
                    </div>
                </div>
                <div class="m-plus__content">
                    <div class="m-item">
                        <div class="m-image">
                            <img src="{{asset('landing/img/fondo/bodytech.jpg')}}" />
                        </div>
                        <div class="m-content">
                            <h2>Body Tech</h2>
                            <p>Av. Sta. Cruz 855</p>
                            <strong>Miraflores-Lima </strong>
                        </div>
                    </div>
                    <div class="m-item">
                        <div class="m-image">
                            <img src="{{asset('landing/img/fondo/gym.jpg')}}" />
                        </div>
                        <div class="m-content">
                            <h2>GYM 345</h2>
                            <p>San Andres 212</p>
                            <strong>Trujillo</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-plus__item wow fadeInUp">
                <div class="m-plus__title">
                    <div class="m-plus__name">
                        <img src="{{asset('landing/img/icons/icon-tienda.svg')}}" style="max-width: 35px"/>
                        <h2>Tiendas comerciales</h2>
                    </div>
                    <div class="m-plus__text">
                        <p>Espacios comerciales para el shopping.</p>
                    </div>
                </div>
                <div class="m-plus__content">
                    <div class="m-item">
                        <div class="m-image">
                            <img src="{{asset('landing/img/fondo/larcomar.jpg')}}" />
                        </div>
                        <div class="m-content">
                            <h2>Larcomar</h2>
                            <p>Malec&oacute;n de la <br> Reserva 610</p>
                            <strong>Miraflores-Lima </strong>
                        </div>
                    </div>
                    <div class="m-item">
                        <div class="m-image">
                            <img src="{{asset('landing/img/fondo/wong.jpg')}}" />
                        </div>
                        <div class="m-content">
                            <h2>Wong</h2>
                            <p>Av. Larco 857</p>
                            <strong>Trujillo</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-plus__item wow fadeInUp">
                <div class="m-plus__title">
                    <div class="m-plus__name">
                        <img src="{{asset('landing/img/icons/icon-academia.svg')}}" />
                        <h2>Academias</h2>
                    </div>
                    <div class="m-plus__text">
                        <p>Lo &uacute;nico constante, debe ser el estudio.</p>
                    </div>
                </div>
                <div class="m-plus__content">
                    <div class="m-item">
                        <div class="m-image">
                            <img src="{{asset('landing/img/fondo/isil.jpg')}}" />
                        </div>
                        <div class="m-content">
                            <h2>Isil</h2>
                            <p>Av. Alfredo <br> Benavides 768</p>
                            <strong>Miraflores</strong>
                        </div>
                    </div>
                    <div class="m-item">
                        <div class="m-image">
                            <img src="{{asset('landing/img/fondo/cultural.jpg')}}" />
                        </div>
                        <div class="m-content">
                            <h2>El Cultural</h2>
                            <p>Venezuela 125</p>
                            <strong>Trujillo</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-plus__item wow fadeInUp">
                <div class="m-plus__title">
                    <div class="m-plus__name">
                        <img src="{{asset('landing/img/icons/icon-cine.svg')}}" style="max-width: 30px"/>
                        <h2>Cines y Teatro</h2>
                    </div>
                    <div class="m-plus__text">
                        <p>Tiempo de calidad con los amigos despu&eacute;s del trabajo.</p>
                    </div>
                </div>
                <div class="m-plus__content">
                    <div class="m-item">
                        <div class="m-image">
                            <img src="{{asset('landing/img/fondo/teatro.jpg')}}" />
                        </div>
                        <div class="m-content">
                            <h2>Teatro Brit&aacute;nico</h2>
                            <p>Calle Bellavista 527</p>
                            <strong>Miraflores-Lima</strong>
                        </div>
                    </div>
                    <div class="m-item">
                        <div class="m-image">
                            <img src="{{asset('landing/img/fondo/cineplanet.jpg')}}" />
                        </div>
                        <div class="m-content">
                            <h2>Cine Planet</h2>
                            <p>Jir&oacute;n Orbegoso 245</p>
                            <strong>Trujillo</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer id="contact" class="m-footer m-section--link">
    <div class="m-footer__container">
        <div class="m-footer__content">
            <div class="m-footer__logo wow fadeInLeft">
                <img src="{{asset('landing/img/icons/logo-b12-blanco.png')}}" alt="logo-b12">
            </div>
            <div class="m-footer__location wow fadeInRight">
                <div class="m-footer__redes">
                    <a href="https://www.facebook.com/agenciab12peru" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.linkedin.com/company/agencia-b12/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.youtube.com/channel/UCEaeOsDTGZZUxGsy7ZNVyxQ" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
                <a href="tel:017028603">+51 (01) 702-8603</a>
                <a href="mailto:lima@agenciab12.com">lima@agenciab12.com</a>
                <a href="#" target="_blank">Av. Jorge Ch&aacute;vez 275, Piso 2, Miraflores, Perú</a>
                <a href="#" target="_blank">Jr.Pizarro 215, Trujillo, Perú</a>
            </div>
        </div>
        <div class="m-footer__menu wow fadeInUp">
            <a class="link" href="#day">UN D&Iacute;A EN B12</a>
            <a class="link" href="#choose">¿POR QU&Eacute; ELEGIRNOS?</a>
            <a class="link" href="#about">CRECE CON NOSOTROS</a>
            <a class="link" href="#plus">B12 PLUS</a>
            <a class="link" href="#contact">CONTACTO</a>
        </div>
    </div>
    <div class="m-footer__copy">
        <p>&copy;2020 Agencia B12. Todos los derechos reservados.</p>
    </div>
    </footer>
    <a class="m-icon__postulacion" href="https://prospectos.bedigital.pe/" target="_blank">
        <img src="{{asset('landing/img/icons/icon-postulacion.svg')}}" />
        <p>Postula <br> aqu&iacute;</p>
    </a>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script type="text/javascript" src="{{asset('landing/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('landing/plugins/toastr/toastr.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('landing/plugins/wow/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('landing/js/index.js?v=1')}}"></script>
    <script type="text/javascript">
        new WOW().init();
        $('body').scrollspy({ target: '#navbarB12', offset: 100 })
        $('.number').counterUp({time:1500});

        setTimeout(() => {
            $('#registro-postulante').modal('show');
        }, 500);

    </script>

    <!-- FIN LANDING -->




                    <div class="modal fade" id="modal-login" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">

                                <div class="modal-body p-0">

                                    <div class="">
                                        <div class="row ">
                                            <div class="col-lg-6 align-items-center">
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
                                                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></span>
                                                                    <input type="password" id="first-name-icon" class="form-control" name="password" placeholder="Ingrese su contraseña">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="d-grid col-lg-12 col-md-12 mb-1">
                                                            <button type="submit" class="buts-prim btn waves-effect waves-float waves-light">Ingresar</button>
                                                        </div>
                                                        <div class="d-grid col-lg-12 col-md-12 mb-1">
                                                            <!--<a href="{{ route('registro')}}" type="button" class="buts-sec btn waves-effect waves-float waves-light">Registrarse</a>-->
                                                            <a href="#" data-bs-dismiss="modal" type="button" class="buts-sec btn waves-effect waves-float waves-light" data-bs-toggle="modal" data-bs-target="#registro-postulante">Registrarse</a>
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

                        <!-- MODAL REGISTRO -->

                        <div class="modal fade" id="registro-postulante" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                            @if ($errors->any())
                                                            <div class="alert alert-danger">
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif
                                                            <div class="col-6">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="basicSelect">Tipo de doc.</label>
                                                                    <select class="form-select" id="basicSelect" name="tipo_dni">
                                                                        <option value="1">Dni</option>
                                                                        <option value="2">CE</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="basicSelect">Nº de documento</label>
                                                                    <div class="input-group input-group-merge">
                                                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                                                                    <input type="number" id="first-name-icon" class="form-control ob" data-type="number" data-msj="Ingrese su número de DNI"  name="dni" placeholder="85214528">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="first-name-icon">Apellido Paterno</label>
                                                                    <div class="input-group input-group-merge">
                                                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                                                                        <input type="text" id="first-name-icon" class="form-control ob" data-type="text" data-msj="Ingrese su apellido paterno" name="apellido_pa" placeholder="Apellido Paterno">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="col-6">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="first-name-icon">Apellido Materno</label>
                                                                    <div class="input-group input-group-merge">
                                                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                                                                        <input type="text" id="first-name-icon" class="form-control" name="apellido_ma" placeholder="Apellido Materno">
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                            <div class="col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="first-name-icon">Nombres completos</label>
                                                                    <div class="input-group input-group-merge">
                                                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                                                                        <input type="text" id="first-name-icon" class="form-control ob" data-type="text" data-msj="Ingrese sus nombres completos" name="name" placeholder="Ingrese sus nombres completos">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="email-id-icon">Correo</label>
                                                                    <div class="input-group input-group-merge">
                                                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></span>
                                                                        <input type="email" id="email-id-icon" class="form-control ob" data-type="text" data-msj="Ingrese su correo electrónico" name="email" placeholder="Correo">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="contact-info-icon">Número Teléfono</label>
                                                                    <div class="input-group input-group-merge">
                                                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smartphone"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg></span>
                                                                        <input type="number" id="contact-info-icon" class="form-control ob" data-type="number" data-msj="Ingrese su número de teléfono" name="celular" placeholder="Número Teléfono">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                             <div class="col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="password-icon">Password</label>
                                                                    <div class="input-group input-group-merge">
                                                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></span>
                                                                        <input type="password" id="password-icon" value="{{ date("Ymd-His")}}" class="form-control ob" data-type="text" data-msj="Ingrese una contraseña" name="password" placeholder="Password">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                {{--
                                                            <div class="col-12">
                                                                <div class="mb-1">
                                                                    <div class="form-check">
                                                                        <input type="checkbox" class="form-check-input" id="customCheck4">
                                                                        <label class="form-check-label" for="customCheck4">Recordarme</label>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                            <div class="d-grid col-lg-12 col-md-12 mb-1">
                                                                <button type="submit" class="buts-prim btn waves-effect waves-float waves-light" id="reg-postulante">Registrarse</button>
                                                            </div>

                                                            <div class="d-grid col-lg-12 col-md-12 mb-1">
                                                                <a href="#" data-bs-dismiss="modal" type="button" class="buts-sec btn waves-effect waves-float waves-light" >Cancelar</a>
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
                                                <div class="col-6 align-items-center" id="panel-img-registro">
                                                    <!--<div class="w-100 h-100 d-lg-flex align-items-center justify-content-center px-0" >
                                                        <img class="img-fluid"  src="{{asset('app-assets/images/fotologin.jpg')}}" alt="Login V2"/>
                                                    </div>-->
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

    @endsection
@section('js')
    <script>
        $(document).ready(function(){

            $('#reg-postulante').on('click', function(){
                var validacion_campos = ValidadorAuto('.ob');

                if(validacion_campos == "false"){
                    return false;
                }else if(validacion_campos == "true"){

                }
            });

        });
    </script>
@endsection






    {{-- @extends('layouts.footer') --}}
