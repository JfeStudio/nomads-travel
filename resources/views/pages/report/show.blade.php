@extends('layouts.checkout')
@section('content')
    <div class="main-content relative justify-center lg:px-20">
        <!-- navigation -->
        @include('includes.navbar-checkout')

        <!-- content -->
        <section>
            <div class="container mx-auto my-3 lg:my-5">
                <h1 class='text-center font-semibold text-slate-800 text-lg mt-6'>Transactions Seller :
                    <div class="relative mt-4 overflow-x-auto shadow sm:rounded-lg">
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
                                        Update Payment
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        1
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $report->travel_package->title }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $report->user->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        ${{ $report->additional_visa }}
                                    </td>
                                    <td class="px-6 py-4">
                                        ${{ $report->transaction_total }},00
                                    </td>
                                    <td class="px-6 py-4">
                                        <div
                                            class='{{ $report->transaction_status == 'SUCCESS' ? 'bg-green-100 text-green-800' : ($report->transaction_status == 'PENDING' ? 'bg-yellow-100 text-yellow-800' : ($report->transaction_status == 'FAILED' || 'CANCEL' ? 'bg-red-100 text-red-800' : '')) }}  inline-block text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full'>
                                            {{ $report->transaction_status }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $report->updated_at->format('d/m/Y') }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h1 class='text-center font-semibold text-slate-800 text-lg mt-5 mb-4'>Transactions Users Travel
                        Packages :
                    </h1>
                    <div class="relative overflow-x-auto shadow sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nationality
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Visa
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Doe Passport
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($report->details as $item)
                                    <tr class="bg-white border-b">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                            {{ $loop->iteration }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $item->name }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->nationality }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->is_visa ? '30 Days' : 'N/A' }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->doe_passport }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="bg-white border-b ">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                            No transaction yet
                                        </th>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
        </section>
        <!-- end -->
    </div>
@endsection
