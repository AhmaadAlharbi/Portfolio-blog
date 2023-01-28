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
            <!-- about me section start -->
            <div>
                <div class="lg:rounded-2xl bg-white dark:bg-[#111111]">
                    <div class="pt-12 md:py-12 px-2 sm:px-5 md:px-10 lg:px-14">
                        <!-- about page title -->
                        <h2 class="after-effect after:left-52">About Me</h2>
                        <!-- personal info for mobile devices start -->
                        <div class="lg:hidden">
                            <div class="w-full mb-6 lg:mb-0 mx-auto relative bg-white text-center dark:bg-[#111111] px-6 rounded-[20px] mt-[180px] md:mt-[220px] lg:mt-0">
                                <!-- profile image  -->
                                <img src="./images/about/ahmad.png" class="w-[240px] absolute left-[50%] transform -translate-x-[50%] h-[240px] drop-shadow-xl mx-auto rounded-[20px] -mt-[140px]" alt="about" />
                                <div class="pt-[100px] pb-8">
                                    <h2 class="mt-6 mb-1 text-[26px] font-semibold dark:text-white"> Ahmad Zaid
                                    </h2>
                                    <h3 class="mb-4 text-[#7B7B7B] inline-block dark:bg-[#1D1D1D] px-5 py-1.5 rounded-lg dark:text-[#A6A6A6]">
                                        Web Developer </h3>

                                    <div class="flex justify-center space-x-3">
                                        <!-- twitter icon and link -->
                                        <!-- <a href="https://twitter.com/ahmaadzaaid" target="_blank" rel="noopener noreferrer">
                                            <span class="socialbtn text-[#1C9CEA]">
                                                <i class="fa-brands fa-twitter"></i>
                                            </span>
                                        </a> -->

                                        <!-- github icon and link -->

                                        <!-- <a href="https://github.com/AhmaadAlharbi" target="_blank" rel="noopener noreferrer">
                                            <span class="socialbtn text-[#000000] dark:text-white">
                                                <i class="fa-brands fa-github"></i>
                                            </span>
                                        </a> -->
                                    </div>

                                    <!-- personal info start -->
                                    <div class="p-7 rounded-2xl mt-7 bg-[#F3F6F6] dark:bg-[#1D1D1D]">


                                        <div class="flex border-b border-[#E3E3E3] dark:border-[#3D3A3A] py-2.5">
                                            <span class="socialbtn bg-white dark:bg-black text-[#6AB5B9] shadow-md">
                                                <i class="fa-solid fa-envelope-open-text"></i>
                                            </span>
                                            <div class="text-left ml-2.5">
                                                <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Email </p>
                                                <p class="dark:text-white">ahmadZaid@gmail.com</p>
                                            </div>
                                        </div>

                                        <div class="flex border-b border-[#E3E3E3] dark:border-[#3D3A3A] py-2.5">
                                            <span class="socialbtn bg-white dark:bg-black text-[#FD7590] shadow-md">
                                                <i class="fa-solid fa-location-dot"></i>
                                            </span>
                                            <div class="text-left ml-2.5">
                                                <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Location </p>
                                                <p class="dark:text-white">Kuwait</p>
                                            </div>
                                        </div>

                                        <div class="flex py-2.5">
                                            <span class="socialbtn bg-white dark:bg-black text-[#C17CEB] shadow-md">
                                                <i class="fa-solid fa-calendar-days"></i>
                                            </span>
                                            <div class="text-left ml-2.5">
                                                <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Birthday </p>
                                                <p class="dark:text-white">January 24, 1991</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- personal info end -->

                                    <!-- dowanload button -->

                                    <a href="/download-pdf">


                                        <button class="dowanload-btn">

                                            <img class="mr-3" src="./images/icons/dowanload.png" alt="icon" /> Download CV </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- personal info for mobile devices end -->

                        <div class="lg:grid grid-cols-12 md:gap-10 pt-4 md:pt-[30px] items-center hidden">
                            <div class="col-span-12 space-y-2.5">
                                <div class="lg:mr-16">

                                    <p class="text-[#44566c] dark:text-color-910 leading-7">
                                        I am an experienced web developer with a background in computer engineering. Skilled in various technologies such as HTML, CSS, JavaScript, Vue.js, PHP and Laravel. Passionate about providing high-quality solutions and continuously learning in the field.
                                    <p class="text-[#44566c] leading-7 mt-2.5 dark:text-color-910"> If you're interested in working with me, please take a look at my resume and portfolio, and don't hesitate to contact me. </p>
                                </div>
                                <div></div>
                            </div>
                        </div>

                    </div>

                    <!-- what i do section start -->
                    <div class="pb-12 px-2 sm:px-5 md:px-10 lg:px-14">
                        <h3 class="text-[35px] dark:text-white font-bold font-robotoSlab pb-5"> What I do! </h3>
                        <div class="grid gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-2">
                            <div class="about-box bg-[#fcf4ff] dark:bg-transparent">
                                <img class="w-10 h-10 object-contain block" src="./images/icons/icon.svg" alt="icon" />
                                <div class="space-y-2">
                                    <h3 class="dark:text-white text-[22px] font-semibold"> Ui/Ux Design </h3>
                                    <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]">Designing landing pages that are not only beautiful but also effective in achieving your business objectives. </p>
                                </div>
                            </div>
                            <div class="about-box bg-[#f3faff] dark:bg-transparent">
                                <img class="w-10 h-10 object-contain block" src="./images/icons/icon5.svg" alt="icon" />
                                <div class="space-y-2">
                                    <h3 class="dark:text-white text-[22px] font-semibold"> Web Development </h3>
                                    <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> developing dynamic, responsive websites and web applications by using modern web technologies </p>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- footer start -->
                    @include('layouts.footer')
                    <!-- footer section end -->
                </div>
            </div>
            <!--  about me section end -->
        </div>
    </div>
</div>
<!-- End bgHomeBg -->


<!--==== js =====-->
<script src="./js/vendor/jquary.min.js"></script>
<script src="./js/vendor/slick.js"></script>
<!-- main js -->
<script src="./js/main.js"></script>
@endsection