@extends('layouts.checkout')
@section('content')
    <div class="main-content relative justify-center lg:px-20">
        <!-- navigation -->
        @include('includes.navbar-checkout')

        <!-- Breadcrumbs -->
        <section class="container mx-auto lg:mt-5">
            <nav class="flex rounded-lg border border-gray-200 bg-white px-5 py-3 text-gray-700" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('pages.index') }}"
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
                            <a href="{{ route('pages.show') }}"
                                class="ml-1 text-sm font-normal text-gray-400 hover:text-blue-400 md:ml-2">Detail</a>
                        </div>
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
                                class="ml-1 text-sm font-semibold text-blue-500 hover:text-blue-600 md:ml-2">Checkout</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </section>

        <!-- content -->
        <section>
            <div class="container mx-auto my-3 lg:my-5">
                <div class="flex w-full flex-col items-start justify-between gap-y-5 lg:flex-row">
                    <div class="w-full rounded-lg border border-gray-100 bg-white p-5 shadow lg:basis-[64%]">
                        <h3 class="text-2xl font-semibold text-gray-900">Who is Going</h3>
                        <p class="text-sm text-gray-400">Trip to Ubud Bali, Indonesia</p>
                        <div class="mt-4">
                            <div class="relative overflow-x-auto">
                                <table class="w-full text-left text-sm text-gray-500">
                                    <thead class="text-xs uppercase text-gray-900">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">Picture</th>
                                            <th scope="col" class="px-6 py-3">Name</th>
                                            <th scope="col" class="px-6 py-3">Nationality</th>
                                            <th scope="col" class="px-6 py-3">Visi</th>
                                            <th scope="col" class="px-6 py-3">Passport</th>
                                            <th scope="col" class="px-6 py-3"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white">
                                            <td class="px-6 py-4">
                                                <img class="w-11 rounded-full"
                                                    src="{{ asset('frontend') }}/assets/images/user-5.png" alt="" />
                                            </td>
                                            <th scope="row"
                                                class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                                                Kila
                                            </th>
                                            <td class="px-6 py-4">SG</td>
                                            <td class="px-6 py-4">30 Days</td>
                                            <td class="px-6 py-4">Active</td>
                                            <td class="px-6 py-4 font-bold">X</td>
                                        </tr>
                                        <tr class="bg-white">
                                            <td class="px-6 py-4">
                                                <img class="w-11 rounded-full"
                                                    src="{{ asset('frontend') }}/assets/images/user-4.png" alt="" />
                                            </td>
                                            <th scope="row"
                                                class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                                                Alice
                                            </th>
                                            <td class="px-6 py-4">CN</td>
                                            <td class="px-6 py-4">N/A</td>
                                            <td class="px-6 py-4">Active</td>
                                            <td class="px-6 py-4 font-bold">X</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-5">
                                <h4 class="mb-2.5 text-base font-semibold text-gray-900">
                                    Add Member
                                </h4>
                                <form>
                                    <div class="mb-6 grid gap-3 md:grid-cols-4">
                                        <div>
                                            <input type="text" id="first_name"
                                                class="block w-full rounded-md border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                                placeholder="Username" required />
                                        </div>
                                        <div>
                                            <select id="countries"
                                                class="block w-full rounded-md border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500">
                                                <option selected>Visa</option>
                                                <option value="1">Visa 1</option>
                                                <option value="2">Visa 2</option>
                                            </select>
                                        </div>
                                        <div>
                                            <input type="month" id="first_name"
                                                class="block w-full rounded-md border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                                placeholder="DOE Passport" required />
                                        </div>
                                        <button type="submit"
                                            class="w-full rounded-md bg-blue-500 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                                            Add Now
                                        </button>
                                    </div>
                                </form>
                                <span class="text-base font-semibold text-gray-700">Note</span>
                                <p class="text-sm font-normal text-gray-400">
                                    You are only able to invite member that has registered in
                                    Nomads
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- // -->
                    <div class="w-full lg:basis-2/6">
                        <div class="rounded-lg border border-gray-50 bg-white p-6 shadow">
                            <h5 class="mb-3 text-lg font-semibold tracking-tight text-gray-900">
                                Checkout Informations
                            </h5>
                            <div class="mt-4 border-b border-gray-400/60 pb-6">
                                <!-- <h3 class="text-lg font-semibold">Trip Informations</h3> -->
                                <div class="mt-2.5 flex flex-col gap-2.5">
                                    <div class="flex items-center justify-between">
                                        <h5 class="text-sm font-medium text-gray-800">Members</h5>
                                        <span class="text-sm text-gray-400">2 person</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <h5 class="text-sm font-medium text-gray-800">
                                            Additional VISA
                                        </h5>
                                        <span class="text-sm text-gray-400">$ 190.00</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <h5 class="text-sm font-medium text-gray-800">
                                            Trip Price
                                        </h5>
                                        <span class="text-sm text-gray-400">$ 80.00 / person</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <h5 class="text-sm font-medium text-gray-800">
                                            Sub Total
                                        </h5>
                                        <span class="text-sm text-gray-400">$ 280.00</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <h5 class="text-sm font-medium text-gray-800">
                                            Total (+Unique Code)
                                        </h5>
                                        <span class="text-sm font-bold text-gray-800">$ 279,33</span>
                                    </div>
                                </div>
                            </div>
                            <!-- payment -->
                            <div class="mt-5">
                                <div>
                                    <h3 class="mb-2 text-lg font-semibold tracking-tight text-gray-900">
                                        Payment Instructions
                                    </h3>
                                    <p class="text-[.8rem] text-gray-500">
                                        Please complate your payment before to continue the
                                        fucking wonderful trip
                                    </p>
                                    <div class="mt-5 flex items-start gap-x-3">
                                        <img class="w-10 drop-shadow"
                                            src="{{ asset('frontend') }}/assets/images/ic_bank.png" alt="" />
                                        <div class="flex flex-col gap-y-1">
                                            <span class="text-sm font-semibold text-gray-800">PT Nomands ID</span>
                                            <span class="text-sm font-semibold text-gray-800">0555 2222 6666</span>
                                            <span class="text-sm font-semibold text-gray-800">Bank Central GG</span>
                                        </div>
                                    </div>
                                    <div class="mt-5 flex items-start gap-x-3">
                                        <img class="w-10 drop-shadow"
                                            src="{{ asset('frontend') }}/assets/images/ic_bank.png" alt="" />
                                        <div class="flex flex-col gap-y-1">
                                            <span class="text-sm font-semibold text-gray-800">PT Nomands ID</span>
                                            <span class="text-sm font-semibold text-gray-800">0444 2222 6666</span>
                                            <span class="text-sm font-semibold text-gray-800">Bank Central SNS</span>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('success') }}"
                                    class="mt-8 flex items-center justify-center rounded-md bg-blue-500 px-5 py-2 text-center text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300 md:inline-flex lg:flex">
                                    I Have Made Payment
                                    <svg aria-hidden="true" class="ml-2 -mr-1 h-[0.9rem] w-[0.9rem]" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <a href="{{ route('pages.show') }}"
                                    class="mt-3 block text-center text-[.8rem] font-medium text-gray-500 underline hover:no-underline focus:outline-none">
                                    Cencel Booking
                                </a>
                            </div>
                            <!-- end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end -->
    </div>
@endsection
