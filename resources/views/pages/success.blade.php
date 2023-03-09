@extends('layouts.success')
@section('content')
    <div class="justify-center md:px-36 lg:px-20">
        @include('includes.navbar-checkout')
        <section class="flex h-[80vh] items-center justify-center">
            <div class="text-center">
                <img class="m-auto w-36" src="{{ asset('frontend') }}/assets/images/ic_mail.png" alt="" />
                <h4 class="mb-2 text-xl font-semibold">Yay! Success</h4>
                <p class="text-sm text-gray-400">
                    We've sent you email for trip instructions <br />
                    please read it as well
                </p>
                <a href="{{ route('home') }}"
                    class="mt-8 inline-flex items-center justify-center rounded-md bg-blue-500 px-5 py-2 text-center text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300">
                    Back to Homepage
                    <svg aria-hidden="true" class="ml-2 -mr-1 h-[0.9rem] w-[0.9rem]" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </section>
    </div>
@endsection
