<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light"
    data-menu-styles="dark">




<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Description" content="@yield('Description')">
    <meta name="keywords" content="@yield('keywords')">
    <link rel="canonical" href="@yield('canonical')" />

    
    <!-- TITLE -->
    <title>@yield('title') </title>

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('assets/images/brand-logos/favicon.png') }}" type="image/x-icon">

    <!-- ICONS CSS -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Date & Time Picker CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}">



    <!-- SIMPLEBAR CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/simplebar/simplebar.min.css') }}">

    <!-- COLOR PICKER CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/%40simonwep/pickr/themes/nano.min.css') }}">

    <!-- MAIN JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Filepond CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/filepond/filepond.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css') }}">

    <!-- Tom Select Css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/tom-select/css/tom-select.default.min.css') }}">

    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}">

    <!-- Date & Time Picker CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}">

    <script src="{{ asset('assets/js/message.js') }}"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



    <style>
        body {
            background-color: rgb(var(--body-bg));
        }
        .dark table.dataTable tbody tr {
            background-color: #1a1c1e !important;
        }
        .light table.dataTable tbody tr {
            background-color: #fff !important;
        }
    </style>


</head>

<body>
 
    <!-- SWITCHER -->


    <div id="hs-overlay-switcher" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right" tabindex="-1">
        <div class="ti-offcanvas-header z-10 relative">
            <h5 class="ti-offcanvas-title">
                Switcher
            </h5>
            <button type="button"
                class="ti-btn flex-shrink-0 p-0  transition-none text-defaulttextcolor dark:text-defaulttextcolor/70 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white  dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                data-hs-overlay="#hs-overlay-switcher">
                <span class="sr-only">Close modal</span>
                <i class="ri-close-circle-line leading-none text-lg"></i>
            </button>
        </div>
        <div class="ti-offcanvas-body !p-0 !border-b dark:border-white/10 z-10 relative !h-auto">
            <div class="flex rtl:space-x-reverse" aria-label="Tabs" role="tablist">
                <button type="button"
                    class="hs-tab-active:bg-success/20 w-full !py-2 !px-4 hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-success dark:hs-tab-active:bg-success/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-success -mb-px bg-white font-semibold text-center  text-defaulttextcolor dark:text-defaulttextcolor/70 rounded-none hover:text-gray-700 dark:bg-bodybg dark:border-white/10  active"
                    id="switcher-item-1" data-hs-tab="#switcher-1" aria-controls="switcher-1" role="tab">
                    Theme Style
                </button>
                <button type="button"
                    class="hs-tab-active:bg-success/20 w-full !py-2 !px-4 hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-success dark:hs-tab-active:bg-success/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-success -mb-px  bg-white font-semibold text-center  text-defaulttextcolor dark:text-defaulttextcolor/70 rounded-none hover:text-gray-700 dark:bg-bodybg dark:border-white/10  dark:hover:text-gray-300"
                    id="switcher-item-2" data-hs-tab="#switcher-2" aria-controls="switcher-2" role="tab">
                    Theme Colors
                </button>
            </div>
        </div>
        <div class="ti-offcanvas-body" id="switcher-body">
            <div id="switcher-1" role="tabpanel" aria-labelledby="switcher-item-1" class="">
                <div class="">
                    <p class="switcher-style-head">Theme Color Mode:</p>
                    <div class="grid grid-cols-3 switcher-style">
                        <div class="flex items-center">
                            <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-light-theme"
                                checked>
                            <label for="switcher-light-theme"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Light</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-dark-theme">
                            <label for="switcher-dark-theme"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Dark</label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Directions:</p>
                    <div class="grid grid-cols-3  switcher-style">
                        <div class="flex items-center">
                            <input type="radio" name="direction" class="ti-form-radio" id="switcher-ltr" checked>
                            <label for="switcher-ltr"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">LTR</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="direction" class="ti-form-radio" id="switcher-rtl">
                            <label for="switcher-rtl"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">RTL</label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Navigation Styles:</p>
                    <div class="grid grid-cols-3  switcher-style">
                        <div class="flex items-center">
                            <input type="radio" name="navigation-style" class="ti-form-radio"
                                id="switcher-vertical" checked>
                            <label for="switcher-vertical"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Vertical</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="navigation-style" class="ti-form-radio"
                                id="switcher-horizontal">
                            <label for="switcher-horizontal"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Horizontal</label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Navigation Menu Style:</p>
                    <div class="grid grid-cols-2 gap-2 switcher-style">
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
                                id="switcher-menu-click" checked>
                            <label for="switcher-menu-click"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Menu
                                Click</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
                                id="switcher-menu-hover">
                            <label for="switcher-menu-hover"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Menu
                                Hover</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
                                id="switcher-icon-click">
                            <label for="switcher-icon-click"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Icon
                                Click</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
                                id="switcher-icon-hover">
                            <label for="switcher-icon-hover"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Icon
                                Hover</label>
                        </div>
                    </div>
                    <div class="px-4 text-secondary text-xs"><b class="me-2">Note:</b>Works same for both Vertical
                        and
                        Horizontal
                    </div>
                </div>
                <div class=" sidemenu-layout-styles">
                    <p class="switcher-style-head">Sidemenu Layout Syles:</p>
                    <div class="grid grid-cols-2 gap-2 switcher-style">
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-default-menu" checked>
                            <label for="switcher-default-menu"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Default
                                Menu</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-closed-menu">
                            <label for="switcher-closed-menu"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">
                                Closed
                                Menu</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-icontext-menu">
                            <label for="switcher-icontext-menu"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Icon
                                Text</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-icon-overlay">
                            <label for="switcher-icon-overlay"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Icon
                                Overlay</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-detached">
                            <label for="switcher-detached"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Detached</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-double-menu">
                            <label for="switcher-double-menu"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Double
                                Menu</label>
                        </div>
                    </div>
                    <div class="px-4 text-secondary text-xs"><b class="me-2">Note:</b>Navigation menu styles won't
                        work
                        here.</div>
                </div>
                <div>
                    <p class="switcher-style-head">Page Styles:</p>
                    <div class="grid grid-cols-3  switcher-style">
                        <div class="flex">
                            <input type="radio" name="data-page-styles" class="ti-form-radio"
                                id="switcher-regular" checked>
                            <label for="switcher-regular"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Regular</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="data-page-styles" class="ti-form-radio"
                                id="switcher-classic">
                            <label for="switcher-classic"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Classic</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="data-page-styles" class="ti-form-radio"
                                id="switcher-modern">
                            <label for="switcher-modern"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">
                                Modern</label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Layout Width Styles:</p>
                    <div class="grid grid-cols-3 switcher-style">
                        <div class="flex">
                            <input type="radio" name="layout-width" class="ti-form-radio" id="switcher-full-width"
                                checked>
                            <label for="switcher-full-width"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">FullWidth</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="layout-width" class="ti-form-radio" id="switcher-boxed">
                            <label for="switcher-boxed"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Boxed</label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Menu Positions:</p>
                    <div class="grid grid-cols-3  switcher-style">
                        <div class="flex">
                            <input type="radio" name="data-menu-positions" class="ti-form-radio"
                                id="switcher-menu-fixed" checked>
                            <label for="switcher-menu-fixed"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Fixed</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="data-menu-positions" class="ti-form-radio"
                                id="switcher-menu-scroll">
                            <label for="switcher-menu-scroll"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Scrollable
                            </label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Header Positions:</p>
                    <div class="grid grid-cols-3 switcher-style">
                        <div class="flex">
                            <input type="radio" name="data-header-positions" class="ti-form-radio"
                                id="switcher-header-fixed" checked>
                            <label for="switcher-header-fixed"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">
                                Fixed</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="data-header-positions" class="ti-form-radio"
                                id="switcher-header-scroll">
                            <label for="switcher-header-scroll"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Scrollable
                            </label>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Loader:</p>
                    <div class="grid grid-cols-3 switcher-style">
                        <div class="flex">
                            <input type="radio" name="page-loader" class="ti-form-radio"
                                id="switcher-loader-enable" checked>
                            <label for="switcher-loader-enable"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">
                                Enable</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="page-loader" class="ti-form-radio"
                                id="switcher-loader-disable">
                            <label for="switcher-loader-disable"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Disable
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div id="switcher-2" class="hidden" role="tabpanel" aria-labelledby="switcher-item-2">
                <div class="theme-colors">
                    <p class="switcher-style-head">Menu Colors:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-white" type="radio"
                                name="menu-colors" id="switcher-menu-light" checked>
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Light Menu
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-dark" type="radio"
                                name="menu-colors" id="switcher-menu-dark" checked>
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Dark Menu
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-primary" type="radio"
                                name="menu-colors" id="switcher-menu-primary">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Color Menu
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-gradient" type="radio"
                                name="menu-colors" id="switcher-menu-gradient">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Gradient Menu
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-transparent"
                                type="radio" name="menu-colors" id="switcher-menu-transparent">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Transparent Menu
                            </span>
                        </div>
                    </div>
                    <div class="px-4 text-[#8c9097] dark:text-white/50 text-[.6875rem]"><b class="me-2">Note:</b>If
                        you
                        want to change color Menu
                        dynamically
                        change from below Theme Primary color picker.</div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Header Colors:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-white !border"
                                type="radio" name="header-colors" id="switcher-header-light" checked>
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Light Header
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-dark" type="radio"
                                name="header-colors" id="switcher-header-dark">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Dark Header
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-primary" type="radio"
                                name="header-colors" id="switcher-header-primary">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Color Header
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-gradient" type="radio"
                                name="header-colors" id="switcher-header-gradient">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Gradient Header
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-transparent"
                                type="radio" name="header-colors" id="switcher-header-transparent">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Transparent Header
                            </span>
                        </div>
                    </div>
                    <div class="px-4 text-[#8c9097] dark:text-white/50 text-[.6875rem]"><b class="me-2">Note:</b>If
                        you
                        want to change color
                        Header dynamically
                        change from below Theme Primary color picker.</div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Theme Primary:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-1" type="radio"
                                name="theme-primary" id="switcher-primary">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-2" type="radio"
                                name="theme-primary" id="switcher-primary1">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-3" type="radio"
                                name="theme-primary" id="switcher-primary2">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-4" type="radio"
                                name="theme-primary" id="switcher-primary3">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-5" type="radio"
                                name="theme-primary" id="switcher-primary4">
                        </div>
                        <div class="ti-form-radio switch-select ps-0 mt-1 color-primary-light">
                            <div class="theme-container-primary"></div>
                            <div class="pickr-container-primary"></div>
                        </div>
                    </div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Theme Background:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-1" type="radio"
                                name="theme-background" id="switcher-background">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-2" type="radio"
                                name="theme-background" id="switcher-background1">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-3" type="radio"
                                name="theme-background" id="switcher-background2">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-4" type="radio"
                                name="theme-background" id="switcher-background3">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-5" type="radio"
                                name="theme-background" id="switcher-background4">
                        </div>
                        <div class="ti-form-radio switch-select ps-0 mt-1 color-bg-transparent">
                            <div class="theme-container-background hidden"></div>
                            <div class="pickr-container-background"></div>
                        </div>
                    </div>
                </div>
                <div class="menu-image theme-colors">
                    <p class="switcher-style-head">Menu With Background Image:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse flex-wrap gap-3">
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img1" type="radio" name="theme-images"
                                id="switcher-bg-img">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img2" type="radio" name="theme-images"
                                id="switcher-bg-img1">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img3" type="radio" name="theme-images"
                                id="switcher-bg-img2">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img4" type="radio" name="theme-images"
                                id="switcher-bg-img3">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img5" type="radio" name="theme-images"
                                id="switcher-bg-img4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ti-offcanvas-footer sm:flex justify-between">
            <a href="https://themeforest.net/item/ynex-php-tailwind-css-admin-dashboard-template/49911130"
                target="_blank" class="w-full ti-btn ti-btn-primary-full m-1">Buy Now</a>
            <a href="https://themeforest.net/user/spruko/portfolio" target="_blank"
                class="w-full ti-btn ti-btn-secondary-full m-1">Our Portfolio</a>
            <a href="javascript:void(0);" id="reset-all" class="w-full ti-btn ti-btn-danger-full m-1">Reset</a>
        </div>
    </div>
    <!-- END SWITCHER -->

    <!-- LOADER -->
    <div id="loader">
        <img src="https://php.spruko.com/tailwind/ynex/ynex/assets/images/media/loader.svg" alt="">
    </div>
    <!-- END LOADER -->

    <!-- PAGE -->
    <div class="page">

        <header class="app-header">
            <nav class="main-header !h-[3.75rem]" aria-label="Global">
                <div class="main-header-container ps-[0.725rem] pe-[1rem] ">

                    <div class="header-content-left">
                        <!-- Start::header-element -->
                        <div class="header-element">
                            <div class="horizontal-logo">
                                <a href="index.html" class="header-logo">
                                    <img src="{{ asset('assets/images/brand-logos/favicon.png') }}" alt="logo"
                                        class="desktop-logo">
                                    <img src="{{ asset('assets/images/brand-logos/favicon.png') }}" alt="logo"
                                        class="toggle-logo">
                                    <img src="{{ asset('assets/images/brand-logos/favicon.png') }}" alt="logo"
                                        class="desktop-dark">
                                    <img src="{{ asset('assets/images/brand-logos/favicon.png') }}" alt="logo"
                                        class="toggle-dark">
                                    <img src="{{ asset('assets/images/brand-logos/favicon.png') }}" alt="logo"
                                        class="desktop-white">
                                    <img src="{{ asset('assets/images/brand-logos/favicon.png') }}" alt="logo"
                                        class="toggle-white">
                                </a>
                            </div>
                        </div>
                        <!-- End::header-element -->

                        <!-- Start::header-element -->
                        <div class="header-element md:px-[0.325rem] !items-center">
                            <!-- Start::header-link -->
                            <a aria-label="Hide Sidebar"
                                class="sidemenu-toggle animated-arrow  hor-toggle horizontal-navtoggle inline-flex items-center"
                                href="javascript:void(0);"><span></span></a>
                            <!-- End::header-link -->
                        </div>
                        <!-- End::header-element -->
                    </div>

                    <div class="header-content-right">


                        <!-- light and dark theme -->
                        <div
                            class="header-element header-theme-mode hidden !items-center sm:block !py-[1rem] md:!px-[0.65rem] px-2">
                            <a aria-label="anchor"
                                class="hs-dark-mode-active:hidden flex hs-dark-mode group flex-shrink-0 justify-center items-center gap-2  rounded-full font-medium transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-[#8c9097] dark:text-white/50 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                href="javascript:void(0);" data-hs-theme-click-value="dark">
                                <i class="bx bx-moon header-link-icon"></i>
                            </a>
                            <a aria-label="anchor"
                                class="hs-dark-mode-active:flex hidden hs-dark-mode group flex-shrink-0 justify-center items-center gap-2  rounded-full font-medium text-defaulttextcolor  transition-all text-xs dark:bg-bodybg dark:bg-bgdark dark:hover:bg-black/20 dark:text-[#8c9097] dark:text-white/50 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                href="javascript:void(0);" data-hs-theme-click-value="light">
                                <i class="bx bx-sun header-link-icon"></i>
                            </a>
                        </div>
                        <!-- End light and dark theme -->
                        @php
                            if (session('loggedInAdmin')) {
                                $sessionId = session('loggedInAdmin');
                                $user = \App\Models\Admin::find($sessionId);
                            }
                        @endphp
                        <!-- Header Profile -->
                        <div
                            class="header-element md:!px-[0.65rem] px-2 hs-dropdown !items-center ti-dropdown [--placement:bottom-left]">
                            <button id="dropdown-profile" type="button"
                                class="hs-dropdown-toggle ti-dropdown-toggle !gap-2 !p-0 flex-shrink-0 sm:me-2 me-0 !rounded-full !shadow-none text-xs align-middle !border-0 !shadow-transparent ">
                                <img class="inline-block rounded-full"
                                    src="{{ asset('assets/images/Adminimages/' . (isset($user->image) ? $user->image : '')) }}"
                                    width="32" height="32" alt="Image Description">

                            </button>
                            <div class="md:block hidden dropdown-profile">
                                <p class="font-semibold mb-0 leading-none text-[#536485] text-[0.813rem] ">
                                    {{ isset($user->name) ? $user->name : '' }}
                                </p>
                                <span
                                    class="opacity-[0.7] font-normal text-[#536485] block text-[0.6875rem] ">{{ isset($user->admintype) ? $user->admintype : '' }}</span>
                            </div>


                            <div class="hs-dropdown-menu ti-dropdown-menu !-mt-3 border-0 w-[11rem] !p-0 border-defaultborder hidden main-header-dropdown  pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                                aria-labelledby="dropdown-profile">

                                <ul class="text-defaulttextcolor font-medium dark:text-[#8c9097] dark:text-white/50">
                                    <li>
                                        <a class="w-full ti-dropdown-item !text-[0.8125rem] !gap-x-0  !p-[0.65rem] !inline-flex"
                                            href="{{route('admin.profile')}}">
                                            <i class="ti ti-user-circle text-[1.125rem] me-2 opacity-[0.7]"></i>Profile
                                        </a>
                                    </li>
                                    <li><a class="w-full ti-dropdown-item !text-[0.8125rem] !gap-x-0 !p-[0.65rem] !inline-flex"
                                            href="mail-settings.html"><i
                                                class="ti ti-adjustments-horizontal text-[1.125rem] me-2 opacity-[0.7]"></i>Settings</a>
                                    </li>
                                    {{-- <li><a class="w-full ti-dropdown-item !text-[0.8125rem] !gap-x-0 !p-[0.65rem] !inline-flex "
                                            href="javascript:void(0);"><i
                                                class="ti ti-wallet text-[1.125rem] me-2 opacity-[0.7]"></i>Bal:
                                            $7,12,950</a></li> --}}
                                    <li><a class="w-full ti-dropdown-item !text-[0.8125rem] !p-[0.65rem] !gap-x-0 !inline-flex"
                                            href="{{ route('admin.logout') }}"><i
                                                class="ti ti-logout text-[1.125rem] me-2 opacity-[0.7]"></i>Log Out</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- End Header Profile -->

                        <!-- Switcher Icon -->
                        <div class="header-element md:px-[0.48rem]">
                            <button aria-label="button" type="button"
                                class="hs-dropdown-toggle switcher-icon inline-flex flex-shrink-0 justify-center items-center gap-2  rounded-full font-medium  align-middle transition-all text-xs dark:text-[#8c9097] dark:text-white/50 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                data-hs-overlay="#hs-overlay-switcher">
                                <i class="bx bx-cog header-link-icon animate-spin-slow"></i>
                            </button>
                        </div>
                        <!-- Switcher Icon -->

                    </div>
                    <!-- End::header-element -->
                </div>
            </nav>
        </header>

        @extends('Admin.Layouts.nav')
