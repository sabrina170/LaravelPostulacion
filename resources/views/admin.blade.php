<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{asset('images/logo.svg')}}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Administrador</title>
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
            <div class="scrollable">
                <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
                <ul class="scrollable__content py-2">
                    <li>
                        <a href="javascript:;.html" class="menu menu--active">
                            <div class="menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="menu__title"> Dashboard <i data-lucide="chevron-down" class="menu__sub-icon transform rotate-180"></i> </div>
                        </a>
                        <ul class="menu__sub-open">
                            <li>
                                <a href="side-menu-light-dashboard-overview-1.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dashboard-overview-2.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dashboard-overview-3.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 3 </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html" class="menu menu--active">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 4 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="box"></i> </div>
                            <div class="menu__title"> Menu Layout <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-dashboard-overview-1.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Side Menu </div>
                                </a>
                            </li>
                            <li>
                                <a href="simple-menu-light-dashboard-overview-1.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Simple Menu </div>
                                </a>
                            </li>
                            <li>
                                <a href="top-menu-light-dashboard-overview-1.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Top Menu </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="shopping-bag"></i> </div>
                            <div class="menu__title"> E-Commerce <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-categories.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Categories </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-add-product.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Add Product </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Products <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-product-list.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Product List</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-product-grid.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Product Grid</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Transactions <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-transaction-list.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Transaction List</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-transaction-detail.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Transaction Detail</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Sellers <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-seller-list.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Seller List</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-seller-detail.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Seller Detail</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="side-menu-light-reviews.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Reviews </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="side-menu-light-inbox.html" class="menu">
                            <div class="menu__icon"> <i data-lucide="inbox"></i> </div>
                            <div class="menu__title"> Inbox </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-file-manager.html" class="menu">
                            <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                            <div class="menu__title"> File Manager </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-point-of-sale.html" class="menu">
                            <div class="menu__icon"> <i data-lucide="credit-card"></i> </div>
                            <div class="menu__title"> Point of Sale </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-chat.html" class="menu">
                            <div class="menu__icon"> <i data-lucide="message-square"></i> </div>
                            <div class="menu__title"> Chat </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-post.html" class="menu">
                            <div class="menu__icon"> <i data-lucide="file-text"></i> </div>
                            <div class="menu__title"> Post </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-calendar.html" class="menu">
                            <div class="menu__icon"> <i data-lucide="calendar"></i> </div>
                            <div class="menu__title"> Calendar </div>
                        </a>
                    </li>
                    <li class="menu__devider my-6"></li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="edit"></i> </div>
                            <div class="menu__title"> Crud <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-crud-data-list.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Data List </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-crud-form.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Form </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="users"></i> </div>
                            <div class="menu__title"> Users <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-users-layout-1.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Layout 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-users-layout-2.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Layout 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-users-layout-3.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Layout 3 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="trello"></i> </div>
                            <div class="menu__title"> Profile <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-profile-overview-1.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-profile-overview-2.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-profile-overview-3.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 3 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="layout"></i> </div>
                            <div class="menu__title"> Pages <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Wizards <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-wizard-layout-1.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wizard-layout-2.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wizard-layout-3.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Blog <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-blog-layout-1.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-blog-layout-2.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-blog-layout-3.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Pricing <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-pricing-layout-1.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-pricing-layout-2.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Invoice <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-invoice-layout-1.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-invoice-layout-2.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> FAQ <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-faq-layout-1.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-faq-layout-2.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-faq-layout-3.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="login-light-login.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Login </div>
                                </a>
                            </li>
                            <li>
                                <a href="login-light-register.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Register </div>
                                </a>
                            </li>
                            <li>
                                <a href="main-light-error-page.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Error Page </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-update-profile.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Update profile </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-change-password.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Change Password </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu__devider my-6"></li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="inbox"></i> </div>
                            <div class="menu__title"> Components <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Table <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-regular-table.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Regular Table</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-tabulator.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Tabulator</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overlay <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-modal.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Modal</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-slide-over.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Slide Over</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-notification.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Notification</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="side-menu-light-Tab.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Tab </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-accordion.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Accordion </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-button.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Button </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-alert.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Alert </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-progress-bar.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Progress Bar </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-tooltip.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Tooltip </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dropdown.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Dropdown </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-typography.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Typography </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-icon.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Icon </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-loading-icon.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Loading Icon </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="sidebar"></i> </div>
                            <div class="menu__title"> Forms <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-regular-form.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Regular Form </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-datepicker.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Datepicker </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-tom-select.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Tom Select </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-file-upload.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> File Upload </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Wysiwyg Editor <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-classic.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Classic</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-inline.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Inline</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-balloon.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Balloon</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-balloon-block.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Balloon Block</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-document.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Document</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="side-menu-light-validation.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Validation </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                            <div class="menu__title"> Widgets <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-chart.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Chart </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-slider.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Slider </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-image-zoom.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Image Zoom </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END: Mobile Menu -->
        <!-- BEGIN: Top Bar -->
        <div class="top-bar-boxed h-[70px] md:h-[65px] z-[51] border-b border-white/[0.08] mt-12 md:mt-0 -mx-3 sm:-mx-8 md:-mx-0 px-3 md:border-b-0 relative md:fixed md:inset-x-0 md:top-0 sm:px-8 md:px-10 md:pt-10 md:bg-gradient-to-b md:from-slate-100 md:to-transparent dark:md:from-darkmode-700">
            <div class="h-full flex items-center">
                <!-- BEGIN: Logo -->
                <a href="" class="logo -intro-x hidden md:flex xl:w-[180px] block">
                    <img alt="Midone - HTML Admin Template" class="logo__image w-6" src="{{asset('images/logo.svg')}}">
                    <span class="logo__text text-white text-lg ml-3"> Postulación </span>
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="-intro-x h-[45px] mr-auto">
                    <ol class="breadcrumb breadcrumb-light">
                        <li class="breadcrumb-item"><a href="#">Application</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Search -->
                <div class="intro-x relative mr-3 sm:mr-6">
                    <div class="search hidden sm:block">
                        <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                        <i data-lucide="search" class="search__icon dark:text-slate-500"></i>
                    </div>

                </div>
                <!-- END: Search -->

                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                        <img alt="Midone - HTML Admin Template" src="{{asset('images/profile-5.jpg')}}">
                    </div>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                            <li class="p-2">
                                <div class="font-medium">Christian Bale</div>
                                <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">Backend Engineer</div>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
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
                        <a href="javascript:;.html" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard
                                <div class="side-menu__sub-icon transform rotate-180"> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="side-menu__sub-open">
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
                                <a href="index.html" class="side-menu side-menu--active">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 4 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="box"></i> </div>
                            <div class="side-menu__title">
                                Menu Layout
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-dashboard-overview-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Side Menu </div>
                                </a>
                            </li>
                            <li>
                                <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Simple Menu </div>
                                </a>
                            </li>
                            <li>
                                <a href="top-menu-light-dashboard-overview-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Top Menu </div>
                                </a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12 2xl:col-span-12">
                        <div class="grid grid-cols-12 gap-6">

                            <!-- BEGIN: Weekly Top Products -->
                            <div class="col-span-12 mt-6">
                                <div class="intro-y block sm:flex items-center h-10">
                                    <h2 class="text-lg font-medium truncate mr-5">
                                        Weekly Top Products
                                    </h2>
                                    <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                                        <button class="btn box flex items-center text-slate-600 dark:text-slate-300"> <i data-lucide="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel </button>
                                        <button class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300"> <i data-lucide="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF </button>
                                    </div>
                                </div>
                                <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                                    <table class="table table-report sm:mt-2">
                                        <thead>
                                            <tr>
                                                <th class="whitespace-nowrap">IMAGES</th>
                                                <th class="whitespace-nowrap">PRODUCT NAME</th>
                                                <th class="text-center whitespace-nowrap">STOCK</th>
                                                <th class="text-center whitespace-nowrap">STATUS</th>
                                                <th class="text-center whitespace-nowrap">ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="intro-x">
                                                <td class="w-40">
                                                    <div class="flex">
                                                        <div class="w-10 h-10 image-fit zoom-in">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{asset('images/preview-10.jpg" title="Uploaded at 18 June 2022')}}">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{asset('images/preview-2.jpg" title="Uploaded at 10 August 2022')}}">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{asset('images/preview-13.jpg" title="Uploaded at 7 October 2020')}}">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="font-medium whitespace-nowrap">Nike Air Max 270</a>
                                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Sport &amp; Outdoor</div>
                                                </td>
                                                <td class="text-center">50</td>
                                                <td class="w-40">
                                                    <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                                </td>
                                                <td class="table-report__action w-56">
                                                    <div class="flex justify-center items-center">
                                                        <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                        <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="intro-x">
                                                <td class="w-40">
                                                    <div class="flex">
                                                        <div class="w-10 h-10 image-fit zoom-in">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{asset('images/preview-3.jpg" title="Uploaded at 16 November 2021')}}">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{asset('images/preview-4.jpg" title="Uploaded at 22 April 2021')}}">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{asset('images/preview-15.jpg" title="Uploaded at 28 October 2022')}}">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="font-medium whitespace-nowrap">Dell XPS 13</a>
                                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">PC &amp; Laptop</div>
                                                </td>
                                                <td class="text-center">66</td>
                                                <td class="w-40">
                                                    <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                                </td>
                                                <td class="table-report__action w-56">
                                                    <div class="flex justify-center items-center">
                                                        <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                        <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="intro-x">
                                                <td class="w-40">
                                                    <div class="flex">
                                                        <div class="w-10 h-10 image-fit zoom-in">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{asset('images/preview-1.jpg" title="Uploaded at 28 May 2020')}}">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{asset('images/preview-1.jpg" title="Uploaded at 15 May 2021')}}">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{asset('images/preview-15.jpg" title="Uploaded at 16 September 2021')}}">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="font-medium whitespace-nowrap">Dell XPS 13</a>
                                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">PC &amp; Laptop</div>
                                                </td>
                                                <td class="text-center">78</td>
                                                <td class="w-40">
                                                    <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                                </td>
                                                <td class="table-report__action w-56">
                                                    <div class="flex justify-center items-center">
                                                        <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                        <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="intro-x">
                                                <td class="w-40">
                                                    <div class="flex">
                                                        <div class="w-10 h-10 image-fit zoom-in">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{asset('images/preview-13.jpg" title="Uploaded at 30 March 2022')}}">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{asset('images/preview-1.jpg" title="Uploaded at 16 September 2020')}}">
                                                        </div>
                                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{asset('images/preview-15.jpg" title="Uploaded at 24 May 2022')}}">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="font-medium whitespace-nowrap">Samsung Galaxy S20 Ultra</a>
                                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Smartphone &amp; Tablet</div>
                                                </td>
                                                <td class="text-center">87</td>
                                                <td class="w-40">
                                                    <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                                </td>
                                                <td class="table-report__action w-56">
                                                    <div class="flex justify-center items-center">
                                                        <a class="flex items-center mr-3" href=""> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                                        <a class="flex items-center text-danger" href=""> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                                    <nav class="w-full sm:w-auto sm:mr-auto">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-left"></i> </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-left"></i> </a>
                                            </li>
                                            <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                                            <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                            <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                                            <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                            <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-right"></i> </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-right"></i> </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <select class="w-20 form-select box mt-3 sm:mt-0">
                                        <option>10</option>
                                        <option>25</option>
                                        <option>35</option>
                                        <option>50</option>
                                    </select>
                                </div>
                            </div>
                            <!-- END: Weekly Top Products -->
                        </div>
                    </div>

                </div>
            </div>
            <!-- END: Content -->
        </div>


        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script> --}}
        <script src="{{asset('js/app.js')}}"></script>
        <!-- END: JS Assets-->
    </body>
</html>
