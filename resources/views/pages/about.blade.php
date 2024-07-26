<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../output.css">
    <title>About Us</title>
</head>

<body>

    <!--header -->
    @include('widgets.navbar')
    <!--end -->

    <!--herp-->
    <section id="hero"
        class="relative py-12 lg:py-40 shadow-lg bg-black overflow-hidden lg:max-h-[500px] lg:min-h-[500px] pb-8">
        <div class="mx-auto px-6 sm:px-8 lg:px-12 max-w-7xl">
            <div class="text-center lg:text-left">
                <h1
                    class="text-4xl pt-10 lg:pt-56 sm:text-5xl lg:text-6xl xl:text-7xl font-semibold text-white leading-tight">
                    About Us</h1>
            </div>
        </div>
    </section>

    <section id="about" class="pb-20 bg-zinc-950 sm:-mt-80">
        <div class="container mx-auto px-6">
            <div class="flex flex-col-reverse justify-center lg:flex-row">
                <div class="lg:w-8/12 w-full md:w-8/12 px-4 text-center lg:mb-0 mb-12">
                    <div class="px-1 py-5 flex-auto">
                        <!-- Image goes here -->
                    </div>
                    <p class="text-gray-500 font-semibold sm:pt-72 text-1xl text-center lg:text-left">A & S Advisory
                        Services provide comprehensive and strategic HR Services to national and multinational
                        businesses of all sizes and industries. Our team of experienced HR professionals are dedicated
                        to assisting organizations optimize their Human capital in order to achieve their
                        business objectives through effective cutting-edge multinational and multicultural services.

                    </p>
                    <p class="text-gray-500 font-semibold pt-6 text-1xl text-center lg:text-left"> The CEO is an
                        accredited HR specialist with many years of experience across international organisations.
                        Our organisation has enjoyed steady growth based on special, quality satisfactory services
                        rendered to our clients. Our services are rendered both virtually and physically. </p>
                </div>

                <div class="lg:pt-12 lg:w-8/12 pt-6 w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-8 lg:mb-0">
                        <div class="px-4 py-5 flex-auto hidden sm:block">
                            <img src="{{ asset('assets/images/bg/about-4.jpg') }}" alt="Your Image"
                                class="rounded-lg shadow-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="h-screen dark:bg-zinc-950">
        <div
            class="items-center max-w-screen-xl px-4 py-8 mx-auto lg:grid lg:grid-cols-4 lg:gap-16 xl:gap-24 lg:py-24 lg:px-6">
            <div class="col-span-2 mb-8">
                <p class="text-lg font-medium text-gray-700 dark:text-gray-700">Our Core Values</p>
                <h2 class="mt-3 mb-4 text-3xl font-extrabold tracking-tight text-gray-900 md:text-3xl dark:text-white">
                    At the heart of our organization are five core values that guide our actions and decisions</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Our rigorous security and compliance
                    standards
                    are at the heart of all we do. We work tirelessly to protect you and your customers.</p>
                <div class="pt-6 mt-6 space-y-4 border-t border-gray-200 dark:border-gray-700">
                    <div>
                        <a href="#"
                            class="inline-flex items-center text-base font-medium text-white hover:text-gray-500 dark:text-white dark:hover:text-gray-500">
                            Explore Legality Guide
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                    <div>
                        <a href="#"
                            class="inline-flex items-center text-base font-medium text-white hover:text-gray-500 dark:text-white dark:hover:text-gray-500">
                            Visit the Trust Center
                            <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
                <div>
                    <svg fill="#ffffff" width="55px" height="55px" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" id="file-check" class="icon glyph">
                        <path
                            d="M18,7.41v7.35l-2,2-.88-.88a3,3,0,1,0-4.24,4.24l.88.88H4a2,2,0,0,1-2-2V4A2,2,0,0,1,4,2h8.59A2,2,0,0,1,14,2.59L17.41,6A2,2,0,0,1,18,7.41Zm-1.29,14.3,5-5a1,1,0,0,0-1.42-1.42L16,19.59l-2.29-2.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,1.42,0Z">
                        </path>
                    </svg>
                    <h3 class="mb-2 text-1xl font-bold dark:text-white">Integrity</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">We act honestly and uphold strong ethics.</p>
                </div>
                <div>
                    <svg fill="#ffffff" height="55px" width="55px" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 512 512" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M226.932,399.948c-19.96,18.445-47.567,22.576-72.053,10.786c-8.852-4.263-16.322-10.149-22.17-17.199l-33.341,73.744
                                        c-1.517,3.355,0.177,5.884,0.975,6.815c0.798,0.93,3.039,2.989,6.585,2.003l24.272-6.756c2.766-0.769,5.562-1.14,8.319-1.14
                                        c11.631,0,22.578,6.583,27.849,17.492l10.962,22.685c1.601,3.315,4.604,3.646,5.854,3.621c1.226-0.016,4.242-0.414,5.758-3.769
                                        l53.033-117.304C237.148,392.603,231.63,395.606,226.932,399.948z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M412.631,467.279l-33.341-73.744c-5.848,7.051-13.318,12.937-22.17,17.199c-24.487,11.79-52.093,7.659-72.053-10.786
                                        c-4.698-4.342-10.216-7.345-16.045-9.022l53.033,117.304c1.517,3.356,4.533,3.753,5.758,3.769c1.25,0.025,4.253-0.306,5.854-3.621
                                        l10.962-22.685c5.27-10.909,16.218-17.492,27.849-17.492c2.757,0,5.554,0.371,8.319,1.14l24.272,6.756
                                        c3.546,0.987,5.788-1.072,6.585-2.003C412.454,473.162,414.148,470.633,412.631,467.279z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M438.821,207.791c-27.69-18.96-36.282-56.605-19.56-85.702c10.051-17.491,4.82-34.775-3.427-45.118
                                    c-8.248-10.34-23.936-19.285-43.223-13.38c-32.084,9.827-66.877-6.925-79.201-38.141C286.002,6.686,269.227,0,256,0
                                    c-13.227,0-30.002,6.686-37.41,25.451c-12.324,31.217-47.114,47.967-79.201,38.141c-19.289-5.904-34.974,3.039-43.223,13.38
                                    c-8.247,10.343-13.478,27.625-3.427,45.118c16.722,29.096,8.13,66.742-19.56,85.702c-16.646,11.399-19.431,29.24-16.489,42.136
                                    c2.942,12.896,13.194,27.761,33.137,30.808c33.174,5.068,57.248,35.256,54.809,68.727c-1.468,20.121,10.745,33.423,22.662,39.163
                                    c11.918,5.739,29.932,6.995,44.748-6.698c12.322-11.387,28.141-17.083,43.953-17.083c15.818,0,31.628,5.693,43.952,17.083
                                    c14.818,13.694,32.833,12.438,44.75,6.698c11.917-5.739,24.129-19.041,22.662-39.162c-2.439-33.471,21.635-63.659,54.809-68.728
                                    c19.943-3.047,30.193-17.913,33.137-30.808C458.252,237.03,455.465,219.189,438.821,207.791z M256,335.923
                                    c-72.575,0-131.619-59.044-131.619-131.619S183.424,72.684,256,72.684c72.576,0,131.619,59.044,131.619,131.619
                                    C387.618,276.878,328.575,335.923,256,335.923z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M255.999,97.225c-59.044,0-107.079,48.036-107.079,107.079c0,59.043,48.034,107.079,107.079,107.079
                                        s107.079-48.036,107.079-107.079S315.043,97.225,255.999,97.225z M310.874,193.922l-66.642,48.675
                                        c-2.115,1.545-4.653,2.362-7.237,2.362c-0.666,0-1.335-0.054-2.001-0.164c-3.249-0.537-6.147-2.358-8.041-5.054l-19.934-28.382
                                        c-3.895-5.547-2.556-13.2,2.989-17.095c5.546-3.895,13.198-2.557,17.094,2.989l12.75,18.154l56.548-41.302
                                        c5.473-3.995,13.15-2.803,17.146,2.671C317.543,182.248,316.346,189.924,310.874,193.922z" />
                            </g>
                        </g>
                    </svg>
                    <h3 class="mb-2 text-1xl font-bold dark:text-white">Excellence</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">We strive for the highest standards and
                        continuous improvement.
                    </p>
                </div>
                <div>
                    <svg class="w-10 h-10 mb-2 text-white md:w-12 md:h-12 dark:text-white" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                        </path>
                    </svg>
                    <h3 class="mb-2 text-1xl font-bold dark:text-white">Client Focus</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">We prioritize clients' needs and
                        satisfaction.
                    </p>
                </div>
                <div>
                    <svg fill="#ffffff" width="55px" height="55px" viewBox="-4 0 19 19"
                        xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg">
                        <path
                            d="M10.328 6.83a5.903 5.903 0 0 1-1.439 3.64 2.874 2.874 0 0 0-.584 1v1.037a.95.95 0 0 1-.95.95h-3.71a.95.95 0 0 1-.95-.95V11.47a2.876 2.876 0 0 0-.584-1A5.903 5.903 0 0 1 .67 6.83a4.83 4.83 0 0 1 9.28-1.878 4.796 4.796 0 0 1 .38 1.88zm-.95 0a3.878 3.878 0 0 0-7.756 0c0 2.363 2.023 3.409 2.023 4.64v1.037h3.71V11.47c0-1.231 2.023-2.277 2.023-4.64zM7.83 14.572a.475.475 0 0 1-.475.476h-3.71a.475.475 0 0 1 0-.95h3.71a.475.475 0 0 1 .475.474zm-.64 1.262a.238.238 0 0 1-.078.265 2.669 2.669 0 0 1-3.274 0 .237.237 0 0 1 .145-.425h2.983a.238.238 0 0 1 .225.16z" />
                    </svg>
                    <h3 class="mb-2 text-1xl font-bold dark:text-white">Innovation</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">We embrace creativity and develop effective
                        solutions.</p>
                </div>
                <div>
                    <svg fill="#ffffff" height="55px" width="55px" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 455 455" xml:space="preserve">
                        <polygon
                            points="394.167,224.375 394.167,136.667 242.5,136.667 242.5,80 302.5,80 302.5,0 152.5,0 152.5,80 212.5,80
                            212.5,136.667 60.833,136.667 60.833,223.333 0,223.333 0,303.333 151.667,303.333 151.667,223.333 90.833,223.333 90.833,166.667
                            212.5,166.667 212.5,375 151.667,375 151.667,455 303.333,455 303.333,375 242.5,375 242.5,166.667 364.167,166.667
                            364.167,224.375 303.333,224.375 303.333,304.375 455,304.375 455,224.375 " />
                    </svg>
                    <h3 class="mb-2 text-1xl font-bold dark:text-white">Collaboration</h3>
                    <p class="font-light text-gray-500 dark:text-gray-400">We work together to achieve common goals.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- about us -->
    <section class="bg-gray-100">
        <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                <div class="max-w-lg">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">About Our Team</h2>
                    <p class="mt-4 text-gray-600 text-lg">Our team comprises fully qualified HR Consultants and
                        Specialist Coaches. Our
                        team also includes professionals who provide essential administrative support to our
                        clients.</p>
                    <p class="mt-4 text-gray-600 text-lg">
                        Every organisation’s valuable resource is its employees; hence A&amp;S believes that in
                        our capacity as HR Advisory Consultants, we must be able to leverage this force for
                        the benefit of our clients whom we serve.
                    </p>
                    <p class="mt-4 text-gray-600 text-lg">
                        We understand that learning and
                        development occur daily at work and that our staff can only develop and excel when
                        the required people element is in a top-notch state in the form of expertise,
                        experience, and most importantly, passion for the work done. Hence, we work
                        SMART and develop our staff for better and improved service delivery.
                    </p>
                </div>
                <div class="mt-12 md:mt-0">
                    <img src="https://images.unsplash.com/photo-1531973576160-7125cd663d86" alt="About Us Image"
                        class="object-cover rounded-lg shadow-md">
                </div>
            </div>
        </div>
    </section>

    <!-- about us: fact -->
    <section class="relative lg:h-64">
        <img src="{{ asset('assets/images/bg/mi-vi.jpg') }}" alt="Partnership"
            class="block w-full h-full object-cover lg:absolute inset-0">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="absolute inset-0 flex flex-col justify-center items-center">
            <h1 class="text-white text-4xl md:text-5xl lg:text-6xl font-bold text-center">The Fact:</h1>
            <p class="text-white text-lg md:text-xl lg:text-2xl font-light text-center">the performance of an
                organization largely depends on the talent and
                expertise tapped into it through the management of such talents to adjust <br> the day-to-
                day market changes to suit its mission and culture thereby maximising their potential
                and increasing organisational productivity. <br> <span class="font-semibold text-red-400"> At A&amp;S
                    we seek to make this a real
                    achievement.</span></p>
        </div>
    </section>
    <!-- end -->

    <!-- team & board -->

    <section id="our-team" class="bg-black py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-extrabold text-white text-center pb-20 text-primary">Meet Our Team & Board of
                Directors</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Team Member 1 -->
                <div class="col-span-1 md:col-span-3 bg-zinc-950 rounded-lg shadow-md p-4 my-4 text-center">
                    <img src="https://spacema-dev.com/elevate/assets/images/team/5.jpg" alt="Team Member 1"
                        class="w-1/4 mx-auto rounded-full mb-2">
                    <h3 class="text-lg text-white font-semibold mb-1">Ann Akua Buruwaa Obeng Ababio</h3>
                    <p class="text-gray-500"> CEO / Board Chairman</p>

                    <button class="open-modal bg-blue-500 text-white rounded p-2 mt-4"
                        data-target="#myModal1">i</button>
                </div>

                <!-- Team Member 2 -->
                <div class="bg-zinc-950 rounded-lg shadow-md p-4 my-4 text-center">
                    <img src="{{ asset('assets/images/team/benjamin-simmons.jpeg') }}" alt="Team Member 2"
                        class="w-3/4 mx-auto rounded-full mb-2">
                    <h3 class="text-lg text-white font-semibold mb-1">Benjamin Kwesi Simmons</h3>
                    <p class="text-gray-500">Director Marketing and Business Development</p>
                    <div class="flex justify-center space-x-4 mt-4">
                        <button
                            class="open-modal bg-blue-500 text-white rounded-full p-2 flex items-center justify-center"
                            data-target="#linkedinModal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.272c-.966 0-1.75-.783-1.75-1.75s.784-1.75 1.75-1.75 1.75.783 1.75 1.75-.784 1.75-1.75 1.75zm13.5 11.272h-3v-5.306c0-3.178-3-2.932-3 0v5.306h-3v-10h3v1.389c1.396-2.586 6-2.777 6 2.474v6.137z" />
                            </svg>
                        </button>
                        <button
                            class="open-modal bg-black-500 text-white rounded-full p-2 flex items-center justify-center"
                            data-target="#bioModal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M12 2c-5.514 0-10 4.486-10 10s4.486 10 10 10 10-4.486 10-10-4.486-10-10-10zm0 3c1.306 0 2.417.835 2.83 2h-5.66c.413-1.165 1.524-2 2.83-2zm-7 7c0-1.838 1.019-3.443 2.526-4.31-.343.739-.526 1.561-.526 2.432v1.614c0 .423.125.818.344 1.148-.908.737-1.344 1.885-1.344 3.116 0 2.281 1.719 4.148 4 4.148 2.281 0 4-1.867 4-4.148 0-1.231-.436-2.379-1.344-3.116.219-.33.344-.725.344-1.148v-1.614c0-.871-.183-1.693-.526-2.432 1.507.867 2.526 2.472 2.526 4.31v1.614c0 .871-.206 1.811-.576 2.61-.065.135-.123.276-.184.419-.632 1.511-2.029 2.553-3.66 2.553-1.631 0-3.028-1.042-3.66-2.553-.061-.143-.119-.284-.184-.419-.37-.799-.576-1.679-.576-2.61v-1.614zm7 8c1.306 0 2.417-.835 2.83-2h-5.66c.413 1.165 1.524 2 2.83 2zm2.526-5c.342-.739.526-1.561.526-2.432v-1.614c0-.423-.125-.818-.344-1.148.908-.737 1.344-1.885 1.344-3.116 0-2.281-1.719-4.148-4-4.148s-4 1.867-4 4.148c0 1.231.436 2.379 1.344 3.116-.219.33-.344.725-.344 1.148v1.614c0 .871.183 1.693.526 2.432-1.507-.867-2.526-2.472-2.526-4.31v-1.614c0-1.838 1.019-3.443 2.526-4.31.343.739.526 1.561.526 2.432v1.614c0 .423-.125.818-.344 1.148.908.737 1.344 1.885 1.344 3.116 0 2.281-1.719 4.148-4 4.148-2.281 0-4-1.867-4-4.148 0-1.231.436-2.379 1.344-3.116-.219-.33-.344-.725-.344-1.148v-1.614c0-.871-.183-1.693-.526-2.432 1.507.867 2.526 2.472 2.526 4.31v1.614c0 .871-.183 1.693-.526 2.432 1.507.867 2.526 2.472 2.526 4.31v1.614z" />
                            </svg>
                        </button>
                    </div>
                </div>



                <!-- Team Member 3 -->
                <div class="bg-zinc-950 rounded-lg shadow-md p-4 my-4 text-center">
                    <img src="{{ asset('assets/images/team/akosua-ababio.jpeg') }}" alt="Team Member 3"
                        class="w-3/4 mx-auto rounded-full mb-2">
                    <h3 class="text-lg text-white font-semibold mb-1">Akosua Constance Ababio</h3>
                    <p class="text-gray-500">Non-Executive Director</p>
                    <button class="open-modal bg-blue-500 text-white rounded p-2 mt-4"
                        data-target="#myModal7">i</button>
                </div>

                <!-- Team Member 4 -->
                <div class="bg-zinc-950 rounded-lg shadow-md p-4 my-4 text-center">
                    <img src="https://spacema-dev.com/elevate/assets/images/team/5.jpg" alt="Team Member 4"
                        class="w-3/4 mx-auto rounded-full mb-2">
                    <h3 class="text-lg text-white font-semibold mb-1">Sarah-Jane Danchie</h3>
                    <p class="text-gray-500">Executive Director</p>

                    <button class="open-modal bg-blue-500 text-white rounded p-2 mt-4"
                        data-target="#myModal6">i</button>
                </div>

                <!-- Team Member 5 -->
                <div class="bg-zinc-950 rounded-lg shadow-md p-4 my-4 text-center">
                    <img src="https://spacema-dev.com/elevate/assets/images/team/5.jpg" alt="Team Member 5"
                        class="w-3/4 mx-auto rounded-full mb-2">
                    <h3 class="text-lg text-white font-semibold mb-1">Mrs Clara Fosu Quaye</h3>
                    <p class="text-gray-500">Non-Executive Director</p>
                    <button class="open-modal bg-blue-500 text-white rounded p-2 mt-4"
                        data-target="#myModal5">i</button>
                </div>

                <!-- Team Member 6 -->
                <div class="bg-zinc-950 rounded-lg shadow-md p-4 my-4 text-center">
                    <img src="{{ asset('assets/images/team/samuel-opoku.jpeg') }}" alt="Team Member 6"
                        class="w-3/4 mx-auto rounded-full mb-2">
                    <h3 class="text-lg text-white font-semibold mb-1">Mr Samuel Opoku</h3>
                    <p class="text-gray-500">Executive Director</p>

                    <button class="open-modal bg-blue-500 text-white rounded p-2 mt-4"
                        data-target="#myModal4">i</button>
                </div>

                <!-- Team Member 7 -->
                <div class="bg-zinc-950 rounded-lg shadow-md p-4 my-4 text-center">
                    <img src="{{ asset('assets/images/team/hardi-kamara.jpeg') }}" alt="Team Member 6"
                        class="w-3/4 mx-auto rounded-full mb-2">
                    <h3 class="text-lg text-white font-semibold mb-1">Hardi Kamara</h3>
                    <p class="text-gray-500">Executive Director</p>

                    <button class="open-modal bg-blue-500 text-white rounded p-2 mt-4"
                        data-target="#myModal3">i</button>
                </div>

                <!-- Team Member 8 -->
                <div class="bg-zinc-950 rounded-lg shadow-md p-4 my-4 text-center">
                    <img src="{{ asset('assets/images/team/faez.jpeg') }}" alt="Team Member 6"
                        class="w-3/4 mx-auto rounded-full mb-2">
                    <h3 class="text-lg text-white font-semibold mb-1">Faez Ibrahim-Adam</h3>
                    <p class="text-gray-500">Non-Executive Director</p>

                    <button class="open-modal bg-blue-500 text-white rounded p-2 mt-4"
                        data-target="#myModal8">i</button>
                </div>
            </div>
        </div>
    </section>






    <!-- modals -->
    @include('widgets.modals')
    <!-- footer -->
    @include('widgets.footer')


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var openModalBtns = document.querySelectorAll('[data-target]');
            var closeModalBtns = document.querySelectorAll('.close-modal');
            var modals = document.querySelectorAll('.modal');

            function openModal(target) {
                document.querySelector(target).style.display = "flex";
            }

            function closeModal(target) {
                document.querySelector(target).style.display = "none";
            }

            openModalBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var target = btn.getAttribute('data-target');
                    openModal(target);
                });
            });

            closeModalBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var target = btn.closest('.modal');
                    closeModal("#" + target.id);
                });
            });

            window.addEventListener('click', function(event) {
                modals.forEach(function(modal) {
                    if (event.target === modal) {
                        closeModal("#" + modal.id);
                    }
                });
            });
        });
    </script>
</body>

</html>
