@extends('layouts.admin')
@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('galleries.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Update Gallery</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('galleries.index') }}">Galleries</a></div>
                <div class="breadcrumb-item">Update Gallery</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Update Gallery</h2>
            <p class="section-lead">
                On this page you can update a gallery and fill in all fields.
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Your Gallery</h4>
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
                                        @if ($gallery->image)
                                            <img style="object-fit: cover" alt="image"
                                                src="{{ Storage::url($gallery->image) }}" class="rounded-circle"
                                                width="60" height="60" data-toggle="title" title="">
                                        @else
                                            <img style="object-fit: cover" alt="image"
                                                src="{{ asset('backend/assets/img/avatar/avatar-1.png') }}"
                                                class="rounded-circle" width="45" height="45" data-toggle="title"
                                                title="">
                                        @endif
                                        <div id="image-preview" class="mt-3 image-preview">
                                            <label for="image-upload" id="image-label">Choose File</label>
                                            <input type="file" name="image" id="image-upload" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Update Gallery</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
