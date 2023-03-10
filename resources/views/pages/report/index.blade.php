@extends('layouts.checkout')
@section('content')
    <div class="main-content relative justify-center lg:px-20">
        <!-- navigation -->
        @include('includes.navbar-checkout')

        <!-- content -->
        <section>
            <div class="container mx-auto my-3 lg:my-5">
                <h1
                    class="mb-4 mt-10 text-4xl font-extrabold text-center leading-none tracking-tight text-gray-900 md:text-5xl">
                    We invest in the world’s potential</h1>
                <p class="mb-6 text-lg font-normal text-center text-gray-500 lg:text-xl sm:px-16 xl:px-40 ">Here at
                    Nomads we focus on markets where technology, innovation, and capital can unlock long-term value and
                    drive economic growth.</p>
                <div class="relative overflow-x-auto shadow sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Travel Package
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Additional Visa
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Total Transaction
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status Transaction
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Detail</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @forelse ($papers as $item)
                                <tr class="bg-white border-b ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $i }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $item->travel_package->title }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->user->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        ${{ $item->additional_visa }}
                                    </td>
                                    <td class="px-6 py-4">
                                        ${{ $item->transaction_total }},00
                                    </td>
                                    <td class="px-6 py-4">
                                        <div
                                            class='@if ($item->transaction_status == 'SUCCESS') bg-green-100 text-green-800 @endif bg-yellow-100 inline-block text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full'>
                                            {{ $item->transaction_status }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="{{ route('report-show', $item->id) }}"
                                            class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                            Details
                                            <span
                                                class="inline-flex items-center justify-center w-4 h-4 ml-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
                                                {{ $item->details->count() }}
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            @empty
                                <tr class="bg-white border-b">
                                    <th scope="row" colspan="6"
                                        class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap">
                                        No transaction yet!
                                    </th>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- end -->
    </div>
@endsection
