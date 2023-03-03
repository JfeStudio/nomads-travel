@extends('layouts.app')
@section('content')
    <!-- header -->
    <div class="hero-pattern relative bg-cover">
        <!-- navigation -->
        @include('includes.navigation')
        <!-- end -->
        @include('includes.header')
        <!-- content -->
    </div>
    <!-- wisata popular -->
    <section class="bg-tourism relative pt-28">
        <div class="container z-10 mx-auto">
            <div class="text-center">
                <h1 class="font-semibold text-slate-100 md:text-4xl">
                    Wisata Popular
                </h1>
                <p class="mt-2 text-base text-gray-300/80">
                    Something that you never try <br />
                    before in this world
                </p>
            </div>
            <!-- card -->
            <div class="mt-14 flex flex-wrap justify-center gap-8 md:mt-24 lg:justify-between lg:gap-5">
                <div class="card-travel relative max-w-[18rem] overflow-hidden rounded-sm shadow-3xl lg:max-w-[16rem]">
                    <img class="w-full transition-all duration-300 ease-in-out"
                        src="{{ asset('frontend') }}/assets/images/travel-1.jpg" alt="card image" />
                    <!-- title card -->
                    <div
                        class="absolute inset-0 z-10 flex flex-col items-center bg-slate-700/10 p-6 text-center text-white">
                        <div class="">
                            <span class="mb-1 uppercase text-gray-300">indonesia</span>
                            <h4 class="font-medium uppercase">Deratan, Bali</h4>
                        </div>
                        <a class="mt-auto max-w-max rounded-sm bg-orange-400 px-6 py-2.5 text-center text-xs font-medium leading-none text-slate-50 shadow-sm hover:bg-orange-500/90 md:text-sm"
                            href="{{ route('pages.show') }}">View Details</a>
                    </div>
                </div>
                <div class="card-travel relative max-w-[18rem] overflow-hidden rounded-sm shadow-3xl lg:max-w-[16rem]">
                    <img class="w-full transition-all duration-300 ease-in-out"
                        src="{{ asset('frontend') }}/assets/images/travel-2.jpg" alt="card image" />
                    <!-- title card -->
                    <div
                        class="absolute inset-0 z-10 flex flex-col items-center bg-slate-700/10 p-6 text-center text-white">
                        <div class="">
                            <span class="mb-1 uppercase text-gray-300">indonesia</span>
                            <h4 class="font-medium uppercase">Bromo, Prob</h4>
                        </div>
                        <a class="mt-auto block max-w-max rounded-sm bg-orange-400 px-6 py-2.5 text-center text-xs font-medium leading-none text-slate-50 shadow-sm hover:bg-orange-500/90 md:text-sm"
                            href="#">View Details</a>
                    </div>
                </div>
                <div class="card-travel relative max-w-[18rem] overflow-hidden rounded-sm shadow-3xl lg:max-w-[16rem]">
                    <img class="w-full transition-all duration-300 ease-in-out"
                        src="{{ asset('frontend') }}/assets/images/travel-3.jpg" alt="card image" />
                    <!-- title card -->
                    <div
                        class="absolute inset-0 z-10 flex flex-col items-center bg-slate-700/10 p-6 text-center text-white">
                        <div class="">
                            <span class="mb-1 uppercase text-gray-300">indonesia</span>
                            <h4 class="font-medium uppercase">Nusa penida</h4>
                        </div>
                        <a class="mt-auto block max-w-max rounded-sm bg-orange-400 px-6 py-2.5 text-center text-xs font-medium leading-none text-slate-50 shadow-sm hover:bg-orange-500/90 md:text-sm"
                            href="#">View Details</a>
                    </div>
                </div>
                <div class="card-travel relative max-w-[18rem] overflow-hidden rounded-sm shadow-3xl lg:max-w-[16rem]">
                    <img class="w-full transition-all duration-300 ease-in-out"
                        src="{{ asset('frontend') }}/assets/images/travel-4.jpg" alt="card image" />
                    <!-- title card -->
                    <div
                        class="absolute inset-0 z-10 flex flex-col items-center bg-slate-700/10 p-6 text-center text-white">
                        <div class="">
                            <span class="mb-1 uppercase text-gray-300">middle east</span>
                            <h4 class="font-medium uppercase">Dubai</h4>
                        </div>
                        <a class="mt-auto block max-w-max rounded-sm bg-orange-400 px-6 py-2.5 text-center text-xs font-medium leading-none text-slate-50 shadow-sm hover:bg-orange-500/90 md:text-sm"
                            href="#">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end popular -->

    <!-- our networks -->
    <section class="py-16 md:py-28">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center justify-between">
                <div class="m-auto basis-[70%] md:m-0 md:basis-1/4">
                    <h2 class="text-center text-4xl font-semibold text-gray-900 md:text-left">
                        Our Networks
                    </h2>
                    <p class="mt-3 text-center leading-snug md:text-left">
                        Companies are trusted us more than just a trip
                    </p>
                </div>
                <img class="m-auto mt-4 max-w-xs drop-shadow-sm md:m-0 md:max-w-md lg:max-w-3xl"
                    src="{{ asset('frontend') }}/assets/images/partner.png" alt="" />
            </div>
        </div>
    </section>
    <!-- end networks -->

    <!-- loving us -->
    <section class="md:mb-10">
        <div class="container mx-auto">
            <div class="mt-8 mb-14 text-center">
                <h1 class="text-4xl font-semibold text-gray-900">
                    They Are Loving Us
                </h1>
                <p class="mt-3">
                    Moments were giving them <br />
                    thes best experience
                </p>
            </div>
            <div class="mb-8 flex flex-wrap justify-center gap-7 lg:flex-nowrap">
                <figure
                    class="flex w-full flex-col items-center justify-center rounded-t-lg bg-white p-8 text-center shadow-sm md:w-2/3 md:rounded-t-none md:rounded-tl-lg">
                    <blockquote class="mx-auto mb-4 max-w-2xl text-gray-500 lg:mb-8">
                        <h3 class="text-lg font-semibold text-gray-900">Trip to Bromo</h3>
                        <p class="mt-4 font-light">
                            "It was glorious and i could not stop to say wohooo for every
                            single moment Sasageyoooo"
                        </p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center space-x-3">
                        <img class="h-9 w-9 rounded-full"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                            alt="profile picture" />
                        <div class="space-y-0.5 text-left font-medium">
                            <div>Bonnie Green</div>
                            <div class="text-sm font-light text-gray-500">
                                Developer at Leaf
                            </div>
                        </div>
                    </figcaption>
                </figure>
                <figure
                    class="flex w-full flex-col items-center justify-center rounded-tr-lg bg-white p-8 text-center shadow-sm md:w-2/3">
                    <blockquote class="mx-auto mb-4 max-w-2xl text-gray-500 lg:mb-8">
                        <h3 class="text-lg font-semibold text-gray-900">
                            Trip to Nusa Penida
                        </h3>
                        <p class="mt-4 font-light">
                            "The trip was amazing and i saw something beautiful in that
                            island that makes me want to learn more"
                        </p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center space-x-3">
                        <img class="h-9 w-9 rounded-full"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                            alt="profile picture" />
                        <div class="space-y-0.5 text-left font-medium">
                            <div>Roberta Casas</div>
                            <div class="text-sm font-light text-gray-500">
                                Lead of Leaf tourist
                            </div>
                        </div>
                    </figcaption>
                </figure>
                <figure
                    class="flex w-full flex-col items-center justify-center rounded-bl-lg bg-white p-8 text-center shadow-sm md:w-2/3">
                    <blockquote class="mx-auto mb-4 max-w-2xl text-gray-500 lg:mb-8">
                        <h3 class="text-lg font-semibold text-gray-900">
                            Trip to Deratan
                        </h3>
                        <p class="mt-4 font-light">
                            "It was glorious and i could not stop to say wohooo for every
                            single moment Kyaaaaa><" </p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center space-x-3">
                        <img class="h-9 w-9 rounded-full"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                            alt="profile picture" />
                        <div class="space-y-0.5 text-left font-medium">
                            <div>Jese Leos</div>
                            <div class="text-sm font-light text-gray-500">
                                Bloger immediately
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="mt-14 flex items-center justify-center gap-4">
                <a class="block max-w-max rounded-sm bg-gray-300/50 py-3 px-7 text-center text-[.85rem] font-medium leading-none text-gray-400 shadow-sm hover:bg-gray-300/50 md:px-7 md:py-2.5 md:text-sm"
                    href="#">I Need Help</a>
                <a class="block max-w-max rounded-sm bg-orange-500 py-3 px-7 text-center text-[.85rem] font-medium leading-none text-slate-50 shadow-sm hover:bg-orange-500/90 md:px-7 md:py-2.5 md:text-sm"
                    href="#">Get Started</a>
            </div>
        </div>
    </section>
    <!-- end loving us -->
@endsection
