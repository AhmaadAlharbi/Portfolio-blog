@extends('layouts.master')
@section('content')
<!-- PRELOADER -->
<!-- <div id="preloader">
    <div class="loader_line"></div>
</div> -->
<!-- /PRELOADER -->

<div class="bg-homeBg dark:bg-homeTwoBg-dark min-h-screen bg-no-repeat bg-center bg-cover bg-fixed md:pb-16 w-full">
    @include('layouts.header')
    <div class="container grid grid-cols-12 md:gap-10 justify-between lg:mt-[220px]">
        <!-- sidber personal info -->
        @include('layouts.sidebar_personal_info')
        <div class="col-span-12 lg:col-span-8">
            <!-- navbar -->
            @include('layouts.navbar')
            <!-- portfolio section start -->
            <section id="portfolio" class="bg-white   lg:rounded-2xl dark:bg-[#111111]">
                <div class="container  mb-8 px-4 sm:px-5 md:px-10 lg:px-[60px]">
                    <div class="py-12 ">
                        <h2 class="after-effect after:left-48 lg:mt-0">Portfolio</h2>
                        <!-- fillter button group -->
                        <!-- fillter group buttons -->
                        <ul class="button-group isotop-menu-wrapper mt-[30px] flex w-full justify-start md:justify-end flex-wrap font-medium">
                            <!-- <li class="fillter-btn mr-4 md:mx-4 is-checked" data-filter="*">All</li>
                            <li class="fillter-btn mr-4 md:mx-4" data-filter=".dev">HTML - CSS</li>
                            <li class="fillter-btn mr-4 md:mx-4" data-filter=".plugin"> JavaScript</li>
                            <li class="fillter-btn mr-4 md:mx-4" data-filter=".branding"> PHP - LARAVEL</li> -->
                            <!-- <li class="fillter-btn mr-4 md:mx-4" data-filter=".custom">Graphic Design</li> -->
                        </ul>
                    </div>
                    <!-- End py-12 -->

                    <div id="isotop-gallery-wrapper" class="mymix portfolio_list-one  two-col ">
                        <div class="grid-sizer"></div>


                        <!-- portfolio  payment card project start -->
                        <div class="portfolio_list-one-items isotop-item dev branding ">
                            <div class="rounded-lg bg-[#fff3fc] dark:bg-transparent p-6 dark:border-[2px] border-[#212425]">
                                <div class="overflow-hidden rounded-lg">
                                    <a href="#portfiloOne" rel="modal:open">
                                        <img class="w-full cursor-pointer transition duration-200 ease-in-out transform hover:scale-110 rounded-lg h-auto" src="./images/work_images/small/payment-card-small.png" alt="portfolio image" />
                                    </a>
                                </div>
                                <span class="pt-5 text-[14px] font-normal text-gray-lite block dark:text-[#A6A6A6]">Vue js</span>
                                <h2 class="font-medium cursor-pointer text-xl duration-300 transition hover:text-[#FA5252] dark:hover:text-[#FA5252] dark:text-white mt-2">
                                    <a href="#portfiloOne" rel="modal:open">Payment Gate</a>
                                </h2>
                            </div>
                        </div>
                        <!-- portfolio item one end -->
                        <!-- portfolio item fylo strat -->
                        <div class="portfolio_list-two-items isotop-item dev branding ">
                            <div class="rounded-lg bg-[#fff3fc] dark:bg-transparent p-6 dark:border-[2px] border-[#212425]">
                                <div class="overflow-hidden rounded-lg">
                                    <a href="#portfiloTwo" rel="modal:open">
                                        <img class="w-full cursor-pointer transition duration-200 ease-in-out transform hover:scale-110 rounded-lg h-auto" src="./images/work_images/small/fylo-small.png" alt="portfolio image" />
                                    </a>
                                </div>
                                <span class="pt-5 text-[14px] font-normal text-gray-lite block dark:text-[#A6A6A6]">HTML - CSS</span>
                                <h2 class="font-medium cursor-pointer text-xl duration-300 transition hover:text-[#FA5252] dark:hover:text-[#FA5252] dark:text-white mt-2">
                                    <a href="#portfiloTwo" rel="modal:open">Fylo Website</a>
                                </h2>
                            </div>
                        </div>
                        <!-- portfolio item fylo end -->
                        <!-- portfolio item Intro section with dropdown navigation strat -->
                        <div class="portfolio_list-three-items isotop-item dev branding ">
                            <div class="rounded-lg bg-[#fff3fc] dark:bg-transparent p-6 dark:border-[2px] border-[#212425]">
                                <div class="overflow-hidden rounded-lg">
                                    <a href="#portfiloThree" rel="modal:open">
                                        <img class="w-full cursor-pointer transition duration-200 ease-in-out transform hover:scale-110 rounded-lg h-auto" src="./images/work_images/small/vjmpky5p6zynyizhzyvo.webp" alt="portfolio image" />
                                    </a>
                                </div>
                                <span class="pt-5 text-[14px] font-normal text-gray-lite block dark:text-[#A6A6A6]">HTML - CSS - Javascript</span>
                                <h2 class="font-medium cursor-pointer text-xl duration-300 transition hover:text-[#FA5252] dark:hover:text-[#FA5252] dark:text-white mt-2">
                                    <a href="#portfiloTwo" rel="modal:open">Intro section with dropdown nav </a>
                                </h2>
                            </div>
                        </div>
                        <!-- portfolio item Intro section with dropdown navigation end -->

                        <!-- modal start for payment project  -->
                        <div id="portfiloOne" class="modal-container modal">
                            <div class="overflow-y-scroll scroll-hide-1700  max-h-[60vh] lg:max-h-[80vh] dark:scrollbarDark scrollbarLight">
                                <h2 class="text-[#ef4060] dark:hover:text-[#FA5252] text-4xl text-center font-bold">
                                    Frontend Mentor challenge - Payment card
                                </h2>
                                <div class="grid grid-cols-1 lg:grid-cols-2 my-6 pr-3">
                                    <div class="space-y-2">
                                        <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                            <i class="fa-regular fa-file-lines sm:text-lg hidden sm:block mr-4 md:text-xl"></i>
                                            Project :&nbsp;
                                            <span class="font-medium"> Website</span>
                                        </p>
                                        <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                            <i class="fa-solid fa-code text-lg mr-2 hidden sm:block"></i>
                                            Langages :&nbsp;
                                            <span class="font-medium">Tailwind and Vue js</span>
                                        </p>
                                    </div>
                                    <div class="space-y-2">
                                        <p class="dark:text-white flex items-center mt-2 lg:mt-0 text-[15px] sm:text-lg">
                                            <i class="fa-regular fa-user text-lg mr-2 hidden sm:block"></i>
                                            Client :&nbsp; <span class="font-medium">Frontend Mentor</span>
                                        </p>
                                        <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                            <i class="fa-solid fa-arrow-up-right-from-square text-lg mr-2 hidden sm:block"></i>
                                            Preview :&nbsp;
                                            <span class="font-medium transition-all duration-300 ease-in-out hover:text-[#ef4060]">
                                                <a class=" underline " href="https://interactive-card-details-form-vue-and-tailwind.vercel.app/" target="_blank" rel="noopener noreferrer">Click here</a>
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <p class="dark:text-white text-2line font-normal text-[15px] sm:text-sm">
                                    I have successfully completed a challenge to build an interactive card details form using Vue.js 3 and Tailwind CSS. The solution I have implemented allows users to fill in the card details and see them update in real-time, providing a seamless user experience. Error messages are displayed when the form is submitted if any input field is empty or the card number, expiry date, or CVC fields are in the wrong format, ensuring data validation. The layout has been optimized for different screen sizes, providing an optimal viewing experience on any device. Additionally, I have implemented hover, active, and focus states for interactive elements on the page, adding visual cues for user interactions. Overall, I have demonstrated a solid understanding of Vue.js and Tailwind CSS, and have implemented a well-designed solution that meets all the requirements of the challenge
                                </p>
                                <div class="pr-3">
                                    <img class="w-full md:h-[450px] h-auto object-cover rounded-xl mt-6" src="./images/work_images/o5wnlelbwhhjcmbjnq62.webp" alt="portfolio image" />
                                </div>
                            </div>
                            <a href="#close-modal" rel="modal:close" class="close bg-close-light dark:bg-close-dark">Close</a>
                        </div>
                        <!-- modal end for payment project -->
                        <!-- modal start for fylo  -->
                        <div id="portfiloTwo" class="modal-container modal">
                            <div class="overflow-y-scroll scroll-hide-1700  max-h-[60vh] lg:max-h-[80vh] dark:scrollbarDark scrollbarLight">
                                <h2 class="text-[#ef4060] dark:hover:text-[#FA5252] text-4xl text-center font-bold">
                                    Frontend Mentor challenge - Fylo Landing page
                                </h2>
                                <div class="grid grid-cols-1 lg:grid-cols-2 my-6 pr-3">
                                    <div class="space-y-2">
                                        <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                            <i class="fa-regular fa-file-lines sm:text-lg hidden sm:block mr-4 md:text-xl"></i>
                                            Project :&nbsp;
                                            <span class="font-medium"> Website</span>
                                        </p>
                                        <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                            <i class="fa-solid fa-code text-lg mr-2 hidden sm:block"></i>
                                            Langages :&nbsp;
                                            <span class="font-medium"> Tailwindcss</span>
                                        </p>
                                    </div>
                                    <div class="space-y-2">
                                        <p class="dark:text-white flex items-center mt-2 lg:mt-0 text-[15px] sm:text-lg">
                                            <i class="fa-regular fa-user text-lg mr-2 hidden sm:block"></i>
                                            Client :&nbsp; <span class="font-medium">Frontend Mentor</span>
                                        </p>
                                        <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                            <i class="fa-solid fa-arrow-up-right-from-square text-lg mr-2 hidden sm:block"></i>
                                            Preview :&nbsp;
                                            <span class="font-medium transition-all duration-300 ease-in-out hover:text-[#ef4060]">
                                                <a class=" underline " href="https://ahmaadalharbi.github.io/Fylo-dark-theme-landing-page/" target="_blank" rel="noopener noreferrer">Click here</a>
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <p class="dark:text-white text-2line font-normal text-[15px] sm:text-sm">
                                    I have successfully completed a challenge to build a landing page for a fictional product called Fylo using Tailwind CSS. The goal of the challenge was to replicate the provided design as closely as possible. The solution I have implemented is fully responsive and adapts to different screen sizes, providing an optimal viewing experience on any device. I have also added hover states for all interactive elements on the page, adding visual cues for user interactions. Overall, I have demonstrated my proficiency in using Tailwind CSS to create a visually appealing and functional landing page that meets the requirements of the challenge.
                                </p>
                                <div class="pr-3">
                                    <img class="w-full md:h-[450px] h-auto object-cover rounded-xl mt-6" src="./images/work_images/fylo.webp" alt="portfolio image" />
                                </div>
                            </div>
                            <a href="#close-modal" rel="modal:close" class="close bg-close-light dark:bg-close-dark">Close</a>
                        </div>
                        <!-- modal end for fylo -->
                        <!-- modal start for intro with dropdown menu  -->
                        <div id="portfiloThree" class="modal-container modal">
                            <div class="overflow-y-scroll scroll-hide-1700  max-h-[60vh] lg:max-h-[80vh] dark:scrollbarDark scrollbarLight">
                                <h2 class="text-[#ef4060] dark:hover:text-[#FA5252] text-4xl text-center font-bold">
                                    Frontend Mentor challenge - Fylo Landing page
                                </h2>
                                <div class="grid grid-cols-1 lg:grid-cols-2 my-6 pr-3">
                                    <div class="space-y-2">
                                        <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                            <i class="fa-regular fa-file-lines sm:text-lg hidden sm:block mr-4 md:text-xl"></i>
                                            Project :&nbsp;
                                            <span class="font-medium"> Website</span>
                                        </p>
                                        <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                            <i class="fa-solid fa-code text-lg mr-2 hidden sm:block"></i>
                                            Langages :&nbsp;
                                            <span class="font-medium"> HTML - Css - Javascript</span>
                                        </p>
                                    </div>
                                    <div class="space-y-2">
                                        <p class="dark:text-white flex items-center mt-2 lg:mt-0 text-[15px] sm:text-lg">
                                            <i class="fa-regular fa-user text-lg mr-2 hidden sm:block"></i>
                                            Client :&nbsp; <span class="font-medium">Frontend Mentor</span>
                                        </p>
                                        <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                            <i class="fa-solid fa-arrow-up-right-from-square text-lg mr-2 hidden sm:block"></i>
                                            Preview :&nbsp;
                                            <span class="font-medium transition-all duration-300 ease-in-out hover:text-[#ef4060]">
                                                <a class=" underline " href="https://ahmaadalharbi.github.io/Intro-section-with-dropdown-nav-tailwincss/" target="_blank" rel="noopener noreferrer">Click here</a>
                                            </span>
                                        </p>
                                    </div>
                                </div>

                                <p class="dark:text-white text-2line font-normal text-[15px] sm:text-sm">
                                    I have successfully completed a frontend design challenge, building out an intro section with a dropdown navigation using HTML, CSS, and JavaScript. The challenge required me to create a responsive design that looked as close as possible to the provided design and allowed users to easily navigate the site on both desktop and mobile devices, while also implementing hover states for interactive elements. This was an excellent opportunity for me to practice my front-end development skills and improve my understanding of responsive design </p>
                                <div class="pr-3">
                                    <img class="w-full md:h-[450px] h-auto object-cover rounded-xl mt-6" src="./images/work_images/zp74vhrxan0bpg43z2uu.webp" alt="portfolio image" />
                                </div>
                            </div>
                            <a href="#close-modal" rel="modal:close" class="close bg-close-light dark:bg-close-dark">Close</a>
                        </div>
                        <!-- modal end for intro with dropdown menu  -->


                    </div>
                </div>
                @include('layouts.footer')

            </section>
            <!-- portfolio section start -->
        </div>
    </div>
</div>
<!-- End bgHomeBg -->


<!--==== js =====-->
<!-- <script src="js/vendor/jquary.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/vendor/isotope.pkgd.min.js"></script>
<script src="js/vendor/jquery.modal.min.js"></script>
<!--=== main js  ===-->
<script src="./js/main.js"></script>

@endsection