<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio V2</title>
    <link rel="icon" href="{{ asset('image/logo.png') }}">
    @vite('resources/css/app.css')

    {{-- GOOGLE FONT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body class="overflow-x-hidden" x-data="{ showBackToTop: false }" x-init="window.addEventListener('scroll', () => {
    showBackToTop = window.scrollY > window.innerHeight / 2;
});">

    {{-- Back To Top --}}

    <section class="relative">
        <div :class="{ 'opacity-100': showBackToTop, 'opacity-0': !showBackToTop }"
            @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
            class="rounded-full transform duration-300 fixed flex justify-center items-center cursor-pointer px-2  hover:animate-pulse py-2 right-5 bottom-4 bg-yellow-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
            </svg>
        </div>
        <a href="whatsapp://send?text=Hello&phone=+6282373324547"
            class="rounded-full transform duration-300 fixed flex justify-center items-center cursor-pointer px-2  hover:animate-pulse py-2 right-5 bottom-[4em] bg-green-400"
            :class="{ 'opacity-100': showBackToTop, 'opacity-0': !showBackToTop }">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 group-hover:animate-none text-white animate-pulse">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
            </svg>
        </a>
    </section>

    {{-- Header --}}
    <header class="bg-transparent fixed top-0 left-0 w-full flex items-center z-10">
        <nav class="border-gray-200 bg-gray-50 dark:bg-transparent backdrop-blur-xl dark:border-gray-700 w-full">
            <div class="max-w-screen-xl flex flex-wrap items-center  justify-between mx-auto p-4">
                <a href="#" class="flex items-center group space-x-3 rtl:space-x-reverse">
                    <span
                        class="text-2xl lg:text-3xl group-hover:hover:text-yellow-300 transition duration-300 group-hover:-translate-y-2 font-primary font-bold text-gray-900 dark:text-sky-300 ">devWithDwi
                        [~]</span>
                </a>
                <button @click="isOpen = !isOpen" data-collapse-toggle="navbar-solid-bg" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden  focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-solid-bg" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div id="navbar-solid-bg" x-data="navbar()" x-init="init()"
                    class="hidden  absolute md:justify-between md:top-3 top-14 lg:top-0 left-0 w-full bg-gray-50 md:block md:relative md:w-auto md:bg-transparent dark:bg-slate-700 md:dark:bg-transparent">
                    <ul
                        class="flex flex-col font-medium mt-4 md:mb-5 rounded-lg bg-gray-50 md:flex-row md:space-x-6 rtl:space-x-reverse md:mt-0 dark:bg-slate-700 md:dark:bg-transparent dark:border-gray-700">
                        <li :class="{ 'border-b-2 border-yellow-300 text-yellow-300': activeSection === 'home' }">
                            <a href="#home"
                                class="block py-2 px-3 lg:text-lg hover:-translate-y-1 hover:transition duration-300 font-bold md:p-0 text-gray-900 rounded md:hover:bg-transparent md:border-0 md:hover:text-sky-300 dark:text-white md:dark:hover:text-sky-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent mt-3">Home</a>
                        </li>
                        <li :class="{ 'border-b-2 border-yellow-300 text-yellow-300': activeSection === 'about' }">
                            <a href="#about"
                                class="block py-2 px-3 lg:text-lg hover:-translate-y-1 hover:transition duration-300 font-bold md:p-0 text-gray-900 rounded md:hover:bg-transparent md:border-0 md:hover:text-sky-300 dark:text-white md:dark:hover:text-sky-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent mt-3">About</a>
                        </li>
                        <li :class="{ 'border-b-2 border-yellow-300 text-yellow-300': activeSection === 'project' }">
                            <a href="#project"
                                class="block py-2 px-3 lg:text-lg hover:-translate-y-1 hover:transition duration-300 font-bold md:p-0 text-gray-900 rounded md:hover:bg-transparent md:border-0 md:hover:text-sky-300 dark:text-white md:dark:hover:text-sky-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent mt-3">Project</a>
                        </li>
                        <li
                            :class="{ 'border-b-2 border-yellow-300 text-yellow-300': activeSection === 'certificate' }">
                            <a href="#certificate"
                                class="block py-2 px-3 lg:text-lg hover:-translate-y-1 hover:transition duration-300 font-bold md:p-0 text-gray-900 rounded md:hover:bg-transparent md:border-0 md:hover:text-sky-300 dark:text-white md:dark:hover:text-sky-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent mt-3">Certificate</a>
                        </li>
                        <li :class="{ 'border-b-2 border-yellow-300 text-yellow-300': activeSection === 'skills' }">
                            <a href="#skills"
                                class="block py-2 px-3 lg:text-lg hover:-translate-y-1 hover:transition duration-300 font-bold md:p-0 text-gray-900 rounded md:hover:bg-transparent md:border-0 md:hover:text-sky-300 dark:text-white md:dark:hover:text-sky-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent mt-3">Skills</a>
                        </li>
                        <li class="">
                            <label for="themeSwitcherThree"
                                class="relative inline-flex cursor-pointer select-none items-center pl-3 py-7 xl:py-6 xl:right-0 xl:ml-10 md:py-0 lg:py-0">
                                <input type="checkbox" name="themeSwitcherThree" id="themeSwitcherThree"
                                    class="sr-only" />
                                <div
                                    class="relative flex items-center md:mt-0 md:right-6 md:top-0   rounded-full bg-gray-200 dark:bg-gray-700 transition-colors duration-300 ease-in-out">
                                    <div class="absolute flex items-center border-2 border-black dark:border-white group hover:bg-yellow-300 justify-center w-9 h-9 bg-white dark:bg-gray-800 rounded-full shadow-md transform transition-transform duration-300 ease-in-out"
                                        id="toggleCircle">
                                        <!-- Light icon -->
                                        <span class="block dark:hidden text-yellow-300 group-hover:text-white">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_3128_692)">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M8 0C8.36819 0 8.66667 0.298477 8.66667 0.666667V2C8.66667 2.36819 8.36819 2.66667 8 2.66667C7.63181 2.66667 7.33333 2.36819 7.33333 2V0.666667C7.33333 0.298477 7.63181 0 8 0ZM8 5.33333C6.52724 5.33333 5.33333 6.52724 5.33333 8C5.33333 9.47276 6.52724 10.6667 8 10.6667C9.47276 10.6667 10.6667 9.47276 10.6667 8C10.6667 6.52724 9.47276 5.33333 8 5.33333ZM4 8C4 5.79086 5.79086 4 8 4C10.2091 4 12 5.79086 12 8C12 10.2091 10.2091 12 8 12C5.79086 12 4 10.2091 4 8ZM8.66667 14C8.66667 13.6318 8.36819 13.3333 8 13.3333C7.63181 13.3333 7.33333 13.6318 7.33333 14V15.3333C7.33333 15.7015 7.63181 16 8 16C8.36819 16 8.66667 15.7015 8.66667 15.3333V14ZM2.3411 2.3424C2.60145 2.08205 3.02356 2.08205 3.28391 2.3424L4.23057 3.28906C4.49092 3.54941 4.49092 3.97152 4.23057 4.23187C3.97022 4.49222 3.54811 4.49222 3.28776 4.23187L2.3411 3.28521C2.08075 3.02486 2.08075 2.60275 2.3411 2.3424ZM12.711 11.7682C12.4506 11.5078 12.0285 11.5078 11.7682 11.7682C11.5078 12.0285 11.5078 12.4506 11.7682 12.711L12.7148 13.6577C12.9752 13.918 13.3973 13.918 13.6577 13.6577C13.918 13.3973 13.918 12.9752 13.6577 12.7148L12.711 11.7682ZM0 8C0 7.63181 0.298477 7.33333 0.666667 7.33333H2C2.36819 7.33333 2.66667 7.63181 2.66667 8C2.66667 8.36819 2.36819 8.66667 2 8.66667H0.666667C0.298477 8.66667 0 8.36819 0 8ZM14 7.33333C13.6318 7.33333 13.3333 7.63181 13.3333 8C13.3333 8.36819 13.6318 8.66667 14 8.66667H15.3333C15.7015 8.66667 16 8.36819 16 8C16 7.63181 15.7015 7.33333 15.3333 7.33333H14ZM4.23057 11.7682C4.49092 12.0285 4.49092 12.4506 4.23057 12.711L3.28391 13.6577C3.02356 13.918 2.60145 13.918 2.3411 13.6577C2.08075 13.3973 2.08075 12.9752 2.3411 12.7148L3.28776 11.7682C3.54811 11.5078 3.97022 11.5078 4.23057 11.7682ZM13.6577 3.28521C13.918 3.02486 13.918 2.60275 13.6577 2.3424C13.3973 2.08205 12.9752 2.08205 12.7148 2.3424L11.7682 3.28906C11.5078 3.54941 11.5078 3.97152 11.7682 4.23187C12.0285 4.49222 12.4506 4.49222 12.711 4.23187L13.6577 3.28521Z"
                                                        fill="currentColor" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_3128_692">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        <!-- Dark icon -->
                                        <span class="hidden dark:block text-gray-300 dark:text-yellow-300 ">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.0547 1.67334C8.18372 1.90227 8.16622 2.18562 8.01003 2.39693C7.44055 3.16737 7.16651 4.11662 7.23776 5.07203C7.30901 6.02744 7.72081 6.92554 8.39826 7.60299C9.07571 8.28044 9.97381 8.69224 10.9292 8.76349C11.8846 8.83473 12.8339 8.5607 13.6043 7.99122C13.8156 7.83502 14.099 7.81753 14.3279 7.94655C14.5568 8.07556 14.6886 8.32702 14.6644 8.58868C14.5479 9.84957 14.0747 11.0512 13.3002 12.053C12.5256 13.0547 11.4818 13.8152 10.2909 14.2454C9.09992 14.6756 7.81108 14.7577 6.57516 14.4821C5.33925 14.2065 4.20738 13.5846 3.312 12.6892C2.41661 11.7939 1.79475 10.662 1.51917 9.42608C1.24359 8.19017 1.32569 6.90133 1.75588 5.71038C2.18606 4.51942 2.94652 3.47561 3.94828 2.70109C4.95005 1.92656 6.15168 1.45335 7.41257 1.33682C7.67423 1.31264 7.92568 1.44442 8.0547 1.67334ZM6.21151 2.96004C5.6931 3.1476 5.20432 3.41535 4.76384 3.75591C3.96242 4.37553 3.35405 5.21058 3.00991 6.16334C2.66576 7.11611 2.60008 8.14718 2.82054 9.13591C3.04101 10.1246 3.5385 11.0301 4.25481 11.7464C4.97111 12.4627 5.87661 12.9602 6.86534 13.1807C7.85407 13.4012 8.88514 13.3355 9.8379 12.9913C10.7907 12.6472 11.6257 12.0388 12.2453 11.2374C12.5859 10.7969 12.8536 10.3081 13.0412 9.78974C12.3391 10.0437 11.586 10.1495 10.8301 10.0931C9.55619 9.99813 8.35872 9.44907 7.45545 8.5458C6.55218 7.64253 6.00312 6.44506 5.90812 5.17118C5.85174 4.4152 5.9575 3.66212 6.21151 2.96004Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    {{-- Header End --}}

    {{-- Hero Section --}}
    <section id="home">
        <div class="container mx-auto pt-36 xl:pt-5 md:pt-36">
            <div class="flex flex-wrap">
                <div data-aos="flip-down" data-aos-mirror="true" data-aos-duration="1000"
                    class="w-full lg:w-1/2 px-4 flex flex-col justify-center ">
                    <h2 class="font-bold text-xl lg:text-3xl lg:ml-32">Hello Everyone !!!</h2>
                    <h1 class="font-bold text-2xl lg:text-3xl lg:ml-32">I'm</h1>
                    <div class="relative overflow-hidden lg:ml-32 h-16">
                        <div class="absolute whitespace-nowrap animate-marquee font-bold text-5xl font-primary ">
                            <span class="inline-block text-shadow-lg-sky">DWI CAHYO NUGROHO</span>
                            <span class="inline-block ml-8 text-sky-300 text-shadow-lg-yellow shadow-white">DWI CAHYO
                                NUGROHO</span>
                            <span class="inline-block ml-8 text-yellow-300 text-shadow-lg-white shadow-yellow-300">DWI
                                CAHYO
                                NUGROHO</span>
                        </div>
                    </div>
                    <h1 class="font-bold text-xl lg:text-3xl lg:ml-32">a Freelance Web Developer</h1>
                    <div class="relative flex flex-row gap-4 lg:ml-32 h-16">
                        <a href="{{ url('/download-cv') }}"
                            class="hover:border-sky-300 group hover:shadow-sky-300 hover:animate-none hover:-translate-y-2 transition duration-300 p-2 mt-3 flex flex-row w-1/2 md:w-1/3 items-center  justify-center border rounded-xl border-yellow-300 shadow-lg shadow-yellow-300">
                            <span class="mr-2">Download CV</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="size-5 group-hover:animate-none animate-pulse">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15M9 12l3 3m0 0 3-3m-3 3V2.25" />
                            </svg>
                        </a>
                        <a href="https://wa.me/+6282373324547" target="_blank"
                            class="hover:border-sky-300 group hover:shadow-sky-300 hover:animate-none hover:-translate-y-2 transition duration-300 p-2 mt-3 flex flex-row w-1/2 md:w-1/3 items-center  justify-center border rounded-xl border-yellow-300 shadow-lg shadow-yellow-300">
                            <span class="mr-2">Contact Me</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="size-4 group-hover:animate-none text-green-300 animate-pulse">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div data-aos="flip-down" data-aos-mirror="true" data-aos-duration="1000"
                    data-aos-easing="ease-in-out"
                    class=" w-full h-1/2 lg:h-screen mt-40  lg:w-1/2 px-4 flex animate-bounce-slow ease-in-out md:pt-52 justify-center items-center group">
                    <img src="{{ asset('image/IMG_8357.JPG') }}" alt="dwi"
                        class="max-w-72 lg:max-w-96 mt-5 border-2 border-sky-300 rounded-[30px] shadow-2xl hover:shadow-yellow-200 bg-black transition duration-300 shadow-sky-400 ">
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Section End --}}


    {{-- Section about --}}
    <section id="about">
        <div class="container mx-auto pt-12 lg:pt-0">
            <div data-aos="fade-down" data-aos-mirror="true" data-aos-duration="500"
                class="flex flex-wrap border rounded-xl lg:mx-20 border-yellow-300 shadow-sm shadow-yellow-300">
                @foreach ($tentang as $about)
                    <div data-aos="fade-up" data-aos-mirror="true" data-aos-duration="500"
                        class="w-full lg:w-full px-10 flex flex-col justify-center">
                        <h1 data-aos="fade-up" data-aos-mirror="true" data-aos-duration="500"
                            class="font-bold font-primary text-3xl text-black dark:text-yellow-300 flex justify-center py-5">
                            About Me</h1>
                        <p data-aos="fade-up" data-aos-mirror="true" data-aos-duration="500"
                            class="text-justify  px-auto font-sans lg:text-lg">{{ $about->about }}</p>
                        <p data-aos="fade-up" data-aos-mirror="true" data-aos-duration="500"
                            class="text-justify pb-5 px-auto font-sans lg:text-lg">{{ $about->social }}</p>
                    </div>
                @endforeach
                <div class="w-full lg:w-full px-10 flex flex-col justify-center">
                    <h1 data-aos="fade-down" data-aos-mirror="true" data-aos-duration="500"
                        class="text-3xl mb-5 font-primary flex justify-center text-black dark:text-yellow-300">
                        Education</h1>
                    <ol data-aos="fade-down" data-aos-mirror="true" data-aos-duration="500"
                        class="relative border-s border-black dark:border-white">
                        <li data-aos="fade-down" data-aos-mirror="true" data-aos-duration="500" class="mb-10 ms-4">
                            <div
                                class="absolute w-3 h-3 bg-black rounded-full mt-1.5 -start-1.5 border border-sky-300 dark:border-yellow-300 dark:bg-yellow-300">
                            </div>
                            <time class="mb-1 text-3xl font-primary leading-none text-black dark:text-yellow-300">2021
                                -
                                Present</time>
                            <h3 class="text-3xl font-semibold text-gray-900 dark:text-white">Ahmad Dahlan University
                            </h3>
                            <p class="mb-4 text-xl font-semibold text-black dark:text-yellow-300">Informatics</p>
                            <img src="{{ asset('image/unnamed2.png') }}" alt=""
                                class="max-w-16 border rounded-full">
                        </li>
                        <li data-aos="fade-down" data-aos-mirror="true" data-aos-duration="500" class="mb-10 ms-4">
                            <div
                                class="absolute w-3 h-3 bg-black rounded-full mt-1.5 -start-1.5 border border-sky-300 dark:border-yellow-300 dark:bg-yellow-300">
                            </div>
                            <time
                                class="mb-1 text-3xl font-primary leading-none text-black dark:text-yellow-300">2017-2020</time>
                            <h3 class="text-3xl font-semibold text-gray-900 dark:text-white">Vocational High School 1
                                Gombong</h3>
                            <p class="mb-4 text-xl font-semibold text-black dark:text-yellow-300">Business and
                                Motorcycle Engineering</p>
                            <img src="{{ asset('image/unnamed.jpg') }}" alt=""
                                class="max-w-16 border rounded-full">
                        </li>
                        <li data-aos="fade-down" data-aos-mirror="true" data-aos-duration="500" class="mb-10 ms-4">
                            <div
                                class="absolute w-3 h-3 bg-black rounded-full  -start-1.5 border border-sky-300 dark:border-yellow-300 dark:bg-yellow-300">
                            </div>
                        </li>
                    </ol>
                </div>
                <div data-aos="flip-left" data-aos-mirror="true" data-aos-duration="500"
                    class="w-1/2 lg:w-full   mx-auto flex items-center justify-center mt-5 py-5 space-x-10">
                    <span class="group hover:-translate-y-2 transition duration-300">
                        <a href="https://www.linkedin.com/in/dwicahyonugroho30/" target="_blank"
                            class=" grayscale group-hover:grayscale-0 transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-12 h-w-12 md:w-14 md:h-14 lg:w-16 lg:h-16" viewBox="0 0 48 48">
                                <path fill="#0288D1"
                                    d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z">
                                </path>
                                <path fill="#FFF"
                                    d="M12 19H17V36H12zM14.485 17h-.028C12.965 17 12 15.888 12 14.499 12 13.08 12.995 12 14.514 12c1.521 0 2.458 1.08 2.486 2.499C17 15.887 16.035 17 14.485 17zM36 36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698-1.501 0-2.313 1.012-2.707 1.99C24.957 25.543 25 26.511 25 27v9h-5V19h5v2.616C25.721 20.5 26.85 19 29.738 19c3.578 0 6.261 2.25 6.261 7.274L36 36 36 36z">
                                </path>
                            </svg>
                        </a>
                    </span>
                    <span class="group hover:-translate-y-2 transition duration-300">
                        <a href="https://github.com/dwicah79" target="_blank"
                            class="grayscale group-hover:grayscale-0 transition duration-300 ">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-12 h-w-12 md:w-14 md:h-14 lg:w-16 lg:h-16" viewBox="0 0 48 48">
                                <path fill="#F4511E"
                                    d="M42.2,22.1L25.9,5.8C25.4,5.3,24.7,5,24,5c0,0,0,0,0,0c-0.7,0-1.4,0.3-1.9,0.8l-3.5,3.5l4.1,4.1c0.4-0.2,0.8-0.3,1.3-0.3c1.7,0,3,1.3,3,3c0,0.5-0.1,0.9-0.3,1.3l4,4c0.4-0.2,0.8-0.3,1.3-0.3c1.7,0,3,1.3,3,3s-1.3,3-3,3c-1.7,0-3-1.3-3-3c0-0.5,0.1-0.9,0.3-1.3l-4-4c-0.1,0-0.2,0.1-0.3,0.1v10.4c1.2,0.4,2,1.5,2,2.8c0,1.7-1.3,3-3,3s-3-1.3-3-3c0-1.3,0.8-2.4,2-2.8V18.8c-1.2-0.4-2-1.5-2-2.8c0-0.5,0.1-0.9,0.3-1.3l-4.1-4.1L5.8,22.1C5.3,22.6,5,23.3,5,24c0,0.7,0.3,1.4,0.8,1.9l16.3,16.3c0,0,0,0,0,0c0.5,0.5,1.2,0.8,1.9,0.8s1.4-0.3,1.9-0.8l16.3-16.3c0.5-0.5,0.8-1.2,0.8-1.9C43,23.3,42.7,22.6,42.2,22.1z">
                                </path>
                            </svg>
                        </a>
                    </span>
                    <span class="group hover:-translate-y-2 transition duration-300">
                        <a href="https://www.instagram.com/dwwll_/" target="_blank"
                            class="grayscale group-hover:grayscale-0  transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-12 h-w-12 md:w-14 md:h-14 lg:w-16 lg:h-16" viewBox="0 0 48 48">
                                <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38"
                                    cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fd5"></stop>
                                    <stop offset=".328" stop-color="#ff543f"></stop>
                                    <stop offset=".348" stop-color="#fc5245"></stop>
                                    <stop offset=".504" stop-color="#e64771"></stop>
                                    <stop offset=".643" stop-color="#d53e91"></stop>
                                    <stop offset=".761" stop-color="#cc39a4"></stop>
                                    <stop offset=".841" stop-color="#c837ab"></stop>
                                </radialGradient>
                                <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)"
                                    d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                </path>
                                <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786"
                                    cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#4168c9"></stop>
                                    <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                </radialGradient>
                                <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)"
                                    d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                </path>
                                <path fill="#fff"
                                    d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z">
                                </path>
                                <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                <path fill="#fff"
                                    d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z">
                                </path>
                            </svg>
                        </a>
                    </span>
                    <span class="group hover:-translate-y-2 transition duration-300">
                        <a href="https://www.tiktok.com/@dwwll__" target="_blank"
                            class="grayscale group-hover:grayscale-0 transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-12 h-w-12 md:w-14 md:h-14 lg:w-16 lg:h-16" viewBox="0 0 64 64">
                                <linearGradient id="tTOsNSj5sgZJwOoh7KQFTa_KeTtCQ_b-ZiV_gr1" x1="32"
                                    x2="32" y1="7.766" y2="56.935" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#1a6dff"></stop>
                                    <stop offset="1" stop-color="#c822ff"></stop>
                                </linearGradient>
                                <path fill="url(#tTOsNSj5sgZJwOoh7KQFTa_KeTtCQ_b-ZiV_gr1)"
                                    d="M51,8H13c-2.757,0-5,2.243-5,5v38c0,2.757,2.243,5,5,5h38c2.757,0,5-2.243,5-5V13	C56,10.243,53.757,8,51,8z M54,51c0,1.654-1.346,3-3,3H13c-1.654,0-3-1.346-3-3V13c0-1.654,1.346-3,3-3h38c1.654,0,3,1.346,3,3V51z">
                                </path>
                                <linearGradient id="tTOsNSj5sgZJwOoh7KQFTb_KeTtCQ_b-ZiV_gr2" x1="33"
                                    x2="33" y1="19.34" y2="44.448" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#8cc5fc"></stop>
                                    <stop offset="1" stop-color="#d5a8fb"></stop>
                                </linearGradient>
                                <path fill="url(#tTOsNSj5sgZJwOoh7KQFTb_KeTtCQ_b-ZiV_gr2)"
                                    d="M44,24c-3.309,0-6-2.691-6-6h-4v19c0,2.757-2.243,5-5,5s-5-2.243-5-5s2.243-5,5-5	c0.342,0,0.677,0.035,1,0.101v-4.042C29.671,28.022,29.338,28,29,28c-4.963,0-9,4.037-9,9s4.037,9,9,9s9-4.037,9-9V25.981	C39.674,27.242,41.748,28,44,28c0.676,0,1.344-0.072,2-0.207v-4.16C45.354,23.864,44.685,24,44,24z">
                                </path>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </section>
    {{-- Section about end --}}


    {{-- Project Section --}}
    <section id="project">
        <div class="container mx-auto pt-12 lg:pt-12">
            <div id="project" data-aos="fade-down" data-aos-mirror="true" data-aos-duration="500"
                class="flex flex-wrap border rounded-xl pb-5 lg:pb-14 lg:mx-20 border-yellow-300 shadow-sm shadow-yellow-300">
                <div class="w-full lg:w-full lg:px-10 flex flex-col justify-center">
                    <h1
                        class="font-bold font-primary text-3xl text-black dark:text-yellow-300 flex justify-center py-5">
                        Project</h1>
                    <div class="container mx-auto pt-12 lg:pt-12 ">
                        <div id="project" class="grid grid-cols-1 sm:grid-cols-2 gap-6  relative">
                            @foreach ($portfolio as $project)
                                <div data-aos="fade-down" data-aos-mirror="true" data-aos-duration="500"
                                    class="lg:border lg:rounded-xl lg:border-yellow-200  hover:border-yellow-200lg:shadow-sm lg:shadow-yellow-300 p-6">
                                    <div data-aos="flip-right" data-aos-mirror="true" data-aos-duration="500"
                                        class="flex items-center justify-center mb-4">
                                        <img src="{{ asset('storage/' . $project->gambar) }}"
                                            alt="{{ $project->title }}"
                                            class="w-full hover:-translate-y-4 transition duration-300 h-60 hover:shadow-lg hover:shadow-sky-300 border overflow-hidden border-sky-300 object-cover rounded-lg">
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">
                                        {{ $project->title }}</h3>
                                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                                        {{ $project->deskripsi }}
                                    </p>
                                    <div class=" pt-5 group inline-block hover:-translate-y-2 transition duration-300">
                                        <span
                                            class="p-2 text-black  dark:text-white border border-yellow-300 rounded-xl group-hover:border-yellow-300 group-hover:shadow-lg group-hover:shadow-yellow-300 dark:group-hover:shadow-white transition duration-300 group-hover:text-yellow-300  ">
                                            <a href="{{ $project->url }}" target="_blank" class="pt-10">Visit
                                                Link</a>
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Project Section end --}}

    {{-- Certificate Section --}}
    <section id="certificate">
        <div class="container mx-auto pt-12 lg:pt-12">
            <div id="project" data-aos="fade-down" data-aos-mirror="true" data-aos-duration="500"
                class="flex flex-wrap border rounded-xl lg:mx-20 border-yellow-300 shadow-sm shadow-yellow-300">
                <div class="w-full pb-20 lg:w-full lg:px-10 flex flex-col justify-center">
                    <h1
                        class="font-bold font-primary text-3xl text-black dark:text-yellow-300 flex justify-center py-5">
                        Certificates
                    </h1>
                    <div class="container mx-auto pt-12 lg:pt-12 ">
                        <div id="project" class="grid grid-cols-1 sm:grid-cols-2 gap-6  relative">
                            @foreach ($certificate as $sertif)
                                <div data-aos="fade-up" data-aos-mirror="true" data-aos-duration="500"
                                    class="lg:border lg:rounded-xl lg:border-yellow-200  hover:border-yellow-200lg:shadow-sm lg:shadow-yellow-300 p-6">
                                    <div data-aos="flip-left" data-aos-mirror="true" data-aos-duration="500"
                                        class="flex  items-center justify-center mb-4">
                                        <img src="{{ asset('storage/' . $sertif->gambar) }}"
                                            alt="{{ $sertif->title }}" loading="lazy"
                                            class="w-full hover:-translate-y-4 transition duration-300 h-60 hover:shadow-lg hover:shadow-sky-300 border border-sky-300 object-cover rounded-lg">
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">
                                        {{ $sertif->title }}</h3>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Certificate Section End --}}

    {{-- Skill --}}
    <section id="skills">
        <div class="container mx-auto pt-12 lg:pt-12 mb-10">
            <div id="project" data-aos="fade-down" data-aos-mirror="true" data-aos-duration="500"
                class="flex flex-wrap border rounded-xl lg:mx-20 border-yellow-300 shadow-sm shadow-yellow-300">
                <div data-aos="fade-down" data-aos-mirror="true" data-aos-duration="500"
                    class="w-full lg:w-full lg:px-10 flex flex-col justify-center">
                    <h1
                        class="font-bold font-primary text-3xl text-black dark:text-yellow-300 flex justify-center py-5">
                        Skills</h1>
                    <div class="container mx-auto pb-10 pt-12 lg:pt-12 ">
                        <div id="project" class="grid grid-cols-2 lg:grid-cols-6 gap-6 relative">
                            @foreach ($skills as $skill)
                                <div
                                    class="border border-yellow-200 group hover:-translate-y-5 transition duration-300 rounded-lg flex flex-col items-center p-4 hover:border-sky-300 shadow-sm hover:shadow-yellow-300 ">
                                    <div class="flex items-center justify-center mb-4 group  overflow-hidden">
                                        <img src="{{ asset('storage/' . $skill->icon) }}" alt="{{ $skill->title }}"
                                            loading="lazy" data-aos="flip-down" data-aos-mirror="true"
                                            data-aos-duration="500"
                                            class="w-16 grayscale group-hover:grayscale-0 transition duration-300  h-16 object-fill rounded-full">
                                    </div>
                                    <h3 class="text-sm text-center font-semibold text-gray-900 dark:text-white">
                                        {{ $skill->title }}
                                    </h3>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Skill End --}}

    {{-- Footer --}}
    <footer class="bg-dark pt-5 pb-5 flex justify-between">
        <div class="container">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Footer Section 1 -->
                    <div class="space-y-4">
                        <h2 class="text-xl font-bold text-white">Yogyakarta</h2>
                        <p class="text-white">
                            Email:
                            <a href="mailto:dwicahyonugroho782@gmail.com" class="text-white hover:text-sky-300">
                                dwicahyonugroho782@gmail.com
                            </a>
                        </p>
                        <p class="text-sm text-white">
                            Jl. Kalimo Sodo No.11, Krobokan, Tamanan, Kec. Banguntapan, Kabupaten Bantul, Daerah
                            Istimewa Yogyakarta 55191 Kost Putra Oren (Kamar no 2), KAB. BANTUL, BANGUNTAPAN, DI
                            YOGYAKARTA, ID, 55191
                        </p>
                    </div>

                    <!-- Footer Section 2: Skills -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-white">Skills</h3>
                        <ul class="list-disc list-inside space-y-2 text-white">
                            <li><a href="#" class="text-white hover:text-sky-300 transition duration-300">Back
                                    end Development
                                </a></li>
                            <li><a href="#" class="text-white hover:text-sky-300 transition duration-300">Front
                                    end Development
                                </a></li>
                            <li><a href="#" class="text-white hover:text-sky-300 transition duration-300">Clean
                                    Architecture
                                </a></li>
                            <li><a href="#" class="text-white hover:text-sky-300 transition duration-300">Mobile
                                    Development
                                </a></li>

                        </ul>
                    </div>

                    <!-- Footer Section 3: Links -->
                    <div class="space-y-4">
                        <h3 class="text-lg text-white font-semibold">Link</h3>
                        <ul class="list-disc list-inside space-y-2 text-white">
                            <li><a href="#"
                                    class="text-white hover:text-sky-300 transition duration-300">Home</a>
                            </li>
                            <li><a href="#about"
                                    class="text-white hover:text-sky-300 transition duration-300">About</a>
                            </li>
                            <li><a href="#project"
                                    class="text-white hover:text-sky-300 transition duration-300">Project</a></li>
                            <li><a href="#certificate"
                                    class="text-white hover:text-sky-300 transition duration-300">Certificate</a></li>
                            <li><a href="#skills"
                                    class="text-white hover:text-sky-300 transition duration-300">Skills</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Footer Section 4: Location -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-white">Location</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.5184478740975!2d110.38160377484479!3d-7.840678892180606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57b7c826b643%3A0x9386dda7b3279900!2sKost%20Putra%20Oren%20Tamanan!5e0!3m2!1sen!2sid!4v1722922121357!5m2!1sen!2sid"
                            width="100%" height="250" class="border-0" allowfullscreen loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
    </footer>
    <footer class="footer bg-base-200 text-base-content border-base-300 border-t px-10 py-4">
        <aside class="grid-flow-col items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" width="1.75em" height="1em"
                viewBox="0 0 256 147">
                <path
                    d="m98.154 0l11.692 29.846c-17.846 7.077-41.23 23.385-64 43.692c22.77 20.307 46.154 36.308 64 44l-11.385 29.231C69.846 134.462 34.77 107.384 0 73.231l2.086-2.04C36.158 38.01 70.111 12.06 98.154 0m59.692 0C186.46 12.308 221.23 39.077 256 73.23l-2.087 2.041c-34.083 33.19-68.332 59.437-96.375 71.498l-11.384-29.231c17.846-7.692 41.23-23.693 64-44l-1.848-1.637c-22.181-19.545-44.788-35.17-62.152-42.055zM128 49.846c13.424 0 24.308 10.883 24.308 24.308c0 13.424-10.884 24.307-24.308 24.307c-13.425 0-24.308-10.883-24.308-24.307c0-13.425 10.883-24.308 24.308-24.308" />
            </svg>
            <p>
                Made with love and a little bit of code magic. - Dwi Cahyo Nugroho [~] ❤️💕
            </p>
        </aside>
        <nav class="md:place-self-center md:justify-self-end xl:pr-10 md:pr-10">
            <div class="grid grid-flow-col gap-4">
                <span class="group hover:-translate-y-2 transition duration-300">
                    <a href="https://www.linkedin.com/in/dwicahyonugroho30/" target="_blank"
                        class=" grayscale group-hover:grayscale-0 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 48 48">
                            <path fill="#0288D1"
                                d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z">
                            </path>
                            <path fill="#FFF"
                                d="M12 19H17V36H12zM14.485 17h-.028C12.965 17 12 15.888 12 14.499 12 13.08 12.995 12 14.514 12c1.521 0 2.458 1.08 2.486 2.499C17 15.887 16.035 17 14.485 17zM36 36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698-1.501 0-2.313 1.012-2.707 1.99C24.957 25.543 25 26.511 25 27v9h-5V19h5v2.616C25.721 20.5 26.85 19 29.738 19c3.578 0 6.261 2.25 6.261 7.274L36 36 36 36z">
                            </path>
                        </svg>
                    </a>
                </span>
                <span class="group hover:-translate-y-2 transition duration-300">
                    <a href="https://github.com/dwicah79" target="_blank"
                        class="grayscale group-hover:grayscale-0 transition duration-300 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 48 48">
                            <path fill="#F4511E"
                                d="M42.2,22.1L25.9,5.8C25.4,5.3,24.7,5,24,5c0,0,0,0,0,0c-0.7,0-1.4,0.3-1.9,0.8l-3.5,3.5l4.1,4.1c0.4-0.2,0.8-0.3,1.3-0.3c1.7,0,3,1.3,3,3c0,0.5-0.1,0.9-0.3,1.3l4,4c0.4-0.2,0.8-0.3,1.3-0.3c1.7,0,3,1.3,3,3s-1.3,3-3,3c-1.7,0-3-1.3-3-3c0-0.5,0.1-0.9,0.3-1.3l-4-4c-0.1,0-0.2,0.1-0.3,0.1v10.4c1.2,0.4,2,1.5,2,2.8c0,1.7-1.3,3-3,3s-3-1.3-3-3c0-1.3,0.8-2.4,2-2.8V18.8c-1.2-0.4-2-1.5-2-2.8c0-0.5,0.1-0.9,0.3-1.3l-4.1-4.1L5.8,22.1C5.3,22.6,5,23.3,5,24c0,0.7,0.3,1.4,0.8,1.9l16.3,16.3c0,0,0,0,0,0c0.5,0.5,1.2,0.8,1.9,0.8s1.4-0.3,1.9-0.8l16.3-16.3c0.5-0.5,0.8-1.2,0.8-1.9C43,23.3,42.7,22.6,42.2,22.1z">
                            </path>
                        </svg>
                    </a>
                </span>
                <span class="group hover:-translate-y-2 transition duration-300">
                    <a href="https://www.instagram.com/dwwll_/" target="_blank"
                        class="grayscale group-hover:grayscale-0  transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 48 48">
                            <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38"
                                cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#fd5"></stop>
                                <stop offset=".328" stop-color="#ff543f"></stop>
                                <stop offset=".348" stop-color="#fc5245"></stop>
                                <stop offset=".504" stop-color="#e64771"></stop>
                                <stop offset=".643" stop-color="#d53e91"></stop>
                                <stop offset=".761" stop-color="#cc39a4"></stop>
                                <stop offset=".841" stop-color="#c837ab"></stop>
                            </radialGradient>
                            <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)"
                                d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                            </path>
                            <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786"
                                cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)"
                                gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#4168c9"></stop>
                                <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                            </radialGradient>
                            <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)"
                                d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                            </path>
                            <path fill="#fff"
                                d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z">
                            </path>
                            <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                            <path fill="#fff"
                                d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z">
                            </path>
                        </svg>
                    </a>
                </span>
                <span class="group hover:-translate-y-2 transition duration-300">
                    <a href="https://www.tiktok.com/@dwwll__" target="_blank"
                        class="grayscale group-hover:grayscale-0 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 64 64">
                            <linearGradient id="tTOsNSj5sgZJwOoh7KQFTa_KeTtCQ_b-ZiV_gr1" x1="32"
                                x2="32" y1="7.766" y2="56.935" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#1a6dff"></stop>
                                <stop offset="1" stop-color="#c822ff"></stop>
                            </linearGradient>
                            <path fill="url(#tTOsNSj5sgZJwOoh7KQFTa_KeTtCQ_b-ZiV_gr1)"
                                d="M51,8H13c-2.757,0-5,2.243-5,5v38c0,2.757,2.243,5,5,5h38c2.757,0,5-2.243,5-5V13	C56,10.243,53.757,8,51,8z M54,51c0,1.654-1.346,3-3,3H13c-1.654,0-3-1.346-3-3V13c0-1.654,1.346-3,3-3h38c1.654,0,3,1.346,3,3V51z">
                            </path>
                            <linearGradient id="tTOsNSj5sgZJwOoh7KQFTb_KeTtCQ_b-ZiV_gr2" x1="33"
                                x2="33" y1="19.34" y2="44.448" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#8cc5fc"></stop>
                                <stop offset="1" stop-color="#d5a8fb"></stop>
                            </linearGradient>
                            <path fill="url(#tTOsNSj5sgZJwOoh7KQFTb_KeTtCQ_b-ZiV_gr2)"
                                d="M44,24c-3.309,0-6-2.691-6-6h-4v19c0,2.757-2.243,5-5,5s-5-2.243-5-5s2.243-5,5-5	c0.342,0,0.677,0.035,1,0.101v-4.042C29.671,28.022,29.338,28,29,28c-4.963,0-9,4.037-9,9s4.037,9,9,9s9-4.037,9-9V25.981	C39.674,27.242,41.748,28,44,28c0.676,0,1.344-0.072,2-0.207v-4.16C45.354,23.864,44.685,24,44,24z">
                            </path>
                        </svg>
                    </a>
                </span>
            </div>
        </nav>
    </footer>
    {{-- End --}}
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    {{-- script untuk alphine js ku --}}
    <script>
        function navbar() {
            return {
                activeSection: window.location.hash.replace('#', '') || 'home',

                init() {
                    this.updateActiveSection();
                    window.addEventListener('scroll', () => this.updateActiveSection());
                },

                updateActiveSection() {
                    const sections = ['home', 'about', 'project', 'certificate', 'skills'];
                    const scrollPosition = window.scrollY +
                        100;

                    for (const section of sections) {
                        const element = document.querySelector(`#${section}`);
                        if (element && element.offsetTop <= scrollPosition && (element.offsetTop + element.clientHeight) >
                            scrollPosition) {
                            this.activeSection = section;
                            break;
                        }
                    }
                }
            };
        }
    </script>

</body>

</html>
