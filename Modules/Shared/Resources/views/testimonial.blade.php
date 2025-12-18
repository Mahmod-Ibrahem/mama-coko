<!--TESTIMONIAL START-->
<div class="pb-5 pt-6 md:pt-12.5 bg-center bg-no-repeat bg-lightturquoise relative"
    style="background-image: url(assets/images/Map.png);">
    <div class="container">

        <!-- TITLE START-->
        <div class="sm:mb-15 mb-7.5 max-w-150 mx-auto text-center">
            <h2 class="xl:text-46 md:text-40 text-3xl mb-2.5">Our CLient<span class="text-citrusyellow"> Says!</span>
            </h2>
            <div class="text-base">Destinations worth exploring! Here are a few popular spots</div>
            <div class="-mt-7">
                <img src="assets/images/background/Title-Separator.png" alt="Image" class="w-117.5" width="470"
                    height="70" loading="lazy">
            </div>
        </div>
        <!-- TITLE END-->

        <div class="section-content">

            <div class="relative group testimonial-slider-wrap">
                <div class="swiper trv-t-monial-swiper !pb-10">
                    <div class="swiper-wrapper">
                        <!--BOX-1-->
                        @foreach ($reviews as $review)
                            <div class="swiper-slide">
                                <div class="lg:mx-17.5 mx-2.5 mb-12.5 mt-0">
                                    <div class="mb-7.5 relative max-w-76.5 max-md:mx-auto">
                                        <img src="{{ asset('assets/images/tripadvisor-logo.png') }}" alt="image"
                                            class="rounded-3xl rounded-es-none" width="306" height="297" loading="lazy">
                                        <div
                                            class="inline-flex items-center bg-primary rounded-2xl rounded-ss-none absolute left-0 -bottom-2.5 py-1.25 px-3.75">
                                            <i class="fa-solid fa-star text-citrusyellow text-base mr-0.75"></i>
                                            <i class="fa-solid fa-star text-citrusyellow text-base mr-0.75"></i>
                                            <i class="fa-solid fa-star text-citrusyellow text-base mr-0.75"></i>
                                            <i class="fa-solid fa-star text-citrusyellow text-base mr-0.75"></i>
                                            <i class="fa-solid fa-star text-citrusyellow text-base mr-0.75"></i>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <div class="flex items-start justify-between mb-6.25">
                                            <div class="left-part">
                                                <h4 class="lg:text-4xl text-28 font-normal text-primary !font-display">
                                                    {{ $review->reviewer }}
                                                </h4>
                                                <span
                                                    class="font-title text-xl font-medium text-citrusyellow inline-block">{{ $review->title }}</span>
                                            </div>
                                            <div class="right-part">
                                                <img src="assets/images/trv-icon/Quote.png"
                                                    class="lg:max-w-17.5 max-w-11 max-h-14.5 image-filter-2" alt="image"
                                                    style="filter: brightness(0) saturate(100%) invert(25%) sepia(21%) saturate(4469%) hue-rotate(154deg) brightness(93%) contrast(95%)">
                                            </div>
                                        </div>
                                        <p class="font-title lg:text-2xl text-lg text-primary max-md:text-center">
                                            {{ $review->content }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- Custom Navigation Buttons under the slider --}}
                    <div class="flex items-center justify-center gap-4 mt-8">
                        <div
                            class="testi-button-prev size-14 rounded-full bg-citrusyellow text-white hover:bg-white hover:text-citrusyellow transition-all duration-300 flex items-center justify-center cursor-pointer shadow-md">
                            <i class="fa-solid fa-chevron-left text-lg"></i>
                        </div>
                        <div
                            class="testi-button-next size-14 rounded-full bg-citrusyellow text-white hover:bg-white hover:text-citrusyellow transition-all duration-300 flex items-center justify-center cursor-pointer shadow-md">
                            <i class="fa-solid fa-chevron-right text-lg"></i>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="absolute md:-left-28.75 -left-12.5 top-2/5 md:w-57.5 w-25 animate-slide-top2 opacity-50"><img
                src="assets/images/hotballon-Left.png" alt="image"></div>
    </div>
    <!--TESTIMONIAL END-->