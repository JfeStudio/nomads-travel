@extends('layouts.checkout')
@section('content')
    <div class="main-content relative justify-center lg:px-20">
        <!-- navigation -->
        @include('includes.navbar-checkout')

        <!-- content -->
        <section>
            <div class="container mx-auto my-3 lg:my-5">
                @forelse ($papers as $item)
                    <p>{{ $item->user->name }}</p>
                    <p>{{ $item->travel_package->title }}</p>
                    <p>{{ $item->transaction_status }}</p>
                    {{-- @foreach ($item->details as $items)
                        <p>{{ $items->name }}</p>
                    @endforeach --}}
                    <a href="{{ route('report-show', $item->id) }}">details</a>
                @empty
                    <p class="text-center">No transaction yet</p>
                @endforelse
            </div>
        </section>
        <!-- end -->
    </div>
@endsection
