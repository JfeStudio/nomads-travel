@extends('layouts.guest')
@section('content')
    <section class="bg-gray-100 flex h-screen lg:h-auto items-center">
        <div class="flex flex-col w-full items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 ">
                <img class="w-32 mr-2" src="{{ asset('frontend/assets/images/logo.png') }}" alt="logo">

            </a>
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-semibold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                        Sign up to your account
                    </h1>
                    <form action="{{ route('register') }}" method="post" class="space-y-4 md:space-y-6" action="#">
                        @csrf
                        <div>
                            <label for="name"
                                class="@error('name') is-invalid-field @enderror block mb-2 text-sm font-medium text-gray-900 ">
                                Your name</label>
                            <input type="text" name="name" id="name"
                                class="@error('name') is-invalid-input @enderror bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 "
                                placeholder="nomads">
                            @error('name')
                                <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="email"
                                class="@error('email') is-invalid-field @enderror block mb-2 text-sm font-medium text-gray-900 ">Your
                                email</label>
                            <input type="email" name="email" id="email"
                                class="@error('email') is-invalid-input @enderror bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 "
                                placeholder="nomads@company.com">
                            @error('email')
                                <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="password"
                                class="@error('password') is-invalid-field @enderror block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="@error('password') is-invalid-input @enderror bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 ">
                            @error('password')
                                <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="password_confirmation"
                                class="@error('password_confirmation') is-invalid-field @enderror block mb-2 text-sm font-medium text-gray-900 ">Password
                                Confirmation</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                placeholder="••••••••"
                                class="@error('password_confirmation') is-invalid-input @enderror bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 ">
                            @error('password_confirmation')
                                <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500 ">I agree to Nomads <span
                                            class='underline text-gray-800 font-medium hover:no-underline cursor-pointer'>Terms
                                            of
                                            Services</span></label>
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign
                            up</button>
                        <p class="text-sm font-light text-gray-500">
                            Already have an account? <a href="{{ route('login') }}"
                                class="font-medium text-blue-600 hover:underline ">Sign in</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
