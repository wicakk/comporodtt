<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--=============== BOXICONS ===============-->
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />

        <!--=============== SWIPER CSS ===============-->
        <link
            rel="stylesheet"
            href="{{ asset('frontend/assets/libraries/swiper-bundle.min.css') }}"
        />

        <!--=============== CSS flowbite ===============-->
        <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
        
        @stack('style-alt')
        <title>Travel Website - ypcode</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="{{ route('homepage') }}" class="footer__logo">
                    D<img class="logo" src="{{ asset('frontend/assets/img/logo.png') }}" alt="" /> GITRANS
                </a>

                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{{ route('homepage') }}" class="nav__link {{ request()->is('/') ? ' active-link' : '' }}">
                                <i class="bx bx-home-alt"></i>
                                <span class="islands__subtitle_nav">About Us</span>
                            </a>
                        </li>
                        <li>
                            <button id="mega-menu-icons-dropdown-button" data-dropdown-toggle="mega-menu-icons-dropdown1" class=" flex items-center justify-between w-full py-2 px-3 font-medium border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                                What We Provide 
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <div id="mega-menu-icons-dropdown1" class="absolute z-10 hidden w-3/5 mt-12 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 dark:bg-gray-700">
                                

                                <nav class="bg-white border-gray-200 dark:border-gray-600 dark:bg-gray-900">
                                    
                                    <div id="mega-menu-full-dropdown" class="mt-1 bg-white border-gray-200 shadow-xs border-y dark:bg-gray-800 dark:border-gray-600">
                                        <div class="flex justify-between max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white">
                                            <div class="w-2/3 bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                                <h3 class="text-lg font-semibold mb-2 text-white">What We Believe</h3>
                                                <p class="text-sm text-gray-600 dark:text-gray-300">
                                                    We believe it matters who provide and serve what clients want. And so we work hard to be the most knowledgeable, 
                                                    most proactive,most service-oriented company in the industry.
                                                </p>
                                              </div>
                                            <ul aria-labelledby="flex mega-menu-full-dropdown-button" class="flex mx-4">
                                                <li>
                                                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                                                        <div class="font-semibold">Our Vision</div>
                                                        <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                                                        <div class="font-semibold">Our Mission</div>
                                                        <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                                                        <div class="font-semibold">Our Value</div>
                                                        <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>

                            </div>
                        </li>
                        <li>
                            <button id="mega-menu-icons-dropdown-button" data-dropdown-toggle="mega-menu-icons-dropdown" class=" flex items-center justify-between w-full py-2 px-3 font-medium border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                                What We Provide 
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <div id="mega-menu-icons-dropdown" class="absolute z-10 hidden w-3/5 mt-12 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 dark:bg-gray-700">
                                <div class="flex w-full h-full items-center space-x-4">
                                <!-- Tab Buttons -->
                                    <div class="w-1/3 mb-4 border-b border-gray-200 dark:border-gray-700">
                                        <ul class="-mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent2" role="tablist">
                                            <li class="me-2" role="presentation">
                                            <button class="inline-flex px-4 py-3 text-white bg-blue-100 m-2 rounded-lg active w-full dark:bg-blue-600" id="tes-tab" data-tabs-target="#tes" type="button" role="tab" aria-controls="tes" aria-selected="true">
                                                <li>
                                                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                                                        <div class="font-semibold">Cloud Service</div>
                                                        <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                                                    </a>
                                                </li>
                                            </button>
                                            </li>
                                            <li class="me-2" role="presentation">
                                            <button class="inline-flex px-4 py-3 text-white bg-blue-100 m-2 rounded-lg active w-full dark:bg-blue-600" id="tes1-tab" data-tabs-target="#tes1" type="button" role="tab" aria-controls="tes1" aria-selected="false">
                                                <li>
                                                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                                                        <div class="font-semibold">IT Helpdesk</div>
                                                        <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                                                    </a>
                                                </li>
                                            </button>
                                            </li>
                                            <li role="presentation">
                                            <button class="inline-flex px-4 py-3 text-white bg-blue-100 m-2 rounded-lg active w-full dark:bg-blue-600" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">
                                                <li>
                                                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                                                        <div class="font-semibold">Workspace</div>
                                                        <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                                                    </a>
                                                </li>
                                            </button>
                                            </li>
                                        </ul>
                                    </div>

                                <!-- Tab Content -->
                                    <div id="myTabContent" class="w-2/3 m-2">
                                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 w-full flex" id="tes" role="tabpanel" aria-labelledby="tes-tab">
                                            <div class="w-1/2">
                                                <ul class="space-y-4" aria-labelledby="mega-menu-icons-dropdown-button">
                                                    <h1 class="text-gray-500 dark:text-gray-400 font-bold">Cloud & Server</h1>
                                                    <li>
                                                        <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                            <span class="sr-only">About us</span>
                                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                                            </svg>
                                                            Cloud VPS
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                            <span class="sr-only">Library</span>
                                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                                <path d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z"/>
                                                                <path d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z"/>
                                                                <path d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z"/>
                                                            </svg>
                                                            Server VPS
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                            <span class="sr-only">Resources</span>
                                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                                                <path d="M15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783ZM6 2h6a1 1 0 1 1 0 2H6a1 1 0 0 1 0-2Zm7 5H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Z"/>
                                                                <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
                                                            </svg>
                                                            Private Cloud
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                            <span class="sr-only">Pro Version</span>
                                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                                <path d="m7.164 3.805-4.475.38L.327 6.546a1.114 1.114 0 0 0 .63 1.89l3.2.375 3.007-5.006ZM11.092 15.9l.472 3.14a1.114 1.114 0 0 0 1.89.63l2.36-2.362.38-4.475-5.102 3.067Zm8.617-14.283A1.613 1.613 0 0 0 18.383.291c-1.913-.33-5.811-.736-7.556 1.01-1.98 1.98-6.172 9.491-7.477 11.869a1.1 1.1 0 0 0 .193 1.316l.986.985.985.986a1.1 1.1 0 0 0 1.316.193c2.378-1.3 9.889-5.5 11.869-7.477 1.746-1.745 1.34-5.643 1.01-7.556Zm-3.873 6.268a2.63 2.63 0 1 1-3.72-3.72 2.63 2.63 0 0 1 3.72 3.72Z"/>
                                                            </svg>
                                                            Object Storage (S3)
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                            <span class="sr-only">Pro Version</span>
                                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                                <path d="m7.164 3.805-4.475.38L.327 6.546a1.114 1.114 0 0 0 .63 1.89l3.2.375 3.007-5.006ZM11.092 15.9l.472 3.14a1.114 1.114 0 0 0 1.89.63l2.36-2.362.38-4.475-5.102 3.067Zm8.617-14.283A1.613 1.613 0 0 0 18.383.291c-1.913-.33-5.811-.736-7.556 1.01-1.98 1.98-6.172 9.491-7.477 11.869a1.1 1.1 0 0 0 .193 1.316l.986.985.985.986a1.1 1.1 0 0 0 1.316.193c2.378-1.3 9.889-5.5 11.869-7.477 1.746-1.745 1.34-5.643 1.01-7.556Zm-3.873 6.268a2.63 2.63 0 1 1-3.72-3.72 2.63 2.63 0 0 1 3.72 3.72Z"/>
                                                            </svg>
                                                            Kubernetes
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                            <span class="sr-only">Pro Version</span>
                                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                                <path d="m7.164 3.805-4.475.38L.327 6.546a1.114 1.114 0 0 0 .63 1.89l3.2.375 3.007-5.006ZM11.092 15.9l.472 3.14a1.114 1.114 0 0 0 1.89.63l2.36-2.362.38-4.475-5.102 3.067Zm8.617-14.283A1.613 1.613 0 0 0 18.383.291c-1.913-.33-5.811-.736-7.556 1.01-1.98 1.98-6.172 9.491-7.477 11.869a1.1 1.1 0 0 0 .193 1.316l.986.985.985.986a1.1 1.1 0 0 0 1.316.193c2.378-1.3 9.889-5.5 11.869-7.477 1.746-1.745 1.34-5.643 1.01-7.556Zm-3.873 6.268a2.63 2.63 0 1 1-3.72-3.72 2.63 2.63 0 0 1 3.72 3.72Z"/>
                                                            </svg>
                                                            Cloud Hosting
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                            <span class="sr-only">Pro Version</span>
                                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                                <path d="m7.164 3.805-4.475.38L.327 6.546a1.114 1.114 0 0 0 .63 1.89l3.2.375 3.007-5.006ZM11.092 15.9l.472 3.14a1.114 1.114 0 0 0 1.89.63l2.36-2.362.38-4.475-5.102 3.067Zm8.617-14.283A1.613 1.613 0 0 0 18.383.291c-1.913-.33-5.811-.736-7.556 1.01-1.98 1.98-6.172 9.491-7.477 11.869a1.1 1.1 0 0 0 .193 1.316l.986.985.985.986a1.1 1.1 0 0 0 1.316.193c2.378-1.3 9.889-5.5 11.869-7.477 1.746-1.745 1.34-5.643 1.01-7.556Zm-3.873 6.268a2.63 2.63 0 1 1-3.72-3.72 2.63 2.63 0 0 1 3.72 3.72Z"/>
                                                            </svg>
                                                            Server
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                            <span class="sr-only">Pro Version</span>
                                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                                <path d="m7.164 3.805-4.475.38L.327 6.546a1.114 1.114 0 0 0 .63 1.89l3.2.375 3.007-5.006ZM11.092 15.9l.472 3.14a1.114 1.114 0 0 0 1.89.63l2.36-2.362.38-4.475-5.102 3.067Zm8.617-14.283A1.613 1.613 0 0 0 18.383.291c-1.913-.33-5.811-.736-7.556 1.01-1.98 1.98-6.172 9.491-7.477 11.869a1.1 1.1 0 0 0 .193 1.316l.986.985.985.986a1.1 1.1 0 0 0 1.316.193c2.378-1.3 9.889-5.5 11.869-7.477 1.746-1.745 1.34-5.643 1.01-7.556Zm-3.873 6.268a2.63 2.63 0 1 1-3.72-3.72 2.63 2.63 0 0 1 3.72 3.72Z"/>
                                                            </svg>
                                                            Pro Version
                                                        </a>
                                                    </li>
                                                </ul>
                                                
                                            </div>
                                            <div class="w-1/2">
                                                <ul class="space-y-4" aria-labelledby="mega-menu-icons-dropdown-button">
                                                    <h1 class="text-gray-500 dark:text-gray-400 font-bold">Services Cloud</h1>
                                                    <li>
                                                        <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                            <span class="sr-only">About us</span>
                                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                                            </svg>
                                                            About Us
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                            <span class="sr-only">Library</span>
                                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                                <path d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z"/>
                                                                <path d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z"/>
                                                                <path d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z"/>
                                                            </svg>
                                                            Library
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                            <span class="sr-only">Resources</span>
                                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                                                <path d="M15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783ZM6 2h6a1 1 0 1 1 0 2H6a1 1 0 0 1 0-2Zm7 5H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Z"/>
                                                                <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
                                                            </svg>
                                                            Resources
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                                            <span class="sr-only">Pro Version</span>
                                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                                <path d="m7.164 3.805-4.475.38L.327 6.546a1.114 1.114 0 0 0 .63 1.89l3.2.375 3.007-5.006ZM11.092 15.9l.472 3.14a1.114 1.114 0 0 0 1.89.63l2.36-2.362.38-4.475-5.102 3.067Zm8.617-14.283A1.613 1.613 0 0 0 18.383.291c-1.913-.33-5.811-.736-7.556 1.01-1.98 1.98-6.172 9.491-7.477 11.869a1.1 1.1 0 0 0 .193 1.316l.986.985.985.986a1.1 1.1 0 0 0 1.316.193c2.378-1.3 9.889-5.5 11.869-7.477 1.746-1.745 1.34-5.643 1.01-7.556Zm-3.873 6.268a2.63 2.63 0 1 1-3.72-3.72 2.63 2.63 0 0 1 3.72 3.72Z"/>
                                                            </svg>
                                                            Pro Version
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 w-full" id="tes1" role="tabpanel" aria-labelledby="tes1-tab">
                                            <p class="text-sm text-gray-500 dark:text-gray-400">Ini konten tab tes1.</p>
                                        </div>
                                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 w-full" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                            <p class="text-sm text-gray-500 dark:text-gray-400">Ini konten tab Settings.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        {{-- <li class="nav__item">
                            <a href="{{ route('travel_package.index') }}" class="nav__link {{ request()->is('travel-packages') || request()->is('travel-packages/*')  ? ' active-link' : '' }}">
                                <i class="bx bx-building-house"></i>
                                <span>Package Travel</span>
                            </a>
                        </li> --}}
                        <li class="nav__item">
                            <a href="{{ route('blog.index') }}" class="nav__link {{ request()->is('blogs') || request()->is('blogs/*')  ? ' active-link' : '' }}">
                                <i class="bx bx-award"></i>
                                <span class="islands__subtitle_nav">Blog</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('contact') }}" class="nav__link {{ request()->is('contact') ? ' active-link' : '' }}">
                                <i class="bx bx-phone"></i>
                                <span class="islands__subtitle_nav">Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <!-- Login & register -->
                <div class="d-flex align-items-center">
                    @if(Auth::check())
                      <!-- Dropdown User -->
                      <div class="dropdown">
                        <a class="btn dropdown-toggle d-flex align-items-center" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}" alt="User" width="32" height="32" class="rounded-circle me-2">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                          <li class="dropdown-item-text">Halo, {{ Auth::user()->name }}</li>
                          <li><hr class="dropdown-divider"></li>
                          <li>
                            <form action="{{ route('logout') }}" method="POST">
                              @csrf
                              <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                          </li>
                        </ul>
                      </div>
                    @else
                      <!-- If not logged in -->
                      <a href="{{ route('login') }}" class=" btn btn-outline-primary button nav__button">Login</a> |
                      <a href="{{ route('register') }}" class="btn btn-primary islands__subtitle_nav">Register</a>
                    @endif
                </div>
                
                {{-- <a target="_blank" href="https://api.whatsapp.com/send?phone=088111444&text=I want to booking" class="button nav__button">Booking Now</a> --}}
                
                <!-- theme -->
                <i class=" islands__subtitle_nav bx bx-moon change-theme" id="theme-button"></i>

            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            @yield('content')
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div>
                    <a href="{{ route('homepage') }}" class="footer__logo">
                        D<img class="logo" src="{{ asset('frontend/assets/img/logo.png') }}" alt="" /> GITRANS
                    </a>
                    <p class="footer__description">
                        <strong> DIGITAL TRANSFORMASI TEKNOLOGI</strong>
                    </p><br>
                    <p class="footer__description">
                        We are ready and waiting to assist you.<br />
                        We pride ourselves on 24/7 customer service.
                    </p>
                </div>

                <div class="footer__content">
                    <div>
                        <h3 class="footer__title">About</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">About Us</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Features </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">News & Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Company</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link"
                                    >How We Work?
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Capital </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link"> Security</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Support</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">FAQs </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link"
                                    >Support center
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link"> Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Follow us</h3>

                        <ul class="footer__social">
                            <a href="#" class="footer__social-link">
                                <i class="bx bxl-facebook-circle"></i>
                            </a>
                            <a href="#" class="footer__social-link">
                                <i class="bx bxl-instagram-alt"></i>
                            </a>
                            <a href="#" class="footer__social-link">
                                <i class="bx bxl-pinterest"></i>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer__info container">
                <span class="footer__copy">
                    &#169; ypcode. All rigths reserved
                </span>
                <div class="footer__privacy">
                    <a href="#">Terms & Agreements</a>
                    <a href="#">Privacy Policy</a>
                </div>
            </div>
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="bx bx-chevrons-up"></i>
        </a>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="{{ asset('frontend/assets/libraries/scrollreveal.min.js') }}"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="{{ asset('frontend/assets/libraries/swiper-bundle.min.js') }}"></script>

        <!--=============== Flowbite JS ===============-->
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
        @stack('script-alt')



        <script src="https://cdn.tailwindcss.com"></script>
    </body>
</html>
