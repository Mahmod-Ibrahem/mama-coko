<section class="hero_section" style="background-image: url('{{asset($image)}}')">
    <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/80 to-slate-900"></div>
    <div class="w-full h-full inline-flex items-center justify-center">
        <h3 class="backgroundImageHeader">
            {{ $title }}
        </h3>
    </div>


    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
            <li class="inline-block">
                <a href="{{ route('home') }}"
                    class="uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white">
                    Home
                </a>

                <span class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180">
                    <i class="mdi mdi-chevron-right"></i>
                </span>
            </li>

            <li class="inline-block">
                <span class="uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">
                    {{ $breadcrumb ?? '' }}
                </span>
            </li>
        </ul>
    </div>
    <div class="absolute right-11.25 bottom-16.25 animate-slide-top2"><img
            src="{{ asset('assets/images/hotballon-Left.png') }}" alt="Image" class="md:w-21 w-10" width="84"
            height="121">
    </div>
    <div class="absolute md:-right-15 -right-10 top-41.25 animate-slide-top"><img
            src="{{ asset('assets/images/hotballon-right.png') }}" alt="Image" class="md:w-37.5 w-20" width="230"
            height="333">
    </div>
</section>