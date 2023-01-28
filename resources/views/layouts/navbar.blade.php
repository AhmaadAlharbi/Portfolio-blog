<header class="lg:w-[560px] h-[144px] hidden lg:block p-[30px] ml-auto mb-10 rounded-[16px] bg-white dark:bg-[#111111]">
    <nav class="hidden lg:block">
        <ul class="flex space-x-6">
            <li>
                <a class="{{ Request::is('/') ? 'menu-active' : 'menu-item' }}" href="/">
                    <span class="text-xl mb-1">
                        <i class="fa-regular fa-user"></i>
                    </span> About
                </a>
            </li>


            <li>
                <a class="{{ Request::is('resume') ? 'menu-active' : 'menu-item' }}" href="/resume">
                    <span class="text-xl mb-1">
                        <i class="fa-regular fa-file-lines"></i>
                    </span> Resume
                </a>
            </li>
            <li>
                <a class="{{ Request::is('portfolio') ? 'menu-active' : 'menu-item' }}" href="/portfolio">
                    <span class="text-xl mb-1">
                        <i class="fas fa-briefcase"></i>
                    </span> Works
                </a>
            </li>
            <!-- <li>
                <a class="{{ Request::is('blogs') ? 'menu-active' : 'menu-item' }}" href="/blogs">
                    <span class="text-xl mb-1">
                        <i class="fa-brands fa-blogger"></i>
                    </span> Blogs
                </a>
            </li> -->
            <li>
                <a class="{{ Request::is('contact') ? 'menu-active' : 'menu-item' }}" href="/contact">
                    <span class="text-xl mb-1">
                        <i class="fa-solid fa-address-book"></i>
                    </span> Contact
                </a>
            </li>
        </ul>
    </nav>
</header>