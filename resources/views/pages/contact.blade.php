<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../output.css">
    <title>Conatct Us </title>
</head>
<body>
    <!--navbar -->
    @include('widgets.navbar')

    <!--hero sevtion -->
    <section class=" relative py-12 lg:py-40 shadow-lg overflow-hidden lg:max-h-[500px] lg:min-h-[500px] pb-8">
        <img src="{{ asset('assets/images/bg/contact.jpg') }}" alt="Partnership"
            class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="absolute inset-0 flex flex-col justify-center items-center">
            <h1 class="text-white text-6xl font-bold text-center">Contact Us</h1>
            <p class="text-white text-2xl font-light text-center">Get in touch with our team </p>
        </div>
    </section>
    <!-- contact -->
    <div class="bg-zinc-950 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-gray-100 font-semibold tracking-wide uppercase">Location</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-400 sm:text-4xl">
                    Our Office
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    For more inquiries, you can reach out to us through any of our available channels, and we will respond promptly.
                </p>
            </div>

            <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-white text-black">
                                <!-- Heroicon name: globe-alt -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                                </svg>

                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-100">
                                Address
                            </dt>
                            <dd class="mt-2 text-base text-gray-400">
                                Nganayara Avenue, Adjiringano,<br>
                                GD-2169923, Accra, <br>
                                Ghana, West Africa.
                            </dd>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-white text-black">
                                <!-- Heroicon name: phone -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>

                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-100">
                                Phone number
                            </dt>
                            <dd class="mt-2 text-base text-gray-400">
                                0544350550/ 0266472710
                            </dd>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-white text-black">
                                <!-- Heroicon name: mail -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>

                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-100">
                                Email
                            </dt>
                            <dd class="mt-2 text-base text-gray-400">
                                info@annandsonslimited.com
                            </dd>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-white text-black">
                                <!-- Heroicon name: clock -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                            </div>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-100">
                                Officers Hours
                            </dt>
                            <dd class="mt-2 text-base text-gray-400">
                                Monday - Friday: 9am to 5pm<br>
                            </dd>
                        </div>
                    </div>
                </dl>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class="relative bg-black pt-8 pb-6">
        <div
          class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
          style="height: 80px;"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >

          </svg>
        </div>
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4">
              <h4 class="text-3xl font-semibold">Let's keep in touch!</h4>
              <h5 class="text-lg mt-0 mb-2 text-gray-400">
                Find us on any of these platforms, we respond 1-2 business days.
              </h5>
              <div class="mt-6">
                <button
                  class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                  type="button"
                >
                  <i class="flex fab fa-twitter"></i></button
                ><button
                  class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                  type="button"
                >
                  <i class="flex fab fa-facebook-square"></i></button
                ><button
                  class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                  type="button"
                >
                  <i class="flex fab fa-dribbble"></i></button
                ><button
                  class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                  type="button"
                >
                  <i class="flex fab fa-github"></i>
                </button>
              </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
              <div class="flex flex-wrap items-top mb-6">
                <div class="w-full lg:w-4/12 px-4 ml-auto">
                  <span
                    class="block uppercase text-gray-300 text-sm font-semibold mb-2"
                    >Useful Links</span
                  >
                  <ul class="list-unstyled">
                    <li>
                      <a
                        class="text-gray-400 hover:text-gray-100 font-semibold block pb-2 text-sm"
                        href=""
                        >About Us</a
                      >
                    </li>
                    <li>
                      <a
                        class="text-gray-400 hover:text-gray-100 font-semibold block pb-2 text-sm"
                        href=""
                        >Services</a
                      >
                    </li>
                    <li>
                      <a
                        class="text-gray-400 hover:text-gray-100 font-semibold block pb-2 text-sm"
                        href=""
                        >Contact Us</a
                      >
                    </li>

                  </ul>
                </div>
                {{-- <div class="w-full lg:w-4/12 px-4">
                  <span
                    class="block uppercase text-gray-300 text-sm font-semibold mb-2"
                    >Other Resources</span
                  >
                  <ul class="list-unstyled">

                    <li>
                      <a
                        class="text-gray-400 hover:text-gray-100 font-semibold block pb-2 text-sm"
                        href="https://creative-tim.com/terms"
                        >Terms &amp; Conditions</a
                      >
                    </li>
                    <li>
                      <a
                        class="text-gray-400 hover:text-gray-100 font-semibold block pb-2 text-sm"
                        href="https://creative-tim.com/privacy"
                        >Privacy Policy</a
                      >
                    </li>

                  </ul>
                </div> --}}
              </div>
            </div>
          </div>
          <hr class="my-6 border-gray-400" />
          <div
            class="flex flex-wrap items-center md:justify-between justify-center"
          >
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
              <div class="text-sm text-gray-600 font-semibold py-1">
                Copyright © 2024 Ann and Sons
                <a
                  href=""
                  class="text-gray-600 hover:text-gray-900"
                  >Limited</a
                >.
              </div>
            </div>
          </div>
        </div>
      </footer>

</body>
</html>
