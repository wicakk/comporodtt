@extends('layouts.frontend')

@section('content')


<script src="https://cdn.tailwindcss.com"></script>

<!--==================== HOME CALCUATOR ====================-->
<section>
    <div class="swiper-container section__home">
        <div>
            <!--========== ISLANDS 1 ==========-->
            <section class="islands">
                {{-- <img
                    src="{{ asset('frontend/assets/img/bg-home.png') }}"
                    alt=""
                    class="islands__bg"
                /> --}}
                <div class="bg__home">
                    <div class="islands__container container">
                        <div
                            class="islands__data"
                            style="z-index: 99; position: relative"
                        >
                            <h2 class="islands__subtitle">
                                <div>
                                    <button class="button annountment">New <span>We prideourselveson 24/7 customer care <i class='bx bx-right-arrow-alt' ></i></span></button>
                                </div>
                            </h2>
                            <h1 class="islands__title">
                                CALCUATOR
                            </h1>
                            <p class="islands__description">
                                “Technology at Your Scale - From Starter to Enterprise.
Build your infrastructure, with the right choices.”
                            </p>
                            <div class="home__card">
                                <div class="home__card-box">
                                    <div class="md:flex">
                                        <ul class="flex-column space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                                            <li>
                                                <div class="items-center px-4 py-3 text-white bg-blue-700 rounded-lg active w-full dark:bg-blue-600" data-tabs-target="#profile" role="tab" aria-controls="profile" aria-selected="true">
                                                    <button data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" class="text-white" aria-selected="true">Cloud VPS (AMD)</button>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="items-center px-4 py-3 text-white bg-blue-700 rounded-lg active w-full dark:bg-blue-600" data-tabs-target="#dashboard" role="tab" aria-controls="dashboard" >
                                                    <button data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" class="text-white" aria-selected="true">Cloud VPS Basic Standar</button>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="items-center px-4 py-3 text-white bg-blue-700 rounded-lg active w-full dark:bg-blue-600" data-tabs-target="#coba" role="tab" aria-controls="coba" >
                                                    <button data-tabs-target="#coba" type="button" role="tab" aria-controls="coba" class="text-white" aria-selected="true">Cloud VPS (Intel)</button>
                                                </div>
                                            </li>
                                        </ul>
                                        <div id="myTabContent" class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full">
                                            <div id="profile" role="tabpanel">
                                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Cloud VPS (AMD)</h3>                                    
                                                <div class="relative mb-6">
                                                    <label for="labels-range-input" class="sr-only">Labels range</label>
                                                    <p class="home__card-title">CPU</p>
                                                    <input id="labels-range-input" type="range" value="2" min="2" max="10" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">2 Core</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-1/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">4 Core</span>
                                                    {{-- <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">6 Core</span> --}}
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">8 Core</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">10 Core</span>
                                                </div>
                                                <br>
                                                <div class="relative mb-10">
                                                    <label for="labels-range-input" class="sr-only">Labels range</label>
                                                    <p class="home__card-title">RAM</p>
                                                    <input id="labels-range-input" type="range" value="2" min="2" max="10" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">2 GB</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-1/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">4 GB</span>
                                                    {{-- <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">6 GB</span> --}}
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">8 GB</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">10 GB</span>
                                                </div>
                                                <br> 
                                                <div class="relative mb-6">
                                                    <label for="labels-range-input" class="sr-only">Labels range</label>
                                                    <p class="home__card-title">STORAGE</p>
                                                    <input id="labels-range-input" type="range" value="2" min="2" max="10" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">20 GB</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-1/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">80 GB</span>
                                                    {{-- <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">120 GB</span> --}}
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">360 GB</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">500 GB</span>
                                                </div>
                                            </div>
                                            {{-- tab 2 --}}
                                            <div id="dashboard" role="tabpanel">
                                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Cloud VPS Basic Standar</h3>
                                                <div class="relative mb-6">
                                                    <label for="labels-range-input" class="sr-only">Labels range</label>
                                                    <p class="home__card-title">CPU</p>
                                                    <input id="labels-range-input" type="range" value="2" min="2" max="10" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">2 Core</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-1/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">4 Core</span>
                                                    {{-- <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">6 Core</span> --}}
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">8 Core</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">10 Core</span>
                                                </div>
                                                <br>
                                                <div class="relative mb-10">
                                                    <label for="labels-range-input" class="sr-only">Labels range</label>
                                                    <p class="home__card-title">RAM</p>
                                                    <input id="labels-range-input" type="range" value="2" min="2" max="10" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">2 GB</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-1/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">4 GB</span>
                                                    {{-- <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">6 GB</span> --}}
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">8 GB</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">10 GB</span>
                                                </div>
                                                <br>
                                                <div class="relative mb-6">
                                                    <label for="labels-range-input" class="sr-only">Labels range</label>
                                                    <p class="home__card-title">STORAGE</p>
                                                    <input id="labels-range-input" type="range" value="2" min="2" max="10" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">20 GB</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-1/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">80 GB</span>
                                                    {{-- <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">120 GB</span> --}}
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">360 GB</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">500 GB</span>
                                                </div>
                                            </div>
                                            {{-- tab 3 --}}
                                            <div id="coba" role="tabpanel">
                                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Cloud VPS (Intel)</h3>
                                                
                                                <!-- CPU Range -->
                                                <div class="relative mb-6">
                                                    <label for="cpu-range" class="sr-only">Labels range</label>
                                                    <p class="home__card-title">CPU</p>
                                                    <input id="cpu-range" type="range" value="2" min="2" max="10" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                                    <span id="cpu-value" class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">2 Core</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-1/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">4 Core</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">8 Core</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">10 Core</span>
                                                </div>
                                            
                                                <!-- RAM Range -->
                                                <div class="relative mb-10">
                                                    <label for="ram-range" class="sr-only">Labels range</label>
                                                    <p class="home__card-title">RAM</p>
                                                    <input id="ram-range" type="range" value="2" min="2" max="10" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                                    <span id="ram-value" class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">2 GB</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-1/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">4 GB</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">8 GB</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">10 GB</span>
                                                </div>
                                            
                                                <!-- STORAGE Range -->
                                                <div class="relative mb-6">
                                                    <label for="storage-range" class="sr-only">Labels range</label>
                                                    <p class="home__card-title">STORAGE</p>
                                                    <input id="storage-range" type="range" value="2" min="2" max="10" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                                    <span id="storage-value" class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">20 GB</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-1/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">80 GB</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">360 GB</span>
                                                    <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">500 GB</span>
                                                </div>
                                                
                                                <!-- Total Price -->
                                                <div class="border-t pt-4 mt-4">
                                                    <p class="text-lg font-semibold">Total Harga: <span id="total">Rp33.000</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
<script>
    // Prices per unit
    const cpuPricePerCore = 5000; // Harga per Core (misalnya Rp5000 per Core)
    const ramPricePerGB = 2000;  // Harga per GB RAM (misalnya Rp2000 per GB)
    const storagePricePerGB = 100; // Harga per GB Storage (misalnya Rp100 per GB)

    // Elements for the sliders
    const cpuRange = document.getElementById('cpu-range');
    const ramRange = document.getElementById('ram-range');
    const storageRange = document.getElementById('storage-range');
    
    // Elements for displaying values
    const cpuValue = document.getElementById('cpu-value');
    const ramValue = document.getElementById('ram-value');
    const storageValue = document.getElementById('storage-value');
    const totalPriceElement = document.getElementById('total');

    // Update the displayed value and price
    function updatePrices() {
        // CPU price calculation
        const cpuCores = cpuRange.value;
        const cpuPrice = cpuCores * cpuPricePerCore;

        // RAM price calculation
        const ramGB = ramRange.value * 2;  // Assuming range 2-10 is for 2GB, 4GB, etc.
        const ramPrice = ramGB * ramPricePerGB;

        // Storage price calculation
        const storageGB = [20, 80, 120, 360, 500][storageRange.value - 2]; // Mapping range to GB
        const storagePrice = storageGB * storagePricePerGB;

        // Total price calculation
        const totalPrice = cpuPrice + ramPrice + storagePrice;

        // Display the values
        cpuValue.textContent = `${cpuCores} Core`;
        ramValue.textContent = `${ramGB} GB`;
        storageValue.textContent = `${storageGB} GB`;

        // Update the total price
        totalPriceElement.textContent = `Rp${totalPrice.toLocaleString()}`;
    }

    // Initial update on page load
    updatePrices();

    // Add event listeners to update prices when the slider values change
    cpuRange.addEventListener('input', updatePrices);
    ramRange.addEventListener('input', updatePrices);
    storageRange.addEventListener('input', updatePrices);
</script>  

@endsection