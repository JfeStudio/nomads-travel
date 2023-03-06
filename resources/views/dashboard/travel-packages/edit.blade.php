@extends('layouts.admin')
@push('custom-link-summer-note')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css">
@endpush
@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('travel-packages.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Update Travel Packages</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('travel-packages.index') }}">Travels</a></div>
                <div class="breadcrumb-item">Update Travel</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Update Travel</h2>
            <p class="section-lead">
                On this page you can update a new travel and fill in all fields.
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Your Travel</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('travel-packages.update', $travelPackage->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="title" value="{{ $travelPackage->title }}"
                                            class="form-control" placeholder="Your Title">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Location</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric" name="location">
                                            <option @if ($travelPackage->location == 'Jakarta') selected @endif value="Jakarta">
                                                Jakarta</option>
                                            <option @if ($travelPackage->location == 'Bandung') selected @endif value="Bandung">
                                                Bandung</option>
                                            <option @if ($travelPackage->location == 'Probolinggo') selected @endif value="Probolinggo">
                                                Probolinggo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Featured
                                        Event</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="featured_event"
                                            value="{{ $travelPackage->featured_event }}" class="form-control"
                                            placeholder="Featured Event">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Language</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="language" value="{{ $travelPackage->language }}"
                                            class="form-control" placeholder="Language">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foods</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="foods" value="{{ $travelPackage->foods }}"
                                            class="form-control" placeholder="Foods">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Departure
                                        Date</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="date" name="departure_date"
                                            value="{{ $travelPackage->departure_date }}" class="form-control"
                                            placeholder="Departure Date">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Duration</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="duration" value="{{ $travelPackage->duration }}"
                                            class="form-control" placeholder="Duration">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="type" value="{{ $travelPackage->type }}"
                                            class="form-control" placeholder="Type">
                                    </div>
                                </div>
                                <div class="form-group
                                        row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" name="price" value="{{ $travelPackage->price }}"
                                            class="form-control" placeholder="Departure Date">
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">About</label>
                                    <div class="col-sm-12 col-md-7 border-0">
                                        <textarea name="about" class="form-control summernote-simple">
                                            {{ $travelPackage->about }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Update Travel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('custom-summerjs')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.min.js"></script>
    @endpush
@endsection
