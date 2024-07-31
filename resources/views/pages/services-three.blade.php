<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reward Management</title>
    <link rel="stylesheet" href="../output.css">
</head>

<body>
    <!--navbar -->
    @include('widgets.navbar')

    <!--hero sevtion -->
    <section class=" relative py-12 lg:py-40 shadow-lg overflow-hidden lg:max-h-[500px] lg:min-h-[500px] pb-8">
        <img src="{{ asset('assets/images/bg/reward-1.jpg') }}" alt="Partnership"
            class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="absolute inset-0 flex flex-col justify-center items-center">
        </div>
    </section>

    <section id="service" class="bg-zinc-950 sm:-mt-40">
        <div class="container mx-auto px-6">
            <div class="flex flex-col justify-center lg:flex-row lg:justify-start">
                <div class="lg:pt-12 lg:w-8/12 pt-6 w-full md:w-4/12 px-4">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-8 lg:mb-0">
                        <div class="px-4 py-10 text-white flex-auto bg-black shadow-lg">
                            <h1 class="font-sans text-3xl">Reward Management</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full mx-auto py-10 bg-gray-50 dark:bg-black dark:text-white">
        <div class="container mx-auto px-4">
            <!-- First Section -->
            <div class="flex flex-col lg:flex-row gap-4 lg:gap-8 items-center">
                <div class="lg:w-1/2 w-full">
                    <img class="w-full rounded-md" src="{{ asset('assets/images/bg/reward-4.jpg') }}" alt="billboard image" />
                </div>
                <div class="lg:w-1/2 w-full bg-gray-100 dark:bg-zinc-950 dark:text-zinc-400 p-4 rounded-md">
                    <h2 class="text-3xl font-semibold text-zinc-950 dark:text-white">Compensation and Benefits Advisory Services</h2>
                    <p class="text-md mt-4">
                        Our Compensation and Benefits Advisory Services are designed to help you develop and implement strategies that attract, motivate, and retain top talent.
                        We analyze market trends, benchmark against industry standards, and assess your current compensation and benefits offerings.
                    </p>
                    <p class="text-md mt-4">
                        Our experts provide tailored recommendations to ensure your packages are competitive, equitable, and aligned with your organizational goals.
                        By balancing employee satisfaction with cost-effectiveness, we help you create a compensation and benefits structure that supports your business strategy and fosters a high-performance culture.
                    </p>
                </div>
            </div>

            <!-- Second Section -->
            <div class="flex flex-col lg:flex-row gap-4 lg:gap-8 items-center mt-6">
                <div class="hidden md:block lg:w-1/2 w-full">
                    <img class="w-full rounded-md" src="{{ asset('assets/images/bg/reward-5.jpg') }}" alt="billboard image" />
                </div>
                <div class="lg:w-1/2 w-full bg-gray-100 dark:bg-zinc-950 dark:text-zinc-400 p-4 rounded-md">
                    <h2 class="text-3xl font-semibold text-zinc-950 dark:text-white">Development of Salary Structures</h2>
                    <p class="text-md mt-4">
                        Developing robust and transparent salary structures is essential for maintaining fairness and competitiveness within your organization.
                        Our services include comprehensive job evaluations, market salary benchmarking, and the creation of salary bands that reflect the value of each role.
                    </p>
                    <p class="text-md mt-4">
                        We ensure that your salary structures are aligned with your organization's strategic objectives and are flexible enough to adapt to market changes.
                        By establishing clear and consistent salary guidelines, we help you enhance employee satisfaction, reduce turnover, and attract high-caliber candidates.
                    </p>
                </div>
                <div class="md:hidden lg:w-1/2 w-full">
                    <img class="w-full rounded-md" src="{{ asset('assets/images/bg/reward-5.jpg') }}" alt="billboard image" />
                </div>
            </div>

            <!-- Third Section -->
            <div class="flex flex-col lg:flex-row gap-4 lg:gap-8 items-center mt-6">
                <div class="lg:w-1/2 w-full">
                    <img class="w-full rounded-md" src="{{ asset('assets/images/bg/payroll.jpg') }}" alt="billboard image" />
                </div>
                <div class="lg:w-1/2 w-full bg-gray-100 dark:bg-zinc-950 dark:text-zinc-400 p-4 rounded-md">
                    <h2 class="text-3xl font-semibold text-zinc-950 dark:text-white">Payroll Services</h2>
                    <p class="text-md mt-4">
                        Our Payroll Services are designed to streamline your payroll processing and ensure compliance with all relevant regulations.
                        We offer comprehensive payroll management solutions that include accurate calculations, timely disbursements, and detailed reporting.
                    </p>
                    <p class="text-md mt-4">
                        By leveraging our expertise, you can focus on your core business while we handle the complexities of payroll administration.
                        Our goal is to provide you with a seamless payroll experience that enhances efficiency and reduces the risk of errors.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- footer -->
    <footer class="relative bg-black pt-8 pb-6">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl font-semibold">Let's keep in touch!</h4>
                    <h5 class="text-lg mt-0 mb-2 text-gray-400">
                        Find us on any of these platforms, we respond 1-2 business days.
                    </h5>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                            <span class="block uppercase text-gray-300 text-sm font-semibold mb-2">Useful Links</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-400 hover:text-gray-100 font-semibold block pb-2 text-sm"
                                        href="">About Us</a>
                                </li>
                                <li>
                                    <a class="text-gray-400 hover:text-gray-100 font-semibold block pb-2 text-sm"
                                        href="">Services</a>
                                </li>
                                <li>
                                    <a class="text-gray-400 hover:text-gray-100 font-semibold block pb-2 text-sm"
                                        href="">Contact Us</a>
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
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-gray-600 font-semibold py-1">
                        Copyright © 2024 Ann and Sons
                        <a href="" class="text-gray-600 hover:text-gray-900">Limited</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
