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
            <!-- resume section start -->
            <div class="bg-white lg:rounded-2xl dark:bg-[#111111]">
                <div class="container sm:px-5 md:px-10 lg:px-14">
                    <div class="py-12 px-4 md:px-0">
                        <!-- resume page title -->
                        <h2 class="after-effect after:left-44">Resume</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-x-6 gap-y-6 mt-[30px]">
                            <!-- eductation start -->
                            <div>
                                <div class="flex items-center space-x-2 mb-4">
                                    <i class="fa-solid text-6xl text-[#F95054] fa-graduation-cap"></i>
                                    <h4 class="text-5xl dark:text-white font-medium"> Education </h4>
                                </div>
                                <div class="bg-[#fff4f4] dark:bg-transparent py-4 pl-5 pr-3 space-y-2 mb-6 rounded-lg dark:border-[#212425] dark:border-2">
                                    <span class="text-tiny text-gray-lite dark:text-[#b7b7b7]">2009-2011</span>
                                    <h3 class="text-xl dark:text-white"> Diploma in Applied Science Technology: Computer Engineering</h3>
                                    <p class="dark:text-[#b7b7b7]"> College of Technological Studies. - Kuwait </p>
                                </div>
                                <div class="bg-[#fff1fb] dark:bg-transparent py-4 pl-5 pr-3 space-y-2 rounded-lg mb-6 dark:border-[#212425] dark:border-2">
                                    <span class="text-tiny text-gray-lite dark:text-[#b7b7b7]">2013-2017
                                    </span>
                                    <h3 class="text-xl dark:text-white"> Bachelor of Computer System Engineering: Computer Engineering </h3>
                                    <p class="dark:text-[#b7b7b7]">Bangor University - United Kingdom,Wales</p>
                                </div>

                            </div>
                            <!-- eductation end -->

                            <!-- experiment start -->
                            <div>
                                <div class="flex items-center space-x-2 mb-4">
                                    <i class="fa-solid text-6xl text-[#F95054] fa-briefcase"></i>
                                    <h4 class="text-5xl dark:text-white font-medium"> Experience </h4>
                                </div>
                                <div class="py-4 pl-5 pr-3 space-y-2 mb-6 rounded-lg bg-[#eef5fa] dark:bg-transparent dark:border-[#212425] dark:border-2">
                                    <span class="text-tiny text-gray-lite dark:text-[#b7b7b7]">2018 - present</span>
                                    <h3 class="text-xl dark:text-white"> Computer Engineer </h3>
                                    <p class="dark:text-[#b7b7b7]"> Ministry of Electricity and Water - Kuwait </p>
                                </div>


                            </div>
                            <!-- experiment start -->
                        </div>
                    </div>
                </div>


                <!-- working section start -->
                <div class="container bg-color-810 dark:bg-[#0D0D0D] py-12 px-2 sm:px-5 md:px-10 lg:px-20">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="col-span-1">
                            <h4 class="text-5xl dark:text-white font-medium mb-6"> Working Skills </h4>
                            <div class="mb-5">
                                <div class="flex justify-between mb-1">
                                    <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6]">HTML
                                    </span>
                                </div>

                            </div>

                            <div class="mb-5">
                                <div class="flex justify-between mb-1">
                                    <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6]">
                                        CSS - Bootstrap - Tailwindcss - Bulma css</span>
                                </div>

                            </div>

                            <div class="mb-5">
                                <div class="flex justify-between mb-1">
                                    <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6]">
                                        JavaScript & Vue js</span>
                                </div>

                            </div>

                            <div class="mb-5">
                                <div class="flex justify-between mb-1">
                                    <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6]">
                                        PHP & LARAVEL & MYSQL</span>
                                </div>

                            </div>
                            <div class="mb-5">
                                <div class="flex justify-between mb-1">
                                    <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6]">
                                        Figma</span>
                                </div>

                            </div>

                        </div>

                        <div class="col-span-1">
                            <h4 class="text-5xl dark:text-white font-medium mb-8"> Knowledges </h4>
                            <div class="flex gap-y-5 gap-x-2.5 flex-wrap">
                                <button class="resume-btn">Coding</button>
                                <button class="resume-btn">Designing</button>
                                <button class="resume-btn">Time Management</button>
                                <button class="resume-btn">Flexibility</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- working section end -->

                <!-- footer start -->
                @include('layouts.footer')

                <!-- footer end -->
            </div>
            <!-- resume section start -->

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