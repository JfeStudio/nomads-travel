@extends('layouts.app')
@section('content')
    <div class="main-content relative justify-center md:px-36 lg:px-20">
        <!-- navigation -->
        @include('includes.navigation')
        <!-- Breadcrumbs -->
        <section class="container mx-auto lg:mb-3 lg:mt-5">
            <nav class="flex rounded-lg border border-gray-200 bg-white px-5 py-3 text-gray-700" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}"
                            class="inline-flex items-center text-sm font-normal text-gray-400 hover:text-blue-400">
                            <svg aria-hidden="true" class="mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="h-6 w-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <a href="#"
                                class="ml-1 text-sm font-semibold text-blue-500 hover:text-blue-600 md:ml-2">Detail</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </section>

        <!-- content -->
        <section>
            <div class="container mx-auto my-4 lg:my-5">
                <div class="flex flex-col items-start justify-between gap-y-5 lg:flex-row">
                    <div class="basis-full rounded-lg border border-gray-100 bg-white p-5 shadow lg:basis-[64%]">
                        <h3 class="text-2xl font-semibold text-gray-900">{{ $detail->title }}</h3>
                        <p class="text-sm text-gray-400">{{ $detail->location }}</p>
                        <div class="mt-4">
                            <div>
                                @if ($detail->galleries->count())
                                    <img id="xzoom-default" class="xzoom w-full rounded-md drop-shadow-sm"
                                        src="{{ Storage::url($detail->galleries->first()->image) }}"
                                        xoriginal="{{ Storage::url($detail->galleries->first()->image) }}" alt="" />
                                @else
                                    <img id="xzoom-default" class="xzoom w-full rounded-md drop-shadow-sm"
                                        src="{{ asset('frontend') }}/assets/images/details-1.jpg"
                                        xoriginal="{{ asset('frontend') }}/assets/images/details-1.jpg" alt="" />
                                @endif
                            </div>
                            <div class="flex items-center justify-between gap-1 p-2">
                                @forelse ($detail->galleries as $item)
                                    <a href="{{ Storage::url($item->image) }}">
                                        <img class="xzoom-gallery m-0 w-24 rounded-sm opacity-60"
                                            src="{{ Storage::url($item->image) }}" alt="image"
                                            xpreview="{{ Storage::url($item->image) }}" />
                                    </a>
                                @empty
                                    <a href="{{ asset('frontend') }}/assets/images/details-1.jpg">
                                        <img class="xzoom-gallery m-0 w-24 rounded-sm opacity-60"
                                            src="{{ asset('frontend') }}/assets/images/details-1.jpg" alt="image"
                                            xpreview="{{ asset('frontend') }}/assets/images/details-1.jpg" />
                                    </a>
                                @endforelse
                            </div>
                            <div class="mt-2.5 p-2">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">
                                        Tentang Wisata
                                    </h5>
                                </a>
                                <p class="mb-3 text-sm font-normal text-gray-400">
                                    {!! $detail->about !!}
                                </p>
                                <div class="mt-7 flex">
                                    <div
                                        class="flex flex-col items-center gap-2 border-r border-slate-200 pr-4 lg:flex-row">
                                        <img class="w-9" src="{{ asset('frontend') }}/assets/images/ic_event.png"
                                            alt="images" />
                                        <div class="text-center lg:text-left">
                                            <h5 class="text-sm font-medium text-blue-400">
                                                Featured Event
                                            </h5>
                                            <p class="text-xs text-gray-300">{{ $detail->featured_event }}</p>
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-col items-center gap-2 border-r border-slate-200 px-4 lg:flex-row">
                                        <img class="w-9" src="{{ asset('frontend') }}/assets/images/ic_bahasa.png"
                                            alt="images" />
                                        <div class="text-center lg:text-left">
                                            <h5 class="text-sm font-medium text-blue-400">
                                                Language
                                            </h5>
                                            <p class="text-xs text-gray-300">{{ $detail->language }}</p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-center gap-2 px-4 lg:flex-row">
                                        <img class="w-9" src="{{ asset('frontend') }}/assets/images/ic_foods.png"
                                            alt="images" />
                                        <div class="text-center lg:text-left">
                                            <h5 class="text-sm font-medium text-blue-400">Foods</h5>
                                            <p class="text-xs text-gray-300">{{ $detail->foods }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // -->
                    <div class="w-full lg:basis-2/6">
                        <div class="rounded-lg border border-gray-50 bg-white p-6 shadow">
                            <h5 class="mb-3 text-2xl font-semibold tracking-tight text-gray-900">
                                Members are going
                            </h5>
                            <div class="flex -space-x-4 border-b border-slate-100 pb-4">
                                <img class="h-9 w-9 rounded-full border-2 border-white"
                                    src="{{ asset('frontend') }}/assets/images/user-1.jpg" alt="" />
                                <img class="h-9 w-9 rounded-full border-2 border-white"
                                    src="{{ asset('frontend') }}/assets/images/user-2.png" alt="" />
                                <img class="h-9 w-9 rounded-full border-2 border-white"
                                    src="{{ asset('frontend') }}/assets/images/user-3.png" alt="" />
                                <img class="h-9 w-9 rounded-full border-2 border-white"
                                    src="{{ asset('frontend') }}/assets/images/user-4.png" alt="" />
                                <a class="flex h-9 w-9 items-center justify-center rounded-full border-2 border-white bg-slate-400 text-xs font-medium text-white hover:bg-gray-600"
                                    href="#">+99</a>
                            </div>
                            <div class="mt-4">
                                <h3 class="text-lg font-semibold">Trip Informations</h3>
                                <div class="mt-2.5 flex flex-col gap-2.5">
                                    <div class="flex items-center justify-between">
                                        <h5 class="text-[.925rem] font-medium text-gray-900">
                                            Date of Depature
                                        </h5>
                                        <span class="text-sm text-gray-400">{{ $date }}</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <h5 class="text-[.925rem] font-medium text-gray-900">
                                            Duration
                                        </h5>
                                        <span class="text-sm text-gray-400">{{ $detail->duration }}</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <h5 class="text-[.925rem] font-medium text-gray-900">
                                            Type
                                        </h5>
                                        <span class="text-sm text-gray-400">{{ $detail->type }}</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <h5 class="text-[.925rem] font-medium text-gray-900">
                                            Price
                                        </h5>
                                        <span class="text-sm text-gray-400">{{ $detail->price }},00 / person</span>
                                    </div>
                                </div>
                            </div>
                            @auth
                                <a href="{{ route('checkout') }}"
                                    class="mt-8 flex items-center justify-center rounded-md bg-blue-500 px-3 py-2 text-center text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                    Join Now
                                    <svg aria-hidden="true" class="ml-2 -mr-1 h-[0.9rem] w-[0.9rem]" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="mt-8 flex items-center justify-center rounded-md bg-blue-500 px-3 py-2 text-center text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                    Login or Register to Join
                                    <svg aria-hidden="true" class="ml-2 -mr-1 h-[0.9rem] w-[0.9rem]" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end -->
    </div>
@endsection
