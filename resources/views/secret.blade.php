

@extends('layouts.head');

@section('title',"Postulación");

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
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-1" class="form-label">From</label>
                                <input id="input-wizard-1" type="text" class="form-control" placeholder="example@gmail.com">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-2" class="form-label">To</label>
                                <input id="input-wizard-2" type="text" class="form-control" placeholder="example@gmail.com">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-3" class="form-label">Subject</label>
                                <input id="input-wizard-3" type="text" class="form-control" placeholder="Important Meeting">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-4" class="form-label">Has the Words</label>
                                <input id="input-wizard-4" type="text" class="form-control" placeholder="Job, Work, Documentation">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-5" class="form-label">Doesn't Have</label>
                                <input id="input-wizard-5" type="text" class="form-control" placeholder="Job, Work, Documentation">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-6" class="form-label">Size</label>
                                <select id="input-wizard-6" class="form-select">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>35</option>
                                    <option>50</option>
                                </select>
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
