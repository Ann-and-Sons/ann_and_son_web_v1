<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logos/favicon.ico') }}">
    <link rel="stylesheet" href="./output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Ann & Sons Ltd</title>
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
                        src="{{ asset('assets/images/dart.jpg') }}" />
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
                                            <b>Mission :</b> To empower businesses and organisations with strategic
                                            insights and
                                            innovative solutions for sustainable growth.
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-white mr-3">
                                            <i class="fas fa-bolt"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="text-sm text-gray-400">
                                            <b>Vision :</b> To be Africa’s leading advisory firm recognised for
                                            excellence and trusted
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
                    <i class="fas fa-cog text-xl"></i>
                </div>
                <h3 class="text-3xl mb-2 text-white font-semibold leading-normal">
                    <span class="text-transparent bg-clip-text bg-white">
                        Services </span>
                </h3>
                <p class=" text-2xl font-semibold leading-relaxed mt-4 mb-4 text-gray-400">
                    We partner with you to create an organisation that makes the best of your people so you can realise your strategy today and build on your performance in the future.
                </p>

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
                    <a href="/pages/services-one" class="font-bold text-gray-500 mt-8">Read More </a>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!--target market -->
    <section class="py-10 bg-white sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Our Target Market</h2>
                <p class="max-w-lg mx-auto mt-4 text-base leading-relaxed text-gray-600">Our target market consists of
                    organizations seeking expert HR solutions to optimize talent management,
                    improve workplace culture, and drive business growth.</p>
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
    <!-- why parnter with us -->
    <section class="py-20 bg-white overflow-hidden">
        <div class="container mx-auto pb-10">
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-5/12 px-12 md:px-4 ml-auto mr-auto md:mt-64">
                    <div
                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                        <i class="fas fa-handshake text-xl"></i>
                    </div>
                    <h3 class="text-3xl mb-2 font-semibold leading-normal text-clack">Why Partner with us ?
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

    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center bg-zinc-800 shadow-xl rounded-lg py-16 px-12 relative z-10 ">

            <div class="w-full text-center lg:w-8/12">

                <h3 class="font-semibold text-gray-300 text-3xl">Do you want to partner with us ?</h3>
                <p class="text-gray-400 text-lg leading-relaxed mt-4 mb-4">Are you interested in partnering with
                    us? Reach out to us on our LinkedIn channel, and we will respond promptly.</p>

                <div class="text-center mt-16"></div>
            </div>
        </div>
    </div>

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
                <div class="px-4 py-2 partner-logo">
                    <img src="{{ asset('assets/images/partners/venture-capital.jpeg') }}" alt="Partner Logo"
                        class="max-h-16">
                </div>
                <!-- End repeat block -->
            </div>
        </div>
    </section>

    <!-- stats -->
    <section class="py-10 bg-zinc-900 relative">
        <div class="absolute inset-0 bg-dots opacity-10"></div>
        <div class="max-w-6xl px-5 mx-auto mt-28 mb-10 text-center">
            <div>
                <h2 class="flex justify-start text-6xl text-white font-semibold p-6">Key Figures </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div
                    class="card bg-black shadow-md rounded-lg p-6 flex flex-col items-center mb-2 transition-transform transform hover:scale-105">
                    <svg fill="#ffffff" height="50px" width="50px" viewBox="0 0 330 330"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="XMLID_530_">
                            <g id="XMLID_531_">
                                <path id="XMLID_532_"
                                    d="M115,147.75c20.389,0,38.531-9.78,50-24.889c11.469,15.109,29.611,24.889,50,24.889
                                    c34.601,0,62.75-28.149,62.75-62.75S249.601,22.25,215,22.25c-20.389,0-38.531,9.78-50,24.889
                                    C153.531,32.03,135.389,22.25,115,22.25c-34.601,0-62.75,28.149-62.75,62.75S80.399,147.75,115,147.75z M215,52.25
                                    c18.059,0,32.75,14.691,32.75,32.75s-14.691,32.75-32.75,32.75S182.25,103.059,182.25,85S196.941,52.25,215,52.25z M115,52.25
                                    c18.059,0,32.75,14.691,32.75,32.75s-14.691,32.75-32.75,32.75S82.25,103.059,82.25,85S96.941,52.25,115,52.25z" />
                            </g>
                            <g id="XMLID_536_">
                                <path id="XMLID_782_"
                                    d="M215,177.75c-17.373,0-34.498,3.942-50.022,11.44c-15.122-7.327-32.078-11.44-49.978-11.44
                                    c-63.411,0-115,51.589-115,115c0,8.284,6.716,15,15,15h200h100c8.284,0,15-6.716,15-15C330,229.339,278.411,177.75,215,177.75z
                                    M31.325,277.75c7.106-39.739,41.923-70,83.675-70s76.569,30.261,83.675,70H31.325z M229.021,277.75
                                    c-3.45-26.373-15.873-49.96-34.092-67.597c6.539-1.583,13.277-2.403,20.07-2.403c41.751,0,76.569,30.261,83.675,70H229.021z" />
                            </g>
                        </g>
                    </svg>
                    <h2 class="text-xl text-white font-bold mb-2">30+</h2>
                    <p class="text-white mb-4">Partners</p>
                </div>

                <div
                    class="card bg-black shadow-md rounded-lg p-6 flex flex-col items-center mb-2 transition-transform transform hover:scale-105">
                    <svg fill="#ffffff" height="50px" width="50px" version="1.1" id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 65.456 65.456" xml:space="preserve">
                        <g>
                            <path d="M57.427,5.031C53.76,1.646,49.895,0,45.611,0c-5.052,0-9.663,2.314-14.123,4.553c-4.012,2.014-7.801,3.916-11.432,3.916
                                c-2.742,0-5.203-1.092-7.745-3.438c-0.875-0.808-2.146-1.021-3.238-0.543c-1.023,0.448-1.698,1.425-1.78,2.526
                                c-0.147,0.354-0.23,0.742-0.23,1.149v54.293c0,1.657,1.343,3,3,3s3-1.343,3-3V44.807c2.222,1.1,4.536,1.66,6.992,1.66
                                c0,0,0.001,0,0.002,0c5.051-0.001,9.662-2.314,14.122-4.553c4.013-2.014,7.803-3.915,11.434-3.915c2.742,0,5.203,1.092,7.744,3.438
                                c0.875,0.81,2.146,1.023,3.238,0.544c1.092-0.478,1.797-1.557,1.797-2.748V7.235C58.392,6.397,58.042,5.599,57.427,5.031z
                                M52.392,33.534C50.236,32.506,47.989,32,45.613,32c-5.052,0-9.664,2.314-14.125,4.553c-4.012,2.013-7.801,3.914-11.431,3.915
                                h-0.001c-2.393,0-4.572-0.833-6.778-2.605V12.934c2.156,1.029,4.403,1.535,6.779,1.535c5.052,0,9.664-2.314,14.123-4.553
                                C38.192,7.902,41.982,6,45.612,6c2.395,0,4.574,0.833,6.78,2.605V33.534z" />
                        </g>
                    </svg>
                    <h2 class="text-xl text-white font-bold mb-2">20+</h2>
                    <p class="text-white mb-4">Countries </p>
                </div>

                <div
                    class="card bg-black shadow-md rounded-lg p-6 flex flex-col items-center mb-2 transition-transform transform hover:scale-105">
                    <?xml version="1.0" encoding="iso-8859-1"?>
                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                    <svg fill="#ffffff" height="50px" width="50px" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 512 512" xml:space="preserve">
                        <g>
                            <g>
                                <polygon
                                    points="357.871,391.592 287.48,381.364 256,317.577 224.52,381.364 154.129,391.592 205.064,441.242 193.04,511.349
                                256,478.249 318.96,511.349 306.936,441.242 		" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <polygon
                                    points="512,346.347 451.058,337.491 423.805,282.269 396.55,337.491 335.608,346.347 379.706,389.332 369.296,450.028
                                423.805,421.372 478.313,450.028 467.902,389.332 		" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <polygon
                                    points="176.392,346.347 115.45,337.491 88.195,282.269 60.942,337.491 0,346.347 44.098,389.332 33.688,450.028
                                88.195,421.372 142.704,450.028 132.294,389.332 		" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M308.507,182.256c8.547-11.146,13.643-25.07,13.643-40.17c0-36.476-29.675-66.15-66.15-66.15s-66.15,29.674-66.15,66.15
                                c0,15.1,5.096,29.024,13.644,40.17c-26.469,9.845-45.379,35.362-45.379,65.219v59.184h195.771v-59.184
                                C353.886,217.619,334.976,192.102,308.507,182.256z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect x="240.839" y="0.651" width="30.321" height="50.019" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect x="158.511" y="34.748"
                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 8.6121 140.3069)" width="30.321"
                                    height="50.019" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect x="114.562" y="126.923" width="50.019" height="30.321" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <rect x="347.416" y="126.923" width="50.019" height="30.321" />
                            </g>
                        </g>
                        <g>
                            <g>

                                <rect x="313.313" y="44.603"
                                    transform="matrix(0.7071 -0.7071 0.7071 0.7071 56.8332 256.7344)" width="50.019"
                                    height="30.321" />
                            </g>
                        </g>
                    </svg>
                    <h2 class="text-xl text-white font-bold mb-2">100%</h2>
                    <p class="text-white mb-4">Customer satisfaction</p>
                </div>

                <div
                    class="card bg-black shadow-md rounded-lg p-6 flex flex-col items-center mb-2 transition-transform transform hover:scale-105">
                    <svg fill="#ffffff" width="50px" height="50px" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19 4h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm-2 8v2H7v-3h10v1zm2-3H5V7h14v2z" />
                    </svg>
                    <h2 class="text-xl text-white font-bold mb-2">25+</h2>
                    <p class="text-white mb-4">Years of experience </p>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="pb-16 bg-black relative pt-32">
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
                        us? Reach out to us on our LinkedIn channel, and we will respond promptly.</p>

                    <div class="text-center mt-16"></div>
                </div>
            </div>
        </div>
    </section> --}}

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
    <style>
        .bg-dots {
            background-image: radial-gradient(white 1px, transparent 1px);
            background-size: 20px 20px;
        }
    </style>
</body>

</html>
