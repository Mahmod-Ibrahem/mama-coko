<!-- HEADER START -->
<header class="absolute top-0 left-0 w-full pt-3 md:py-12 z-50">
    <div class="main-bar-wraper">
        <div
            class="flex items-center justify-between relative w-full rounded-2xl 2xl:min-h-30 min-h-20 2xxl:ps-8.75 px-4.5 2xxl:pe-13.75 duration-500">
            <div class="flex items-center z-9 h-20 lg:w-44 w-30 4xl:absolute 4xl:left-1/2 4xl:-translate-x-1/2">
                <a href="index.html" class="table-cell align-middle">
                    <img src="{{ asset('Images/logo.jpg') }}" alt="logo"
                        class="object-contain duration-500 h-20 md:h-40 ">
                </a>
            </div>
            <button
                class="xmenu-toggler lg:hidden z-50 float-right mt-4.5 mb-4 md:ml-7 ml-4 size-11 bg-dark-600 relative cursor-pointer max-lg:order-1"
                type="button" s>
                <span class="block absolute left-2 h-1 rounded-px bg-white duration-300 top-3 w-5"></span>
                <span class="block absolute left-2 h-1 rounded-px bg-white duration-0 top-5 w-6"></span>
                <span class="block absolute left-2 h-1 rounded-px bg-white duration-300 top-8 w-4"></span>
            </button>
            <div
                class="md:hidden fixed top-0 left-0 bg-black size-full duration-300 !z-50 opacity-0 visible pointer-events-none menu-close fade-overlay">
            </div>
            <div
                class="flex lg:basis-auto lg:grow max-lg:flex-col 4xl:justify-start lg:justify-center !z-50 justify-start font-base max-lg:fixed max-lg:h-screen max-lg:px-5 max-lg:top-0 max-lg:-left-75 max-lg:z-9999 max-lg:bg-white max-lg:w-72 max-lg:overflow-auto max-lg:duration-700 header-nav custom-scroll">
                <div class="flex items-center relative z-9 py-6.25 lg:hidden">
                    <a href="index.html" class="table-cell align-middle">
                        <img src="{{ asset('Images/logo.jpg') }}" alt="" class="object-contain duration-500">
                    </a>
                </div>
                <ul class="lg:flex flex-wrap gap-6 navbar-nav z-50">
                    <li class="lg:inline-block block relative group">
                        <a class="navbar_anchor" href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li class="lg:inline-block block relative group">
                        <a class="navbar_anchor" href="{{ route('day-tours.index') }}">
                            Day Tours
                        </a>

                    </li>
                    <li class="lg:inline-block block relative group">
                        <a class="navbar_anchor" href="{{ route('tour-packages.index') }}">
                            Tour Packages
                        </a>
                    </li>
                    <li class="lg:inline-block block relative group">
                        <a class="navbar_anchor" href="{{ route('blog.index') }}">
                            Blogs
                        </a>
                    </li>

                    <li class="lg:inline-block block relative group">
                        <a class="navbar_anchor" href="{{ route('contact.index') }}">
                            Contact
                        </a>
                    </li>

                    <li class="lg:inline-block block relative group">
                        <a class="navbar_anchor" href="{{ route('about') }}">
                            About Us
                        </a>
                    </li>
                </ul>
                <div class="lg:hidden block max-lg:p-5 text-center mt-auto">
                    <ul>
                        <li class="inline-block mx-0.5">
                            <a class="size-10 !leading-10 border border-black/10 text-center text-citrusyellow fab fa-facebook-f"
                                target="_blank" href="https://www.facebook.com/dexignzone"></a>
                        </li>
                        <li class="inline-block mx-0.5">
                            <a class="size-10 !leading-10 border border-black/10 text-center text-citrusyellow fab fa-twitter"
                                target="_blank" href="https://twitter.com/dexignzones"></a>
                        </li>
                        <li class="inline-block mx-0.5">
                            <a class="size-10 !leading-10 border border-black/10 text-center text-citrusyellow fab fa-linkedin-in"
                                target="_blank" href="https://www.linkedin.com/showcase/3686700/admin/"></a>
                        </li>
                        <li class="inline-block mx-0.5">
                            <a class="size-10 !leading-10 border border-black/10 text-center text-citrusyellow fab fa-instagram"
                                target="_blank" href="https://www.instagram.com/dexignzone/"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex lg:justify-end lg:items-center z-9 h-20 xl:pl-8 max-lg:ms-auto">
                <div class="flex items-center">
                    <ul class="ml-5 flex items-center -mr-2.5">
                        <li class="inline-block max-xl:hidden">
                            <ul class="flex">
                                <li><a class="text-xl text-citrusyellow mr-5 block" href="javascript:;"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a class="text-xl text-citrusyellow mr-5 block" href="javascript:;"><i
                                            class="fa-brands fa-instagram"></i></a></li>
                                <li><a class="text-xl text-citrusyellow mr-5 block" href="javascript:;"><i
                                            class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a class="text-xl text-citrusyellow mr-5 block" href="javascript:;"><i
                                            class="fa-brands fa-x-twitter"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER END -->