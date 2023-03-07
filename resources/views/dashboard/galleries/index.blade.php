@extends('layouts.admin')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Galleries</h1>
            <div class="section-header-button">
                <a href="{{ route('galleries.create') }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Galleries</div>
            </div>
        </div>

        <!-- Content -->
        <section class="section">
            <div class="section-body">
                <h2 class="section-title">Galleries</h2>
                <p class="section-lead">
                    You can manage all galleries, such as editing, deleting and more.
                </p>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Galleries</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-left">
                                    <select class="form-control selectric">
                                        <option>Action For Selected</option>
                                        <option>Move to Draft</option>
                                        <option>Move to Pending</option>
                                        <option>Delete Pemanently</option>
                                    </select>
                                </div>
                                <div class="float-right">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                        <?php $i = 1; ?>
                                        @forelse ($galleries as $item)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>
                                                    {{ $item->travel_package->title }}
                                                    <div class="table-links">
                                                        in <a href="#">Web Development</a>
                                                        <div class="bullet"></div>
                                                        <a href="#">View</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if ($item->image)
                                                        <img style="object-fit: cover" alt="image"
                                                            src="{{ Storage::url($item->image) }}" class="rounded-circle"
                                                            width="60" height="60" data-toggle="title"
                                                            title="">
                                                    @else
                                                        <img style="object-fit: cover" alt="image"
                                                            src="{{ asset('backend/assets/img/avatar/avatar-1.png') }}"
                                                            class="rounded-circle" width="45" height="45"
                                                            data-toggle="title" title="">
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-inline-flex">
                                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                            title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                        <form onsubmit="return confirm('are you funcking sure?')"
                                                            action="{{ route('galleries.destroy', $item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger btn-action">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">
                                                    Data Kosong
                                                </td>
                                            </tr>
                                        @endforelse

                                    </table>
                                </div>
                                <div class="float-right">
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
