@extends('layouts.adm-head')
<!-- MENU -->
@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-lg-7">
        <div class="card card-congratulations bg-sec pt-20 pb-0 pl-28 pr-28" id="tarjeta-bienvenida">
            <div class="card-body text-left p-0">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="mb-1 text-white font-20">Hola {{ Auth::user()->name }}</h1>
                        <p class="card-text m-auto mb-0">
                            Bienvenido(a) al panel principal , las postulaciones de hoy son:
                        </p>
                        <p class="text-pri font-28 font-weight-bold mt-20 mb-20">26 <span class="font-20">Postulantes</span></p>
                    </div>
                    <div class="col-lg-4 text-right d-flex align-items-end justify-content-center">
                        <img src="{{asset('app-assets/images/konecta/avatar.png')}}" width="80">
                    </div>
                </div>
            </div>
        </div>
        <h2 class="text-pri font-weight-bold">Actividades recientes</h2>

        <div class="row">
            <div class="col-lg-6">
                <div class="card pt-20 pb-20 pl-28 pr-28">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-3 d-flex align-items-center"><p class="mb-0 font-24 font-weight-bold">20</p></div>
                            <div class="col-lg-9">
                                <p class="font-16 font-weight-bold text-pri mb-0">Completaron sus registros</p>
                                <p class="font-12 text-gray mb-0">Esta semana</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card pt-20 pb-20 pl-28 pr-28">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-3 d-flex align-items-center"><p class="mb-0 font-24 font-weight-bold">17</p></div>
                            <div class="col-lg-9">
                                <p class="font-16 font-weight-bold text-pri mb-0">Postulantes Rechazados</p>
                                <p class="font-12 text-gray mb-0">Esta semana</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card pt-20 pb-20 pl-28 pr-28">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-3 d-flex align-items-center"><p class="mb-0 font-24 font-weight-bold">10</p></div>
                            <div class="col-lg-9">
                                <p class="font-16 font-weight-bold text-pri mb-0">Postulantes Registrados</p>
                                <p class="font-12 text-gray mb-0">Esta semana</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card pt-20 pb-20 pl-28 pr-28">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-3 d-flex align-items-center"><p class="mb-0 font-24 font-weight-bold">30</p></div>
                            <div class="col-lg-9">
                                <p class="font-16 font-weight-bold text-pri mb-0">Postulantes Aceptados</p>
                                <p class="font-12 text-gray mb-0">Esta semana</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-sm-center align-items-start flex-sm-row flex-column">
                        <div class="header-left">
                            <h4 class="card-title">Ingresos a la plataforma</h4>
                        </div>
                        <div class="header-right d-flex align-items-center mt-sm-0 mt-1">
                            <i data-feather="calendar"></i>
                            <input type="text" class="form-control flat-picker border-0 shadow-none bg-transparent pe-0" placeholder="YYYY-MM-DD" />
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas class="bar-chart-ex chartjs" data-height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card card-employee-task">
            <div class="card-header">
                <h4 class="card-title text-pri font-weight-bold">Nuevos Postulantes</h4>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-medium-3 cursor-pointer"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
            </div>
            <div class="card-body">
                <div class="employee-task d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row">
                        <div class="avatar me-75">
                            <img src="{{asset('app-assets/images/portrait/small/avatar-s-9.jpg')}}" class="rounded" width="42" height="42" alt="Avatar">
                        </div>
                        <div class="my-auto">
                            <h6 class="mb-0">Ryan Harrington</h6>
                            <small>iOS Developer</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center" style="position: relative;">
                        <button type="button" class="btn btn-icon rounded-circle btn-outline-primary waves-effect">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
                <div class="employee-task d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row">
                        <div class="avatar me-75">
                            <img src="{{asset('app-assets/images/portrait/small/avatar-s-20.jpg')}}" class="rounded" width="42" height="42" alt="Avatar">
                        </div>
                        <div class="my-auto">
                            <h6 class="mb-0">Louisa Norton</h6>
                            <small>UI Designer</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center" style="position: relative;">
                        <div class="d-flex align-items-center" style="position: relative;">
                            <button type="button" class="btn btn-icon rounded-circle btn-outline-primary waves-effect">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="employee-task d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row">
                        <div class="avatar me-75">
                            <img src="{{asset('app-assets/images/portrait/small/avatar-s-1.jpg')}}" class="rounded" width="42" height="42" alt="Avatar">
                        </div>
                        <div class="my-auto">
                            <h6 class="mb-0">Jayden Duncan</h6>
                            <small>Java Developer</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center" style="position: relative;">
                        <small class="text-muted me-75">12hr 8m</small>
                        <div class="employee-task-chart-success" style="min-height: 35.7px;"><div id="apexchartsn5ktldf1" class="apexcharts-canvas apexchartsn5ktldf1 apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg1636" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1638" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs1637"><clipPath id="gridRectMaskn5ktldf1"><rect id="SvgjsRect1640" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskn5ktldf1"><rect id="SvgjsRect1641" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1642" class="apexcharts-radialbar"><g id="SvgjsG1643"><g id="SvgjsG1644" class="apexcharts-tracks"><g id="SvgjsG1645" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(233,236,239,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG1647"><g id="SvgjsG1650" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1651" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 22.854681765973375 39.83468683332726" fill="none" fill-opacity="0.85" stroke="rgba(40,199,111,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="216" data:value="60" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 22.854681765973375 39.83468683332726"></path></g><circle id="SvgjsCircle1648" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1649" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine1652" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1653" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1639" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 90px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
                <div class="employee-task d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row">
                        <div class="avatar me-75">
                            <img src="{{asset('app-assets/images/portrait/small/avatar-s-20.jpg')}}" class="rounded" width="42" height="42" alt="Avatar">
                        </div>
                        <div class="my-auto">
                            <h6 class="mb-0">Cynthia Howell</h6>
                            <small>Anguler Developer</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center" style="position: relative;">
                        <small class="text-muted me-75">3hr 19m</small>
                        <div class="employee-task-chart-secondary" style="min-height: 35.7px;"><div id="apexchartsi01dcphi" class="apexcharts-canvas apexchartsi01dcphi apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg1654" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1656" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs1655"><clipPath id="gridRectMaski01dcphi"><rect id="SvgjsRect1658" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaski01dcphi"><rect id="SvgjsRect1659" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1660" class="apexcharts-radialbar"><g id="SvgjsG1661"><g id="SvgjsG1662" class="apexcharts-tracks"><g id="SvgjsG1663" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(233,236,239,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG1665"><g id="SvgjsG1668" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1669" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 39.83468683332726 37.145318234026625" fill="none" fill-opacity="0.85" stroke="rgba(130,134,139,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="126" data:value="35" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 39.83468683332726 37.145318234026625"></path></g><circle id="SvgjsCircle1666" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1667" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine1670" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1671" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1657" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 90px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
                <div class="employee-task d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row">
                        <div class="avatar me-75">
                            <img src="{{asset('app-assets/images/portrait/small/avatar-s-16.jpg')}}" class="rounded" width="42" height="42" alt="Avatar">
                        </div>
                        <div class="my-auto">
                            <h6 class="mb-0">Helena Payne</h6>
                            <small>Marketing</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center" style="position: relative;">
                        <small class="text-muted me-75">9hr 50m</small>
                        <div class="employee-task-chart-warning" style="min-height: 35.7px;"><div id="apexchartsmf2q8apy" class="apexcharts-canvas apexchartsmf2q8apy apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg1672" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1674" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs1673"><clipPath id="gridRectMaskmf2q8apy"><rect id="SvgjsRect1676" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskmf2q8apy"><rect id="SvgjsRect1677" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1678" class="apexcharts-radialbar"><g id="SvgjsG1679"><g id="SvgjsG1680" class="apexcharts-tracks"><g id="SvgjsG1681" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(233,236,239,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG1683"><g id="SvgjsG1686" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1687" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 20.16531316667274 37.145318234026625" fill="none" fill-opacity="0.85" stroke="rgba(255,159,67,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="234" data:value="65" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 20.16531316667274 37.145318234026625"></path></g><circle id="SvgjsCircle1684" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1685" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine1688" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1689" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1675" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 93px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
                <div class="employee-task d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row">
                        <div class="avatar me-75">
                            <img src="{{asset('app-assets/images/portrait/small/avatar-s-13.jpg')}}" class="rounded" width="42" height="42" alt="Avatar">
                        </div>
                        <div class="my-auto">
                            <h6 class="mb-0">Troy Jensen</h6>
                            <small>iOS Developer</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center" style="position: relative;">
                        <small class="text-muted me-75">4hr 48m</small>
                        <div class="employee-task-chart-primary-2" style="min-height: 35.7px;"><div id="apexchartsrvbdx9r1" class="apexcharts-canvas apexchartsrvbdx9r1 apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg1690" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1692" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs1691"><clipPath id="gridRectMaskrvbdx9r1"><rect id="SvgjsRect1694" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskrvbdx9r1"><rect id="SvgjsRect1695" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1696" class="apexcharts-radialbar"><g id="SvgjsG1697"><g id="SvgjsG1698" class="apexcharts-tracks"><g id="SvgjsG1699" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(233,236,239,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG1701"><g id="SvgjsG1704" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1705" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 18.438632236910546 26.243483898380056" fill="none" fill-opacity="0.85" stroke="rgba(115,103,240,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="288" data:value="80" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 18.438632236910546 26.243483898380056"></path></g><circle id="SvgjsCircle1702" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1703" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine1706" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1707" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1693" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 95px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
            </div>
        </div>
        <div class="card card-employee-task">
            <div class="card-header">
                <h4 class="card-title text-pri font-weight-bold">No completaron
                    su registro</h4>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-medium-3 cursor-pointer"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
            </div>
            <div class="card-body">
                <div class="employee-task d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row">
                        <div class="avatar me-75">
                            <img src="{{asset('app-assets/images/portrait/small/avatar-s-9.jpg')}}" class="rounded" width="42" height="42" alt="Avatar">
                        </div>
                        <div class="my-auto">
                            <h6 class="mb-0">Ryan Harrington</h6>
                            <small>iOS Developer</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center" style="position: relative;">
                        <button type="button" class="btn btn-icon rounded-circle btn-outline-primary waves-effect">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
                <div class="employee-task d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row">
                        <div class="avatar me-75">
                            <img src="{{asset('app-assets/images/portrait/small/avatar-s-20.jpg')}}" class="rounded" width="42" height="42" alt="Avatar">
                        </div>
                        <div class="my-auto">
                            <h6 class="mb-0">Louisa Norton</h6>
                            <small>UI Designer</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center" style="position: relative;">
                        <div class="d-flex align-items-center" style="position: relative;">
                            <button type="button" class="btn btn-icon rounded-circle btn-outline-primary waves-effect">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="employee-task d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row">
                        <div class="avatar me-75">
                            <img src="{{asset('app-assets/images/portrait/small/avatar-s-1.jpg')}}" class="rounded" width="42" height="42" alt="Avatar">
                        </div>
                        <div class="my-auto">
                            <h6 class="mb-0">Jayden Duncan</h6>
                            <small>Java Developer</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center" style="position: relative;">
                        <small class="text-muted me-75">12hr 8m</small>
                        <div class="employee-task-chart-success" style="min-height: 35.7px;"><div id="apexchartsn5ktldf1" class="apexcharts-canvas apexchartsn5ktldf1 apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg1636" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1638" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs1637"><clipPath id="gridRectMaskn5ktldf1"><rect id="SvgjsRect1640" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskn5ktldf1"><rect id="SvgjsRect1641" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1642" class="apexcharts-radialbar"><g id="SvgjsG1643"><g id="SvgjsG1644" class="apexcharts-tracks"><g id="SvgjsG1645" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(233,236,239,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG1647"><g id="SvgjsG1650" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1651" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 22.854681765973375 39.83468683332726" fill="none" fill-opacity="0.85" stroke="rgba(40,199,111,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="216" data:value="60" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 22.854681765973375 39.83468683332726"></path></g><circle id="SvgjsCircle1648" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1649" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine1652" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1653" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1639" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 90px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
                <div class="employee-task d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row">
                        <div class="avatar me-75">
                            <img src="{{asset('app-assets/images/portrait/small/avatar-s-20.jpg')}}" class="rounded" width="42" height="42" alt="Avatar">
                        </div>
                        <div class="my-auto">
                            <h6 class="mb-0">Cynthia Howell</h6>
                            <small>Anguler Developer</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center" style="position: relative;">
                        <small class="text-muted me-75">3hr 19m</small>
                        <div class="employee-task-chart-secondary" style="min-height: 35.7px;"><div id="apexchartsi01dcphi" class="apexcharts-canvas apexchartsi01dcphi apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg1654" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1656" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs1655"><clipPath id="gridRectMaski01dcphi"><rect id="SvgjsRect1658" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaski01dcphi"><rect id="SvgjsRect1659" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1660" class="apexcharts-radialbar"><g id="SvgjsG1661"><g id="SvgjsG1662" class="apexcharts-tracks"><g id="SvgjsG1663" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(233,236,239,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG1665"><g id="SvgjsG1668" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1669" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 39.83468683332726 37.145318234026625" fill="none" fill-opacity="0.85" stroke="rgba(130,134,139,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="126" data:value="35" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 39.83468683332726 37.145318234026625"></path></g><circle id="SvgjsCircle1666" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1667" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine1670" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1671" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1657" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 90px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
                <div class="employee-task d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row">
                        <div class="avatar me-75">
                            <img src="{{asset('app-assets/images/portrait/small/avatar-s-16.jpg')}}" class="rounded" width="42" height="42" alt="Avatar">
                        </div>
                        <div class="my-auto">
                            <h6 class="mb-0">Helena Payne</h6>
                            <small>Marketing</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center" style="position: relative;">
                        <small class="text-muted me-75">9hr 50m</small>
                        <div class="employee-task-chart-warning" style="min-height: 35.7px;"><div id="apexchartsmf2q8apy" class="apexcharts-canvas apexchartsmf2q8apy apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg1672" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1674" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs1673"><clipPath id="gridRectMaskmf2q8apy"><rect id="SvgjsRect1676" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskmf2q8apy"><rect id="SvgjsRect1677" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1678" class="apexcharts-radialbar"><g id="SvgjsG1679"><g id="SvgjsG1680" class="apexcharts-tracks"><g id="SvgjsG1681" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(233,236,239,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG1683"><g id="SvgjsG1686" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1687" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 20.16531316667274 37.145318234026625" fill="none" fill-opacity="0.85" stroke="rgba(255,159,67,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="234" data:value="65" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 20.16531316667274 37.145318234026625"></path></g><circle id="SvgjsCircle1684" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1685" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine1688" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1689" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1675" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 93px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
                <div class="employee-task d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row">
                        <div class="avatar me-75">
                            <img src="{{asset('app-assets/images/portrait/small/avatar-s-13.jpg')}}" class="rounded" width="42" height="42" alt="Avatar">
                        </div>
                        <div class="my-auto">
                            <h6 class="mb-0">Troy Jensen</h6>
                            <small>iOS Developer</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center" style="position: relative;">
                        <small class="text-muted me-75">4hr 48m</small>
                        <div class="employee-task-chart-primary-2" style="min-height: 35.7px;"><div id="apexchartsrvbdx9r1" class="apexcharts-canvas apexchartsrvbdx9r1 apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg1690" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1692" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs1691"><clipPath id="gridRectMaskrvbdx9r1"><rect id="SvgjsRect1694" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskrvbdx9r1"><rect id="SvgjsRect1695" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1696" class="apexcharts-radialbar"><g id="SvgjsG1697"><g id="SvgjsG1698" class="apexcharts-tracks"><g id="SvgjsG1699" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(233,236,239,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG1701"><g id="SvgjsG1704" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1705" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 18.438632236910546 26.243483898380056" fill="none" fill-opacity="0.85" stroke="rgba(115,103,240,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="288" data:value="80" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 18.438632236910546 26.243483898380056"></path></g><circle id="SvgjsCircle1702" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1703" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine1706" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1707" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1693" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 95px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



@endsection


