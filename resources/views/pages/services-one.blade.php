<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../output.css">
    <title>Services</title>
</head>
<body>
    <!-- nav -->
    @include('widgets.navbar')
    <!--hero -->
        <!--hero sevtion -->
        <section class=" relative py-12 lg:py-40 shadow-lg overflow-hidden lg:max-h-[500px] lg:min-h-[500px] pb-8">
            <img src="{{ asset('assets/images/bg/service-3.jpg') }}" alt="Partnership"
                class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-70"></div>
            <div class="absolute inset-0 flex flex-col justify-center items-center">

            </div>
        </section>

        <section id="service" class=" bg-zinc-950 sm:-mt-40">
            <div class="container mx-auto px-6">
                <div class="flex flex-col justify-center lg:flex-row lg:justify-start">
                    <div class="lg:pt-12 lg:w-8/12 pt-6 w-full md:w-4/12 px-4">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-8 lg:mb-0">
                            <div class="px-4 py-10 text-white flex-auto bg-black shadow-lg">
                                <h1 class=" font-sans text-3xl">
                                    People and Organisational Performance
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full mx-auto py-10 bg-gray-50 dark:bg-black dark:text-white">
            <div class="xl:w-[80%] sm:w-[85%] xs:w-[90%] mx-auto flex flex-col md:flex-row lg:gap-4 xs:gap-2 justify-center lg:items-stretch md:items-center mt-4">
                <div class="lg:w-[50%] w-full">
                    <img class="rounded-lg w-full" src="{{ asset('assets/images/bg/organisational-performance-2.jpg') }}" alt="billboard image" />
                </div>
                <div class="lg:w-[50%] w-full bg-gray-100 dark:bg-zinc-950 dark:text-zinc-400 p-4 rounded-md mt-4 md:mt-0">
                    <h2 class="text-2xl md:text-3xl font-semibold text-zinc-950 dark:text-white">People</h2>
                    <p class="text-sm md:text-md mt-4">At the heart of every successful organization lies its people. Our dedicated team of experts works closely with your business to attract, develop, and retain top talent. We provide comprehensive training programs and personalized coaching that empower employees to reach their full potential.</p>
                    <br>
                    <p class="text-sm md:text-md">By fostering a positive and inclusive workplace culture, we ensure that your team is motivated, engaged, and aligned with your company’s values and goals. Our tailored solutions are designed to enhance collaboration, drive innovation, and create a supportive environment where every individual can thrive.</p>
                </div>
            </div>
            <!-- col-2 -->
            <div class="xl:w-[80%] sm:w-[85%] xs:w-[90%] mx-auto flex flex-col md:flex-row lg:gap-4 xs:gap-2 justify-center lg:items-stretch md:items-center mt-6">
                <!-- Mobile image -->
                <div class="w-full md:hidden">
                    <img class="rounded-lg w-full" src="{{ asset('assets/images/bg/organisational-performance.jpg') }}" alt="billboard image" />
                </div>
                <!-- Text content -->
                <div class="lg:w-[50%] w-full bg-gray-100 dark:bg-zinc-950 dark:text-zinc-400 p-4 rounded-md mt-4 md:mt-0">
                    <h2 class="text-2xl md:text-3xl font-semibold text-zinc-950 dark:text-white">Organisational Performance</h2>
                    <p class="text-sm md:text-md mt-4">Optimizing organizational performance is key to achieving sustainable growth and success. We offer strategic consulting services that focus on improving efficiency, productivity, and overall effectiveness. Our approach includes a thorough analysis of your current processes, identifying areas for improvement, and implementing innovative solutions that streamline operations.</p>
                    <br>
                    <p class="text-sm md:text-md">By leveraging data-driven insights and best practices, we help you build a resilient and adaptable organization. Whether it’s through process reengineering, performance management, or technology integration, our goal is to enhance your organizational capabilities and drive measurable results.</p>
                </div>
                <!-- Desktop image -->
                <div class="hidden md:block lg:w-[50%] w-full">
                    <img class="rounded-lg w-full" src="{{ asset('assets/images/bg/organisational-performance.jpg') }}" alt="billboard image" />
                </div>
            </div>
        </section>


          <!-- Photo by '@candjstudios' & '@framesforyourheart' on Unsplash -->

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
              {{-- <div class="mt-6">
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
              </div> --}}
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
