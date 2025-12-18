@extends('layout.layouts')
@section('title')
    Egypt Tour Packages | Egypt Excursions | Egypt Sightseeing Tours
@endsection
@section('description')
    Explore the wonders of Egypt with our expert-led day tours and excursions. Discover iconic landmarks, delve into ancient
    history, and experience vibrant cultures on unforgettable sightseeing adventures tailored to your interests
@endsection
@section('content')
    <!-- CONTENT START -->
    @include('layout.header', [
        'title' => 'Egypt Tour Packages | Egypt Sightseeing Tours',
        'breadcrumb' => 'Tour Packages',
        'image' => 'Images/tour-packages-bg.png',
    ])
    <div class="page-content">
        <!--POPULAR DESTINATION SECTION START-->
        <div class="bg-contain bg-[bottom_center] bg-repeat-x xl:pb-22.5 xl:pt-30 pt-12.5">
            <div class="container">
                <div>
                    <div class="grid grid-cols-12 gap-7.5">
                        @forelse($categories as $category)
                            <div class="xl:col-span-3 lg:col-span-4 md:col-span-6 col-span-12 mb-7.5">
                                @include('category::components.category-card')
                            </div>

                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <!--POPULAR DESTINATION SECTION END-->
    </div>
    <!-- CONTENT END -->
@endsection