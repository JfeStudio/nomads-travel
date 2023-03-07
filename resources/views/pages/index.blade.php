@extends('layouts.app')
@section('content')
    <!-- header -->
    <div class="hero-pattern relative bg-cover">
        <!-- navigation -->
        @include('includes.navigation')
        <!-- main content -->
        <div class="flex h-[35rem] items-center justify-center md:h-[33rem]">
            <div class="m-auto text-center lg:w-1/2">
                <h1
                    class="text-[2.1rem] font-semibold text-slate-50 md:text-[3.2rem] md:leading-snug lg:text-5xl lg:leading-tight">
                    Explore The Beautiful World As Easy One Click
                </h1>
                <p class="my-7 text-lg text-slate-50">
                    You will see beatiful <br />
                    moment you never see before
                </p>
                <a class="m-auto block max-w-max rounded-sm bg-orange-500 px-5 py-2.5 text-center text-xs font-medium leading-none text-slate-50 shadow-sm hover:bg-orange-500/90 md:text-sm"
                    href="#popular">Get Started</a>
            </div>
        </div>
        <!-- end -->
        <!-- content absolute -->
        <div
            class="absolute right-1/2 -bottom-9 z-20 flex w-11/12 translate-x-1/2 items-center justify-between rounded-sm border border-slate-100 bg-white py-3 px-5 text-center shadow-sm md:-bottom-11 md:w-2/3 md:py-3.5 md:px-12 md:text-left lg:w-1/2">
            <div class="">
                <span class="text-lg font-semibold text-gray-900 lg:text-2xl">20K</span>
                <p class="text-sm font-normal text-slate-600 lg:text-base">Members</p>
            </div>
            <div class="">
                <span class="text-lg font-semibold text-gray-900 lg:text-2xl">12</span>
                <p class="text-sm font-normal text-slate-600 lg:text-base">
                    Countries
                </p>
            </div>
            <div class="">
                <span class="text-lg font-semibold text-gray-900 lg:text-2xl">3k</span>
                <p class="text-sm font-normal text-slate-600 lg:text-base">Hotels</p>
            </div>
            <div class="">
                <span class="text-lg font-semibold text-gray-900 lg:text-2xl">72</span>
                <p class="text-sm font-normal text-slate-600 lg:text-base">
                    Partners
                </p>
            </div>
        </div>
    </div>
    <!-- wisata popular -->
    <section id='popular' class="bg-tourism relative pt-28 -scroll-mt-12">
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
                @foreach ($home as $item)
                    <div class="card-travel relative max-w-[18rem] overflow-hidden rounded-sm shadow-3xl lg:max-w-[16rem]">
                        @if ($item->galleries->count())
                            <img class="w-full transition-all duration-300 ease-in-out"
                                src="{{ Storage::url($item->galleries->first()->image) }}" alt="card image" />
                        @else
                            <img class="w-full transition-all duration-300 ease-in-out" src="#" alt="card image" />
                        @endif
                        <!-- title card -->
                        <div
                            class="absolute inset-0 z-10 flex flex-col items-center bg-slate-700/10 p-6 text-center text-white">
                            <div class="">
                                <span class="mb-1 uppercase text-gray-300">{{ $item->location }}</span>
                                <h4 class="font-medium uppercase">{{ $item->title }}</h4>
                            </div>
                            <a class="mt-auto max-w-max rounded-sm bg-orange-400 px-6 py-2.5 text-center text-xs font-medium leading-none text-slate-50 shadow-sm hover:bg-orange-500/90 md:text-sm"
                                href="{{ route('detail', $item->slug) }}">View Details</a>
                        </div>
                    </div>
                @endforeach
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
                    href="{{ route('login') }}">Get Started</a>
            </div>
        </div>
    </section>
    <!-- end loving us -->
@endsection
