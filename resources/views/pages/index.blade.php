<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Document</title>

    <style>
        @keyframes slideInFromLeft {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .slide-in {
            animation: slideInFromLeft 1s ease-out;
        }

        /* CSS for the marquee effect */
        .animate-marquee {
            display: flex;
            width: 100%;
            animation: marquee 30s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        /* Optional: additional styling for the container */
        .overflow-hidden {
            overflow: hidden;
        }

        .bg-white {
            background-color: white;
        }

        .flex {
            display: flex;
        }

        .space-x-4>*+* {
            margin-left: 1rem;
        }


        .max-h-16 {
            max-height: 4rem;
            /* 16 * 0.25rem */
        }

        .partner-logo {
            flex-shrink: 0;
            flex-grow: 0;
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative pt-48 pb-12 bg-black xl:pt-60 sm:pb-16 lg:pb-32 xl:pb-48 2xl:pb-56">
        <!--header -->
        @include('widgets.navbar')
        <!--end -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-black opacity-85"></div> <!-- Overlay with 50% opacity -->
            <img class="object-cover w-full h-full" src="{{ asset('assets/images/bg-1.jpg') }}" alt="" />
        </div>
        <div class="relative slide-in">
            <div class="px-6 mx-auto sm:px-8 lg:px-12 max-w-7xl">
                <div class="w-full lg:w-2/3 xl:w-1/2">
                    <h1 class="font-sans text-base font-normal tracking-tight text-white text-opacity-70">Your Strategic
                        HR Partner</h1>
                    <p class="mt-6 text-white">
                        <!-- tracking-tighter -->
                        <span class="font-sans font-normal text-7xl">Empowering Businesses Through</span><br />
                        <span class="font-serif font-normal text-7xl"> Human Capital</span>
                    </p>
                    <p class="mt-12 font-sans text-base font-normal leading-7 text-white text-opacity-70">Unlocking
                        Potential, Driving Success: Elevate Your Business with Expert HR Consultancy.</p>
                    <p class="mt-8 font-sans text-xl font-normal text-white"></p>

                    <div class="flex items-center mt-5 space-x-3 sm:space-x-4">
                        {{-- <a href="#" title=""
                            class="inline-flex items-center justify-center px-5 py-2 font-sans text-base font-semibold transition-all duration-200 border-2 border-transparent
                                rounded-full sm:leading-8 bg-white sm:text-lg  text-black hover:bg-opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-secondary"
                            role="button">
                            Get started
                        </a> --}}

                        <a href="/pages/about" title=""
                            class="animate-bounce inline-flex items-center justify-center px-5 py-2 font-sans text-base font-semibold transition-all duration-200 bg-transparent
                                border-2 rounded-full sm:leading-8 text-white
                                border-primary  hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary hover:text-black sm:text-lg focus:ring-offset-secondary"
                            role="button">
                            Find out more
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--mission -->
    <section id="mission" class="relative bg-black py-20">
        <div class="container mx-auto px-4">
            <div class="items-center flex flex-wrap">
                <div class="w-full md:w-4/12 ml-auto mr-auto px-4 animate-slideInLeft">
                    <div class="bg-black opacity-30"></div>
                    <img alt="..." class="max-w-full rounded-lg shadow-lg"
                        src="{{ asset('assets/images/bg/vision.jpg') }}" />
                </div>
                <div class="w-full md:w-5/12 ml-auto mr-auto px-4 animate-slideInRight">
                    <div class="md:pr-12">
                        <div
                            class="text-white p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-700">
                            <i class="fas fa-rocket text-xl"></i>
                        </div>
                        <h3 class="text-3xl text-gray-200 font-semibold">Mission & Vision</h3>
                        <p class="mt-4 text-sm leading-relaxed text-gray-400">

                        </p>
                        <ul class="list-none mt-6">
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-white mr-3"><i
                                                class="fas fa-fingerprint"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="text-sm text-gray-400">
                                            To empower businesses and organisations with strategic insights and
                                            innovative solutions for sustainable growth.
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-white mr-3"><i
                                                class="fab fa-html5"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="text-sm text-gray-400">
                                            To be Africa’s leading advisory firm recognised for excellence and trusted
                                            partnerships.
                                        </h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end -->

    <!--services -->
    <section class=" bg-black">
        <div class="flex flex-wrap items-center">
            <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-700">
                    <i class="fas fa-user-friends text-xl"></i>
                </div>
                <h3 class="text-3xl mb-2 text-white font-semibold leading-normal">
                    <span class="text-transparent bg-clip-text bg-white">
                        Areas of Expertise </span>
                </h3>
                <div>
                    <h4 class="text-gray-100">People and Organisational Performance:</h4>
                </div>
                <p class=" text-sm font-light leading-relaxed mt-4 mb-4 text-gray-400">
                    Talent Management – establish a talent-first organization.
                </p>
                <div>
                    <h4 class="text-gray-100">Executive Search &amp; Recruitment:</h4>
                </div>
                <p class="text-sm font-light leading-relaxed mt-0 mb-4 text-gray-400">
                    Headhunting - Recruitment/Executive Search - Graduate recruitment -
                    Recruitment Process Outsourcing (RPO) - Leadership & Behavioral Assessments (On-line).
                </p>
                <div>
                    <h4 class="text-gray-100">Reward Management</h4>
                </div>
                <p class="text-sm font-light leading-relaxed mt-0 mb-4 text-gray-400">
                    Compensation and Benefits Advisory Services
                    - Development of Salary Structures
                    - Payroll Services.</p>
                <a href="#" class="font-bold text-gray-500 mt-8" target="_blank">More </a>
            </div>
            <div class="w-full md:w-4/12 px-4 mr-auto ml-auto mb-5">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-zinc-950">
                    <img alt="..." src="{{ asset('assets/images/growth.jpg') }}"
                        class="w-full align-middle rounded-t-lg" />
                    <blockquote class="relative p-8 mb-4">
                        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                            class="absolute left-0 w-full block" style="height: 95px; top: -94px;">
                            <polygon points="-30,95 583,95 583,65" class="text-zinc-950 fill-current">
                            </polygon>
                        </svg>
                        <h4 class="text-xl font-bold text-gray-100">
                            Services
                        </h4>
                        <p class="text-sm font-light mt-2 text-gray-100">
                            We partner with you to create an organisation that makes the best of your people so you can
                            realise your
                            strategy today and build on your performance in the future.

                        </p>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    <!-- Partners -->
    <section class="py-5">
        <div class="overflow-hidden bg-white">
            <div class="flex space-x-4 animate-marquee">
                <!-- Repeat this block for each partner icon -->
                <div class="px-4 py-2 partner-logo">
                    <img src="{{ asset('assets/images/partners/AfDB-logo-HORI.png') }}" alt="Partner Logo"
                        class="max-h-16">
                </div>
                <div class="px-4 py-2 partner-logo">
                    <img src="{{ asset('assets/images/partners/access-bank-plc-icon-2048x507-4kgbbmz8.png') }}"
                        alt="Partner Logo" class="max-h-16">
                </div>
                <div class="px-4 py-2 partner-logo">
                    <img src="{{ asset('assets/images/partners/Ghana International Airlines logo (46)-M.jpg') }}"
                        alt="Partner Logo" class="max-h-16">
                </div>
                <div class="px-4 py-2 partner-logo">
                    <img src="{{ asset('assets/images/partners/jnpengineeringgh.com') }}" alt="Partner Logo"
                        class="max-h-16">
                </div>
                <div class="px-4 py-2 partner-logo">
                    <img src="{{ asset('assets/images/partners/oando.png') }}" alt="Partner Logo" class="max-h-16">
                </div>
                <div class="px-4 py-2 partner-logo">
                    <img src="{{ asset('assets/images/partners/miif.png') }}" alt="Partner Logo" class="max-h-16">
                </div>
                <div class="px-4 py-2 partner-logo">
                    <img src="{{ asset('assets/images/partners/MOH.jpg') }}" alt="Partner Logo" class="max-h-16">
                </div>
                <div class="px-4 py-2 partner-logo">
                    <img src="{{ asset('assets/images/partners/fgr.jpeg') }}" alt="Partner Logo" class="max-h-16">
                </div>
                <div class="px-4 py-2 partner-logo">
                    <img src="{{ asset('assets/images/partners/servaco.jpeg') }}" alt="Partner Logo"
                        class="max-h-16">
                </div>
                <div class="px-4 py-2 partner-logo">
                    <img src="{{ asset('assets/images/partners/rcs.png') }}" alt="Partner Logo" class="max-h-16">
                </div>
                <div class="px-4 py-2 partner-logo">
                    <img src="{{ asset('assets/images/partners/GMA-log-new.png') }}" alt="Partner Logo"
                        class="max-h-16">
                </div>
                <div class="px-4 py-2 partner-logo">
                    <img src="{{ asset('assets/images/partners/undp-logo-5682674D5C-seeklogo.com.png') }}"
                        alt="Partner Logo" class="max-h-16">
                </div>
                <!-- End repeat block -->
            </div>
        </div>
    </section>

    <!--target market -->
    <section class="py-10 bg-white sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Our Target Market</h2>
                <p class="max-w-lg mx-auto mt-4 text-base leading-relaxed text-gray-600">Amet minim mollit non deserunt
                    ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
            </div>

            <div class="relative mt-12 lg:mt-20">
                <div class="absolute inset-x-0 hidden xl:px-44 top-2 md:block md:px-20 lg:px-28">
                    <img class="w-full"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/steps/2/curved-dotted-line.svg"
                        alt="" />
                </div>

                <div class="relative grid grid-cols-1 text-center gap-y-12 md:grid-cols-3 gap-x-12">
                    <div>
                        <div
                            class="flex items-center justify-center w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full shadow">
                            <span class="text-xl font-semibold text-gray-700"> 1 </span>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold leading-tight text-black md:mt-10">Industries:</h3>
                        <p class="mt-4 text-base text-gray-600">Financial Institutions, Mining, Fintech, FMCG,
                            Healthcare, Manufacturing, Retail,
                            Telecommunication, Bi-Lateral and Multinational agencies</p>
                    </div>

                    <div>
                        <div
                            class="flex items-center justify-center w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full shadow">
                            <span class="text-xl font-semibold text-gray-700"> 2 </span>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold leading-tight text-black md:mt-10">Client Size:</h3>
                        <p class="mt-4 text-base text-gray-600">Large corporates, Small to Medium sized Enterprises
                            (SMEs), Start-ups etc</p>
                    </div>

                    <div>
                        <div
                            class="flex items-center justify-center w-16 h-16 mx-auto bg-white border-2 border-gray-200 rounded-full shadow">
                            <span class="text-xl font-semibold text-gray-700"> 3 </span>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold leading-tight text-black md:mt-10">Geographical Reach:
                        </h3>
                        <p class="mt-4 text-base text-gray-600">Africa and Worldwide</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="py-20 bg-white overflow-hidden">
        <div class="container mx-auto pb-64">
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-5/12 px-12 md:px-4 ml-auto mr-auto md:mt-64">
                    <div
                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                        <i class="fas fa-code-branch text-xl"></i>
                    </div>
                    <h3 class="text-3xl mb-2 font-semibold leading-normal text-clack">Unique Selling Proposition (USP)
                    </h3>
                    <p class="text-lg font-light leading-relaxed mt-2 mb-2 text-blueGray-400">
                        Specialised expertise in industry-specific challenges and opportunities.</p>
                    <p class="text-lg font-light leading-relaxed mt-0 mb-2 text-blueGray-400">Personalised service
                        tailored to each client&#39;s unique needs.</p>
                    <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-blueGray-400">Innovative solutions
                        driven by data and cutting-edge technology.</p>
                    {{-- <a
                        href="https://github.com/creativetimofficial/tailwind-starter-kit" target="_blank"
                        class="github-star mt-4 inline-block text-white font-bold px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-black active:bg-blueGray-600 uppercase text-sm shadow hover:shadow-lg">Github
                        Star</a>
                        --}}
                </div>
                <div class="w-full md:w-4/12 px-4 mx-auto mt-32 relative hidden sm:block">
                    <img src="{{ asset('assets/images/woman.png') }}" alt="Your Image Description"
                        class="w-full md:w-[55em] absolute top-[-150px] right-[30%] left-auto md:relative md:top-auto md:right-auto">
                </div>

            </div>
        </div>
    </section>
    <section class="pb-16 bg-black relative pt-32">
        <div class="-mt-20 top-0 bottom-auto left-0 right-0 w-full absolute" style="height: 80px;"><svg
                class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-black fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg></div>
        <div class="container mx-auto">
            <div
                class="flex flex-wrap justify-center bg-zinc-800 shadow-xl rounded-lg -mt-96 py-16 px-12 relative z-10 ">

                <div class="w-full text-center lg:w-8/12">

                    <h3 class="font-semibold text-gray-300 text-3xl">Do you want to partner with us ?</h3>
                    <p class="text-gray-400 text-lg leading-relaxed mt-4 mb-4">Are you interested in partnering with
                        us? Reach out through any of our available channels, and we will respond promptly.</p>
                    {{-- <div class="sm:block flex flex-col mt-10"><a
                            class="get-started text-white font-bold px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-2 bg-black active:bg-pink-600 uppercase text-sm shadow hover:shadow-lg ease-linear transition-all duration-150"
                            href="/learning-lab/tailwind-starter-kit/documentation/quick-start">Get started</a><a
                            href="https://github.com/creativetimofficial/tailwind-starter-kit" target="_blank"
                            class="github-star sm:ml-1 text-black font-bold px-6 py-4 rounded outline-none focus:outline-none mr-1 mb-1 bg-white active:bg-blueGray-600 uppercase text-sm shadow hover:shadow-lg"><i
                                class="fab fa-github text-lg mr-1"></i><span>Help With a Star</span></a>
                    </div> --}}
                    <div class="text-center mt-16"></div>
                </div>
            </div>
        </div>
    </section>

    <!--footer -->
    @include('widgets.footer')


    <!-- script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const marquee = document.querySelector('.animate-marquee');
            const cloneContents = marquee.innerHTML;
            marquee.innerHTML = cloneContents + cloneContents;
        });
    </script>
</body>

</html>
