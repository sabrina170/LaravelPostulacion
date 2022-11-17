@extends('layouts.adm-head')
<!-- MENU -->
@section('content')
<div class="container-fluid">
<div class="row">

        <h2 class="text-pri font-weight-bold">Mis Documentos</h2>
        <div class="file-manager-application">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-area-wrapper container-xxl p-0">
                <div class="sidebar-left">
                    <div class="sidebar">
                        <div class="sidebar-file-manager">
                            <div class="sidebar-inner">
                                <!-- sidebar menu links starts -->
                                <!-- add file button -->
                                <div class="dropdown dropdown-actions">
                                    <button class="btn btn-secondary add-file-btn text-center w-100" type="button" id="addNewFile" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span class="align-middle">Documentos</span>
                                    </button>

                                </div>
                                <!-- add file button ends -->


                                <!-- sidebar menu links ends -->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="content-right">
                    <div class="content-wrapper container-xl p-0">
                        <div class="content-header row">
                        </div>
                        <div class="content-body">
                            <!-- overlay container -->
                            <div class="body-content-overlay"></div>

                            <!-- file manager app content starts -->
                            <div class="file-manager-main-content">
                                <!-- search area start -->
                                <div class="file-manager-content-header d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="sidebar-toggle d-block d-xl-none float-start align-middle ms-1">
                                            <i data-feather="menu" class="font-medium-5"></i>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center">

                                        <div class="btn-group view-toggle ms-50" role="group">
                                            <input type="radio" class="btn-check" name="view-btn-radio" data-view="grid" id="gridView" checked autocomplete="off" />
                                            <label class="btn btn-outline-primary p-50 btn-sm" for="gridView">
                                                <i data-feather="grid"></i>
                                            </label>
                                            <input type="radio" class="btn-check" name="view-btn-radio" data-view="list" id="listView" autocomplete="off" />
                                            <label class="btn btn-outline-primary p-50 btn-sm" for="listView">
                                                <i data-feather="list"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- search area ends here -->

                                <div class="file-manager-content-body">

                                    <!-- Files Container Starts -->
                                    <div class="view-container">
                                        <h6 class="files-section-title mt-2 mb-75">Ficha de Trabajo</h6>
                                        <div class="card file-manager-item file">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck7" />
                                                <label class="form-check-label" for="customCheck7"></label>
                                            </div>
                                            <div class="card-img-top file-logo-wrapper">
                                                <div class="dropdown float-end">
                                                    <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center w-100">
                                                    <img src="{{asset('app-assets/images/icons/pdf.png')}}" alt="file-icon" height="35" />
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="content-wrapper">
                                                    <p class="card-text file-name mb-0">Documento1.pdf</p>
                                                    <p class="card-text file-size mb-0">12.6mb</p>
                                                    <p class="card-text file-date">23 may 2019</p>
                                                </div>
                                                <small class="file-accessed text-muted">Last accessed: 3 hours ago</small>
                                            </div>
                                        </div>
                                        <div class="card file-manager-item file">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck8" />
                                                <label class="form-check-label" for="customCheck8"></label>
                                            </div>
                                            <div class="card-img-top file-logo-wrapper">
                                                <div class="dropdown float-end">
                                                    <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center w-100">
                                                    <img src="{{asset('app-assets/images/icons/pdf.png')}}" alt="file-icon" height="35" />
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="content-wrapper">
                                                    <p class="card-text file-name mb-0">Documento2.pdf</p>
                                                    <p class="card-text file-size mb-0">82kb</p>
                                                    <p class="card-text file-date">25 may 2019</p>
                                                </div>
                                                <small class="file-accessed text-muted">Last accessed: 23 minutes ago</small>
                                            </div>
                                        </div>
                                        <div class="card file-manager-item file">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck9" />
                                                <label class="form-check-label" for="customCheck9"></label>
                                            </div>
                                            <div class="card-img-top file-logo-wrapper">
                                                <div class="dropdown float-end">
                                                    <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center w-100">
                                                    <img src="{{asset('app-assets/images/icons/pdf.png')}}" alt="file-icon" height="35" />
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="content-wrapper">
                                                    <p class="card-text file-name mb-0">Documento3.pdf</p>
                                                    <p class="card-text file-size mb-0">54kb</p>
                                                    <p class="card-text file-date">01 may 2019</p>
                                                </div>
                                                <small class="file-accessed text-muted">Last accessed: 43 minutes ago</small>
                                            </div>
                                        </div>
                                        <div class="card file-manager-item file">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck10" />
                                                <label class="form-check-label" for="customCheck10"></label>
                                            </div>
                                            <div class="card-img-top file-logo-wrapper">
                                                <div class="dropdown float-end">
                                                    <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center w-100">
                                                    <img src="{{asset('app-assets/images/icons/pdf.png')}}" alt="file-icon" height="35" />
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="content-wrapper">
                                                    <p class="card-text file-name mb-0">Documento4.pdf</p>
                                                    <p class="card-text file-size mb-0">200kb</p>
                                                    <p class="card-text file-date">12 may 2019</p>
                                                </div>
                                                <small class="file-accessed text-muted">Last accessed: 1 hour ago</small>
                                            </div>
                                        </div>
                                        <div class="d-none flex-grow-1 align-items-center no-result mb-3">
                                            <i data-feather="alert-circle" class="me-50"></i>
                                            No Results
                                        </div>
                                    </div>
                                    <!-- /Files Container Ends -->
                                    <!-- Files Container Starts -->
                                    <div class="view-container">
                                        <h6 class="files-section-title mt-2 mb-75">Mis documentos</h6>
                                        <div class="card file-manager-item file">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck7" />
                                                <label class="form-check-label" for="customCheck7"></label>
                                            </div>
                                            <div class="card-img-top file-logo-wrapper">
                                                <div class="dropdown float-end">
                                                    <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center w-100">
                                                    <img src="{{asset('app-assets/images/icons/pdf.png')}}" alt="file-icon" height="35" />
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="content-wrapper">
                                                    <p class="card-text file-name mb-0">Profile.jpg</p>
                                                    <p class="card-text file-size mb-0">12.6mb</p>
                                                    <p class="card-text file-date">23 may 2019</p>
                                                </div>
                                                <small class="file-accessed text-muted">Last accessed: 3 hours ago</small>
                                            </div>
                                        </div>
                                        <div class="card file-manager-item file">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck8" />
                                                <label class="form-check-label" for="customCheck8"></label>
                                            </div>
                                            <div class="card-img-top file-logo-wrapper">
                                                <div class="dropdown float-end">
                                                    <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center w-100">
                                                    <img src="{{asset('app-assets/images/icons/pdf.png')}}" alt="file-icon" height="35" />
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="content-wrapper">
                                                    <p class="card-text file-name mb-0">account.pdf</p>
                                                    <p class="card-text file-size mb-0">82kb</p>
                                                    <p class="card-text file-date">25 may 2019</p>
                                                </div>
                                                <small class="file-accessed text-muted">Last accessed: 23 minutes ago</small>
                                            </div>
                                        </div>
                                        <div class="card file-manager-item file">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck9" />
                                                <label class="form-check-label" for="customCheck9"></label>
                                            </div>
                                            <div class="card-img-top file-logo-wrapper">
                                                <div class="dropdown float-end">
                                                    <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center w-100">
                                                    <img src="{{asset('app-assets/images/icons/pdf.png')}}" alt="file-icon" height="35" />
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="content-wrapper">
                                                    <p class="card-text file-name mb-0">notes.pdf</p>
                                                    <p class="card-text file-size mb-0">54kb</p>
                                                    <p class="card-text file-date">01 may 2019</p>
                                                </div>
                                                <small class="file-accessed text-muted">Last accessed: 43 minutes ago</small>
                                            </div>
                                        </div>
                                        <div class="card file-manager-item file">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck10" />
                                                <label class="form-check-label" for="customCheck10"></label>
                                            </div>
                                            <div class="card-img-top file-logo-wrapper">
                                                <div class="dropdown float-end">
                                                    <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center w-100">
                                                    <img src="{{asset('app-assets/images/icons/pdf.png')}}" alt="file-icon" height="35" />
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="content-wrapper">
                                                    <p class="card-text file-name mb-0">users.pdf</p>
                                                    <p class="card-text file-size mb-0">200kb</p>
                                                    <p class="card-text file-date">12 may 2019</p>
                                                </div>
                                                <small class="file-accessed text-muted">Last accessed: 1 hour ago</small>
                                            </div>
                                        </div>
                                        <div class="d-none flex-grow-1 align-items-center no-result mb-3">
                                            <i data-feather="alert-circle" class="me-50"></i>
                                            No Results
                                        </div>
                                    </div>
                                    <!-- /Files Container Ends -->
                                </div>
                            </div>
                            <!-- file manager app content ends -->



                            <!-- File Dropdown Starts-->
                            <div class="dropdown-menu dropdown-menu-end file-dropdown">
                                <a class="dropdown-item" href="#">
                                    <i data-feather="eye" class="align-middle me-50"></i>
                                    <span class="align-middle">Preview</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i data-feather="user-plus" class="align-middle me-50"></i>
                                    <span class="align-middle">Share</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i data-feather="copy" class="align-middle me-50"></i>
                                    <span class="align-middle">Make a copy</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i data-feather="edit" class="align-middle me-50"></i>
                                    <span class="align-middle">Rename</span>
                                </a>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#app-file-manager-info-sidebar">
                                    <i data-feather="info" class="align-middle me-50"></i>
                                    <span class="align-middle">Info</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i data-feather="trash" class="align-middle me-50"></i>
                                    <span class="align-middle">Delete</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i data-feather="alert-circle" class="align-middle me-50"></i>
                                    <span class="align-middle">Report</span>
                                </a>
                            </div>
                            <!-- /File Dropdown Ends -->

                            <!-- Create New Folder Modal Starts-->
                            <div class="modal fade" id="new-folder-modal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">New Folder</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="text" class="form-control" value="New folder" placeholder="Untitled folder" />
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary me-1" data-bs-dismiss="modal">Create</button>
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Create New Folder Modal Ends -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<!-- BEGIN: Page JS-->
<script src="{{asset('app-assets/js/scripts/charts/chart-chartjs.js')}}"></script>
<!-- END: Page JS-->

@endsection


