@extends('layouts.checkout')
@section('content')
    <div class="main-content relative justify-center lg:px-20">
        <!-- navigation -->
        @include('includes.navbar-checkout')

        <!-- content -->
        <section>
            <div class="container mx-auto my-3 lg:my-5">
                <h1>Seller</h1>
                <p>{{ $report->user->name }}</p>
                <h1>pembelian</h1>
                @foreach ($report->details as $item)
                    <p>{{ $item->name }}</p>
                @endforeach
        </section>
        <a href="{{ route('report') }}">back</a>
        <!-- end -->
    </div>
@endsection
