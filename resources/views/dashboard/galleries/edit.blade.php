@extends('layouts.admin')
@push('custom-link-summer-note')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css">
@endpush
@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Update New Travel Packages</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('travel-packages.index') }}">Travels</a></div>
                <div class="breadcrumb-item">Create New Travel</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Create New Travel</h2>
            <p class="section-lead">
                On this page you can create a new travel and fill in all fields.
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Write Your Travel</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('galleries.update', $gallery->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric" name="travel_packages_id">
                                            {{-- <option value="{{ $gallery->travel_packages_id }}">
                                                ga jadi di ubah
                                            </option> --}}
                                            @foreach ($travel_packages as $item)
                                                <option {{ $gallery->travel_packages_id == $item->id ? 'selected' : '' }}
                                                    value="{{ $item->id }}">
                                                    {{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview" class="image-preview">
                                            <img style="object-fit: cover" alt="image"
                                                src="{{ Storage::url($gallery->image) }}" class="rounded-circle"
                                                width="60" height="60" data-toggle="title" title="">
                                            <label for="image-upload" id="image-label">Choose File</label>
                                            <input type="file" name="image" id="image-upload" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Create Travel</button>
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
