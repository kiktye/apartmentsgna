<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YOUR Future Home | GNA</title>
    <link rel="icon" href="{{ Vite::asset('resources/images/gna-logo.jpg') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://kit.fontawesome.com/f5fd16f46e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-jakarta bg-shadowed">

    <div class="bg-gna text-shadowed">
        <div
            class="text-xs px-2 justify-center md:px-10 py-2 flex md:justify-between sm:flex-row text-center md:w-[80%] md:mx-auto  sm:text-left">

            <div
                class="flex flex-row items-center align-middle space-x-3 sm:space-x-3 sm:space-y-0 cursor-default font-semibold">

                <div class="flex md:flex-row items-center space-x-1">
                    <a href="https://www.facebook.com/apartments.gna/"></a>
                    <svg width="18" height="18" viewBox="0 0 96 69" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.42 1.20375C5.6 2.52975 45.864 43.0737 48 43.0737C50.136 43.0737 90.4 2.52975 89.58 1.20375C88.588 -0.40125 7.412 -0.40125 6.42 1.20375ZM0 34.0737C0 49.4737 0.344 62.0737 0.763 62.0737C1.183 62.0737 7.815 55.7737 15.5 48.0737L29.473 34.0737L15.5 20.0737C7.815 12.3737 1.183 6.07375 0.763 6.07375C0.344 6.07375 0 18.6737 0 34.0737ZM80.5 20.0737L66.527 34.0737L80.5 48.0737C88.185 55.7737 94.817 62.0737 95.237 62.0737C95.656 62.0737 96 49.4737 96 34.0737C96 18.6737 95.656 6.07375 95.237 6.07375C94.817 6.07375 88.185 12.3737 80.5 20.0737ZM19.569 52.0047C11.561 60.0277 6.035 66.3207 6.432 66.9637C6.917 67.7477 19.126 68.0737 48 68.0737C76.874 68.0737 89.083 67.7477 89.568 66.9637C89.965 66.3207 84.439 60.0277 76.431 52.0047L62.608 38.1548L57.364 43.1138C52.822 47.4088 51.568 48.0737 48 48.0737C44.432 48.0737 43.178 47.4088 38.636 43.1138L33.392 38.1548L19.569 52.0047Z"
                            fill="#ffa500" />
                    </svg>

                    <p>apartmentsgna@gmail.com</p>
                </div>

                <div class="flex md:flex-row items-center space-x-1">
                    <svg width="18" height="18" viewBox="0 0 84 96" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M33.4386 0.992391C27.2276 3.05139 23.7546 5.16239 19.7376 9.32239C12.0626 17.2704 9.16455 29.6074 12.6126 39.6544C14.4336 44.9614 37.5436 82.2514 40.5646 84.7594C41.7656 85.7564 42.3926 85.6254 43.8656 84.0724C47.8946 79.8214 69.5076 44.7874 71.2666 39.6544C76.0366 25.7404 68.3056 8.50039 54.6656 2.63239C48.3486 -0.085608 38.8956 -0.815609 33.4386 0.992391ZM48.6976 18.6494C55.3576 22.7094 57.5716 29.9454 54.1866 36.5834C49.1666 46.4294 36.4186 47.0524 30.2086 37.7564C22.4786 26.1854 36.7946 11.3914 48.6976 18.6494ZM11.4386 67.1504C-9.33045 75.6264 -0.566446 90.4854 27.6306 94.6044C61.8226 99.5984 94.3766 85.8604 80.6886 72.2144C77.7866 69.3214 67.8246 64.6334 64.6506 64.6674C63.9846 64.6744 60.3466 69.6344 56.5686 75.6894C49.1226 87.6204 46.1566 90.6544 41.9386 90.6544C37.7406 90.6544 34.8686 87.7194 27.3566 75.7524C23.5516 69.6894 19.7636 64.7234 18.9386 64.7164C18.1136 64.7084 14.7386 65.8034 11.4386 67.1504Z"
                            fill="#ffa500" />
                    </svg>

                    <p>Strumica, North Macedonia</p>
                </div>

            </div>

            <div class="justify-center sm:justify-end items-center space-x-3 text-sm hidden sm:flex">
                <a href="https://www.facebook.com/apartments.gna/" class="hover:text-accent" target="_blank">
                    <svg width="18" height="18" viewBox="0 0 93 93" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M38.6039 0.613029C19.6319 3.81003 3.76294 20.28 0.518944 40.142C-2.10506 56.206 5.41294 74.352 18.7489 84.141C23.4749 87.611 34.8559 92.535 38.1489 92.535C39.3629 92.535 39.6039 89.806 39.6039 76.035V59.535H34.6039H29.6039V53.035V46.535H34.6039H39.6039V39.247C39.6039 33.66 40.1289 30.931 41.8539 27.555C45.5269 20.367 48.1959 19.035 58.9239 19.035H68.1039L68.4039 24.785L68.7039 30.535H63.1079C55.2929 30.535 52.6039 33.211 52.6039 40.99V46.535H59.6709C65.9199 46.535 66.6829 46.738 66.2549 48.285C65.9899 49.248 65.4819 52.173 65.1269 54.785L64.4809 59.535H60.0429H55.6039V76.143V92.752L58.3539 92.109C68.2509 89.798 82.5829 78.385 87.3559 69.015C92.2819 59.345 93.9479 46.075 91.5439 35.65C86.2039 12.487 62.2449 -3.36997 38.6039 0.613029Z"
                            fill="rgb(222, 222, 222)" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/gna_apartments/" class="group hover:text-accent" target="_blank">
                    <svg class="group-hover:fill-current text-accent" width="18" height="18" viewBox="0 0 96 96"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M36.0359 1.55252C10.6809 8.37152 -5.00607 34.6245 1.45493 59.4295C8.14493 85.1145 34.3589 100.959 59.3819 94.4405C84.9919 87.7695 100.909 61.5315 94.4319 36.6645C87.6809 10.7455 61.1569 -5.20348 36.0359 1.55252ZM67.2279 22.7165C72.6449 25.8805 74.6629 29.9955 75.4539 39.4885C76.4869 51.8855 75.2539 64.1855 72.5819 68.1505C68.2619 74.5615 65.2499 75.4535 47.9239 75.4535C30.6229 75.4535 27.5829 74.5575 23.2979 68.1985C19.1799 62.0885 18.9679 34.7165 22.9879 28.1075C27.0739 21.3875 32.7069 19.8915 51.7309 20.4765C61.4399 20.7745 64.7119 21.2475 67.2279 22.7165ZM33.9399 25.9395C28.2389 27.3715 26.3309 30.5365 25.5549 39.8485C25.1819 44.3155 25.1859 51.6795 25.5639 56.2125C26.1519 63.2525 26.6309 64.8325 28.8569 67.0585C31.1799 69.3815 32.4889 69.7295 40.9429 70.2765C46.1579 70.6135 53.7449 70.5475 57.8039 70.1295C64.0509 69.4865 65.5359 68.9605 67.4779 66.7035C70.3469 63.3675 71.3429 56.1135 70.7159 43.1045C69.9459 27.1125 68.2349 25.6405 50.0169 25.2995C43.0909 25.1695 35.8559 25.4575 33.9399 25.9395ZM64.7239 31.1715C66.4749 32.9225 66.1939 34.7565 63.9929 35.9345C61.2489 37.4035 58.4919 34.6465 59.9609 31.9025C61.1389 29.7015 62.9729 29.4205 64.7239 31.1715ZM57.7699 38.3505C61.1589 41.7395 61.4239 42.4375 61.4239 47.9715C61.4239 53.5375 61.1709 54.1905 57.6569 57.7045C54.1429 61.2185 53.4899 61.4715 47.9239 61.4715C42.3579 61.4715 41.7049 61.2185 38.1909 57.7045C34.6839 54.1975 34.4239 53.5305 34.4239 48.0205C34.4239 42.8165 34.7859 41.7205 37.4239 38.9335C41.4029 34.7295 43.4879 33.9215 49.2699 34.3425C53.2689 34.6345 54.7539 35.3345 57.7699 38.3505ZM41.8469 41.8945C39.8519 43.8895 38.9239 45.8195 38.9239 47.9715C38.9239 52.2735 43.6219 56.9715 47.9239 56.9715C52.2259 56.9715 56.9239 52.2735 56.9239 47.9715C56.9239 45.8195 55.9959 43.8895 54.0009 41.8945C50.0709 37.9645 45.7769 37.9645 41.8469 41.8945Z"
                            fill="rgb(222, 222, 222)" />
                    </svg>
                </a>


            </div>
        </div>
    </div>


    <nav class="py-7 px-4 md:px-10 text-black bg-shadowed drop-shadow-lg">
        <div class="md:w-[80%] md:mx-auto">
            <div class="relative flex items-center justify-between h-16">
                <!-- Mobile menu button -->
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <button type="button"
                        class="relative inline-flex items-center justify-center p-2 text-gna hover:text-gna"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Logo -->
                <div class="flex items-center justify-center flex-1 sm:flex-none">
                    <div class="w-[6rem] h-[6rem] md:w-[6rem] md:h-[6rem]">
                        <a href="/" draggable="false">
                            <img class="rounded-full" draggable="false"
                                src="{{ Vite::asset('resources/images/gna-logo.jpg') }}" alt="Logo">
                        </a>
                    </div>
                </div>

                <!-- Nav Links -->
                <div class="hidden sm:flex flex-1 items-center justify-center sm:ml-6">
                    <div class="flex space-x-4">
                        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                        <x-nav-link href="{{ route('buildings.filter') }}" :active="request()->is('buildings/filter')">Buildings</x-nav-link>
                        <x-nav-link href="{{ route('contact') }}" :active="request()->is('contact')">Contact</x-nav-link>
                        <x-nav-link href="{{ asset('assets/catalog.pdf') }}"
                            target="_blank">Catalog</x-nav-link>
                    </div>
                </div>

                <!-- Right section -->
                <div class="absolute hidden inset-y-0 right-0 md:flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile menu -->
    <div class="sm:hidden fixed top-25 left-0 right-0 z-50 bg-shadowed drop-shadow-lg hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 transition-all duration-300">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="{{ route('buildings.filter') }}" :active="request()->is('buildings/filter')">Buildings</x-nav-link>
            <x-nav-link href="{{ route('contact') }}" :active="request()->is('contact')">Contact</x-nav-link>
            <x-nav-link href="{{ asset('assets/catalog.pdf') }}"
                target="_blank">Catalog</x-nav-link>
        </div>
    </div>


    <main id="page-slot">
        {{ $slot }}
    </main>

</body>

</html>
